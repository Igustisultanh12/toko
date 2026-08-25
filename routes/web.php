<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Cashier\SaleController;
use App\Http\Controllers\DokuNotificationController;
use App\Http\Controllers\DokuInquiryController;
use App\Http\Controllers\TteVerificationController;

Route::get('/', function () {
    return redirect()->route('login');
});

/**
 * 1. JALUR WEBHOOK DOKU (WAJIB DI LUAR AUTH)
 * Jalur ini akan ditembak oleh Server DOKU setelah pelanggan bayar.
 */
Route::post('/doku/notification', [DokuNotificationController::class, 'handle'])->name('doku.notification');
Route::post('/doku/inquiry', [DokuInquiryController::class, 'handle'])->name('doku.inquiry');

/**
 * 2. JALUR CETAK STRUK, FAKTUR & LABEL PENGIRIMAN PAKET (PUBLIK / BISA DIAKSES VIA LINK WA)
 */
Route::get('/receipt/{sale}/print', [SaleController::class, 'generateReceipt'])->name('receipt.print');
Route::get('/receipt/{sale}/pdf', [ReportController::class, 'exportInvoicePdf'])->name('receipt.pdf');
Route::get('/invoice/{transaction_number}/get-link', [ReportController::class, 'getSignedInvoiceLink'])->name('invoice.get-link');
Route::get('/invoice/{transaction_number}/download', [ReportController::class, 'downloadSignedInvoice'])->name('invoice.public.signed');
Route::get('/invoice/{transaction_number}/pdf', [ReportController::class, 'downloadSignedInvoice'])->name('invoice.public.number');
Route::get('/verify/tte/{transaction_number}', [TteVerificationController::class, 'verify'])->name('verify.tte');
Route::match(['get', 'post'], '/shipping-label/{sale}/pdf', [SaleController::class, 'generateShippingLabel'])->name('shipping.label.pdf');

/**
 * 3. RUTE TERPROTEKSI (LOGIN WAJIB)
 */
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- GRUP ADMIN ---
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::post('/products/quick-stock', [ProductController::class, 'quickStockUpdate'])->name('products.quick-stock');
        Route::get('/products/import', [ProductController::class, 'showImportForm'])->name('products.import.show');
        Route::post('/products/import', [ProductController::class, 'import'])->name('products.import.store');
        Route::resource('products', ProductController::class);
        Route::resource('users', UserController::class);
        
        // 1. LAPORAN PENJUALAN (INVOICE, PELANGGAN & BARANG)
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
        Route::get('/reports/pdf', [ReportController::class, 'exportPdf'])->name('reports.pdf');
        Route::get('/reports/excel', [ReportController::class, 'exportExcel'])->name('reports.excel');
        Route::get('/reports/print/daily', [ReportController::class, 'printDailyReport'])->name('reports.print.daily');
        Route::get('/reports/invoice/{sale}/pdf', [ReportController::class, 'exportInvoicePdf'])->name('reports.invoice.pdf');
        
        // 2. LAPORAN KEUANGAN (ARUS KAS, OMSET, TUNAI & QRIS)
        Route::get('/reports/finance', [ReportController::class, 'financialReport'])->name('reports.finance');
        Route::get('/reports/finance/pdf', [ReportController::class, 'exportFinancePdf'])->name('reports.finance.pdf');
        Route::get('/reports/finance/excel', [ReportController::class, 'exportFinanceExcel'])->name('reports.finance.excel');

        //route laporan qris
        Route::get('/reports/qris', [ReportController::class, 'qrisReport'])->name('reports.qris');
        // route export excel and pdf qris
        Route::get('/reports/qris/pdf', [ReportController::class, 'exportQrisPdf'])->name('reports.qris.pdf');
        Route::get('/reports/qris/excel', [ReportController::class, 'exportQrisExcel'])->name('reports.qris.excel');

        // 3. LAPORAN STOK BARANG & INVENTARIS
        Route::get('/reports/stock', [ReportController::class, 'stockReport'])->name('reports.stock');
        Route::get('/reports/stock/pdf', [ReportController::class, 'exportStockPdf'])->name('reports.stock.pdf');
        Route::get('/reports/stock/excel', [ReportController::class, 'exportStockExcel'])->name('reports.stock.excel');

        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
    });

    // --- GRUP KASIR ---
    Route::middleware('role:cashier')->prefix('cashier')->name('cashier.')->group(function () {
        Route::get('/pos', [SaleController::class, 'index'])->name('pos.index');
        Route::post('/pos/store', [SaleController::class, 'store'])->name('pos.store');
        Route::get('/pos/check-product', [SaleController::class, 'checkProduct'])->name('pos.checkProduct');
        Route::get('/pos/search-products', [SaleController::class, 'search'])->name('pos.search');
        
        // KRUSIAL: Pastikan rute ini bisa menerima sale_id untuk verifikasi otomatis
        Route::get('/pos/check-status/{sale}', [SaleController::class, 'checkStatus'])->name('pos.checkStatus');
        
        Route::get('/receipt/{sale}/print', [SaleController::class, 'generateReceipt'])->name('receipt.print');
    });
});

require __DIR__.'/auth.php';