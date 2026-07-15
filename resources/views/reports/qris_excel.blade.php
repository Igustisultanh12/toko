<table>
    <tr><td colspan="2" style="font-weight: bold;">TOKO ANANDA</td></tr>
    <tr><td colspan="2" style="font-weight: bold; text-decoration: underline;">ADMINISTRASI KASIR SIKANDA</td></tr>
    <tr><td></td></tr>
    <tr><td colspan="5" style="text-align: center; font-weight: bold; text-decoration: underline;">LAPORAN TRANSAKSI QRIS</td></tr>
    <tr><td colspan="5" style="text-align: center; font-weight: bold;">Nomor: LPK / {{ date('m / Y') }} / SIKANDA</td></tr>
    <tr><td></td></tr>
    <thead>
        <tr>
            <th style="border: 1px solid black; background-color: #f2f2f2; font-weight: bold;">NO</th>
            <th style="border: 1px solid black; background-color: #f2f2f2; font-weight: bold;">NOMOR INVOICE</th>
            <th style="border: 1px solid black; background-color: #f2f2f2; font-weight: bold;">NOMINAL</th>
            <th style="border: 1px solid black; background-color: #f2f2f2; font-weight: bold;">TANGGAL & WAKTU</th>
            <th style="border: 1px solid black; background-color: #f2f2f2; font-weight: bold;">KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        @php $totalNominal = 0; @endphp
        @foreach($transactions as $index => $trx)
        <tr>
            <td style="border: 1px solid black; text-align: center;">{{ $index + 1 }}</td>
            <td style="border: 1px solid black;">{{ $trx->transaction_number }}</td>
            <td style="border: 1px solid black; text-align: right;">{{ $trx->total_amount }}</td>
            <td style="border: 1px solid black; text-align: center;">{{ $trx->created_at->format('d/m/Y - H:i') }} WIB</td>
            <td style="border: 1px solid black; text-align: center;">
                @if($trx->payment_status == 'success')
                    @php $totalNominal += $trx->total_amount; @endphp
                    SUKSES
                @else
                    {{ strtoupper($trx->payment_status) }}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" style="border: 1px solid black; font-weight: bold; text-align: center; background-color: #eeeeee;">TOTAL PEMASUKAN (SUKSES)</td>
            <td style="border: 1px solid black; font-weight: bold; text-align: right; background-color: #eeeeee;">{{ $totalNominal }}</td>
            <td colspan="2" style="border: 1px solid black;"></td>
        </tr>
    </tfoot>
</table>