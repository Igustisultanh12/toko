<table>
    <tr><td colspan="2" style="font-weight: bold;">TOKO ANANDA</td></tr>
    <tr><td colspan="2" style="font-weight: bold; text-decoration: underline;">ADMINISTRASI KASIR SIKANDA POS</td></tr>
    <tr><td></td></tr>
    <tr><td colspan="6" style="text-align: center; font-weight: bold; font-size: 14pt; text-decoration: underline;">LAPORAN KEUANGAN & ARUS KAS</td></tr>
    <tr><td colspan="6" style="text-align: center; font-weight: bold;">Periode: {{ $periodLabel }} &nbsp;|&nbsp; Dicetak: {{ date('d/m/Y H:i') }} WIB</td></tr>
    <tr><td></td></tr>
    <thead>
        <tr>
            <th style="border: 1px solid black; background-color: #e2e8f0; font-weight: bold; text-align: center;">NO</th>
            <th style="border: 1px solid black; background-color: #e2e8f0; font-weight: bold; text-align: center;">NOMOR INVOICE</th>
            <th style="border: 1px solid black; background-color: #e2e8f0; font-weight: bold; text-align: left;">NAMA PELANGGAN</th>
            <th style="border: 1px solid black; background-color: #e2e8f0; font-weight: bold; text-align: center;">TANGGAL & WAKTU</th>
            <th style="border: 1px solid black; background-color: #e2e8f0; font-weight: bold; text-align: center;">KANAL BAYAR</th>
            <th style="border: 1px solid black; background-color: #e2e8f0; font-weight: bold; text-align: right;">NOMINAL MASUK</th>
        </tr>
    </thead>
    <tbody>
        @forelse($transactions as $index => $trx)
        <tr>
            <td style="border: 1px solid black; text-align: center;">{{ $index + 1 }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $trx->transaction_number }}</td>
            <td style="border: 1px solid black; text-align: left;">{{ $trx->customer_name ?? 'Pelanggan Umum' }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $trx->created_at->format('d/m/Y H:i') }} WIB</td>
            <td style="border: 1px solid black; text-align: center;">{{ strtoupper($trx->payment_method) }}</td>
            <td style="border: 1px solid black; text-align: right;">{{ $trx->total_amount }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="border: 1px solid black; text-align: center;">Tidak ada transaksi keuangan pada periode ini.</td>
        </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #cbd5e1;">TOTAL KAS TUNAI (CASH):</td>
            <td colspan="2" style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #cbd5e1;">{{ $totalCash }}</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #cbd5e1;">TOTAL DIGITAL QRIS:</td>
            <td colspan="2" style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #cbd5e1;">{{ $totalQris }}</td>
        </tr>
        <tr>
            <td colspan="4" style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #94a3b8;">TOTAL PEMASUKAN BERSIH:</td>
            <td colspan="2" style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #94a3b8;">{{ $totalNominal }}</td>
        </tr>
    </tfoot>
</table>
