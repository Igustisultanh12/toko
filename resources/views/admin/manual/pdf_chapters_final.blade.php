{{-- ========================================================================= --}}
{{-- HALAMAN 42: BAB 6.1 + GAMBAR 4 BUKU LAPORAN --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">PUSAT ANALITIK & 4 BUKU LAPORAN KEUANGAN</h1>

<h2 class="section-title">6.1 Gambaran Umum Pusat Pelaporan Terpadu (/admin/reports)</h2>
<p>
    Sistem menyajikan 4 pilar buku laporan terpadu dengan ekspor PDF/Excel bertanda tangan digital:
</p>

{{-- WIREFRAME MOCKUP 6.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; EMPAT PILAR BUKU LAPORAN BISNIS TERPADU
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F;">1. PENJUALAN</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Rekap order harian, bulanan & kasir</div>
                        <span class="ui-badge badge-green">LPK-Report</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0;">2. KEUANGAN & KAS</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Arus kas tunai vs netto QRIS (0.7%)</div>
                        <span class="ui-badge badge-blue">LKEU-Report</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AED6; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00AED6;">3. MONITOR QRIS</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Audit transaksi DOKU & settlement</div>
                        <span class="ui-badge badge-blue">LQRS-Report</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #DD6B20; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #DD6B20;">4. STOK & VALUASI</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Total aset barang & kondisi gudang</div>
                        <span class="ui-badge badge-yellow">LSTK-Report</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 6.1: Empat Pilar Modul Pelaporan Terpadu Sistem POS</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 43: BAB 6.2 + GAMBAR LAPORAN PENJUALAN --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">LAPORAN PENJUALAN TRANSAKSI & FILTER PERIODE</h1>

<h2 class="section-title">6.2 Laporan Penjualan (Harian, Bulanan, Kuartal, Tahunan)</h2>
<p>
    Filter fleksibel untuk menganalisis performa omset penjualan ritel:
</p>

{{-- WIREFRAME MOCKUP 6.2 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FILTER LAPORAN PENJUALAN & REKAPITULASI OMSET
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 6px;">
            <tr>
                <td style="width: 25%; padding: 2px;">
                    <span class="ui-label">DARI TANGGAL</span>
                    <div class="ui-input-box">01/08/2026</div>
                </td>
                <td style="width: 25%; padding: 2px;">
                    <span class="ui-label">SAMPAI TANGGAL</span>
                    <div class="ui-input-box">31/08/2026</div>
                </td>
                <td style="width: 25%; padding: 2px;">
                    <span class="ui-label">METODE BAYAR</span>
                    <div class="ui-input-box">Semua Metode</div>
                </td>
                <td style="width: 25%; padding: 2px; vertical-align: bottom;">
                    <span class="ui-btn ui-btn-primary">FILTER</span>
                    <span class="ui-btn ui-btn-red">PDF TTE 📄</span>
                </td>
            </tr>
        </table>

        <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 4px; padding: 6px;">
            <div style="font-weight: bold; font-size: 7pt; color: #00661A; margin-bottom: 3px;">
                REKAPITULASI PENJUALAN BULAN AGUSTUS 2026:
            </div>
            <table style="width: 100%; border-collapse: collapse; font-size: 6.2pt;">
                <tr>
                    <td>Total Transaksi Selesai: <b>142 Transaksi</b></td>
                    <td>Total Omset Kotor: <b style="color: #00AA13;">Rp 12.850.000</b></td>
                </tr>
                <tr>
                    <td>Total Item Terjual: <b>512 Unit</b></td>
                    <td>Status Rekonsiliasi: <b style="color: #00880F;">✔ 100% Cocok</b></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ui-caption">Gambar 6.2: Antarmuka Filter Laporan Penjualan & Panel Ringkasan Periode</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 44: BAB 6.3 + GAMBAR LAPORAN ARUS KAS --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">LAPORAN KEUANGAN: PEMISAHAN KAS & QRIS</h1>

<h2 class="section-title">6.3 Laporan Keuangan & Arus Kas (Tunai vs Netto QRIS)</h2>
<p>
    Struktur pemisahan uang laci fisik kasir dengan uang digital di rekening bank:
</p>

{{-- WIREFRAME MOCKUP 6.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PEMISAHAN REKONSILIASI KAS TUNAI VS KAS DIGITAL BANK
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6.5pt; font-weight: bold; color: #00880F;">💵 KAS FISIK DI LACI (TUNAI)</div>
                        <div style="font-size: 13pt; font-weight: 900; color: #00AA13; margin: 4px 0;">Rp 8.500.000</div>
                        <div style="font-size: 6pt; color: #4A5568; line-height: 1.4;">
                            • Uang fisik riil dalam laci kasir toko.<br>
                            • Dihitung saat serah terima & tutup shift.<br>
                            • Bebas potongan biaya fee (0% MDR).
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AED6; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6.5pt; font-weight: bold; color: #00AED6;">💳 KAS DIGITAL QRIS (BANK NET)</div>
                        <div style="font-size: 13pt; font-weight: 900; color: #00AED6; margin: 4px 0;">Rp 4.319.550</div>
                        <div style="font-size: 6pt; color: #4A5568; line-height: 1.4;">
                            • Bruto QRIS: Rp 4.350.000.<br>
                            • Potongan MDR 0.7%: &minus;Rp 30.450.<br>
                            • Masuk ke rekening settlement bank toko.
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 6.3: Pemisahan Akuntabel Antara Kas Fisik Laci dan Kas Digital Perbankan</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 45: BAB 6.4 + GAMBAR MDR 0.7% --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">REKONSILIASI POTONGAN BIAYA MDR DOKU 0.7%</h1>

<h2 class="section-title">6.4 Rekonsiliasi MDR DOKU Merchant 0.7% & Arus Kas Bersih</h2>
<p>
    Kalkulasi otomatis biaya transaksi Merchant Discount Rate (MDR) Bank Indonesia:
</p>

{{-- WIREFRAME MOCKUP 6.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; SKEMA KALKULASI PEMOTONGAN BIAYA MDR DOKU 0.7%
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6pt; font-weight: bold; color: #718096;">NOMINAL BRUTO</div>
                        <div style="font-size: 11pt; font-weight: 900; color: #1A202C; margin: 4px 0;">Rp 100.000</div>
                        <div style="font-size: 5.5pt; color: #718096;">Dibayar oleh pelanggan</div>
                    </div>
                </td>
                <td style="width: 5%; font-size: 12pt; font-weight: bold; color: #E53E3E;">&minus;</td>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFF5F5; border: 1px solid #FEB2B2; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6pt; font-weight: bold; color: #E53E3E;">MDR DOKU (0.7%)</div>
                        <div style="font-size: 11pt; font-weight: 900; color: #E53E3E; margin: 4px 0;">&minus; Rp 700</div>
                        <div style="font-size: 5.5pt; color: #C53030;">Fee resmi gateway</div>
                    </div>
                </td>
                <td style="width: 5%; font-size: 12pt; font-weight: bold; color: #00AA13;">=</td>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6pt; font-weight: bold; color: #00880F;">DANA NETTO BANK</div>
                        <div style="font-size: 11pt; font-weight: 900; color: #00AA13; margin: 4px 0;">Rp 99.300</div>
                        <div style="font-size: 5.5pt; color: #276749;">Masuk ke rekening</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 6.4: Skema Kalkulasi Pemotongan Biaya MDR QRIS DOKU 0.7% Otomatis</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 46: BAB 6.5 + GAMBAR AUDIT QRIS --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">LAPORAN MONITORING & AUDIT QRIS GATEWAY</h1>

<h2 class="section-title">6.5 Laporan Audit DOKU Dynamic QRIS (LQRS-Report)</h2>
<p>
    Tabel pemantauan status transaksi QRIS dan ID referensi perbankan:
</p>

{{-- WIREFRAME MOCKUP 6.5 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; TABEL AUDIT TRANSAKSI DIGITAL QRIS DOKU MERCHANT
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0;">
            <tr>
                <th>INVOICE / WAKTU</th>
                <th>BRUTO</th>
                <th>MDR 0.7%</th>
                <th>NETTO REKENING</th>
                <th style="text-align: center;">STATUS</th>
            </tr>
            <tr>
                <td><b>INV-001</b> • 10:15 WIB</td>
                <td>Rp 51.000</td>
                <td style="color: #E53E3E;">&minus;Rp 357</td>
                <td><b style="color: #00880F;">Rp 50.643</b></td>
                <td style="text-align: center;"><span class="ui-badge badge-green">PAID ✔</span></td>
            </tr>
            <tr>
                <td><b>INV-004</b> • 11:30 WIB</td>
                <td>Rp 120.000</td>
                <td style="color: #E53E3E;">&minus;Rp 840</td>
                <td><b style="color: #00880F;">Rp 119.160</b></td>
                <td style="text-align: center;"><span class="ui-badge badge-green">PAID ✔</span></td>
            </tr>
            <tr style="background-color: #EBF8FF;">
                <td colspan="3"><b>TOTAL SETTLEMENT REKENING</b></td>
                <td><b style="color: #2B6CB0; font-size: 7.5pt;">Rp 169.803</b></td>
                <td style="text-align: center;"><span class="ui-badge badge-blue">TERVERIFIKASI</span></td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 6.5: Tabel Laporan Audit Transaksi Digital QRIS & Verifikasi Settlement DOKU</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 47: BAB 6.6 + GAMBAR VALUASI STOK --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">LAPORAN STOK & VALUASI TOTAL ASET GUDANG</h1>

<h2 class="section-title">6.6 Laporan Inventaris & Valuasi Total Aset Barang (LSTK-Report)</h2>
<p>
    Kalkulasi nilai total kekayaan barang dagangan yang berada di gudang:
</p>

{{-- WIREFRAME MOCKUP 6.6 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; RINGKASAN VALUASI KEKAYAAN ASET GUDANG AKTIF
    </div>
    <div class="ui-window-body">
        <div style="background-color: #00360D; color: white; border-radius: 6px; padding: 8px 10px; margin-bottom: 6px;">
            <div style="font-size: 6.5pt; color: #A8DAB5; font-weight: bold;">TOTAL VALUASI ASET GUDANG AKTIF:</div>
            <div style="font-size: 15pt; font-weight: 900; color: #FFFFFF;">Rp 48.750.000</div>
            <div style="font-size: 6pt; color: #E2E8F0;">340 Macam Produk • 1.840 Unit Total Fisik</div>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 33%; padding: 2px;">
                    <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; text-align: center;">
                        <span class="ui-badge badge-green">STOK AMAN</span>
                        <div style="font-size: 8pt; font-weight: bold; color: #00880F; margin: 2px 0;">312 Produk</div>
                        <div style="font-size: 5.5pt; color: #276749;">Valuasi: Rp 45.2M</div>
                    </div>
                </td>
                <td style="width: 33%; padding: 2px;">
                    <div style="background-color: #FFFAF0; border: 1px solid #FBD38D; border-radius: 4px; padding: 4px; text-align: center;">
                        <span class="ui-badge badge-yellow">STOK MENIPIS</span>
                        <div style="font-size: 8pt; font-weight: bold; color: #DD6B20; margin: 2px 0;">24 Produk</div>
                        <div style="font-size: 5.5pt; color: #C05621;">Valuasi: Rp 3.55M</div>
                    </div>
                </td>
                <td style="width: 34%; padding: 2px;">
                    <div style="background-color: #FFF5F5; border: 1px solid #FEB2B2; border-radius: 4px; padding: 4px; text-align: center;">
                        <span class="ui-badge badge-red">STOK HABIS</span>
                        <div style="font-size: 8pt; font-weight: bold; color: #E53E3E; margin: 2px 0;">4 Produk</div>
                        <div style="font-size: 5.5pt; color: #C53030;">Perlu Re-Order</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 6.6: Ringkasan Laporan Valuasi Aset Inventaris Barang Dagangan Toko</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 48: BAB 6.7 + GAMBAR STRUK TUTUP KASIR --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">STRUK RINGKASAN TUTUP KASIR HARIAN (CLOSING)</h1>

<h2 class="section-title">6.7 Struk Ringkasan Tutup Kasir Harian (Daily Closing Slip)</h2>
<p>
    Format struk mini rekonsiliasi kasir saat pergantian shift:
</p>

{{-- WIREFRAME MOCKUP 6.7 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMAT STRUK REKONSILIASI TUTUP KASIR (CLOSING SLIP)
    </div>
    <div class="ui-window-body" style="text-align: center; padding: 10px;">
        <div class="receipt-box">
            <div style="font-weight: bold; font-size: 7.5pt; text-align: center;">*** TUTUP KASIR HARIAN ***</div>
            <div style="font-size: 6pt; text-align: center; color: #718096;">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</div>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            
            <table style="width: 100%; border-collapse: collapse; font-size: 6pt;">
                <tr><td>Tanggal : {{ date('d/m/Y H:i') }}</td></tr>
                <tr><td>Kasir   : Siti Rahma</td></tr>
                <tr><td>Shift   : Siang (08:00 - 16:00)</td></tr>
            </table>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            
            <table style="width: 100%; border-collapse: collapse; font-size: 6pt;">
                <tr><td>Kas Tunai Masuk  :</td><td style="text-align: right;">Rp 1.100.000</td></tr>
                <tr><td>QRIS DOKU Bruto  :</td><td style="text-align: right;">Rp   350.000</td></tr>
                <tr><td>MDR DOKU 0.7%    :</td><td style="text-align: right; color: #E53E3E;">-Rp     2.450</td></tr>
            </table>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            
            <table style="width: 100%; border-collapse: collapse; font-size: 6.2pt;">
                <tr><td><b>TOTAL OMSET :</b></td><td style="text-align: right; font-weight: bold;">Rp 1.450.000</td></tr>
                <tr><td><b>FISIK LACI  :</b></td><td style="text-align: right; font-weight: bold; color: #00880F;">Rp 1.100.000</td></tr>
                <tr><td><b>BANK NETTO  :</b></td><td style="text-align: right; font-weight: bold; color: #00AED6;">Rp   347.550</td></tr>
            </table>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            <div style="font-size: 5.5pt; text-align: center; color: #718096;">Disahkan oleh Supervisor Kasir</div>
        </div>
    </div>
    <div class="ui-caption">Gambar 6.7: Format Struk Ringkasan Penutupan Kasir Harian (Daily Closing Slip)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 49: BAB 6.8 + GAMBAR EKSPOR PDF LANDSCAPE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 06</div>
<h1 class="chapter-title">EKSPOR LAPORAN FORMAL PDF LANDSCAPE & EXCEL</h1>

<h2 class="section-title">6.8 Standar Ekspor Laporan Formal ke Format PDF Landscape & Excel</h2>
<p>
    Format tata letak horizontal A4 Landscape yang dioptimalkan untuk rapat manajerial:
</p>

{{-- WIREFRAME MOCKUP 6.8 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; DOKUMEN RESMI LAPORAN KEUANGAN PDF LANDSCAPE
    </div>
    <div class="ui-window-body">
        <div style="background-color: #FFFFFF; border: 1px solid #1A202C; border-radius: 4px; padding: 6px;">
            <table style="width: 100%; border-collapse: collapse; background-color: #00661A; color: white; padding: 4px 6px;">
                <tr>
                    <td style="font-size: 6.8pt; font-weight: bold; padding: 3px;">
                        {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }} • LAPORAN KEUANGAN & ARUS KAS
                    </td>
                    <td style="text-align: right; font-size: 6pt; padding: 3px;">
                        No: LKEU/08/26/2026/001
                    </td>
                </tr>
            </table>

            <table class="doc-table" style="margin: 4px 0;">
                <tr>
                    <th>NO INVOICE</th>
                    <th>TANGGAL</th>
                    <th>PELANGGAN</th>
                    <th>METODE</th>
                    <th style="text-align: right;">NETTO</th>
                </tr>
                <tr>
                    <td>INV-20260826-0001</td>
                    <td>26/08/2026</td>
                    <td>Pelanggan Umum</td>
                    <td><span class="ui-badge badge-green">TUNAI</span></td>
                    <td style="text-align: right; font-weight: bold;">Rp 76.000</td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 60%;"></td>
                    <td style="width: 40%; text-align: center; border: 0.5px solid #A8DAB5; background-color: #F0FFF4; padding: 4px; border-radius: 3px;">
                        <span style="font-size: 5.5pt; font-weight: bold; color: #00661A;">DISAHKAN DIGITAL (TTE)</span><br>
                        <b style="font-size: 6.5pt; color: #1A202C;">Budi Santoso, S.E.</b><br>
                        <span style="font-size: 5pt; color: #718096;">Kepala Bagian Keuangan</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ui-caption">Gambar 6.8: Standar Format Cetak Ekspor PDF Landscape Laporan Resmi Perusahaan</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 50: BAB 7.1 + GAMBAR TTE UU ITE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</h1>

<h2 class="section-title">7.1 Landasan Hukum UU ITE No. 11/2008 & Integritas Dokumen</h2>
<p>
    Tanda Tangan Elektronik (TTE) pada sistem kasir ini memenuhi seluruh syarat hukum formal:
</p>

{{-- WIREFRAME MOCKUP 7.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; KERANGKA KEPATUHAN HUKUM PASAL 11 UU ITE NO. 11/2008
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0;">
            <tr>
                <th style="width: 30%;">Klausul UU ITE</th>
                <th>Penerapan Teknis Sistem Kasir</th>
            </tr>
            <tr>
                <td><b>Kerahasiaan Pembuatan</b></td>
                <td>Hanya akun terotentikasi sah yang dapat menandatangani dokumen via sesi aman.</td>
            </tr>
            <tr>
                <td><b>Kuasa Penandatangan</b></td>
                <td>Kredensial dilindungi enkripsi hash Bcrypt dan token CSRF unik per sesi.</td>
            </tr>
            <tr>
                <td><b>Deteksi Perubahan</b></td>
                <td>Kriptografi SHA-256 membatalkan validitas jika terjadi manipulasi data.</td>
            </tr>
            <tr>
                <td><b>Verifikasi Publik</b></td>
                <td>QR Code membuka sertifikat digital resmi di portal <code>/verify/document</code>.</td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 7.1: Pemenuhan Asas Hukum UU ITE No. 11/2008 pada Modul TTE Dokumen</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 51: BAB 7.2 + GAMBAR SHA-256 HASH --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">KRIPTOGRAFI SHA-256 & TIMESTAMP KEABSAHAN</h1>

<h2 class="section-title">7.2 Standar Kriptografi SHA-256 & Timestamp Keabsahan</h2>
<p>
    Proses pembentukan signature digital dokumen laporan dan struk belanja:
</p>

{{-- WIREFRAME MOCKUP 7.2 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00360D;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ALUR PEMBENTUKAN HASH KRIPTOGRAFI SHA-256
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 6.8pt; color: #00661A;">1. DATA DOKUMEN</div>
                        <div style="font-size: 5.8pt; color: #4A5568; line-height: 1.4; margin-top: 2px;">
                            • No: LKEU/08/26/2026<br>
                            • Total: Rp 1.450.000<br>
                            • User: Siti Rahma
                        </div>
                    </div>
                </td>
                <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 6.8pt; color: #2B6CB0;">2. SHA-256 ENGINE</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Hashing 256-bit + APP_KEY salt</div>
                        <span class="ui-badge badge-blue">Hash Kunci</span>
                    </div>
                </td>
                <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #38A169; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 6.8pt; color: #00880F;">3. QR CODE TTE</div>
                        <div style="font-size: 5.8pt; color: #276749; margin: 3px 0;">Stempel sah berkekuatan hukum</div>
                        <span class="ui-badge badge-green">Tervalidasi ✔</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 7.2: Alur Pembentukan Hash Kriptografi SHA-256 dan Stempel QR Code TTE</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 52: BAB 7.3 + GAMBAR PENOMORAN DINAMIS --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">STRUKTUR PENOMORAN DOKUMEN LAPORAN DINAMIS</h1>

<h2 class="section-title">7.3 Struktur Format Penomoran Dokumen Laporan (LKEU / LPK / LSTK)</h2>
<p>
    Rumus penomoran dokumen laporan resmi toko berdasarkan tanggal periode laporan:
</p>

{{-- WIREFRAME MOCKUP 7.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ANATOMI STRUKTUR NOMOR DOKUMEN LAPORAN DINAMIS
    </div>
    <div class="ui-window-body">
        <div style="background-color: #00661A; color: white; border-radius: 6px; padding: 8px; text-align: center; font-family: monospace; font-size: 11pt; font-weight: 900; margin-bottom: 8px;">
            LKEU / 08 / 05 / 2026 / 001
        </div>

        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr>
                <td style="width: 25%; padding: 2px;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 4px; padding: 4px;">
                        <span class="ui-label">KODE BUKU</span>
                        <b style="font-size: 7pt; color: #00880F;">LKEU / LPK</b><br>
                        <span style="font-size: 5.5pt; color: #718096;">Jenis Buku Laporan</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 2px;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 4px; padding: 4px;">
                        <span class="ui-label">BULAN DATA</span>
                        <b style="font-size: 7pt; color: #00880F;">08 (Agustus)</b><br>
                        <span style="font-size: 5.5pt; color: #718096;">Bulan Periode Data</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 2px;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 4px; padding: 4px;">
                        <span class="ui-label">TANGGAL DATA</span>
                        <b style="font-size: 7pt; color: #00880F;">05 (Tgl Data)</b><br>
                        <span style="font-size: 5.5pt; color: #718096;">Bukan Tgl Cetak</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 2px;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 4px; padding: 4px;">
                        <span class="ui-label">TAHUN & URUT</span>
                        <b style="font-size: 7pt; color: #00880F;">2026 / 001</b><br>
                        <span style="font-size: 5.5pt; color: #718096;">Tahun & Urut Dokumen</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 7.3: Format Anatomi Nomor Dokumen Laporan Dinamis Berbasis Tanggal Periode</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 53: BAB 7.4 + GAMBAR PENANDATANGAN TTE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">PENANDATANGAN OTOMATIS BERDASARKAN GELAR ALIAS</h1>

<h2 class="section-title">7.4 Penandatangan Dokumen Otomatis & Gelar Jabatan Alias TTE</h2>
<p>
    Hubungan profil akun pengguna dengan identitas tanda tangan pada dokumen PDF:
</p>

{{-- WIREFRAME MOCKUP 7.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PEMETAAN PROFIL AKUN KE STEMPEL TANDA TANGAN DIGITAL
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #1A202C; margin-bottom: 4px;">PROFIL PENGGUNA RESMI</div>
                        <div style="font-size: 6.2pt; color: #4A5568; line-height: 1.4;">
                            • Nama: <b>Budi Santoso, S.E.</b><br>
                            • Email: budi@toko.site<br>
                            • Role: <span class="ui-badge badge-green">Administrator</span><br>
                            • Kolom Alias TTD: <b>Kepala Bagian Keuangan</b>
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-size: 6pt; font-weight: bold; color: #00880F;">DITANDATANGANI DIGITAL (TTE)</div>
                        <div style="font-size: 8pt; font-weight: 900; color: #1A202C; margin: 3px 0;">Budi Santoso, S.E.</div>
                        <div style="font-size: 6.2pt; color: #4A5568;">Kepala Bagian Keuangan</div>
                        <div style="font-size: 5pt; color: #718096; margin-top: 2px;">Verifikasi: /verify/document</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 7.4: Pemetaan Profil Akun dan Gelar Jabatan Resmi pada Stempel TTE Laporan</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 54: BAB 7.5 + GAMBAR PORTAL VERIFY DOC --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">PORTAL PUBLIK VERIFIKASI DOKUMEN LAPORAN</h1>

<h2 class="section-title">7.5 Portal Publik Verifikasi Dokumen (/verify/document)</h2>
<p>
    Laman web publik verifikasi sertifikat digital saat QR Code pada laporan dipindai:
</p>

{{-- WIREFRAME MOCKUP 7.5 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/verify/document - SERTIFIKAT DIGITAL RESMI
    </div>
    <div class="ui-window-body" style="text-align: center; padding: 10px;">
        <div style="display: inline-block; width: 340px; background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 8px; padding: 10px; text-align: left;">
            <div style="text-align: center; border-bottom: 1px solid #E2E8F0; padding-bottom: 6px; margin-bottom: 6px;">
                <span class="ui-badge badge-green" style="font-size: 7.5pt; padding: 2px 10px;">✔ DOKUMEN ASLI & VALID</span>
                <div style="font-size: 8pt; font-weight: 900; color: #00661A; margin-top: 4px;">SERTIFIKAT TANDA TANGAN ELEKTRONIK</div>
            </div>

            <table style="width: 100%; border-collapse: collapse; font-size: 6.5pt;">
                <tr><td style="color: #718096; width: 35%;">No Dokumen</td><td>: <b>LKEU/08/26/2026/001</b></td></tr>
                <tr><td style="color: #718096;">Jenis Dokumen</td><td>: Laporan Keuangan & Arus Kas</td></tr>
                <tr><td style="color: #718096;">Penandatangan</td><td>: <b style="color: #00880F;">Budi Santoso, S.E. (Kepala Keuangan)</b></td></tr>
                <tr><td style="color: #718096;">Waktu TTE</td><td>: 26 Agustus 2026, 17:00:15 WIB</td></tr>
                <tr><td style="color: #718096;">Hash SHA-256</td><td style="font-family: monospace; color: #2B6CB0;">: 7f83b1657ff1fc53b92dc181...</td></tr>
            </table>

            <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; margin-top: 6px; font-size: 5.5pt; color: #276749; text-align: center;">
                Keabsahan diakui secara hukum berdasarkan UU ITE No. 11 Tahun 2008 Pasal 11
            </div>
        </div>
    </div>
    <div class="ui-caption">Gambar 7.5: Sertifikat Digital Portal Publik Verifikasi Keabsahan Laporan (/verify/document)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 55: BAB 7.6 + GAMBAR PORTAL VERIFY FAKTUR --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">PORTAL PUBLIK VERIFIKASI FAKTUR PELANGGAN</h1>

<h2 class="section-title">7.6 Portal Publik Verifikasi Struk Belanja (/verify/tte/{trx})</h2>
<p>
    Halaman pembuktian keaslian transaksi belanja saat pembeli memindai QR invoice:
</p>

{{-- WIREFRAME MOCKUP 7.6 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/verify/tte/INV-001 - VERIFIKASI TRANSAKSI RESMI KASIR
    </div>
    <div class="ui-window-body" style="text-align: center; padding: 10px;">
        <div style="display: inline-block; width: 320px; background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 10px; text-align: left;">
            <div style="font-size: 7.5pt; font-weight: 900; color: #00661A; border-bottom: 1px solid #E2E8F0; padding-bottom: 4px; margin-bottom: 6px;">
                BUKTI PEMBAYARAN SAH KASIR
            </div>
            <table style="width: 100%; border-collapse: collapse; font-size: 6.5pt;">
                <tr><td style="color: #718096; width: 35%;">Toko</td><td>: <b>{{ $shop['shop_name'] ?? 'Toko Berkah' }}</b></td></tr>
                <tr><td style="color: #718096;">Nomor Invoice</td><td>: <b style="color: #00880F;">INV-20260826-0001</b></td></tr>
                <tr><td style="color: #718096;">Total Belanja</td><td>: <b>Rp 76.000 (Lunas)</b></td></tr>
                <tr><td style="color: #718096;">Kasir Bertugas</td><td>: Siti Rahma</td></tr>
                <tr><td style="color: #718096;">Waktu Belanja</td><td>: 26/08/2026 14:30 WIB</td></tr>
            </table>
            <div style="background-color: #F0FFF4; border: 1px solid #68D391; border-radius: 4px; padding: 4px; margin-top: 6px; font-size: 6pt; font-weight: bold; color: #00880F; text-align: center;">
                ✔ TRANSAKSI SAH TERCATAT DALAM SERVER RESMI
            </div>
        </div>
    </div>
    <div class="ui-caption">Gambar 7.6: Laman Publik Verifikasi Faktur Struk Belanja Pelanggan (/verify/tte/{trx})</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 56: BAB 7.7 + GAMBAR EXPIRED LINK 24 JAM --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 07</div>
<h1 class="chapter-title">PROTEKSI TAUTAN DIGITAL FAKTUR 24 JAM</h1>

<h2 class="section-title">7.7 Tautan Faktur Digital Sementara Bertanda Tangan (Expired 24 Jam)</h2>
<p>
    Perlindungan privasi belanja pelanggan dengan sistem URL sementara bertanda tangan (*Signed URL*):
</p>

{{-- WIREFRAME MOCKUP 7.7 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; MEKANISME PROTEKSI URL KEDALUWARSA 24 JAM
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F; margin-bottom: 3px;">⏱️ SEBELUM 24 JAM (AKTIF)</div>
                        <div style="font-size: 6.2pt; color: #276749; line-height: 1.4;">
                            • Tautan WhatsApp dapat diakses bebas pembeli.<br>
                            • Unduh berkas nota PDF lengkap.<br>
                            • Tanda tangan digital TTE terverifikasi.<br>
                            <span class="ui-badge badge-green">✔ Status: Aktif (HTTP 200)</span>
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFF5F5; border: 1.5px solid #FEB2B2; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #E53E3E; margin-bottom: 3px;">🔒 SETELAH 24 JAM (EXPIRED)</div>
                        <div style="font-size: 6.2pt; color: #C53030; line-height: 1.4;">
                            • Tautan otomatis terkunci oleh signed security.<br>
                            • Melindungi privasi histori belanja pembeli.<br>
                            • Data di database toko tetap tersimpan abadi.<br>
                            <span class="ui-badge badge-red">✖ Status: Terkunci (HTTP 403)</span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 7.7: Mekanisme Kedaluwarsa Tautan Faktur WhatsApp 24 Jam demi Keamanan Data</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 57: BAB 8.1 + GAMBAR PUSAT PENGATURAN --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">PENGATURAN TOKO, KONFIGURASI & INTEGRASI</h1>

<h2 class="section-title">8.1 Pusat Pengaturan Sistem (/admin/settings)</h2>
<p>
    Pusat kendali seluruh konfigurasi bisnis, audio kasir, bot Telegram, dan DOKU gateway:
</p>

{{-- WIREFRAME MOCKUP 8.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/admin/settings - PUSAT PENGATURAN TERPADU
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F;">1. IDENTITAS TOKO</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Nama usaha, alamat, logo & telepon</div>
                        <span class="ui-badge badge-green">Branding Toko</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0;">2. AUDIO KASIR</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Upload berkas MP3/WAV suara bel</div>
                        <span class="ui-badge badge-blue">Audio Chime</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #EE2737;">3. DOKU GATEWAY</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Client ID, Secret & Sandbox switch</div>
                        <span class="ui-badge badge-red">Dynamic QRIS</span>
                    </div>
                </td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00AED6;">4. BOT TELEGRAM</div>
                        <div style="font-size: 5.8pt; color: #718096; margin: 3px 0;">Token bot & chat ID alert omset</div>
                        <span class="ui-badge badge-blue">Alert Telegram</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 8.1: Struktur Panel Pengaturan Sistem Terpadu (resources/views/admin/settings/index.blade.php)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 58: BAB 8.2 + GAMBAR SETTINGS IDENTITY --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">PERSONALISASI NAMA, ALAMAT & LOGO TOKO</h1>

<h2 class="section-title">8.2 Pengaturan Nama Toko, Alamat & Logo Usaha</h2>
<p>
    Semua teks identitas toko bersifat dinamis dan dapat diganti kapan saja:
</p>

{{-- WIREFRAME MOCKUP 8.2 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMULIR IDENTITAS USAHA & TOKO
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 3px;">
                    <span class="ui-label">NAMA TOKO RESMI (*)</span>
                    <div class="ui-input-box">{{ $shop['shop_name'] ?? 'Toko Berkah' }}</div>
                </td>
                <td style="width: 50%; padding: 3px;">
                    <span class="ui-label">NOMOR TELEPON / WA (*)</span>
                    <div class="ui-input-box">{{ $shop['shop_phone'] ?? '081234567890' }}</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 3px;">
                    <span class="ui-label">ALAMAT LENGKAP TOKO (*)</span>
                    <div class="ui-input-box">{{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77, Jember' }}</div>
                </td>
            </tr>
        </table>
        <div style="text-align: right; margin-top: 6px;">
            <span class="ui-btn ui-btn-primary">SIMPAN PERUBAHAN IDENTITAS</span>
        </div>
    </div>
    <div class="ui-caption">Gambar 8.2: Formulir Konfigurasi Identitas Toko, Nomor Kontak, dan Alamat Usaha</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 59: BAB 8.3 + GAMBAR BRANDING & PREFIX --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">KUSTOMISASI BRANDING APLIKASI & PREFIX INVOICE</h1>

<h2 class="section-title">8.3 Kustomisasi Branding Aplikasi & Prefix Nomor Invoice</h2>
<p>
    Kustomisasi nama sistem pada header browser dan kode unik faktur kasir:
</p>

{{-- WIREFRAME MOCKUP 8.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PENGATURAN BRANDING SISTEM & PREFIX FAKTUR
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <span class="ui-label">NAMA APLIKASI (APP_NAME)</span>
                        <div class="ui-input-box" style="font-weight: bold; color: #00880F;">{{ $shop['app_name'] ?? 'SIKANDA' }} POS</div>
                        <div style="font-size: 5.8pt; color: #718096; margin-top: 2px;">Tampil di tab browser, sidebar & header buku panduan</div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <span class="ui-label">PREFIX NOMOR INVOICE</span>
                        <div class="ui-input-box" style="font-weight: bold; color: #2B6CB0; font-family: monospace;">INV</div>
                        <div style="font-size: 5.8pt; color: #718096; margin-top: 2px;">Format: INV-YYYYMMDD-0001</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 8.3: Pengaturan Branding Nama Aplikasi dan Prefix Faktur Penjualan</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 60: BAB 8.4 + GAMBAR UPLOAD AUDIO --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">PENGATURAN & UPLOAD AUDIO SUARA BEL KASIR</h1>

<h2 class="section-title">8.4 Pengaturan & Pengunggahan Suara Bel Kasir (Audio Chime)</h2>
<p>
    Unggah berkas suara khusus (.mp3/.wav) untuk asisten audio meja kasir:
</p>

{{-- WIREFRAME MOCKUP 8.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMULIR PENGUNGGAHAN AUDIO BEL KASIR (SOUND CHIME)
    </div>
    <div class="ui-window-body">
        <div style="border: 1.5px dashed #00AA13; background-color: #F0FFF4; border-radius: 6px; padding: 8px; text-align: center; margin-bottom: 6px;">
            <div style="font-size: 7pt; font-weight: bold; color: #00880F;">📁 PILIH BERKAS AUDIO BARU (.MP3 / .WAV)</div>
            <div style="font-size: 5.8pt; color: #718096;">Maksimal 2 MB • Berkas saat ini: <code>bell_chimes_success.mp3</code></div>
        </div>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td><span class="ui-btn ui-btn-primary">▶ TES PUTAR AUDIO</span></td>
                <td style="text-align: right;"><span class="ui-btn ui-btn-primary">SIMPAN AUDIO</span></td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 8.4: Antarmuka Pengunggahan dan Pengujian Suara Bel Notifikasi Kasir</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 61: BAB 8.5 + GAMBAR DOKU CONFIG --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">KONFIGURASI KREDENSIAL DOKU MERCHANT GATEWAY</h1>

<h2 class="section-title">8.5 Konfigurasi Gateway DOKU Merchant (Sandbox & Production)</h2>
<p>
    Penghubung sistem kasir dengan server pembayaran DOKU Merchant:
</p>

{{-- WIREFRAME MOCKUP 8.5 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #EE2737;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; KREDENSIAL API DOKU PAYMENT GATEWAY
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="padding: 2px;">
                    <span class="ui-label">DOKU CLIENT ID (*)</span>
                    <div class="ui-input-box" style="font-family: monospace;">MALL-ID-829103984712</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 2px;">
                    <span class="ui-label">DOKU SECRET KEY (*)</span>
                    <div class="ui-input-box" style="font-family: monospace;">SK-live-8928374982374928374928374</div>
                </td>
            </tr>
            <tr>
                <td style="padding: 2px;">
                    <span class="ui-label">MODE LINGKUNGAN</span>
                    <div class="ui-input-box" style="font-weight: bold; color: #00880F;">● PRODUCTION (LIVE)</div>
                </td>
                <td style="padding: 2px; text-align: right; vertical-align: bottom;">
                    <span class="ui-btn ui-btn-red">SIMPAN KREDENSIAL</span>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 8.5: Formulir Konfigurasi API Kredensial Gateway Pembayaran QRIS DOKU</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 62: BAB 8.6 + GAMBAR TELEGRAM CONFIG --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">KONFIGURASI BOT NOTIFIKASI TELEGRAM TOKO</h1>

<h2 class="section-title">8.6 Konfigurasi Integrasi Bot Notifikasi Telegram Toko</h2>
<p>
    Pengiriman otomatis laporan omset ke grup Telegram pemilik usaha:
</p>

{{-- WIREFRAME MOCKUP 8.6 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00AED6;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; INTEGRASI TELEGRAM BOT ALERT NOTIFIKASI
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="padding: 2px;">
                    <span class="ui-label">TELEGRAM BOT TOKEN</span>
                    <div class="ui-input-box" style="font-family: monospace;">718293847:AAFe793284jshdfkjsdhf938472938</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 2px;">
                    <span class="ui-label">CHAT ID / GRUP ID TUJUAN</span>
                    <div class="ui-input-box" style="font-family: monospace;">-1009283749283 (Grup Manajemen Toko)</div>
                </td>
            </tr>
            <tr>
                <td style="padding: 2px;"><span class="ui-btn ui-btn-blue">📨 TES NOTIFIKASI</span></td>
                <td style="padding: 2px; text-align: right;"><span class="ui-btn ui-btn-primary">SIMPAN BOT</span></td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 8.6: Formulir Konfigurasi Token Bot Telegram dan Pengujian Notifikasi Real-Time</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 63: BAB 8.7 + GAMBAR FOOTER STRUK --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 08</div>
<h1 class="chapter-title">PENGATURAN FOOTER STRUK KASIR & KEBIJAKAN</h1>

<h2 class="section-title">8.7 Pengaturan Footer Struk Kasir & Kebijakan Toko</h2>
<p>
    Kustomisasi pesan ucapan terima kasih dan syarat retur barang pada struk:
</p>

{{-- WIREFRAME MOCKUP 8.7 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PENGATURAN PESAN CATATAN KAKI (FOOTER) STRUK KASIR
    </div>
    <div class="ui-window-body">
        <span class="ui-label">PESAN FOOTER BARIS 1 (UCAPAN TERIMA KASIH)</span>
        <div class="ui-input-box">Terima Kasih Telah Berbelanja di Toko Kami!</div>

        <div style="margin-top: 4px;">
            <span class="ui-label">PESAN FOOTER BARIS 2 (KEBIJAKAN RETUR)</span>
            <div class="ui-input-box">Barang yang sudah dibeli tidak dapat ditukar/dikembalikan.</div>
        </div>

        <div style="text-align: right; margin-top: 6px;">
            <span class="ui-btn ui-btn-primary">SIMPAN PESAN FOOTER</span>
        </div>
    </div>
    <div class="ui-caption">Gambar 8.7: Formulir Pengaturan Pesan Catatan Kaki Struk Belanja Kasir</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 64: BAB 9.1 + GAMBAR DAFTAR USER --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 09</div>
<h1 class="chapter-title">MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</h1>

<h2 class="section-title">9.1 Daftar Akun Pengguna (/admin/users)</h2>
<p>
    Tabel daftar seluruh staf kasir dan administrator terdaftar di sistem:
</p>

{{-- WIREFRAME MOCKUP 9.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/admin/users - DAFTAR PENGGUNA & HAK AKSES
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0;">
            <tr>
                <th>NAMA PENGGUNA</th>
                <th>EMAIL</th>
                <th>PERAN</th>
                <th>ALIAS GELAR TTD</th>
                <th>AKSI</th>
            </tr>
            <tr>
                <td><b>Budi Santoso, S.E.</b></td>
                <td>budi@toko.site</td>
                <td><span class="ui-badge badge-green">ADMIN</span></td>
                <td><b>Kepala Keuangan</b></td>
                <td><span style="color: #2B6CB0; font-size: 6pt;">Edit | Hapus</span></td>
            </tr>
            <tr>
                <td><b>Siti Rahma</b></td>
                <td>kasir1@toko.site</td>
                <td><span class="ui-badge badge-blue">KASIR</span></td>
                <td>Petugas Kasir Shift 1</td>
                <td><span style="color: #2B6CB0; font-size: 6pt;">Edit | Hapus</span></td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 9.1: Antarmuka Tabel Manajemen Pengguna Sistem (/admin/users)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 65: BAB 9.2 + GAMBAR REGISTER USER --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 09</div>
<h1 class="chapter-title">PENDAFTARAN AKUN PENGGUNA BARU & ROLE</h1>

<h2 class="section-title">9.2 Pendaftaran Akun Kasir / Admin Baru & Hak Wewenang Role</h2>
<p>
    Formulir penambahan personil toko baru dengan alokasi hak wewenang:
</p>

{{-- WIREFRAME MOCKUP 9.2 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMULIR TAMBAH PENGGUNA BARU
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 2px;">
                    <span class="ui-label">NAMA LENGKAP (*)</span>
                    <div class="ui-input-box">Dewi Lestari</div>
                </td>
                <td style="width: 50%; padding: 2px;">
                    <span class="ui-label">EMAIL RESMI (*)</span>
                    <div class="ui-input-box">dewi@toko.site</div>
                </td>
            </tr>
            <tr>
                <td style="padding: 2px;">
                    <span class="ui-label">PERAN (ROLE) (*)</span>
                    <div class="ui-input-box" style="font-weight: bold; color: #2B6CB0;">Kasir (Cashier Only)</div>
                </td>
                <td style="padding: 2px;">
                    <span class="ui-label">KATA SANDI AWAL (*)</span>
                    <div class="ui-input-box">••••••••••••</div>
                </td>
            </tr>
        </table>
        <div style="text-align: right; margin-top: 6px;">
            <span class="ui-btn ui-btn-primary">SIMPAN PENGGUNA BARU</span>
        </div>
    </div>
    <div class="ui-caption">Gambar 9.2: Formulir Pendaftaran Akun Staf Baru dan Penetapan Hak Wewenang</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 66: BAB 9.3 + GAMBAR ALIAS TTE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 09</div>
<h1 class="chapter-title">KONFIGURASI ALIAS GELAR JABATAN PENANDATANGAN</h1>

<h2 class="section-title">9.3 Konfigurasi Kolom "Alias / Gelar Jabatan TTD" Penandatangan Dokumen</h2>
<p>
    Pemberian gelar resmi penandatangan laporan perusahaan:
</p>

{{-- WIREFRAME MOCKUP 9.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PENJELASAN FUNGSI KOLOM ALIAS GELAR JABATAN TTD
    </div>
    <div class="ui-window-body">
        <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 6px; padding: 8px;">
            <div style="font-weight: bold; font-size: 7pt; color: #00661A; margin-bottom: 4px;">
                FUNGSI KOLOM "ALIAS / GELAR JABATAN TTD":
            </div>
            <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                • Menentukan jabatan resmi yang dicetak di bawah nama pada stempel digital PDF.<br>
                • Contoh: <b style="color: #00880F;">"Kepala Bagian Keuangan", "Store Manager", "Auditor Internal"</b>.<br>
                • Jika dikosongkan, sistem otomatis memakai fallback nama role (Administrator / Kasir).<br>
                • Menjamin keabsahan manajerial seluruh dokumen laporan bisnis perusahaan.
            </div>
        </div>
    </div>
    <div class="ui-caption">Gambar 9.3: Penjelasan Fungsi Kolom Alias Gelar Jabatan pada Sertifikasi Dokumen Formal</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 67: BAB 9.4 + GAMBAR RESET PASSWORD --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 09</div>
<h1 class="chapter-title">PEMBARUAN DATA PENGGUNA & RESET KATA SANDI</h1>

<h2 class="section-title">9.4 Pembaruan Data Pengguna & Prosedur Reset Kata Sandi</h2>
<p>
    Prosedur reset kata sandi kasir yang lupa password oleh Administrator:
</p>

{{-- WIREFRAME MOCKUP 9.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ALUR RESET KATA SANDI OLEH ADMINISTRATOR
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0; margin-bottom: 3px;">🔑 RESET PASSWORD ADMIN</div>
                        <div style="font-size: 6.2pt; color: #4A5568; line-height: 1.4;">
                            • Buka menu <code>/admin/users</code> &rarr; Klik 'Edit'.<br>
                            • Masukkan kata sandi baru (min 8 karakter).<br>
                            • Sistem otomatis meng-hash ulang dengan Bcrypt.
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F; margin-bottom: 3px;">🛡️ KEAMANAN KREDENSIAL</div>
                        <div style="font-size: 6.2pt; color: #276749; line-height: 1.4;">
                            • Sesi perangkat lama otomatis digugurkan.<br>
                            • Pengguna langsung dapat login dengan sandi baru.<br>
                            • Perlindungan anti-pembajakan akun kasir.
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 9.4: Alur Penggantian Kata Sandi dan Pemulihan Akun Pengguna oleh Admin</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 68: BAB 10.1 + GAMBAR ARSITEKTUR SERVER I GUSTI SULTAN --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">ARSITEKTUR SERVER DIKELOLA OLEH I GUSTI SULTAN</h1>

<h2 class="section-title">10.1 Arsitektur Server Linux Produksi & Manajemen Terpusat</h2>
<p>
    Seluruh infrastruktur server, instalasi, dan pemeliharaan dikelola eksklusif oleh <b>I Gusti Sultan</b>:
</p>

{{-- WIREFRAME MOCKUP 10.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00360D;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ARSITEKTUR SERVER PRODUKSI • DIKELOLA OLEH I GUSTI SULTAN
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F;">1. SERVER HOST</div>
                        <div style="font-size: 5.8pt; color: #4A5568; margin: 3px 0;">aaPanel Linux Host, Nginx & PHP 8.2 FPM</div>
                        <span class="ui-badge badge-green">Uptime 99.98%</span>
                    </div>
                </td>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0;">2. MEDIA ENGINE</div>
                        <div style="font-size: 5.8pt; color: #4A5568; margin: 3px 0;">Dedicated <code>/media-file</code> streaming</div>
                        <span class="ui-badge badge-blue">Zero-Broken Image</span>
                    </div>
                </td>
                <td style="width: 34%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #EE2737; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #EE2737;">3. BACKUP RECOVERY</div>
                        <div style="font-size: 5.8pt; color: #4A5568; margin: 3px 0;">Pencadangan database harian otomatis</div>
                        <span class="ui-badge badge-red">Managed by Sultan</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 10.1: Arsitektur Infrastruktur Server Produksi yang Dikelola oleh I Gusti Sultan</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 69: BAB 10.2 + GAMBAR /MEDIA-FILE STREAMING --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">DEDICATED MEDIA STREAMING ENGINE (/media-file)</h1>

<h2 class="section-title">10.2 Dedicated Media Streaming Engine Anti-404 Nginx</h2>
<p>
    Rute khusus Laravel yang mengalirkan gambar dan audio tanpa terpengaruh symlink Nginx:
</p>

{{-- WIREFRAME MOCKUP 10.2 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ALUR MEDIA STREAMING ENGINE ANTI-404
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 6.8pt; color: #1A202C;">BROWSER KASIR</div>
                        <div style="font-size: 5.5pt; color: #718096; font-family: monospace; margin: 3px 0;">/media-file/logo.png</div>
                        <span class="ui-badge badge-blue">HTTP Request</span>
                    </div>
                </td>
                <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                <td style="width: 35%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 6.8pt; color: #00880F;">MEDIA CONTROLLER</div>
                        <div style="font-size: 5.5pt; color: #4A5568; margin: 3px 0;">Binary streaming & Cache-Control 30 Hari</div>
                        <span class="ui-badge badge-green">Anti 404 Symlink</span>
                    </div>
                </td>
                <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                <td style="width: 25%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1px solid #68D391; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 6.8pt; color: #00880F;">STORAGE</div>
                        <div style="font-size: 5.5pt; color: #276749; margin: 3px 0;">storage/app/public</div>
                        <span class="ui-badge badge-green">✔ Terbaca 100%</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 10.2: Mekanisme Dedicated Media Streaming Controller Pengaman Berkas Media Toko</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 70: BAB 10.3 + GAMBAR STORAGE SYMLINK --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">STRUKTUR STORAGE SYMLINK & FILE PERMISSION</h1>

<h2 class="section-title">10.3 Prosedur Pemeliharaan Storage Symlink & File System aaPanel</h2>
<p>
    Struktur direktori penyimpanan berkas publik pada server Linux:
</p>

{{-- WIREFRAME MOCKUP 10.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; POHON STRUKTUR FILE SYSTEM LINUX AAPANEL
    </div>
    <div class="ui-window-body" style="font-family: monospace; font-size: 6.2pt; line-height: 1.5; color: #1A202C;">
        <b style="color: #00880F;">/www/wwwroot/kasir.site/</b><br>
        ├── public/storage &rarr; ../storage/app/public (Symlink)<br>
        ├── storage/app/public/logos/ (Logo Toko Dinamis)<br>
        ├── storage/app/public/audio/ (Audio Bel Kasir MP3/WAV)<br>
        └── storage/logs/laravel.log (Log Monitoring Error)<br><br>
        <span style="font-family: sans-serif; font-weight: bold; color: #2B6CB0;">
            Hak Akses: CHMOD 755 &bull; Pemilik: chown -R www:www /www/wwwroot/kasir.site
        </span>
    </div>
    <div class="ui-caption">Gambar 10.3: Diagram Pohon Direktori Penyimpanan Berkas Media dan Symlink Storage</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 71: BAB 10.4 + GAMBAR NGINX CONFIG --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">KONFIGURASI NGINX SERVER BLOCK & FASTCGI</h1>

<h2 class="section-title">10.4 Konfigurasi Web Server Nginx & URL Rewrite Engine Laravel</h2>
<p>
    Blok konfigurasi Nginx untuk performa maksimal dan routing Laravel:
</p>

{{-- WIREFRAME MOCKUP 10.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #1A202C;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; KONFIGURASI NGINX SERVER BLOCK (/etc/nginx/sites-available/kasir.site)
    </div>
    <div class="ui-window-body" style="background-color: #2D3748; color: #E2E8F0; font-family: monospace; font-size: 5.8pt; line-height: 1.4;">
        server {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;listen 80; listen 443 ssl http2;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;server_name botnomor.my.id kasir.site;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;root /www/wwwroot/kasir.site/public;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;location / { try_files $uri $uri/ /index.php?$query_string; }<br>
        &nbsp;&nbsp;&nbsp;&nbsp;location ~ \.php$ { fastcgi_pass unix:/tmp/php-cgi-82.sock; }<br>
        &nbsp;&nbsp;&nbsp;&nbsp;client_max_body_size 50M;<br>
        }
    </div>
    <div class="ui-caption">Gambar 10.4: Snippet Konfigurasi Nginx Web Server untuk Routing Laravel 11</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 72: BAB 10.5 + GAMBAR LOG MONITORING --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">PEMANTAUAN BERKAS LOG KESALAHAN (LARAVEL.LOG)</h1>

<h2 class="section-title">10.5 Pemantauan Log Kesalahan Sistem & Error Handling</h2>
<p>
    Pemantauan log kesehatan aplikasi secara berkala:
</p>

{{-- WIREFRAME MOCKUP 10.5 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #1A202C;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; LOG MONITORING REAL-TIME (storage/logs/laravel.log)
    </div>
    <div class="ui-window-body" style="background-color: #1A202C; color: #A0AEC0; font-family: monospace; font-size: 5.5pt; line-height: 1.4;">
        [2026-08-26 10:15:02] production.INFO: QRIS Created: TRX-INV001 Rp 51,000<br>
        <span style="color: #68D391;">[2026-08-26 10:15:20] production.INFO: Webhook DOKU SUCCESS: TRX-INV001 PAID</span><br>
        [2026-08-26 14:00:10] production.INFO: Report LKEU PDF Generated with TTE Hash<br>
        <span style="color: #63B3ED;">[2026-08-26 17:00:00] production.INFO: Daily Auto-Backup MySQL Completed: 24.5 MB</span>
    </div>
    <div class="ui-caption">Gambar 10.5: Pemantauan Berkas Log Aktivitas dan Status Kesehatan Server Laravel</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 73: BAB 10.6 + GAMBAR BACKUP DATABASE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">PENCADANGAN OTOMATIS DATABASE & DISASTER RECOVERY</h1>

<h2 class="section-title">10.6 Prosedur Pencadangan Database Harian & Disaster Recovery</h2>
<p>
    Skema perlindungan data toko dari ancaman kerusakan perangkat keras:
</p>

{{-- WIREFRAME MOCKUP 10.6 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; SKEMA PENCADANGAN DATABASE HARIAN & PEMULIHAN BENCANA
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F;">1. CRON JOB 00:00</div>
                        <div style="font-size: 5.8pt; color: #4A5568; margin: 3px 0;">Ekspor database MySQL otomatis tengah malam</div>
                        <span class="ui-badge badge-green">mysqldump</span>
                    </div>
                </td>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0;">2. STORAGE AMAN</div>
                        <div style="font-size: 5.8pt; color: #4A5568; margin: 3px 0;">Partisi terisolasi & retensi 30 hari</div>
                        <span class="ui-badge badge-blue">Offsite Backup</span>
                    </div>
                </td>
                <td style="width: 34%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #38A169; border-radius: 6px; padding: 6px; text-align: center;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F;">3. RECOVERY</div>
                        <div style="font-size: 5.8pt; color: #276749; margin: 3px 0;">Pemulihan &lt; 5 menit oleh I Gusti Sultan</div>
                        <span class="ui-badge badge-green">Zero-Data Loss</span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 10.6: Skema Pencadangan Database Harian Otomatis dan Prosedur Pemulihan Bencana</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 74: BAB 10.7 + GAMBAR DEPLOYMENT WORKFLOW --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">SOP DEPLOYMENT UPDATE SISTEM OLEH I GUSTI SULTAN</h1>

<h2 class="section-title">10.7 Standar Prosedur Pembaruan Sistem (Git Deployment Workflow)</h2>
<p>
    Alur pembaruan kode produksi di server kasir:
</p>

{{-- WIREFRAME MOCKUP 10.7 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #1A202C;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; TERMINAL SOP DEPLOYMENT UPDATE DI SERVER AAPANEL
    </div>
    <div class="ui-window-body" style="background-color: #00360D; color: #FFFFFF; font-family: monospace; font-size: 6.2pt; line-height: 1.5;">
        <span style="color: #A8DAB5;"># Masuk ke folder root aplikasi</span><br>
        cd /www/wwwroot/kasir.site<br><br>
        <span style="color: #A8DAB5;"># Tarik pembaruan kode terbaru dari repositori Git</span><br>
        <b style="color: #68D391;">git pull origin main</b><br><br>
        <span style="color: #A8DAB5;"># Bersihkan cache view dan route</span><br>
        php artisan view:clear && php artisan route:clear
    </div>
    <div class="ui-caption">Gambar 10.7: Standar Operasional Prosedur Deployment Pembaruan Sistem di Server aaPanel</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 75: BAB 10.8 + GAMBAR TROUBLESHOOTING --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">PANDUAN PEMECAHAN MASALAH CEPAT (TROUBLESHOOTING)</h1>

<h2 class="section-title">10.8 Solusi Cepat Kendala Operasional (FAQ Troubleshooting)</h2>
<p>
    Tabel pertolongan pertama saat menghadapi kendala teknis di toko:
</p>

{{-- WIREFRAME MOCKUP 10.8 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; MATRIKS PANDUAN PEMECAHAN MASALAH CEPAT (FAQ)
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0;">
            <tr>
                <th style="width: 32%;">KENDALA</th>
                <th style="width: 33%;">PENYEBAB</th>
                <th>SOLUSI CEPAT</th>
            </tr>
            <tr>
                <td><b style="color: #E53E3E;">Struk Tidak Keluar</b></td>
                <td>Bluetooth printer terputus</td>
                <td>Nyalakan ulang Bluetooth printer & re-pair di menu kasir.</td>
            </tr>
            <tr>
                <td><b style="color: #E53E3E;">QRIS Tidak Terbuka</b></td>
                <td>Koneksi internet drop</td>
                <td>Gunakan pembayaran TUNAI sementara sampai koneksi pulih.</td>
            </tr>
            <tr>
                <td><b style="color: #E53E3E;">Logo Tidak Tampil</b></td>
                <td>Symlink berkas terputus</td>
                <td>Hubungi I Gusti Sultan untuk eksekusi <code>php artisan storage:link</code>.</td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 10.8: Matriks Identifikasi Masalah dan Solusi Cepat Operasional Kasir</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 76: BAB 10.9 + GAMBAR GLOSARIUM --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">GLOSARIUM ISTILAH TEKNIS, POS & KRIPTOGRAFI</h1>

<h2 class="section-title">10.9 Glosarium Istilah POS, Perbankan, Kriptografi & E-Commerce</h2>
<p>
    Kamus istilah penting yang digunakan di seluruh buku panduan ini:
</p>

{{-- WIREFRAME MOCKUP 10.9 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; KAMUS ISTILAH SISTEM POS, FINANSIAL & KRIPTOGRAFI
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; font-size: 6.2pt;">
            <tr>
                <td style="width: 50%; padding: 3px; vertical-align: top;">
                    <b style="color: #00880F;">• POS (Point of Sale):</b><br>
                    Perangkat lunak kasir pencatat transaksi langsung.<br><br>
                    <b style="color: #00880F;">• QRIS:</b><br>
                    Standar kode QR pembayaran nasional Bank Indonesia.<br><br>
                    <b style="color: #00880F;">• MDR (0.7%):</b><br>
                    Biaya pemrosesan transaksi QRIS merchant.
                </td>
                <td style="width: 50%; padding: 3px; vertical-align: top;">
                    <b style="color: #2B6CB0;">• TTE (Tanda Tangan Elektronik):</b><br>
                    Tanda tangan digital berkekuatan hukum (UU ITE).<br><br>
                    <b style="color: #2B6CB0;">• SHA-256 Hash:</b><br>
                    Algoritma enkripsi 256-bit pengunci data laporan.<br><br>
                    <b style="color: #2B6CB0;">• Webhook:</b><br>
                    Sinyal notifikasi instan dari gateway perbankan.
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 10.9: Glosarium Istilah Teknis Sistem POS, Finansial, dan Kriptografi</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 77: BAB 10.10 + GAMBAR LEMBAR KONTAK RESMI --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">LEMBAR KONTAK DUKUNGAN TEKNIS I GUSTI SULTAN</h1>

<h2 class="section-title">10.10 Lembar Kontak Resmi Pengembang & Server Maintainer</h2>
<p>
    Saluran komunikasi darurat untuk eskalasi kendala server dan pemeliharaan sistem:
</p>

{{-- WIREFRAME MOCKUP 10.10 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00360D;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; SALURAN DUKUNGAN TEKNIS UTAMA • I GUSTI SULTAN
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0;">
            <tr>
                <td style="width: 40%;"><b>Lead Architect & Server Maintainer</b></td>
                <td><b style="color: #00880F;">I Gusti Sultan</b></td>
            </tr>
            <tr>
                <td><b>Layanan Pemeliharaan Server</b></td>
                <td>Pemantauan 24/7, Backup Database Harian & Update Rutin</td>
            </tr>
            <tr>
                <td><b>Repositori Kode Sumber</b></td>
                <td><code>https://github.com/Igustisultanh12/toko.git</code></td>
            </tr>
            <tr>
                <td><b>Status Jaminan Dukungan</b></td>
                <td><span class="ui-badge badge-green">● AKTIF & TERJAMIN PENUH</span></td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 10.10: Lembar Kontak Resmi Pemelihara Server & Pengembang Perangkat Lunak</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 78: PENUTUP & KOMITMEN LAYANAN OLEH I GUSTI SULTAN --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 10</div>
<h1 class="chapter-title">PENUTUP & KOMITMEN PEMELIHARAAN SERVER</h1>

<h2 class="section-title">Komitmen Layanan & Pemeliharaan Jangka Panjang oleh I Gusti Sultan</h2>
<p>
    Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Toko ini disusun dengan standar mutu tertinggi guna memastikan kelancaran seluruh transaksi operasional bisnis ritel Anda.
</p>
<p>
    Seluruh arsitektur perangkat lunak, sistem keamanan otentikasi, enkripsi transaksi QRIS DOKU, modul sertifikasi Tanda Tangan Elektronik (TTE), serta pemeliharaan server aaPanel Linux, Nginx, dan pencadangan database harian <b>dikelola dan dipelihara secara berkesinambungan oleh I Gusti Sultan</b> demi menjamin stabilitas dan kecepatan sistem usaha Anda setiap hari.
</p>

{{-- WIREFRAME MOCKUP 10.11 --}}
<div class="ui-mockup" style="margin-top: 15px;">
    <div class="ui-window-bar" style="background-color: #00661A;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; SERTIFIKASI KOMITMEN LAYANAN & PEMELIHARAAN SERVER
    </div>
    <div class="ui-window-body" style="background-color: #F0FFF4; text-align: center; padding: 12px;">
        <div style="display: inline-block; width: 40px; height: 40px; background-color: #00AA13; border-radius: 50%; line-height: 40px; color: white; font-weight: bold; font-size: 18pt; margin-bottom: 4px;">
            ✔
        </div>
        <div style="font-weight: 900; font-size: 8.5pt; color: #00661A;">SISTEM KASIR & SERVER BEROPERASI PENUH SECARA AMAN</div>
        <div style="font-size: 6.8pt; color: #2D3748; margin-top: 2px;">
            Hak Cipta Perangkat Lunak & Seluruh Perawatan Server Dikelola Penuh oleh:
        </div>
        <div style="font-size: 9pt; font-weight: 900; color: #00880F; margin-top: 3px;">
            I GUSTI SULTAN
        </div>
    </div>
    <div class="ui-caption">Gambar 10.11: Sertifikasi Komitmen Layanan dan Pemeliharaan Server Terpusat</div>
</div>

<div style="margin-top: 25px; text-align: center;">
    <p style="font-size: 7.2pt; color: #718096; text-transform: uppercase; letter-spacing: 1px; font-weight: bold;">
        &copy; {{ date('Y') }} {{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }} &bull; Dikelola oleh I Gusti Sultan. All rights reserved.
    </p>
</div>
