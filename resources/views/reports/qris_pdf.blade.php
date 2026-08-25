<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi QRIS</title>
    <style>
        @page {
            size: a4 landscape;
            margin: 12mm 15mm 12mm 15mm;
        }
        body { 
            font-family: "Helvetica", "Arial", sans-serif; 
            font-size: 9.5pt; 
            line-height: 1.3; 
            color: #111; 
            margin: 0;
            padding: 0;
        }
        .kop { 
            width: 100%; 
            margin-bottom: 12px; 
            border-bottom: 2px solid #222;
            padding-bottom: 8px;
        }
        .kop h2 { 
            margin: 0; 
            font-size: 15pt; 
            font-weight: bold; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            color: #1e1b4b; 
        }
        .kop p { 
            margin: 2px 0 0; 
            font-size: 8.5pt; 
            color: #555; 
        }
        
        .judul-container { 
            text-align: center; 
            margin-bottom: 12px; 
        }
        .judul { 
            font-size: 13pt; 
            font-weight: bold; 
            text-decoration: underline; 
            margin: 0; 
            text-transform: uppercase; 
            color: #111; 
        }
        .sub-judul { 
            font-size: 9pt; 
            font-weight: bold; 
            margin: 4px 0 0; 
            color: #444; 
        }
        
        table.data { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px; 
        }
        table.data th, table.data td { 
            border: 1px solid #333; 
            padding: 6px 8px; 
            font-size: 8.5pt; 
            vertical-align: top; 
        }
        table.data th { 
            background-color: #f1f5f9; 
            text-transform: uppercase; 
            font-size: 8.5pt; 
            font-weight: bold;
            text-align: center; 
        }
        
        .item-list { 
            margin: 0; 
            padding-left: 14px; 
        }
        .item-list li { 
            margin-bottom: 2px; 
            font-size: 8.5pt; 
        }
        
        .total-row { 
            background-color: #e2e8f0; 
            font-weight: bold; 
        }
        
        .footer-container { 
            width: 100%; 
            margin-top: 20px; 
        }
        .footer { 
            float: right; 
            width: 220px; 
            text-align: center; 
            font-size: 9pt; 
        }
        .footer .signature-space { 
            height: 45px; 
        }
        .badge { 
            display: inline-block; 
            padding: 2px 6px; 
            border-radius: 4px; 
            font-size: 7.5pt; 
            font-weight: bold; 
        }
        .badge-success { background-color: #dcfce7; color: #166534; }
        .badge-pending { background-color: #ffedd5; color: #9a3412; }
        .badge-failed { background-color: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>
    <div class="kop">
        <h2>TOKO ANANDA</h2>
        <p>Administrasi Kasir & Sistem Informasi Penjualan (SIKANDA POS)</p>
    </div>

    <div class="judul-container">
        <p class="judul">LAPORAN TRANSAKSI PENJUALAN QRIS</p>
        <p class="sub-judul">Nomor: LPK / {{ date('m / Y') }} / SIKANDA &nbsp;|&nbsp; Tanggal Cetak: {{ date('d F Y') }}</p>
    </div>

    <table class="data">
        <thead>
            <tr>
                <th width="4%">NO</th>
                <th width="15%">NOMOR INVOICE</th>
                <th width="15%">TANGGAL & WAKTU</th>
                <th width="37%">RINCIAN BARANG TERJUAL</th>
                <th width="8%">TOTAL QTY</th>
                <th width="12%">TOTAL NOMINAL</th>
                <th width="9%">STATUS</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $totalNominal = 0; 
                $totalQtySemua = 0;
            @endphp
            @forelse($transactions as $index => $trx)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center" style="font-family: monospace; font-weight: bold;">{{ $trx->transaction_number }}</td>
                <td align="center">{{ $trx->created_at->format('d/m/Y - H:i') }} WIB</td>
                <td>
                    @if($trx->details && $trx->details->count() > 0)
                        <ul class="item-list">
                            @foreach($trx->details as $item)
                                <li>
                                    <strong>{{ $item->product->name ?? 'Produk Dihapus' }}</strong> 
                                    <span style="color: #444;">
                                        ({{ $item->quantity }} pcs &times; Rp {{ number_format($item->price_at_transaction, 0, ',', '.') }})
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <span style="color: #888; font-style: italic;">Tidak ada rincian item</span>
                    @endif
                </td>
                <td align="center">
                    {{ $trx->details ? $trx->details->sum('quantity') : 0 }}
                </td>
                <td align="right" style="font-weight: bold;">
                    Rp {{ number_format($trx->total_amount, 0, ',', '.') }}
                </td>
                <td align="center">
                    @if($trx->payment_status == 'success')
                        @php 
                            $totalNominal += $trx->total_amount; 
                            $totalQtySemua += ($trx->details ? $trx->details->sum('quantity') : 0);
                        @endphp
                        <span class="badge badge-success">SUKSES</span>
                    @elseif($trx->payment_status == 'pending')
                        <span class="badge badge-pending">PENDING</span>
                    @else
                        <span class="badge badge-failed">GAGAL</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center" style="padding: 12px; color: #666;">
                    Tidak ada data transaksi yang ditemukan.
                </td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr class="total-row">
                <td colspan="4" align="right">TOTAL TRANSAKSI SUKSES:</td>
                <td align="center">{{ $totalQtySemua }} pcs</td>
                <td align="right">Rp {{ number_format($totalNominal, 0, ',', '.') }}</td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <div class="footer-container">
        <div class="footer">
            <p>Jember, {{ date('d F Y') }}</p>
            <p>Petugas Kasir / Admin,</p>
            <div class="signature-space"></div>
            <p style="font-weight: bold; text-decoration: underline;">
                {{ Auth::user()->name ?? 'Administrator' }}
            </p>
        </div>
    </div>
</body>
</html>