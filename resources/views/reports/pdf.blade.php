<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan - {{ $periodLabel }}</title>
    <style>
        @page {
            size: a4 landscape;
            margin: 10mm 12mm 10mm 12mm;
        }
        body { 
            font-family: "Helvetica", "Arial", sans-serif; 
            font-size: 8.5pt; 
            line-height: 1.25; 
            color: #111; 
            margin: 0;
            padding: 0;
        }
        .kop { 
            width: 100%; 
            margin-bottom: 10px; 
            border-bottom: 2px solid #222;
            padding-bottom: 6px;
        }
        .kop h2 { 
            margin: 0; 
            font-size: 14pt; 
            font-weight: bold; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            color: #1e1b4b; 
        }
        .kop p { 
            margin: 2px 0 0; 
            font-size: 8pt; 
            color: #555; 
        }
        
        .judul-container { 
            text-align: center; 
            margin-bottom: 10px; 
        }
        .judul { 
            font-size: 12pt; 
            font-weight: bold; 
            text-decoration: underline; 
            margin: 0; 
            text-transform: uppercase; 
            color: #111; 
        }
        .sub-judul { 
            font-size: 8.5pt; 
            font-weight: bold; 
            margin: 3px 0 0; 
            color: #444; 
        }
        
        table.data { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 8px; 
        }
        table.data th, table.data td { 
            border: 1px solid #333; 
            padding: 5px 6px; 
            font-size: 8pt; 
            vertical-align: top; 
        }
        table.data th { 
            background-color: #f1f5f9; 
            text-transform: uppercase; 
            font-size: 8pt; 
            font-weight: bold;
            text-align: center; 
        }
        
        .item-list { 
            margin: 0; 
            padding-left: 12px; 
        }
        .item-list li { 
            margin-bottom: 2px; 
            font-size: 7.5pt; 
        }
        
        .total-row { 
            background-color: #e2e8f0; 
            font-weight: bold; 
        }
        
        .footer-container { 
            width: 100%; 
            margin-top: 15px; 
        }
        .footer { 
            float: right; 
            width: 200px; 
            text-align: center; 
            font-size: 8.5pt; 
        }
        .footer .signature-space { 
            height: 40px; 
        }
        .badge { 
            display: inline-block; 
            padding: 2px 5px; 
            border-radius: 3px; 
            font-size: 7pt; 
            font-weight: bold; 
        }
        .badge-success { background-color: #dcfce7; color: #166534; }
        .badge-pending { background-color: #ffedd5; color: #9a3412; }
        .badge-failed { background-color: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>
    <div class="kop">
        <h2>{{ $shop['shop_name'] ?? 'TOKO ANANDA' }}</h2>
        <p>{{ $shop['shop_address'] ?? 'Jalan Argopuro No.77 Mayang, Jember' }} &nbsp;|&nbsp; Telp: {{ $shop['shop_phone'] ?? '-' }}</p>
    </div>

    <div class="judul-container">
        <p class="judul">LAPORAN REKAPITULASI PENJUALAN</p>
        <p class="sub-judul">Periode: {{ $periodLabel }} &nbsp;|&nbsp; Tanggal Cetak: {{ date('d F Y - H:i') }} WIB</p>
    </div>

    <table class="data">
        <thead>
            <tr>
                <th width="3%">NO</th>
                <th width="14%">NO. INVOICE</th>
                <th width="12%">TANGGAL & WAKTU</th>
                <th width="14%">NAMA PELANGGAN</th>
                <th width="32%">RINCIAN BARANG TERJUAL</th>
                <th width="6%">QTY</th>
                <th width="6%">METODE</th>
                <th width="9%">NOMINAL</th>
                <th width="4%">STATUS</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $calcNominal = 0; 
                $calcQty = 0;
            @endphp
            @forelse($transactions as $index => $trx)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center" style="font-family: monospace; font-weight: bold;">{{ $trx->transaction_number }}</td>
                <td align="center">{{ $trx->created_at->format('d/m/Y H:i') }}</td>
                <td><strong>{{ $trx->customer_name ?? 'Pelanggan Umum' }}</strong></td>
                <td>
                    @if($trx->details && $trx->details->count() > 0)
                        <ul class="item-list">
                            @foreach($trx->details as $item)
                                <li>
                                    {{ $item->product->name ?? 'Produk Dihapus' }} 
                                    <span style="color: #555;">
                                        ({{ $item->quantity }}x @ Rp {{ number_format($item->price_at_transaction, 0, ',', '.') }})
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
                <td align="center" style="font-weight: bold;">
                    {{ strtoupper($trx->payment_method) }}
                </td>
                <td align="right" style="font-weight: bold;">
                    Rp {{ number_format($trx->total_amount, 0, ',', '.') }}
                </td>
                <td align="center">
                    @if($trx->payment_status == 'success')
                        @php 
                            $calcNominal += $trx->total_amount; 
                            $calcQty += ($trx->details ? $trx->details->sum('quantity') : 0);
                        @endphp
                        <span class="badge badge-success">LUNAS</span>
                    @elseif($trx->payment_status == 'pending')
                        <span class="badge badge-pending">PENDING</span>
                    @else
                        <span class="badge badge-failed">GAGAL</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" align="center" style="padding: 12px; color: #666;">
                    Tidak ada transaksi pada periode laporan ini.
                </td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr class="total-row">
                <td colspan="5" align="right">TOTAL TRANSAKSI LUNAS / SUKSES:</td>
                <td align="center">{{ $calcQty }} pcs</td>
                <td></td>
                <td align="right">Rp {{ number_format($calcNominal, 0, ',', '.') }}</td>
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
