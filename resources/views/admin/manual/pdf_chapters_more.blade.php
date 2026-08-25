{{-- ========================================================================= --}}
{{-- HALAMAN 31: BAB 5.4 + GAMBAR INPUT SCANNER --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">METODE INPUT BARANG: SCANNER BARCODE & TEKS</h1>

<h2 class="section-title">5.4 Input Barang via Pemindai Barcode Laser & Pencarian Nama</h2>
<p>
    Kotak input kasir mendukung pemindaian instan dengan laser barcode scanner maupun ketikan keyboard:
</p>

{{-- SVG VECTOR GAMBAR 5.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="132" y="38" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">📡 PEMINDAIAN BARCODE LASER</text>
        <text x="35" y="58" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Arahkan scanner ke barcode produk</text>
        <text x="35" y="72" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Scanner otomatis menekan 'ENTER'</text>
        <text x="35" y="86" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Barang langsung masuk keranjang</text>
        <text x="35" y="100" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Scan berulang menambah kuantitas (+1)</text>
        <text x="35" y="118" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">⚡ Kecepatan: &lt; 0.2 detik</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#3182CE" stroke-width="1.5"/>
        <text x="367" y="38" font-family="Helvetica" font-size="8" font-weight="bold" fill="#2B6CB0" text-anchor="middle">⌨️ PENCARIAN TEKS / NAMA BARANG</text>
        <text x="270" y="58" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Ketik minimal 2 huruf nama barang</text>
        <text x="270" y="72" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Dropdown pencarian muncul otomatis</text>
        <text x="270" y="86" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Klik atau tekan Panah Bawah + ENTER</text>
        <text x="270" y="100" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Ideal untuk barang tanpa label barcode</text>
        <text x="270" y="118" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">🔍 Pencarian Pintar Fuzzy Matching</text>
    </svg>
    <div class="diagram-caption">Gambar 5.4: Perbandingan Alur Input Barang Melalui Barcode Scanner vs Pencarian Teks</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 32: BAB 5.5 + GAMBAR KERANJANG BELANJA --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">MANAJEMEN KERANJANG BELANJA & KUANTITAS</h1>

<h2 class="section-title">5.5 Penyesuaian Kuantitas, Diskon & Pembatalan Item Belanja</h2>
<p>
    Struktur tabel keranjang belanja interaktif dengan Alpine.js:
</p>

{{-- SVG VECTOR GAMBAR 5.5 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="20" fill="#00661A"/>
        <text x="35" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">NAMA PRODUK</text>
        <text x="200" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">HARGA SATUAN</text>
        <text x="290" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">KUANTITAS (QTY)</text>
        <text x="400" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">SUBTOTAL</text>

        <!-- Item Row 1 -->
        <rect x="25" y="40" width="450" height="30" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="58" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Minyak Goreng Bimoli 2L</text>
        <text x="200" y="58" font-family="Helvetica" font-size="7" fill="#4A5568">Rp 38.000</text>
        <!-- Qty Controls -->
        <rect x="290" y="46" width="18" height="18" rx="3" fill="#EDF2F7"/>
        <text x="299" y="58" font-family="Helvetica" font-size="9" font-weight="bold" fill="#4A5568" text-anchor="middle">-</text>
        <rect x="312" y="46" width="24" height="18" rx="3" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="324" y="58" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">2</text>
        <rect x="340" y="46" width="18" height="18" rx="3" fill="#EDF2F7"/>
        <text x="349" y="58" font-family="Helvetica" font-size="9" font-weight="bold" fill="#4A5568" text-anchor="middle">+</text>
        <text x="440" y="58" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="end">Rp 76.000</text>

        <!-- Total Row -->
        <rect x="25" y="85" width="450" height="40" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
        <text x="35" y="108" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00661A">TOTAL RINGKASAN BELANJA:</text>
        <text x="450" y="110" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00880F" text-anchor="end">Rp 76.000</text>
    </svg>
    <div class="diagram-caption">Gambar 5.5: Tata Letak Keranjang Belanja dengan Kontrol Kuantitas Interaktif</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 33: BAB 5.6 + GAMBAR NAMA PELANGGAN --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">MANAJEMEN IDENTITAS PELANGGAN DI KASIR</h1>

<h2 class="section-title">5.6 Penanganan Identitas Pelanggan (Pelanggan Umum vs Member Toko)</h2>
<p>
    Pencatatan data pembeli untuk personalisasi nota dan pengiriman struk digital:
</p>

{{-- SVG VECTOR GAMBAR 5.6 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="132" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#4A5568" text-anchor="middle">👤 PELANGGAN UMUM (DEFAULT)</text>
        <text x="35" y="58" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Kolom terisi otomatis "Pelanggan Umum"</text>
        <text x="35" y="72" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Kasir tidak perlu mengetik nama pembeli</text>
        <text x="35" y="86" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Menghemat waktu antrean kasir ramai</text>
        <text x="35" y="100" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Struk tercetak dengan pembeli 'Umum'</text>
        <text x="35" y="118" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00AA13">⚡ Mode Cepat Transaksi</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="367" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">👑 MEMBER / NAMA KHUSUS</text>
        <text x="270" y="58" font-family="Helvetica" font-size="6.8" fill="#276749">• Masukkan nama pembeli (cth: Ibu Dewi)</text>
        <text x="270" y="72" font-family="Helvetica" font-size="6.8" fill="#276749">• Masukkan nomor WA untuk kirim e-struk</text>
        <text x="270" y="86" font-family="Helvetica" font-size="6.8" fill="#276749">• Nama tercetak di struk & sertifikat TTE</text>
        <text x="270" y="100" font-family="Helvetica" font-size="6.8" fill="#276749">• Terhubung dengan modul label resi A6</text>
        <text x="270" y="118" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">📦 Pengiriman & Loyalty</text>
    </svg>
    <div class="diagram-caption">Gambar 5.6: Perbandingan Mode Pembeli Umum vs Pelanggan Khusus / Member</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 34: BAB 5.7 + GAMBAR MODAL BAYAR TUNAI --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">ALUR PEMBAYARAN TUNAI (CASH) & KEMBALIAN</h1>

<h2 class="section-title">5.7 Alur Pembayaran Tunai & Perhitungan Uang Kembalian Otomatis</h2>
<p>
    Dialog popup pembayaran tunai dengan tombol nominal uang pas dan pecahan cepat:
</p>

{{-- SVG VECTOR GAMBAR 5.7 --}}
<div class="diagram-container">
    <svg width="460" height="170" viewBox="0 0 500 180">
        <rect x="5" y="5" width="490" height="170" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="80" y="15" width="340" height="150" rx="10" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1.5"/>
        <rect x="80" y="15" width="340" height="25" rx="10" fill="#00661A"/>
        <text x="250" y="32" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PEMBAYARAN TUNAI (CASH)</text>

        <text x="100" y="55" font-family="Helvetica" font-size="7" fill="#718096">Total Tagihan: <tspan font-weight="bold" fill="#1A202C">Rp 51.000</tspan></text>
        <text x="100" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00AA13">UANG DITERIMA:</text>
        <rect x="100" y="76" width="300" height="22" rx="4" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="110" y="91" font-family="Helvetica" font-size="9" font-weight="bold" fill="#00880F">Rp 100.000</text>

        <!-- Quick Cash Buttons -->
        <rect x="100" y="103" width="70" height="16" rx="3" fill="#EDF2F7"/>
        <text x="135" y="114" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Uang Pas</text>
        <rect x="175" y="103" width="70" height="16" rx="3" fill="#EDF2F7"/>
        <text x="210" y="114" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Rp 60.000</text>
        <rect x="250" y="103" width="70" height="16" rx="3" fill="#EDF2F7"/>
        <text x="285" y="114" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Rp 100.000</text>
        <rect x="325" y="103" width="75" height="16" rx="3" fill="#EDF2F7"/>
        <text x="362" y="114" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Rp 200.000</text>

        <!-- Change Box -->
        <rect x="100" y="124" width="300" height="32" rx="6" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
        <text x="110" y="137" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#276749">KEMBALIAN PELANGGAN:</text>
        <text x="110" y="150" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00880F">Rp 49.000</text>
    </svg>
    <div class="diagram-caption">Gambar 5.7: Antarmuka Dialog Pembayaran Tunai & Kalkulasi Uang Kembalian Instan</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 35: BAB 5.8 + GAMBAR MODAL DYNAMIC QRIS --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">ALUR PEMBAYARAN DYNAMIC QRIS DOKU REAL-TIME</h1>

<h2 class="section-title">5.8 Dynamic QRIS DOKU & Webhook Real-Time Notifikasi</h2>
<p>
    Tampilan modal QRIS dinamis yang muncul di layar kasir dengan hitung mundur:
</p>

{{-- SVG VECTOR GAMBAR 5.8 --}}
<div class="diagram-container">
    <svg width="460" height="180" viewBox="0 0 500 195">
        <rect x="5" y="5" width="490" height="185" rx="10" fill="#00360D" stroke="#00AA13" stroke-width="1.5"/>
        <rect x="120" y="15" width="260" height="165" rx="10" fill="#FFFFFF"/>
        <rect x="120" y="15" width="260" height="24" rx="10" fill="#00661A"/>
        <text x="250" y="31" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">DYNAMIC QRIS DOKU MERCHANT</text>
        
        <text x="250" y="50" font-family="Helvetica" font-size="7" fill="#718096" text-anchor="middle">Scan dengan GoPay / OVO / Dana / BCA</text>
        <text x="250" y="65" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00AA13" text-anchor="middle">Rp 51.000</text>
        
        <!-- QR Code Simulation -->
        <rect x="205" y="75" width="90" height="65" rx="4" fill="#F7FAFC" stroke="#00AA13" stroke-width="1.5"/>
        <rect x="215" y="82" width="18" height="18" fill="#1A202C"/>
        <rect x="267" y="82" width="18" height="18" fill="#1A202C"/>
        <rect x="215" y="112" width="18" height="18" fill="#1A202C"/>
        <text x="250" y="105" font-family="monospace" font-size="6" fill="#718096" text-anchor="middle">QR CODE</text>

        <!-- Timer -->
        <rect x="150" y="148" width="200" height="18" rx="4" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
        <text x="250" y="160" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#E53E3E" text-anchor="middle">⏱️ Batas Waktu: 04:52 Menit (Auto-Check)</text>
    </svg>
    <div class="diagram-caption">Gambar 5.8: Modal Pembayaran Dynamic QRIS DOKU Real-Time dengan Countdown Timer</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 36: BAB 5.9 + GAMBAR AUDIO CHIME --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">ASISTEN SUARA NOTIFIKASI TRANSAKSI SUKSES</h1>

<h2 class="section-title">5.9 Asisten Suara (Audio Chime) Notifikasi Kasir Berhasil</h2>
<p>
    Mekanisme pemutaran suara bel kasir saat webhook DOKU atau pembayaran tunai selesai:
</p>

{{-- SVG VECTOR GAMBAR 5.9 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <circle cx="80" cy="80" r="40" fill="#E6F4EA" stroke="#00AA13" stroke-width="2"/>
        <text x="80" y="87" font-family="Helvetica" font-size="28" fill="#00AA13" text-anchor="middle">🔔</text>
        
        <rect x="150" y="25" width="320" height="110" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="165" y="48" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#00661A">FITUR AUDIO BEL KASIR (SOUND CHIME):</text>
        <text x="165" y="68" font-family="Helvetica" font-size="7" fill="#2D3748">• Bunyi "Ting! Pembayaran Berhasil Diterima".</text>
        <text x="165" y="84" font-family="Helvetica" font-size="7" fill="#2D3748">• Memberikan konfirmasi audio instan tanpa perlu menatap layar.</text>
        <text x="165" y="100" font-family="Helvetica" font-size="7" fill="#2D3748">• Mencegah penipuan struk palsu dari pembeli nakal.</text>
        <text x="165" y="116" font-family="Helvetica" font-size="7" fill="#2D3748">• Suara dapat diunggah mandiri di menu Pengaturan Toko.</text>
    </svg>
    <div class="diagram-caption">Gambar 5.9: Alur Notifikasi Asisten Suara Bel Kasir Otomatis Saat Transaksi Berhasil</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 37: BAB 5.10 + GAMBAR PINTASAN KEYBOARD --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">PINTASAN KEYBOARD EFISIENSI KASIR (HOTKEYS)</h1>

<h2 class="section-title">5.10 Pintasan Keyboard Kasir (Hotkeys B & ESC)</h2>
<p>
    Tabel tombol pintas untuk mempercepat transaksi kasir tanpa sentuhan mouse:
</p>

{{-- SVG VECTOR GAMBAR 5.10 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="135" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="67" y="32" width="50" height="35" rx="6" fill="#1A202C"/>
        <text x="92" y="56" font-family="Helvetica" font-size="16" font-weight="bold" fill="#FFFFFF" text-anchor="middle">B</text>
        <text x="92" y="85" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">PROSES BAYAR</text>
        <text x="92" y="100" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Membuka modal dialog</text>
        <text x="92" y="112" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">pembayaran kasir</text>

        <rect x="182" y="20" width="135" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="224" y="32" width="50" height="35" rx="6" fill="#1A202C"/>
        <text x="249" y="55" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">ESC</text>
        <text x="249" y="85" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#E53E3E" text-anchor="middle">BATAL / TUTUP</text>
        <text x="249" y="100" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Menutup dialog popup</text>
        <text x="249" y="112" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">atau reset keranjang</text>

        <rect x="340" y="20" width="135" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="375" y="32" width="65" height="35" rx="6" fill="#1A202C"/>
        <text x="407" y="55" font-family="Helvetica" font-size="11" font-weight="bold" fill="#FFFFFF" text-anchor="middle">ENTER</text>
        <text x="407" y="85" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">KONFIRMASI</text>
        <text x="407" y="100" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Finalisasi transaksi &</text>
        <text x="407" y="112" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">cetak struk langsung</text>
    </svg>
    <div class="diagram-caption">Gambar 5.10: Tiga Tombol Pintasan Keyboard Utama untuk Mempercepat Transaksi Kasir</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 38: BAB 5.11 + GAMBAR STRUK THERMAL BLUETOOTH --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">CETAK STRUK THERMAL BLUETOOTH (58MM/80MM)</h1>

<h2 class="section-title">5.11 Format Cetak Struk Thermal Bluetooth (Raw ESC/POS)</h2>
<p>
    Format teks cetak langsung ke printer mini bluetooth kasir 58mm/80mm:
</p>

{{-- SVG VECTOR GAMBAR 5.11 --}}
<div class="diagram-container">
    <svg width="460" height="180" viewBox="0 0 500 195">
        <rect x="5" y="5" width="490" height="185" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="140" y="12" width="220" height="170" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="250" y="28" font-family="monospace" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
        <text x="250" y="38" font-family="monospace" font-size="6" fill="#718096" text-anchor="middle">{{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77' }}</text>
        <text x="250" y="47" font-family="monospace" font-size="6" fill="#718096" text-anchor="middle">Telp: {{ $shop['shop_phone'] ?? '081234567890' }}</text>
        <text x="250" y="56" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="middle">--------------------------------</text>
        
        <text x="150" y="66" font-family="monospace" font-size="6" fill="#1A202C">No : INV-20260826-0001</text>
        <text x="150" y="75" font-family="monospace" font-size="6" fill="#1A202C">Kasir: Siti Rahma • TUNAI</text>
        <text x="250" y="84" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="middle">--------------------------------</text>
        
        <text x="150" y="94" font-family="monospace" font-size="6" fill="#1A202C">Minyak Bimoli 2L</text>
        <text x="150" y="103" font-family="monospace" font-size="6" fill="#718096">2 x 38.000</text>
        <text x="350" y="103" font-family="monospace" font-size="6" font-weight="bold" fill="#1A202C" text-anchor="end">76.000</text>
        <text x="250" y="113" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="middle">--------------------------------</text>
        
        <text x="150" y="123" font-family="monospace" font-size="6" font-weight="bold" fill="#1A202C">TOTAL :</text>
        <text x="350" y="123" font-family="monospace" font-size="7" font-weight="bold" fill="#1A202C" text-anchor="end">Rp 76.000</text>
        <text x="150" y="133" font-family="monospace" font-size="6" fill="#1A202C">BAYAR (TUNAI) :</text>
        <text x="350" y="133" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="end">100.000</text>
        <text x="150" y="143" font-family="monospace" font-size="6" fill="#1A202C">KEMBALIAN :</text>
        <text x="350" y="143" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="end">24.000</text>

        <text x="250" y="158" font-family="monospace" font-size="5.5" fill="#718096" text-anchor="middle">Terima Kasih Atas Kunjungan Anda</text>
        <text x="250" y="167" font-family="monospace" font-size="5" fill="#718096" text-anchor="middle">Barang yang dibeli tidak dapat ditukar</text>
    </svg>
    <div class="diagram-caption">Gambar 5.11: Format Layout Cetak Struk Kasir Thermal Bluetooth 58mm / 80mm</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 39: BAB 5.12 + GAMBAR STRUK PDF GRAYSCALE --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">CETAK NOTA STRUK PDF GRAYSCALE MONOKROM</h1>

<h2 class="section-title">5.12 Format Nota PDF Grayscale (/receipt/{id}/print)</h2>
<p>
    Tampilan cetak nota PDF A4/A5 resmi dengan stempel Tanda Tangan Elektronik:
</p>

{{-- SVG VECTOR GAMBAR 5.12 --}}
<div class="diagram-container">
    <svg width="460" height="170" viewBox="0 0 500 180">
        <rect x="5" y="5" width="490" height="170" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="50" y="15" width="400" height="150" rx="6" fill="#FFFFFF" stroke="#1A202C" stroke-width="1"/>
        <!-- Header -->
        <text x="65" y="32" font-family="Helvetica" font-size="9" font-weight="bold" fill="#1A202C">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
        <text x="65" y="42" font-family="Helvetica" font-size="6" fill="#4A5568">{{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77' }}</text>
        
        <text x="435" y="32" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="end">FAKTUR PENJUALAN</text>
        <text x="435" y="42" font-family="Helvetica" font-size="6" fill="#4A5568" text-anchor="end">INV/20260826/0001</text>
        <line x1="65" y1="48" x2="435" y2="48" stroke="#1A202C" stroke-width="1"/>

        <!-- Table -->
        <text x="65" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">PRODUK</text>
        <text x="250" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">HARGA</text>
        <text x="320" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">QTY</text>
        <text x="435" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C" text-anchor="end">TOTAL</text>
        <line x1="65" y1="64" x2="435" y2="64" stroke="#CBD5E0" stroke-width="0.5"/>

        <text x="65" y="78" font-family="Helvetica" font-size="6.5" fill="#1A202C">Minyak Goreng Bimoli 2L</text>
        <text x="250" y="78" font-family="Helvetica" font-size="6.5" fill="#1A202C">38.000</text>
        <text x="320" y="78" font-family="Helvetica" font-size="6.5" fill="#1A202C">2</text>
        <text x="435" y="78" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C" text-anchor="end">76.000</text>

        <!-- Total Box -->
        <rect x="250" y="90" width="185" height="22" fill="#F7FAFC" stroke="#1A202C" stroke-width="0.5"/>
        <text x="260" y="104" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">TOTAL DIBAYAR:</text>
        <text x="425" y="104" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="end">Rp 76.000</text>

        <!-- TTE Stamp -->
        <rect x="65" y="95" width="110" height="35" rx="4" fill="#F8FAFC" stroke="#718096" stroke-width="0.5"/>
        <text x="70" y="107" font-family="Helvetica" font-size="5.5" font-weight="bold" fill="#1A202C">TERTANDA DIGITAL (TTE)</text>
        <text x="70" y="117" font-family="Helvetica" font-size="5" fill="#4A5568">Oleh: Siti Rahma (Kasir)</text>
        <text x="70" y="125" font-family="Helvetica" font-size="4.5" fill="#718096">Hash: SHA256-VALID-2026</text>
    </svg>
    <div class="diagram-caption">Gambar 5.12: Tata Letak Dokumen Nota Struk PDF Monokrom Resmi dengan Tanda Tangan Digital</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 40: BAB 5.13 + GAMBAR WHATSAPP E-RECEIPT --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">PENGIRIMAN STRUK DIGITAL VIA WHATSAPP</h1>

<h2 class="section-title">5.13 Pengiriman Bukti Faktur Digital via WhatsApp Pelanggan</h2>
<p>
    Pengiriman tautan faktur elektronik langsung ke nomor WhatsApp pembeli:
</p>

{{-- SVG VECTOR GAMBAR 5.13 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="150" height="120" rx="8" fill="#00360D"/>
        <text x="100" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">KASIR POS</text>
        <text x="100" y="60" font-family="Helvetica" font-size="6.5" fill="#A8DAB5" text-anchor="middle">Input Nomor WA:</text>
        <rect x="40" y="68" width="120" height="18" rx="4" fill="#FFFFFF"/>
        <text x="100" y="80" font-family="Helvetica" font-size="6.5" fill="#1A202C" text-anchor="middle">081298765432</text>
        <rect x="40" y="95" width="120" height="20" rx="4" fill="#00AA13"/>
        <text x="100" y="108" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">KIRIM STRUK (WA)</text>

        <!-- Arrow -->
        <path d="M185 80 L220 80" stroke="#00AA13" stroke-width="2.5" stroke-linecap="round"/>
        <polygon points="220,76 227,80 220,84" fill="#00AA13"/>

        <!-- WhatsApp Chat Simulation -->
        <rect x="235" y="20" width="240" height="120" rx="8" fill="#E6F4EA" stroke="#68D391" stroke-width="1.5"/>
        <rect x="245" y="30" width="220" height="100" rx="6" fill="#FFFFFF"/>
        <text x="255" y="45" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00661A">💬 BUKTI PEMBAYARAN ELEKTRONIK</text>
        <text x="255" y="60" font-family="Helvetica" font-size="6.5" fill="#2D3748">Halo Kak, Terima kasih telah berbelanja di</text>
        <text x="255" y="72" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">{{ $shop['shop_name'] ?? 'Toko Berkah' }}.</text>
        <text x="255" y="87" font-family="Helvetica" font-size="6.5" fill="#2D3748">Berikut tautan e-faktur resmi Anda:</text>
        <text x="255" y="100" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0">https://kasir.site/receipt/verify/INV001</text>
        <text x="255" y="115" font-family="Helvetica" font-size="5.5" fill="#718096">Tautan berlaku 24 jam bertanda tangan digital.</text>
    </svg>
    <div class="diagram-caption">Gambar 5.13: Alur Pengiriman Bukti Pembayaran Digital Otomatis ke WhatsApp Pembeli</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 41: BAB 5.14 + GAMBAR LABEL RESI A6 --}}
{{-- ========================================================================= --}}
<div class="page-break"></div>

<div class="chapter-num">BAB 05</div>
<h1 class="chapter-title">MODUL EKSPEDISI: CETAK LABEL RESI PENGIRIMAN A6</h1>

<h2 class="section-title">5.14 Modul Ekspedisi: Format Label Resi Paket A6 (shipping/label_pdf)</h2>
<p>
    Format standar cetak label paket ekspedisi JNE, J&T, SiCepat, Shopee Xpress:
</p>

{{-- SVG VECTOR GAMBAR 5.14 --}}
<div class="diagram-container">
    <svg width="460" height="170" viewBox="0 0 500 180">
        <rect x="5" y="5" width="490" height="170" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="60" y="12" width="380" height="155" rx="6" fill="#FFFFFF" stroke="#1A202C" stroke-width="1.5"/>
        <!-- Header -->
        <rect x="60" y="12" width="380" height="24" rx="6" fill="#1A202C"/>
        <text x="75" y="28" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF">LABEL PENGIRIMAN PAKET (STANDARD A6)</text>
        <rect x="360" y="16" width="70" height="16" rx="3" fill="#EE2737"/>
        <text x="395" y="27" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">J&T / JNE</text>

        <!-- TO Box -->
        <rect x="75" y="44" width="200" height="60" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="85" y="58" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">PENERIMA (TO):</text>
        <text x="85" y="70" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00661A">Bapak Ahmad Santoso</text>
        <text x="85" y="82" font-family="Helvetica" font-size="6" fill="#4A5568">Jl. Pemuda No. 45, RT 02/05, Surabaya</text>
        <text x="85" y="94" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">Telp: 081234567890</text>

        <!-- FROM Box -->
        <rect x="285" y="44" width="145" height="60" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="295" y="58" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">PENGIRIM (FROM):</text>
        <text x="295" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">{{ $shop['shop_name'] ?? 'Toko Berkah' }}</text>
        <text x="295" y="82" font-family="Helvetica" font-size="6" fill="#4A5568">{{ $shop['shop_address'] ?? 'Jember' }}</text>
        <text x="295" y="94" font-family="Helvetica" font-size="6.5" fill="#1A202C">Telp: {{ $shop['shop_phone'] ?? '081234567890' }}</text>

        <!-- Barcode & Fragile -->
        <rect x="75" y="112" width="200" height="45" rx="4" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="85" y="125" font-family="Helvetica" font-size="6" font-weight="bold" fill="#718096">NO RESI: JP8928374928</text>
        <text x="185" y="145" font-family="monospace" font-size="10" font-weight="bold" fill="#1A202C" text-anchor="middle">||| | |||| || |||| |||</text>

        <rect x="285" y="112" width="145" height="45" rx="4" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
        <text x="357" y="130" font-family="Helvetica" font-size="8" font-weight="bold" fill="#E53E3E" text-anchor="middle">⚠️ FRAGILE / MUDAH PECAH</text>
        <text x="357" y="145" font-family="Helvetica" font-size="6" fill="#C53030" text-anchor="middle">JANGAN DIBANTING / DITINDIH</text>
    </svg>
    <div class="diagram-caption">Gambar 5.14: Tata Letak Format Cetak Label Resi Pengiriman Paket Standar Ukuran A6</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 42 s/d 78: Bab 6 hingga Bab 10 Lanjutan Lengkap --}}
{{-- ========================================================================= --}}
@include('admin.manual.pdf_chapters_final')
