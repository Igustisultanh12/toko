<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReportController extends Controller
{
    public function index()
    {
        $todaySales = Sale::whereDate('created_at', Carbon::today())
            ->where(function($q) {
                $q->where('status', 'success')->orWhere('payment_status', 'success');
            })->sum('total_amount');

        return view('reports.index', compact('todaySales'));
    }

    /**
     * Halaman Laporan QRIS dengan Fitur Pencarian
     */
    public function qrisReport(Request $request)
    {
        $search = $request->get('search');

        $stats = [
            'total_success' => Sale::where('payment_method', 'qris')->where('payment_status', 'success')->sum('total_amount'),
            'today_revenue' => Sale::where('payment_method', 'qris')->where('payment_status', 'success')->whereDate('created_at', Carbon::today())->sum('total_amount'),
            'pending_count' => Sale::where('payment_method', 'qris')->where('payment_status', 'pending')->count(),
        ];

        $chartData = Sale::where('payment_method', 'qris')
            ->where('payment_status', 'success')
            ->where('created_at', '>=', Carbon::now()->subDays(6))
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(total_amount) as total'))
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // Query Utama dengan Filter Pencarian
        $transactions = Sale::where('payment_method', 'qris')
            ->when($search, function($query) use ($search) {
                return $query->where('transaction_number', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10)
            ->withQueryString(); // Menjaga parameter search tetap ada saat pindah halaman

        return view('reports.qris', compact('stats', 'chartData', 'transactions', 'search'));
    }

    /**
     * Export PDF Berdasarkan Hasil Pencarian
     */
    public function exportQrisPdf(Request $request)
    {
        $search = $request->get('search');

        $transactions = Sale::where('payment_method', 'qris')
            ->when($search, function($query) use ($search) {
                return $query->where('transaction_number', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $totalNominal = $transactions->where('payment_status', 'success')->sum('total_amount');

        $pdf = Pdf::loadView('reports.qris_pdf', compact('transactions', 'totalNominal'))->setPaper('a4', 'portrait');
        return $pdf->download('LPK_QRIS_'.date('Ymd_His').'.pdf');
    }

    /**
     * Export Excel Berdasarkan Hasil Pencarian
     */
    public function exportQrisExcel(Request $request)
    {
        $search = $request->get('search');

        $transactions = Sale::where('payment_method', 'qris')
            ->when($search, function($query) use ($search) {
                return $query->where('transaction_number', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $totalNominal = $transactions->where('payment_status', 'success')->sum('total_amount');

        return Excel::download(new class($transactions, $totalNominal) implements FromView, ShouldAutoSize {
            private $transactions;
            private $totalNominal;

            public function __construct($transactions, $totalNominal) {
                $this->transactions = $transactions;
                $this->totalNominal = $totalNominal;
            }

            public function view(): \Illuminate\Contracts\View\View {
                return view('reports.qris_excel', [
                    'transactions' => $this->transactions,
                    'totalNominal' => $this->totalNominal
                ]);
            }
        }, 'LPK_QRIS_'.date('Ymd').'.xlsx');
    }
}