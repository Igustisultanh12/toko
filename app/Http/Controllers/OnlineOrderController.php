<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Setting;
use App\Services\DokuService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OnlineOrderController extends Controller
{
    protected $dokuService;

    public function __construct(DokuService $dokuService)
    {
        $this->dokuService = $dokuService;
    }

    /**
     * TOKO ONLINE PUBLIK (GUEST / TANPA LOGIN)
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $query = Product::where('stock', '>', 0);

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('barcode', 'LIKE', "%{$search}%");
            });
        }

        $products = $query->orderBy('name', 'asc')->paginate(12)->withQueryString();
        $shop = Setting::pluck('value', 'key')->all();

        return view('online.store', compact('products', 'shop', 'search'));
    }

    /**
     * CHECKOUT PESANAN ONLINE
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'    => 'required|string|max:100',
            'customer_phone'   => 'required|string|max:20',
            'customer_address' => 'required|string|max:500',
            'customer_notes'   => 'nullable|string|max:500',
            'courier'          => 'required|string|max:50',
            'items'            => 'required|array|min:1',
            'items.*.id'       => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();
        try {
            // Generate nomor order unik
            $appName = Setting::where('key', 'app_name')->value('value') ?: 'SIKANDA';
            $cleanName = strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $appName));
            $prefix = strlen($cleanName) >= 3 ? substr($cleanName, 0, 3) : 'ORD';
            $orderNumber = "ORD-" . now()->format('Ymd') . "-" . strtoupper(Str::random(5));

            $totalAmount = 0;
            $itemsData = [];

            // Validasi dan hitung total barang
            foreach ($request->items as $item) {
                $product = Product::lockForUpdate()->find($item['id']);
                if (!$product || $product->stock < $item['quantity']) {
                    throw new \Exception("Stok produk '{$product->name}' tidak mencukupi (tersedia: {$product->stock} pcs).");
                }

                $price = $product->price;
                if (!empty($product->discount_percent) && $product->discount_percent > 0) {
                    $price = $price - ($price * ($product->discount_percent / 100));
                }

                $subtotal = $price * $item['quantity'];
                $totalAmount += $subtotal;

                $itemsData[] = [
                    'product_id'   => $product->id,
                    'product_name' => $product->name,
                    'price'        => $price,
                    'quantity'     => $item['quantity'],
                    'subtotal'     => $subtotal,
                ];

                // Kurangi stok fisik produk
                $product->decrement('stock', $item['quantity']);
            }

            // Simpan pesanan utama
            $order = Order::create([
                'order_number'     => $orderNumber,
                'customer_name'    => $request->customer_name,
                'customer_phone'   => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'customer_notes'   => $request->customer_notes,
                'courier'          => $request->courier,
                'total_amount'     => $totalAmount,
                'payment_method'   => 'qris',
                'payment_status'   => 'pending',
                'status'           => 'pending_payment',
            ]);

            // Simpan detail item pesanan
            foreach ($itemsData as $itemRow) {
                $order->items()->create($itemRow);
            }

            // Generate Dynamic QRIS DOKU
            $qrisUrl = null;
            try {
                $qrisUrl = $this->dokuService->generateOrderQris($order);
                if ($qrisUrl) {
                    $order->update(['qris_url' => $qrisUrl]);
                }
            } catch (\Exception $e) {
                Log::warning("DOKU Order QRIS Fallback: " . $e->getMessage());
            }

            DB::commit();

            return redirect()->route('order.pay', $order->order_number);

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal membuat pesanan: ' . $e->getMessage());
        }
    }

    /**
     * HALAMAN PEMBAYARAN QRIS PUBLIK
     */
    public function pay($order_number)
    {
        $order = Order::with('items')->where('order_number', $order_number)->firstOrFail();

        // Jika sudah bayar, langsung arahkan ke tanda terima / lacak
        if ($order->payment_status === 'paid') {
            return redirect()->route('order.receipt', $order->order_number);
        }

        $shop = Setting::pluck('value', 'key')->all();

        return view('online.pay', compact('order', 'shop'));
    }

    /**
     * CEK STATUS PEMBAYARAN (AJAX POLLING DARI BROWSER PEMBELI)
     */
    public function checkStatus($order_number)
    {
        $order = Order::where('order_number', $order_number)->first();
        if (!$order) {
            return response()->json(['status' => 'not_found'], 404);
        }

        return response()->json([
            'order_number'   => $order->order_number,
            'payment_status' => $order->payment_status,
            'status'         => $order->status,
            'is_paid'        => ($order->payment_status === 'paid'),
            'redirect_url'   => route('order.receipt', $order->order_number),
        ]);
    }

    /**
     * SIMULASI PEMBAYARAN QRIS (KHUSUS TESTING / DEMO SANDBOX)
     */
    public function simulatePay($order_number)
    {
        $order = Order::with('items.product')->where('order_number', $order_number)->firstOrFail();

        if ($order->payment_status === 'paid') {
            return redirect()->route('order.receipt', $order->order_number)->with('success', 'Pesanan sudah lunas sebelumnya.');
        }

        $order->update([
            'payment_status' => 'paid',
            'status'         => 'paid', // Status: Menunggu Konfirmasi Toko
            'paid_at'        => now(),
        ]);

        return redirect()->route('order.receipt', $order->order_number)->with('success', 'Pembayaran QRIS Berhasil Dikonfirmasi!');
    }

    /**
     * STRUK / BUKTI PESANAN DIGITAL ONLINE
     */
    public function receipt($order_number)
    {
        $order = Order::with(['items.product', 'confirmedByUser'])->where('order_number', $order_number)->firstOrFail();
        $shop = Setting::pluck('value', 'key')->all();

        return view('online.receipt', compact('order', 'shop'));
    }

    /**
     * PORTAL CARI LACAK PESANAN (FORM INPUT RESI / ORDER NUMBER)
     */
    public function trackIndex(Request $request)
    {
        $search = $request->get('q');
        $orders = collect();
        $shop = Setting::pluck('value', 'key')->all();

        if ($search) {
            $orders = Order::with('items')
                ->where(function($query) use ($search) {
                    $query->where('order_number', 'LIKE', "%{$search}%")
                          ->orWhere('tracking_number', 'LIKE', "%{$search}%")
                          ->orWhere('customer_phone', 'LIKE', "%{$search}%");
                })
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get();
        }

        return view('online.track_search', compact('shop', 'search', 'orders'));
    }

    /**
     * DETAIL PELACAKAN PESANAN (STEPPER VISUAL)
     */
    public function track($order_number)
    {
        $order = Order::with(['items.product', 'confirmedByUser'])->where('order_number', $order_number)->first();
        
        if (!$order) {
            // Coba cari berdasarkan tracking_number (Nomor Resi)
            $order = Order::with(['items.product', 'confirmedByUser'])->where('tracking_number', $order_number)->firstOrFail();
        }

        $shop = Setting::pluck('value', 'key')->all();

        return view('online.track', compact('order', 'shop'));
    }
}
