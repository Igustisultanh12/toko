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

{{-- SVG VECTOR GAMBAR 4.1 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="20" y="20" width="460" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="20" y="20" width="460" height="22" fill="#00661A"/>
        <text x="250" y="35" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">KATALOG MASTER INVENTARIS PRODUK & STATUS PERGUDANGAN</text>
        <text x="30" y="60" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">1. Nama Barang & Barcode:</text>
        <text x="170" y="60" font-family="Helvetica" font-size="6.8" fill="#2D3748">Diindeks unik untuk pencarian instan scanner kasir.</text>
        <text x="30" y="78" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">2. Harga Jual & Diskon:</text>
        <text x="170" y="78" font-family="Helvetica" font-size="6.8" fill="#2D3748">Penetapan harga eceran kasir dan diskon promosi %.</text>
        <text x="30" y="96" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">3. Ambang Batas Stok:</text>
        <text x="170" y="96" font-family="Helvetica" font-size="6.8" fill="#2D3748">Hijau (Aman &gt; 5), Kuning (Menipis &le; 5), Merah (Habis 0).</text>
        <text x="30" y="114" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">4. Ekspor Rekap Stok:</text>
        <text x="170" y="114" font-family="Helvetica" font-size="6.8" fill="#2D3748">Unduh dokumen PDF/Excel valuasi aset barang gudang.</text>
        <text x="30" y="132" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">5. Impor Massal:</text>
        <text x="170" y="132" font-family="Helvetica" font-size="6.8" fill="#2D3748">Mendaftarkan ratusan produk sekaligus via spreadsheet Excel.</text>
    </svg>
    <div class="diagram-caption">Gambar 4.1: Struktur Manajemen Master Produk & Status Inventaris Gudang</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 22: BAB 4.2 + GAMBAR PENCARIAN & SCANNER --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 04</div>
<h1 class="chapter-title">FITUR PENCARIAN PRODUK & FILTER BARCODE</h1>

<h2 class="section-title">4.2 Pencarian Cepat Nama Barang & Filter Barcode</h2>
<p>
    Tabel produk dilengkapi filter cerdas yang dapat mencari berdasarkan nama maupun barcode:
</p>

{{-- SVG VECTOR GAMBAR 4.2 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="28" rx="6" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="35" y="38" font-family="Helvetica" font-size="8" fill="#2D3748">🔍 Minyak Bimoli</text>
        <rect x="380" y="24" width="85" height="20" rx="4" fill="#00AA13"/>
        <text x="422" y="37" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">CARI PRODUK</text>
        <!-- Result Box -->
        <rect x="25" y="58" width="450" height="85" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="58" width="450" height="18" fill="#00661A"/>
        <text x="35" y="70" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">HASIL PENCARIAN DITEMUKAN (1 PRODUK):</text>
        <text x="35" y="92" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C">Minyak Goreng Bimoli 2 Liter Pouch</text>
        <text x="35" y="105" font-family="monospace" font-size="6.8" fill="#718096">Barcode: 8992753102941 • Satuan: Pouch • Stok: 12 Pcs</text>
        <text x="35" y="122" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F">Harga Jual Kasir: Rp 38.000 / Pouch</text>
        <rect x="390" y="95" width="70" height="22" rx="4" fill="#00AA13"/>
        <text x="425" y="109" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">EDIT BARANG</text>
    </svg>
    <div class="diagram-caption">Gambar 4.2: Visualisasi Filter Pencarian Cepat Produk Berdasarkan Teks & Barcode</div>
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

{{-- SVG VECTOR GAMBAR 4.3 --}}
<div class="diagram-container">
    <svg width="460" height="170" viewBox="0 0 500 180">
        <rect x="5" y="5" width="490" height="170" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="150" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="40" y="32" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#1A202C">FORMULIR DATA PRODUK BARU</text>
        <!-- Inputs -->
        <text x="40" y="48" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA BARANG (*)</text>
        <rect x="40" y="52" width="420" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="64" font-family="Helvetica" font-size="6.8" fill="#1A202C">Kopi Susu Aren Botol 250ml</text>

        <text x="40" y="82" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">BARCODE / SKU</text>
        <rect x="40" y="86" width="350" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="98" font-family="monospace" font-size="6.8" fill="#1A202C">8992753102941</text>
        <rect x="400" y="86" width="60" height="18" rx="4" fill="#E6F4EA"/>
        <text x="430" y="98" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">AUTO ⚡</text>

        <text x="40" y="116" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">HARGA JUAL (RP) (*)</text>
        <rect x="40" y="120" width="200" height="18" rx="4" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
        <text x="48" y="132" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">Rp 18.000</text>

        <text x="260" y="116" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">STOK FISIK (*)</text>
        <rect x="260" y="120" width="200" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="268" y="132" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">50 Unit</text>

        <rect x="360" y="145" width="100" height="18" rx="4" fill="#00AA13"/>
        <text x="410" y="157" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN PRODUK</text>
    </svg>
    <div class="diagram-caption">Gambar 4.3: Formulir Tambah Produk Baru dengan Tombol Generator Barcode Otomatis</div>
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

{{-- SVG VECTOR GAMBAR 4.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="135" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="92" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#718096" text-anchor="middle">HARGA REGULER</text>
        <text x="92" y="65" font-family="Helvetica" font-size="11" font-weight="bold" fill="#1A202C" text-anchor="middle">Rp 50.000</text>
        <text x="92" y="85" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Harga jual dasar</text>
        <text x="92" y="98" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">sebelum diskon</text>

        <!-- Minus Icon -->
        <circle cx="180" cy="77" r="12" fill="#EE2737"/>
        <text x="180" y="82" font-family="Helvetica" font-size="14" font-weight="bold" fill="#FFFFFF" text-anchor="middle">-</text>

        <rect x="200" y="20" width="135" height="115" rx="8" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
        <text x="267" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#E53E3E" text-anchor="middle">DISKON PROMO (%)</text>
        <text x="267" y="65" font-family="Helvetica" font-size="12" font-weight="bold" fill="#E53E3E" text-anchor="middle">10% OFF</text>
        <text x="267" y="85" font-family="Helvetica" font-size="6.5" fill="#C53030" text-anchor="middle">Potongan otomatis:</text>
        <text x="267" y="98" font-family="Helvetica" font-size="7" font-weight="bold" fill="#E53E3E" text-anchor="middle">Rp 5.000</text>

        <!-- Equals Icon -->
        <circle cx="355" cy="77" r="12" fill="#00AA13"/>
        <text x="355" y="82" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">=</text>

        <rect x="375" y="20" width="105" height="115" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="427" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">HARGA KASIR</text>
        <text x="427" y="65" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00AA13" text-anchor="middle">Rp 45.000</text>
        <text x="427" y="85" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">Harga final yang</text>
        <text x="427" y="98" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">dicetak pada nota</text>
    </svg>
    <div class="diagram-caption">Gambar 4.4: Diagram Alur Kalkulasi Diskon Promo Produk Otomatis di Kasir</div>
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

{{-- SVG VECTOR GAMBAR 4.5 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <!-- Safe Stock -->
        <rect x="25" y="25" width="135" height="110" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <circle cx="92" cy="48" r="14" fill="#00AA13"/>
        <text x="92" y="53" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">✔</text>
        <text x="92" y="75" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">STOK AMAN</text>
        <text x="92" y="92" font-family="Helvetica" font-size="6.8" fill="#276749" text-anchor="middle">Jumlah: &gt; 5 Unit</text>
        <text x="92" y="105" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">Bebas dijual di kasir</text>
        <text x="92" y="118" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">Badge Hijau</text>

        <!-- Low Stock -->
        <rect x="182" y="25" width="135" height="110" rx="8" fill="#FFFAF0" stroke="#FBD38D" stroke-width="1.5"/>
        <circle cx="249" cy="48" r="14" fill="#DD6B20"/>
        <text x="249" y="53" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">⚠️</text>
        <text x="249" y="75" font-family="Helvetica" font-size="8" font-weight="bold" fill="#DD6B20" text-anchor="middle">STOK MENIPIS</text>
        <text x="249" y="92" font-family="Helvetica" font-size="6.8" fill="#C05621" text-anchor="middle">Jumlah: 1 s/d 5 Unit</text>
        <text x="249" y="105" font-family="Helvetica" font-size="6.5" fill="#C05621" text-anchor="middle">Sinyal re-order gudang</text>
        <text x="249" y="118" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#DD6B20" text-anchor="middle">Badge Kuning</text>

        <!-- Out of Stock -->
        <rect x="340" y="25" width="135" height="110" rx="8" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1.5"/>
        <circle cx="407" cy="48" r="14" fill="#E53E3E"/>
        <text x="407" y="53" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">✖</text>
        <text x="407" y="75" font-family="Helvetica" font-size="8" font-weight="bold" fill="#E53E3E" text-anchor="middle">STOK HABIS</text>
        <text x="407" y="92" font-family="Helvetica" font-size="6.8" fill="#C53030" text-anchor="middle">Jumlah: 0 Unit</text>
        <text x="407" y="105" font-family="Helvetica" font-size="6.5" fill="#C53030" text-anchor="middle">Terkunci dari kasir</text>
        <text x="407" y="118" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#E53E3E" text-anchor="middle">Badge Merah</text>
    </svg>
    <div class="diagram-caption">Gambar 4.5: Visualisasi Tiga Tingkat Status Ketersediaan Stok Produk</div>
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

{{-- SVG VECTOR GAMBAR 4.6 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#E6F4EA" stroke="#A8DAB5" stroke-width="1.5"/>
        <text x="25" y="30" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#00661A">⚡ SCAN / TAMBAH STOK CEPAT LANGSUNG DARI KATALOG:</text>
        <!-- Inputs Bar -->
        <rect x="25" y="45" width="230" height="24" rx="6" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="35" y="61" font-family="monospace" font-size="7.5" fill="#1A202C">8992753102941 (Bimoli 2L)</text>

        <rect x="265" y="45" width="75" height="24" rx="6" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="302" y="61" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">+ 24 Unit</text>

        <rect x="350" y="45" width="125" height="24" rx="6" fill="#00AA13"/>
        <text x="412" y="61" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">TAMBAH STOK (ENTER)</text>

        <!-- Response Alert Box -->
        <rect x="25" y="85" width="450" height="50" rx="6" fill="#FFFFFF" stroke="#68D391" stroke-width="1"/>
        <circle cx="45" cy="110" r="10" fill="#00AA13"/>
        <text x="45" y="114" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">✔</text>
        <text x="65" y="105" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">SUKSES: Stok Produk Berhasil Ditambahkan Instan via AJAX</text>
        <text x="65" y="118" font-family="Helvetica" font-size="6.8" fill="#2D3748">Produk: 'Minyak Goreng Bimoli 2L' • Ditambahkan: +24 • Total Stok Sekarang: 36 Pcs.</text>
    </svg>
    <div class="diagram-caption">Gambar 4.6: Alur Kerja Penambahan Stok Cepat Melalui Pemindaian Barcode Gudang</div>
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

{{-- SVG VECTOR GAMBAR 4.7 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="20" fill="#00661A"/>
        <text x="35" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">KOLOM A: nama (*)</text>
        <text x="160" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">KOLOM B: barcode</text>
        <text x="280" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">KOLOM C: harga (*)</text>
        <text x="390" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">KOLOM D: stok (*)</text>

        <!-- Row 1 -->
        <rect x="25" y="40" width="450" height="20" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="54" font-family="Helvetica" font-size="6.8" fill="#1A202C">Beras Pandan Wangi 5kg</text>
        <text x="160" y="54" font-family="monospace" font-size="6.8" fill="#4A5568">8991002001</text>
        <text x="280" y="54" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">85000</text>
        <text x="390" y="54" font-family="Helvetica" font-size="6.8" fill="#1A202C">50</text>

        <!-- Row 2 -->
        <rect x="25" y="60" width="450" height="20" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="74" font-family="Helvetica" font-size="6.8" fill="#1A202C">Minyak Sania 2L</text>
        <text x="160" y="74" font-family="monospace" font-size="6.8" fill="#4A5568">8992003002</text>
        <text x="280" y="74" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">37500</text>
        <text x="390" y="74" font-family="Helvetica" font-size="6.8" fill="#1A202C">24</text>

        <!-- Row 3 -->
        <rect x="25" y="80" width="450" height="20" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="94" font-family="Helvetica" font-size="6.8" fill="#1A202C">Gula Pasir Gulaku 1kg</text>
        <text x="160" y="94" font-family="monospace" font-size="6.8" fill="#4A5568">8993004003</text>
        <text x="280" y="94" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">17500</text>
        <text x="390" y="94" font-family="Helvetica" font-size="6.8" fill="#1A202C">100</text>

        <!-- Upload Button simulation -->
        <rect x="320" y="108" width="145" height="22" rx="5" fill="#00AA13"/>
        <text x="392" y="122" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">UNGGAH BERKAS EXCEL</text>
    </svg>
    <div class="diagram-caption">Gambar 4.7: Format Struktur Tabel Spreadsheet Excel untuk Impor Data Produk Massal</div>
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

{{-- SVG VECTOR GAMBAR 4.8 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#3182CE" stroke-width="1.5"/>
        <text x="132" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#2B6CB0" text-anchor="middle">📝 EDIT DATA BARANG</text>
        <text x="35" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Perubahan nama / harga / barcode</text>
        <text x="35" y="75" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Langsung aktif di kasir real-time</text>
        <text x="35" y="90" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Tidak merusak transaksi masa lalu</text>
        <text x="35" y="105" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">• Snapshot price tetap tersimpan</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1.5"/>
        <text x="367" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#E53E3E" text-anchor="middle">🗑️ PENGHAPUSAN AMAN (SAFE DELETE)</text>
        <text x="270" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Produk tanpa transaksi &rarr; Dihapus permanen</text>
        <text x="270" y="75" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Produk bertransaksi &rarr; Relasi terjaga</text>
        <text x="270" y="90" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Laporan audit keuangan tetap valid</text>
        <text x="270" y="105" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#E53E3E">• Integritas basis data 100% aman</text>
    </svg>
    <div class="diagram-caption">Gambar 4.8: Diagram Mekanisme Snapshot Pricing dan Integritas Penghapusan Barang</div>
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

{{-- SVG VECTOR GAMBAR 5.1 --}}
<div class="diagram-container">
    <svg width="460" height="190" viewBox="0 0 500 205">
        <rect x="5" y="5" width="490" height="195" rx="12" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="15" y="15" width="470" height="25" rx="6" fill="#00360D"/>
        <text x="25" y="31" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF">🛒 {{ strtoupper($shop['app_name'] ?? 'SIKANDA') }} POS • {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
        
        <!-- Left Cart -->
        <rect x="15" y="46" width="280" height="145" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="54" width="260" height="20" rx="4" fill="#F7FAFC" stroke="#00AA13" stroke-width="1"/>
        <text x="35" y="67" font-family="Helvetica" font-size="7" fill="#718096">🔍 Scan Barcode / Ketik Nama Produk...</text>
        <!-- Item -->
        <rect x="25" y="80" width="260" height="24" rx="4" fill="#F8FAFC"/>
        <text x="32" y="95" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Kopi Susu Aren 250ml</text>
        <text x="200" y="95" font-family="Helvetica" font-size="7" fill="#4A5568">2 x 18.000</text>
        <text x="275" y="95" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="end">36.000</text>

        <!-- Right Pay Pocket -->
        <rect x="305" y="46" width="180" height="145" rx="8" fill="#00661A"/>
        <text x="315" y="64" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#A8DAB5">NAMA PELANGGAN:</text>
        <rect x="315" y="68" width="160" height="16" rx="4" fill="#FFFFFF"/>
        <text x="322" y="80" font-family="Helvetica" font-size="6.5" fill="#4A5568">Pelanggan Umum</text>
        <rect x="315" y="90" width="160" height="45" rx="6" fill="#004D13"/>
        <text x="322" y="103" font-family="Helvetica" font-size="6" font-weight="bold" fill="#A8DAB5">TOTAL TAGIHAN</text>
        <text x="322" y="122" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF">Rp 51.000</text>
        <rect x="315" y="142" width="160" height="26" rx="6" fill="#00AA13"/>
        <text x="395" y="159" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PROSES BAYAR (B)</text>
    </svg>
    <div class="diagram-caption">Gambar 5.1: Tata Letak Dua Panel Meja Kasir POS (resources/views/cashier/pos.blade.php)</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 30: BAB 5.2 + GAMBAR POS SPLIT PANE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">NAVIGASI & INTEGRASI KASIR DENGAN DASHBOARD</h1>

<h2 class="section-title">5.3 Navigasi Kasir & Tombol Kembali ke Dashboard Admin</h2>
<p>
    Perbedaan tampilan header kasir untuk Administrator dan Petugas Kasir:
</p>

{{-- SVG VECTOR GAMBAR 5.3 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="50" rx="8" fill="#00360D"/>
        <text x="35" y="42" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF">TAMPILAN ADMIN DI KASIR:</text>
        <rect x="320" y="28" width="145" height="24" rx="5" fill="#1A202C"/>
        <text x="392" y="43" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">← DASHBOARD ADMIN</text>

        <rect x="25" y="85" width="450" height="50" rx="8" fill="#00360D"/>
        <text x="35" y="107" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF">TAMPILAN KASIR BIASA:</text>
        <text x="320" y="112" font-family="Helvetica" font-size="7" fill="#A8DAB5">Kasir: Siti Rahma (Shift Pagi)</text>
        <rect x="420" y="98" width="45" height="20" rx="4" fill="#E53E3E"/>
        <text x="442" y="111" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">KELUAR</text>
    </svg>
    <div class="diagram-caption">Gambar 5.3: Perbedaan Tampilan Navigasi Header Layar Kasir Berdasarkan Hak Akses Role</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 31 s/d 78: Lanjutan Seluruh Bab dengan Diagram SVG Lengkap --}}
{{-- ========================================================================= --}}
@include('admin.manual.pdf_chapters_more')
