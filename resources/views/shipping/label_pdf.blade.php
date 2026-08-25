<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Label Pengiriman Paket - {{ $sale->transaction_number }}</title>
    <style>
        @page {
            size: a6 portrait;
            margin: 6mm 6mm 6mm 6mm;
        }
        body {
            font-family: "Arial", "Helvetica", sans-serif;
            font-size: 8.5pt;
            line-height: 1.25;
            color: #111;
            margin: 0;
            padding: 0;
        }
        .container {
            border: 2px solid #000;
            padding: 6px;
            box-sizing: border-box;
        }
        .header {
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            margin-bottom: 5px;
        }
        .header table {
            width: 100%;
        }
        .shop-title {
            font-size: 11pt;
            font-weight: 900;
            text-transform: uppercase;
        }
        .badge-shipping {
            background-color: #000;
            color: #fff;
            padding: 2px 6px;
            font-weight: bold;
            font-size: 8pt;
            display: inline-block;
            text-transform: uppercase;
        }
        .section-box {
            border: 1.5px solid #000;
            margin-bottom: 5px;
            padding: 5px 6px;
        }
        .to-box {
            background-color: #fcfcfc;
            border: 2px solid #000;
            padding: 6px;
            margin-bottom: 5px;
        }
        .section-title {
            font-size: 7.5pt;
            font-weight: 900;
            text-transform: uppercase;
            color: #555;
            margin-bottom: 2px;
            letter-spacing: 0.5px;
        }
        .recipient-name {
            font-size: 11pt;
            font-weight: 900;
            text-transform: uppercase;
            color: #000;
        }
        .recipient-phone {
            font-size: 9.5pt;
            font-weight: bold;
            color: #000;
            margin-top: 1px;
        }
        .recipient-address {
            font-size: 9pt;
            font-weight: bold;
            margin-top: 3px;
            line-height: 1.25;
            color: #111;
        }
        .courier-badge {
            background-color: #f0f0f0;
            border: 1px solid #333;
            font-weight: bold;
            font-size: 8.5pt;
            padding: 2px 5px;
            display: inline-block;
            margin-top: 4px;
        }
        .sender-name {
            font-size: 9pt;
            font-weight: bold;
        }
        table.items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 3px;
        }
        table.items-table th, table.items-table td {
            border: 1px solid #333;
            padding: 3px 4px;
            font-size: 7.5pt;
        }
        table.items-table th {
            background-color: #eaeaea;
            text-align: left;
            text-transform: uppercase;
        }
        .notes-box {
            border: 1px dashed #000;
            padding: 3px 5px;
            font-size: 7.5pt;
            margin-top: 4px;
            background-color: #fff9e6;
            font-weight: bold;
        }
        .footer-note {
            font-size: 6.5pt;
            text-align: center;
            margin-top: 4px;
            color: #555;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        
        {{-- HEADER LABEL --}}
        <div class="header">
            <table>
                <tr>
                    <td width="60%" valign="middle">
                        <span class="shop-title">{{ $shop['shop_name'] ?? 'TOKO ANANDA' }}</span><br>
                        <span style="font-size: 7pt; color: #555;">{{ $shop['shop_phone'] ?? '' }}</span>
                    </td>
                    <td width="40%" align="right" valign="middle">
                        <span class="badge-shipping">LABEL PENGIRIMAN</span><br>
                        <span style="font-family: monospace; font-size: 8pt; font-weight: bold;">{{ $sale->transaction_number }}</span>
                    </td>
                </tr>
            </table>
        </div>

        {{-- KOTAK PENERIMA (TUJUAN) - BESAR & JELAS --}}
        <div class="to-box">
            <div class="section-title">KEPADA / PENERIMA (TO):</div>
            <div class="recipient-name">{{ $recipientName ?: 'Pelanggan Umum' }}</div>
            <div class="recipient-phone">📞 {{ $recipientPhone ?: ($sale->customer_phone ?? '-') }}</div>
            <div class="recipient-address">
                📍 {{ $recipientAddress ?: 'Alamat belum diisi / Ambil di Tempat' }}
            </div>
            <div style="margin-top: 4px;">
                <span class="courier-badge">📦 EKSPEDISI: <b>{{ strtoupper($courier ?: 'REGULER') }}</b></span>
            </div>
        </div>

        {{-- KOTAK PENGIRIM (DARI) --}}
        <div class="section-box">
            <div class="section-title">DARI / PENGIRIM (FROM):</div>
            <div class="sender-name">{{ $senderName ?: ($shop['shop_name'] ?? 'TOKO ANANDA') }}</div>
            <div style="font-size: 8pt; font-weight: bold;">📞 {{ $senderPhone ?: ($shop['shop_phone'] ?? '-') }}</div>
            <div style="font-size: 7.5pt; color: #333; margin-top: 1px;">
                📍 {{ $senderAddress ?: ($shop['shop_address'] ?? 'Jember, Jawa Timur') }}
            </div>
        </div>

        {{-- RINCIAN ISI PAKET --}}
        <div>
            <div class="section-title" style="margin-top: 2px;">ISI PAKET (ITEMS):</div>
            <table class="items-table">
                <thead>
                    <tr>
                        <th width="8%">NO</th>
                        <th width="72%">NAMA PRODUK</th>
                        <th width="20%" style="text-align: center;">QTY</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalQty = 0; @endphp
                    @forelse($sale->details as $idx => $item)
                    @php $totalQty += $item->quantity; @endphp
                    <tr>
                        <td align="center">{{ $idx + 1 }}</td>
                        <td>{{ $item->product->name ?? 'Produk' }}</td>
                        <td align="center"><b>{{ $item->quantity }} pcs</b></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" align="center">Tidak ada rincian item</td>
                    </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" align="right" style="font-weight: bold; font-size: 7.5pt;">TOTAL KUANTITAS:</td>
                        <td align="center" style="font-weight: bold; font-size: 7.5pt;">{{ $totalQty }} pcs</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        {{-- CATATAN KHUSUS / INSTRUKSI PENGIRIMAN --}}
        <div class="notes-box">
            ⚠️ CATATAN: {{ $notes ?: 'FRAGILE - JANGAN DIBANTING / DITINDIH' }}
        </div>

        <div class="footer-note">
            Tgl: {{ $sale->created_at->format('d/m/Y H:i') }} WIB | Dicetak Otomatis Sistem {{ $shop['app_name'] ?? 'SIKANDA' }}
        </div>

    </div>
</body>
</html>
