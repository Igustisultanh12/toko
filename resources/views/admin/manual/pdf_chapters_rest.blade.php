{{-- ========================================================================= --}}
{{-- HALAMAN 21: BAB 4.1 + GAMBAR MASTER PRODUK --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</h1>

<h2 class="section-title">4.1 Katalog Master Produk (/admin/products) & Indikator Ketersediaan</h2>
<p>
    Modul Manajemen Produk (<code>/admin/products</code>) mengelola basis data seluruh komoditas toko dengan kontrol stok real-time:
</p>

{{-- WIREFRAME MOCKUP 4.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/admin/products - KATALOG MASTER PRODUK & STOK GUDANG
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 6px;">
            <tr>
                <td>
                    <span class="ui-btn ui-btn-primary">+ TAMBAH PRODUK BARU</span>
                    <span class="ui-btn ui-btn-light">📥 IMPOR EXCEL</span>
                </td>
                <td style="text-align: right;">
                    <div style="display: inline-block; background: white; border: 1px solid #CBD5E0; padding: 2px 6px; border-radius: 4px; font-size: 6.5pt;">
                        🔍 Cari barcode / nama...
                    </div>
                </td>
            </tr>
        </table>

        <table class="doc-table" style="margin: 0;">
            <tr>
                <th>PRODUK / SKU</th>
                <th>BARCODE</th>
                <th>HARGA JUAL</th>
                <th>STOK</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
            <tr>
                <td><b>Minyak Bimoli 2L</b></td>
                <td><code>8992753102</code></td>
                <td><b style="color: #00880F;">Rp 38.000</b></td>
                <td><b>24 Unit</b></td>
                <td><span class="ui-badge badge-green">AMAN</span></td>
                <td><span style="color: #2B6CB0; font-size: 6pt;">Edit | Hapus</span></td>
            </tr>
            <tr>
                <td><b>Beras Pandan Wangi 5kg</b></td>
                <td><code>8991002001</code></td>
                <td><b style="color: #00880F;">Rp 85.000</b></td>
                <td><b>4 Unit</b></td>
                <td><span class="ui-badge badge-yellow">MENIPIS</span></td>
                <td><span style="color: #2B6CB0; font-size: 6pt;">Edit | Hapus</span></td>
            </tr>
            <tr>
                <td><b>Gula Gulaku 1kg</b></td>
                <td><code>8993004003</code></td>
                <td><b style="color: #00880F;">Rp 17.500</b></td>
                <td><b>0 Unit</b></td>
                <td><span class="ui-badge badge-red">HABIS</span></td>
                <td><span style="color: #2B6CB0; font-size: 6pt;">Edit | Hapus</span></td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 4.1: Antarmuka Katalog Master Produk & Indikator Status Stok (admin/products/index.blade.php)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 22: BAB 4.2 + GAMBAR PANCARIAN CEPAT --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">FITUR PENCARIAN PRODUK & FILTER BARCODE</h1>

<h2 class="section-title">4.2 Pencarian Cepat Nama Barang & Filter Barcode</h2>
<p>
    Tabel produk dilengkapi filter cerdas yang dapat mencari berdasarkan nama maupun barcode:
</p>

{{-- WIREFRAME MOCKUP 4.2 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FITUR FILTER PENCARIAN CEPAT & SCANNER BARCODE
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 6px;">
            <tr>
                <td style="width: 75%; padding-right: 6px;">
                    <span class="ui-label">KATA KUNCI PENCARIAN (NAMA / BARCODE)</span>
                    <div class="ui-input-box" style="border: 1.5px solid #00AA13;">🔍 Minyak Bimoli</div>
                </td>
                <td style="width: 25%; vertical-align: bottom;">
                    <div class="ui-btn ui-btn-primary" style="width: 80%;">CARI BARANG</div>
                </td>
            </tr>
        </table>

        <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
            <div style="font-size: 6.5pt; font-weight: bold; color: #00661A; border-bottom: 1px solid #E2E8F0; padding-bottom: 3px; margin-bottom: 4px;">
                HASIL PENCARIAN DITEMUKAN (1 PRODUK COCOK):
            </div>
            <table style="width: 100%; border-collapse: collapse; font-size: 6.5pt;">
                <tr>
                    <td>
                        <b style="font-size: 7.5pt; color: #1A202C;">Minyak Goreng Bimoli 2 Liter Pouch</b><br>
                        <span style="color: #718096; font-family: monospace;">Barcode: 8992753102941 • Satuan: Pouch</span>
                    </td>
                    <td style="text-align: right;">
                        <span style="font-size: 8.5pt; font-weight: bold; color: #00880F;">Rp 38.000</span><br>
                        <span class="ui-badge badge-green">Stok: 24 Pcs</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ui-caption">Gambar 4.2: Filter Pencarian Cepat Produk Berdasarkan Teks & Barcode</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 23: BAB 4.3 + GAMBAR FORM CREATE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">FORMULIR TAMBAH PRODUK BARU & BARCODE AUTO</h1>

<h2 class="section-title">4.3 Formulir Tambah Produk Baru (/admin/products/create)</h2>
<p>
    Formulir penambahan produk baru dilengkapi generator barcode EAN-13 otomatis:
</p>

{{-- WIREFRAME MOCKUP 4.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/admin/products/create - FORMULIR PRODUK BARU
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="padding: 3px;">
                    <span class="ui-label">NAMA PRODUK / BARANG (*)</span>
                    <div class="ui-input-box">Kopi Susu Aren Botol 250ml</div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 3px;">
                    <span class="ui-label">KODE BARCODE / SKU (UNIK)</span>
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="width: 80%;"><div class="ui-input-box" style="font-family: monospace;">8992753102941</div></td>
                            <td style="width: 20%; padding-left: 4px;"><div class="ui-btn ui-btn-primary" style="width: 80%;">AUTO ⚡</div></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 50%; padding: 3px;">
                    <span class="ui-label">HARGA JUAL KASIR (RP) (*)</span>
                    <div class="ui-input-box" style="font-weight: bold; color: #00880F;">Rp 18.000</div>
                </td>
                <td style="width: 50%; padding: 3px;">
                    <span class="ui-label">STOK FISIK AWAL (*)</span>
                    <div class="ui-input-box">50 Unit</div>
                </td>
            </tr>
            <tr>
                <td style="padding: 3px;">
                    <span class="ui-label">DISKON PROMO (%)</span>
                    <div class="ui-input-box">0% (Tanpa Diskon)</div>
                </td>
                <td style="padding: 3px;">
                    <span class="ui-label">KETERANGAN / SATUAN</span>
                    <div class="ui-input-box">Botol / Pcs</div>
                </td>
            </tr>
        </table>
        <div style="text-align: right; margin-top: 6px;">
            <span class="ui-btn ui-btn-light">BATAL</span>
            <span class="ui-btn ui-btn-primary">SIMPAN PRODUK</span>
        </div>
    </div>
    <div class="ui-caption">Gambar 4.3: Formulir Tambah Produk Baru dengan Tombol Generator Barcode Otomatis (admin/products/create.blade.php)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 24: BAB 4.4 + GAMBAR PRICING & DISKON --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">STRUKTUR PENETAPAN HARGA & DISKON PROMO</h1>

<h2 class="section-title">4.4 Struktur Harga Jual Kasir, Diskon Promo (%) & Satuan</h2>
<p>
    Logika penetapan harga dan kalkulasi diskon otomatis pada keranjang belanja kasir:
</p>

{{-- WIREFRAME MOCKUP 4.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ALUR KALKULASI HARGA JUAL & POTONGAN DISKON PROMOSI
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6pt; font-weight: bold; color: #718096;">HARGA REGULER</div>
                        <div style="font-size: 11pt; font-weight: 900; color: #1A202C; margin: 4px 0;">Rp 50.000</div>
                        <div style="font-size: 5.5pt; color: #718096;">Harga dasar katalog</div>
                    </div>
                </td>
                <td style="width: 5%; font-size: 12pt; font-weight: bold; color: #E53E3E;">&minus;</td>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFF5F5; border: 1px solid #FEB2B2; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6pt; font-weight: bold; color: #E53E3E;">DISKON PROMO (10%)</div>
                        <div style="font-size: 11pt; font-weight: 900; color: #E53E3E; margin: 4px 0;">&minus; Rp 5.000</div>
                        <div style="font-size: 5.5pt; color: #C53030;">Potongan otomatis</div>
                    </div>
                </td>
                <td style="width: 5%; font-size: 12pt; font-weight: bold; color: #00AA13;">=</td>
                <td style="width: 30%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 8px;">
                        <div style="font-size: 6pt; font-weight: bold; color: #00880F;">HARGA KASIR (NETTO)</div>
                        <div style="font-size: 11pt; font-weight: 900; color: #00AA13; margin: 4px 0;">Rp 45.000</div>
                        <div style="font-size: 5.5pt; color: #276749;">Tercetak pada nota</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 4.4: Diagram Alur Kalkulasi Diskon Promo Produk Otomatis di Kasir</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 25: BAB 4.5 + GAMBAR STOK ALERTS --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">AMBANG BATAS STOK MENIPIS & ALERTS</h1>

<h2 class="section-title">4.5 Indikator Stok: Aman (Hijau), Menipis (Kuning), Habis (Merah)</h2>
<p>
    Klasifikasi ketersediaan barang di gudang dan tindakan pencegahan overselling:
</p>

{{-- WIREFRAME MOCKUP 4.5 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; TIGA TINGKAT STATUS INDIKATOR KETERSEDIAAN STOK GUDANG
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 6px; text-align: center;">
                        <span class="ui-badge badge-green" style="font-size: 7pt; padding: 2px 8px;">✔ STOK AMAN</span>
                        <div style="font-size: 9pt; font-weight: bold; color: #00880F; margin: 4px 0;">&gt; 5 Unit</div>
                        <div style="font-size: 5.8pt; color: #276749;">Kondisi prima, bebas ditransaksikan di meja kasir.</div>
                    </div>
                </td>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFAF0; border: 1.5px solid #FBD38D; border-radius: 6px; padding: 6px; text-align: center;">
                        <span class="ui-badge badge-yellow" style="font-size: 7pt; padding: 2px 8px;">⚠️ STOK MENIPIS</span>
                        <div style="font-size: 9pt; font-weight: bold; color: #DD6B20; margin: 4px 0;">1 s/d 5 Unit</div>
                        <div style="font-size: 5.8pt; color: #C05621;">Sinyal peringatan untuk segera melakukan pengadaan ulang.</div>
                    </div>
                </td>
                <td style="width: 34%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFF5F5; border: 1.5px solid #FEB2B2; border-radius: 6px; padding: 6px; text-align: center;">
                        <span class="ui-badge badge-red" style="font-size: 7pt; padding: 2px 8px;">✖ STOK HABIS</span>
                        <div style="font-size: 9pt; font-weight: bold; color: #E53E3E; margin: 4px 0;">0 Unit</div>
                        <div style="font-size: 5.8pt; color: #C53030;">Terkunci otomatis dari sistem kasir (anti-minus).</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 4.5: Visualisasi Tiga Tingkat Status Ketersediaan Stok Produk</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 26: BAB 4.6 + GAMBAR QUICK STOCK UPDATE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">FITUR UPDATE STOK CEPAT VIA SCANNER</h1>

<h2 class="section-title">4.6 Kotak Scanner Barcode Tambah Stok Cepat (Instant Stock In)</h2>
<p>
    Petugas gudang dapat menambah stok barang masuk tanpa membuka form edit:
</p>

{{-- WIREFRAME MOCKUP 4.6 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00360D;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FITUR INPUT / UPDATE STOK CEPAT LANGSUNG DARI KATALOG
    </div>
    <div class="ui-window-body" style="background-color: #E6F4EA;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 3px;">
                    <span class="ui-label">SCAN BARCODE PRODUK</span>
                    <div class="ui-input-box" style="font-family: monospace; border: 1.5px solid #00AA13;">8992753102941 (Bimoli 2L)</div>
                </td>
                <td style="width: 25%; padding: 3px;">
                    <span class="ui-label">JUMLAH MASUK</span>
                    <div class="ui-input-box" style="font-weight: bold; color: #00880F; border: 1.5px solid #00AA13;">+ 24 Unit</div>
                </td>
                <td style="width: 25%; padding: 3px; vertical-align: bottom;">
                    <div class="ui-btn ui-btn-primary" style="width: 90%;">TAMBAH (ENTER)</div>
                </td>
            </tr>
        </table>
        <div style="background-color: #FFFFFF; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px 6px; margin-top: 6px; font-size: 6.2pt; color: #00661A;">
            ✔ <b>SUKSES:</b> Stok 'Minyak Goreng Bimoli 2L' berhasil ditambah +24 unit. Total stok sekarang: <b>36 Unit</b>.
        </div>
    </div>
    <div class="ui-caption">Gambar 4.6: Alur Kerja Penambahan Stok Cepat Melalui Pemindaian Barcode Gudang</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 27: BAB 4.7 + GAMBAR IMPORT EXCEL --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">IMPORT DATA PRODUK MASSAL VIA EXCEL</h1>

<h2 class="section-title">4.7 Formulir Impor Massal Excel & Format Kolom (admin/products/import)</h2>
<p>
    Struktur tabel spreadsheet Excel yang diterima oleh mesin pengimpor:
</p>

{{-- WIREFRAME MOCKUP 4.7 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMAT STRUKTUR TEMPLATE SPREADSHEET EXCEL IMPOR MASSAL
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0 0 6px 0;">
            <tr>
                <th style="background-color: #276749;">KOLOM A: nama (*)</th>
                <th style="background-color: #276749;">KOLOM B: barcode</th>
                <th style="background-color: #276749;">KOLOM C: harga (*)</th>
                <th style="background-color: #276749;">KOLOM D: stok (*)</th>
            </tr>
            <tr>
                <td>Beras Pandan Wangi 5kg</td>
                <td><code>8991002001</code></td>
                <td><b>85000</b></td>
                <td>50</td>
            </tr>
            <tr>
                <td>Minyak Sania 2L</td>
                <td><code>8992003002</code></td>
                <td><b>37500</b></td>
                <td>24</td>
            </tr>
            <tr>
                <td>Gula Pasir Gulaku 1kg</td>
                <td><code>8993004003</code></td>
                <td><b>17500</b></td>
                <td>100</td>
            </tr>
        </table>
        <div style="text-align: right;">
            <span class="ui-btn ui-btn-primary">📁 UNGGAH BERKAS SPREADSHEET EXCEL (.XLSX)</span>
        </div>
    </div>
    <div class="ui-caption">Gambar 4.7: Format Struktur Tabel Spreadsheet Excel untuk Impor Data Produk Massal</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 28: BAB 4.8 + GAMBAR EDIT & DELETE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">PEMELIHARAAN DATA & PENGHAPUSAN AMAN</h1>

<h2 class="section-title">4.8 Pemeliharaan Data, Edit Barang & Prosedur Penghapusan Aman</h2>
<p>
    Perlindungan data historis transaksi saat produk dihapus atau diedit:
</p>

{{-- WIREFRAME MOCKUP 4.8 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; DIAGRAM MEKANISME PERLINDUNGAN RIWAYAT TRANSAKSI
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0; margin-bottom: 4px;">📝 PEMBARUAN DATA BARANG</div>
                        <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                            • Perubahan nama, harga, atau diskon langsung aktif di kasir.<br>
                            • Transaksi masa lalu tetap menyimpan snapshot harga beli asli.<br>
                            • Laporan pembukuan historis tidak berubah nilainya.
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #E53E3E; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #E53E3E; margin-bottom: 4px;">🗑️ PENGHAPUSAN AMAN (SAFE DELETE)</div>
                        <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                            • Barang tanpa riwayat transaksi dihapus secara permanen.<br>
                            • Barang bertransaksi diproteksi agar relasi audit tetap sah.<br>
                            • Menjamin integritas database MySQL 100% konsisten.
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 4.8: Diagram Mekanisme Snapshot Pricing dan Integritas Penghapusan Barang</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 29: BAB 5.1 + GAMBAR LAYAR KASIR --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">OPERASIONAL KASIR POINT OF SALE (POS) MODERN</h1>

<h2 class="section-title">5.1 Tata Letak Antarmuka Kasir Layar Sentuh & PC (/cashier/pos)</h2>
<p>
    Antarmuka kasir dirancang dengan tata letak dua panel terpisah (*split-pane layout*):
</p>

{{-- WIREFRAME MOCKUP 5.1 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00360D;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; https://kasir.site/cashier/pos - LAYAR KASIR POINT OF SALE (POS)
    </div>
    <div class="ui-window-body" style="padding: 6px;">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <!-- Left: Shopping Cart -->
                <td style="width: 60%; vertical-align: top; padding-right: 6px;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <div class="ui-input-box" style="border: 1.5px solid #00AA13; margin-bottom: 6px;">
                            🔍 Scan Barcode / Ketik Nama Barang...
                        </div>
                        <table style="width: 100%; border-collapse: collapse; font-size: 6.5pt;">
                            <tr style="border-bottom: 1px solid #CBD5E0; padding: 4px 0;">
                                <td style="padding: 3px 0;">
                                    <b>Kopi Susu Aren 250ml</b><br>
                                    <span style="color: #718096;">@ Rp 18.000</span>
                                </td>
                                <td style="text-align: center;">
                                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">-</span>
                                    <b>2</b>
                                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">+</span>
                                </td>
                                <td style="text-align: right; font-weight: bold; color: #00880F;">
                                    Rp 36.000
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #CBD5E0; padding: 4px 0;">
                                <td style="padding: 3px 0;">
                                    <b>Roti Tawar Gandum</b><br>
                                    <span style="color: #718096;">@ Rp 15.000</span>
                                </td>
                                <td style="text-align: center;">
                                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">-</span>
                                    <b>1</b>
                                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">+</span>
                                </td>
                                <td style="text-align: right; font-weight: bold; color: #00880F;">
                                    Rp 15.000
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <!-- Right: Payment Pocket -->
                <td style="width: 40%; vertical-align: top;">
                    <div style="background-color: #00661A; border-radius: 6px; padding: 8px; color: white;">
                        <span class="ui-label" style="color: #A8DAB5;">NAMA PELANGGAN</span>
                        <div style="background: white; border-radius: 4px; padding: 2px 4px; color: #1A202C; font-size: 6.5pt; margin: 2px 0 6px 0;">
                            Pelanggan Umum
                        </div>

                        <div style="background-color: #004D13; border-radius: 4px; padding: 6px; margin-bottom: 6px;">
                            <div style="font-size: 6pt; color: #A8DAB5; font-weight: bold;">TOTAL TAGIHAN</div>
                            <div style="font-size: 14pt; font-weight: 900; color: #FFFFFF;">Rp 51.000</div>
                        </div>

                        <div style="background-color: #00AA13; text-align: center; padding: 6px; border-radius: 4px; font-weight: 900; font-size: 7.5pt; color: white;">
                            PROSES BAYAR (B)
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.1: Tata Letak Kasir POS Split-Pane Dua Panel (resources/views/cashier/pos.blade.php)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 30: BAB 5.2 + GAMBAR HEADER COMPARISON --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">NAVIGASI & INTEGRASI KASIR DENGAN DASHBOARD</h1>

<h2 class="section-title">5.3 Navigasi Kasir & Tombol Kembali ke Dashboard Admin</h2>
<p>
    Perbedaan tampilan header kasir untuk Administrator dan Petugas Kasir:
</p>

{{-- WIREFRAME MOCKUP 5.3 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PERBANDINGAN TAMPILAN HEADER NAVIGASI KASIR
    </div>
    <div class="ui-window-body">
        <div style="background-color: #00360D; border-radius: 6px; padding: 6px 10px; margin-bottom: 8px; color: white;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="font-size: 7pt; font-weight: bold;">
                        🏪 {{ strtoupper($shop['app_name'] ?? 'SIKANDA') }} POS • (TAMPILAN LOGIN ADMINISTRATOR)
                    </td>
                    <td style="text-align: right;">
                        <span class="ui-btn ui-btn-dark">← DASHBOARD ADMIN</span>
                    </td>
                </tr>
            </table>
        </div>

        <div style="background-color: #00360D; border-radius: 6px; padding: 6px 10px; color: white;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="font-size: 7pt; font-weight: bold;">
                        🏪 {{ strtoupper($shop['app_name'] ?? 'SIKANDA') }} POS • (TAMPILAN LOGIN PETUGAS KASIR)
                    </td>
                    <td style="text-align: right;">
                        <span style="font-size: 6.5pt; color: #A8DAB5; margin-right: 6px;">Kasir: Siti Rahma</span>
                        <span class="ui-btn ui-btn-red">KELUAR</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ui-caption">Gambar 5.3: Perbedaan Tampilan Navigasi Header Layar Kasir Berdasarkan Hak Akses Role</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 31 s/d 78: Lanjutan Seluruh Bab dengan Diagram HTML/CSS Lengkap --}}
{{-- ========================================================================= --}}
@include('admin.manual.pdf_chapters_more')
