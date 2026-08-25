<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'cashier') {
            return redirect()->route('cashier.pos.index');
        }
        
        $pendapatanHariIni = Sale::whereDate('created_at', today())->sum('total_amount');
        $transaksiHariIni = Sale::whereDate('created_at', today())->count();
        $produkTerjualHariIni = SaleDetail::whereDate('created_at', today())->sum('quantity');
        $totalProduk = Product::count();

        $salesDataForChart = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $sales = Sale::whereDate('created_at', $date)->sum('total_amount');
            $salesDataForChart['labels'][] = $date->format('d M');
            $salesDataForChart['data'][] = $sales;
        }
        $chartData = json_encode($salesDataForChart);

        // ===== PERBAIKAN DI SINI: Mengambil relasi 'user' bukan 'customer' =====
        $penjualanTerakhir = Sale::with('user')->latest()->take(5)->get();

        $produkTerlaris = SaleDetail::join('products', 'sale_details.product_id', '=', 'products.id')
            ->select('products.name', DB::raw('SUM(sale_details.quantity) as total_terjual'))
            ->whereMonth('sale_details.created_at', now()->month)
            ->groupBy('products.name')
            ->orderBy('total_terjual', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'pendapatanHariIni',
            'transaksiHariIni',
            'produkTerjualHariIni',
            'totalProduk',
            'chartData',
            'penjualanTerakhir',
            'produkTerlaris'
        ));
    }

    /**
     * REALTIME DASHBOARD POLLING API
     */
    public function liveStats()
    {
        $salesToday = Sale::whereDate('created_at', today())->whereIn('payment_status', ['success', 'paid'])->sum('total_amount');
        $ordersToday = \App\Models\Order::whereDate('created_at', today())->whereIn('payment_status', ['paid', 'success'])->sum('total_amount');
        $totalPendapatanHariIni = $salesToday + $ordersToday;

        $totalTransaksiHariIni = Sale::whereDate('created_at', today())->count() + \App\Models\Order::whereDate('created_at', today())->count();
        $totalItemTerjual = (int) SaleDetail::whereDate('created_at', today())->sum('quantity') + (int) \App\Models\OrderItem::whereDate('created_at', today())->sum('quantity');
        $totalProduk = Product::count();

        // 5 Transaksi terakhir gabungan
        $recentSales = Sale::with('user')->latest()->take(5)->get()->map(function($s) {
            return [
                'type'           => 'pos',
                'number'         => $s->transaction_number,
                'customer'       => $s->customer_name ?: 'Pelanggan Umum',
                'staff'          => $s->user->name ?? 'Kasir',
                'method'         => strtoupper($s->payment_method),
                'amount'         => $s->total_amount,
                'formatted_amount' => 'Rp ' . number_format($s->total_amount, 0, ',', '.'),
                'time_human'     => $s->created_at->diffForHumans(),
                'timestamp'      => $s->created_at->timestamp,
            ];
        });

        $recentOrders = \App\Models\Order::latest()->take(5)->get()->map(function($o) {
            return [
                'type'           => 'online',
                'number'         => $o->order_number,
                'customer'       => $o->customer_name,
                'staff'          => 'Online Store',
                'method'         => 'QRIS',
                'amount'         => $o->total_amount,
                'formatted_amount' => 'Rp ' . number_format($o->total_amount, 0, ',', '.'),
                'time_human'     => $o->created_at->diffForHumans(),
                'timestamp'      => $o->created_at->timestamp,
            ];
        });

        $combined = $recentSales->concat($recentOrders)->sortByDesc('timestamp')->take(5)->values();

        return response()->json([
            'pendapatan_hari_ini'           => $totalPendapatanHariIni,
            'formatted_pendapatan_hari_ini' => 'Rp ' . number_format($totalPendapatanHariIni, 0, ',', '.'),
            'transaksi_hari_ini'            => $totalTransaksiHariIni,
            'item_terjual_hari_ini'         => $totalItemTerjual,
            'total_produk'                  => $totalProduk,
            'transaksi_terakhir'            => $combined,
        ]);
    }
}
