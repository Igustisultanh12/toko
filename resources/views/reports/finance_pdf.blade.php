<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Keuangan - {{ $shop['app_name'] ?? 'SIKANDA' }}</title>
    <style>
        @page {
            size: a4 landscape;
            margin: 15mm 20mm;
        }
        body { 
            font-family: "Arial", sans-serif; 
            font-size: 10pt; 
            line-height: 1.3; 
            color: black; 
        }
        .kop { 
            width: 50%; 
            margin-bottom: 25px; 
            font-weight: bold; 
            text-transform: uppercase;
        }

        .underline-line {
            text-decoration: underline;
            display: inline-block;
        }
        .judul { text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: 0; }
        .sub-judul { text-align: center; font-weight: bold; margin-top: 0; margin-bottom: 20px; }
        
        table.data { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table.data th, table.data td { border: 1px solid black; padding: 6px; font-size: 9pt; vertical-align: top; }
        table.data th { background-color: #f2f2f2; text-transform: uppercase; }
        
        .total-row { background-color: #eeeeee; font-weight: bold; }
        
        .footer { float: right; width: 250px; text-align: center; margin-top: 30px; font-size: 9.5pt; }
        .underline { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="kop">
        {{ $shop['shop_name'] ?? 'TOKO ANANDA' }}<br>
        <span class="underline-line">ADMINISTRASI KASIR {{ $shop['app_name'] ?? 'SIKANDA' }}</span>
    </div>

    @php
        $method = strtolower($filters['payment_method'] ?? 'all');
        if ($method === 'cash') {
            $reportTitle = 'LAPORAN REKAPITULASI PENERIMAAN KAS TUNAI (CASH)';
            $docPrefix = 'LTNI';
        } elseif ($method === 'qris') {
            $reportTitle = 'LAPORAN REKAPITULASI PENERIMAAN DIGITAL QRIS (DOKU)';
            $docPrefix = 'LQRS';
        } else {
            $reportTitle = 'LAPORAN REKAPITULASI KEUANGAN & ARUS KAS';
            $docPrefix = 'LKEU';
        }
    @endphp

    <p class="judul">{{ $reportTitle }}</p>
    <p class="sub-judul">Nomor: {{ $docPrefix }} / {{ date('m / Y') }} / SIKANDA &nbsp;|&nbsp; Periode: {{ $periodLabel ?? 'Semua' }} &nbsp;|&nbsp; Tanggal Cetak: {{ date('d F Y, H:i') }} WIB</p>

    <p>1. &nbsp;&nbsp; Rekapitulasi transaksi penerimaan kas dan keuangan pada periode {{ $periodLabel ?? '' }} dengan rincian sebagai berikut:</p>

    <table class="data">
        <thead>
            <tr>
                <th width="4%">NO</th>
                <th width="20%">NOMOR INVOICE</th>
                <th width="22%">NAMA PELANGGAN</th>
                <th width="18%">TANGGAL & WAKTU</th>
                <th width="16%">KANAL BAYAR</th>
                <th width="20%">NOMINAL MASUK</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $calcCash = 0; 
                $calcQris = 0; 
                $calcTotal = 0; 
            @endphp
            @forelse($transactions as $index => $trx)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center" style="font-family: monospace;">{{ $trx->transaction_number }}</td>
                <td>{{ $trx->customer_name ?? 'Pelanggan Umum' }}</td>
                <td align="center">{{ $trx->created_at->format('d/m/Y - H:i') }} WIB</td>
                <td align="center">
                    @if(strtolower($trx->payment_method) === 'qris')
                        QRIS DOKU
                    @else
                        KAS TUNAI
                    @endif
                </td>
                <td align="right">Rp {{ number_format($trx->total_amount, 0, ',', '.') }}</td>
            </tr>
            @if($trx->payment_status == 'success')
                @php 
                    $calcTotal += $trx->total_amount;
                    if(strtolower($trx->payment_method) === 'qris') {
                        $calcQris += $trx->total_amount;
                    } else {
                        $calcCash += $trx->total_amount;
                    }
                @endphp
            @endif
            @empty
            <tr>
                <td colspan="6" align="center" style="padding: 20px; font-style: italic; color: #777;">
                    Tidak ada transaksi keuangan pada periode ini.
                </td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            @if($method === 'cash')
                <tr class="total-row" style="background-color: #dddddd;">
                    <td colspan="4" align="right">TOTAL PENERIMAAN KAS TUNAI ({{ $transactions->where('payment_status', 'success')->count() }} TRANSAKSI):</td>
                    <td colspan="2" align="right">Rp {{ number_format($calcCash, 0, ',', '.') }}</td>
                </tr>
            @elseif($method === 'qris')
                <tr class="total-row" style="background-color: #dddddd;">
                    <td colspan="4" align="right">TOTAL PENERIMAAN DIGITAL QRIS ({{ $transactions->where('payment_status', 'success')->count() }} TRANSAKSI):</td>
                    <td colspan="2" align="right">Rp {{ number_format($calcQris, 0, ',', '.') }}</td>
                </tr>
            @else
                <tr class="total-row">
                    <td colspan="4" align="right">TOTAL PENERIMAAN KAS TUNAI:</td>
                    <td colspan="2" align="right">Rp {{ number_format($calcCash, 0, ',', '.') }}</td>
                </tr>
                <tr class="total-row">
                    <td colspan="4" align="right">TOTAL PENERIMAAN DIGITAL QRIS:</td>
                    <td colspan="2" align="right">Rp {{ number_format($calcQris, 0, ',', '.') }}</td>
                </tr>
                <tr class="total-row" style="background-color: #dddddd;">
                    <td colspan="4" align="right">TOTAL PEMASUKAN BERSIH (LUNAS):</td>
                    <td colspan="2" align="right">Rp {{ number_format($calcTotal, 0, ',', '.') }}</td>
                </tr>
            @endif
        </tfoot>
    </table>

    <p>2. &nbsp;&nbsp; Laporan ini dibuat secara otomatis oleh sistem {{ $shop['app_name'] ?? 'SIKANDA' }} untuk dipergunakan sebagai dokumen audit arus kas dan rekonsiliasi keuangan.</p>

    <div class="footer">
        Jember, {{ date('d F Y') }}<br>
        {{ $shop['cashier_officer_title'] ?? 'Petugas Kasir' }},<br><br><br><br>
        <u><b>{{ $shop['cashier_officer_name'] ?? Auth::user()->name ?? 'Admin' }}</b></u>
    </div>
</body>
</html>
