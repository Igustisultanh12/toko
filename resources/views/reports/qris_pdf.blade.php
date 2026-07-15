<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: "Arial", sans-serif; font-size: 11pt; line-height: 1.3; color: black; }
        .kop { 
            width: 50%; 
            margin-bottom: 30px; 
            font-weight: bold; 
            text-transform: uppercase;
        }

        /* Span khusus untuk memberikan underline hanya pada baris kedua */
        .underline-line {
            text-decoration: underline;
            display: inline-block; /* Memastikan underline mengikuti panjang teks */
        }
        .judul { text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: 0; }
        .sub-judul { text-align: center; font-weight: bold; margin-top: 0; margin-bottom: 20px; }
        
        table.data { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table.data th, table.data td { border: 1px solid black; padding: 6px; font-size: 9pt; }
        table.data th { background-color: #f2f2f2; text-transform: uppercase; }
        
        /* Gaya untuk baris total */
        .total-row { background-color: #eeeeee; font-weight: bold; }
        
        .footer { float: right; width: 250px; text-align: center; margin-top: 40px; }
        .underline { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="kop">
        TOKO ANANDA<br>
        <span class="underline-line">ADMINISTRASI KASIR SIKANDA</span>
    </div>

    <p class="judul">LAPORAN TRANSAKSI QRIS</p>
    <p class="sub-judul">Nomor: LPK / {{ date('m / Y') }} / SIKANDA</p>

    <p>1. &nbsp;&nbsp; Laporan penerimaan dana digital melalui kanal QRIS DOKU pada periode laporan ini dengan rincian sebagai berikut:</p>

    <table class="data">
        <thead>
            <tr>
                <th width="5%">NO</th>
                <th width="25%">NOMOR INVOICE</th>
                <th width="20%">NOMINAL</th>
                <th width="30%">TANGGAL & WAKTU</th>
                <th width="20%">KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            @php $totalNominal = 0; @endphp
            @foreach($transactions as $index => $trx)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center">{{ $trx->transaction_number }}</td>
                <td align="right">Rp {{ number_format($trx->total_amount, 0, ',', '.') }}</td>
                <td align="center">{{ $trx->created_at->format('d/m/Y - H:i') }} WIB</td>
                <td align="center">
                    @if($trx->payment_status == 'success')
                        @php $totalNominal += $trx->total_amount; @endphp
                        SUKSES
                    @elseif($trx->payment_status == 'pending')
                        TERTUNDA
                    @else
                        GAGAL
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        {{-- Penambahan Baris Total agar laporan lengkap --}}
        <tfoot>
            <tr class="total-row">
                <td colspan="2" align="center">TOTAL PEMASUKAN (SUKSES)</td>
                <td align="right">Rp {{ number_format($totalNominal, 0, ',', '.') }}</td>
                <td colspan="2" style="background-color: white; border: none;"></td>
            </tr>
        </tfoot>
    </table>

    <p>2. &nbsp;&nbsp; Laporan ini dibuat berdasarkan catatan otomatis sistem SIKANDA untuk dipergunakan sebagaimana mestinya.</p>

    <div class="footer">
        Jember, {{ date('d F Y') }}<br>
        Petugas Kasir,<br><br><br><br>
        <u><b>{{ Auth::user()->name }}</b></u>
    </div>
</body>
</html>