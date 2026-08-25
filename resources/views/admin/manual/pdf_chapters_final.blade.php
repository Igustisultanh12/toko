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

{{-- SVG VECTOR GAMBAR 6.1 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <!-- Report 1 -->
        <rect x="20" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <circle cx="72" cy="45" r="14" fill="#00AA13"/>
        <text x="72" y="50" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF" text-anchor="middle">1</text>
        <text x="72" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C" text-anchor="middle">PENJUALAN</text>
        <text x="72" y="86" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Rekap order harian,</text>
        <text x="72" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">bulanan & kasir</text>
        <text x="72" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">LPK-Report</text>

        <!-- Report 2 -->
        <rect x="135" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <circle cx="187" cy="45" r="14" fill="#2B6CB0"/>
        <text x="187" y="50" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF" text-anchor="middle">2</text>
        <text x="187" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C" text-anchor="middle">KEUANGAN & KAS</text>
        <text x="187" y="86" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Arus kas tunai vs</text>
        <text x="187" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">netto QRIS (0.7%)</text>
        <text x="187" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">LKEU-Report</text>

        <!-- Report 3 -->
        <rect x="250" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <circle cx="302" cy="45" r="14" fill="#00AED6"/>
        <text x="302" y="50" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF" text-anchor="middle">3</text>
        <text x="302" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C" text-anchor="middle">MONITORING QRIS</text>
        <text x="302" y="86" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Audit transaksi DOKU,</text>
        <text x="302" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">settlement & fee</text>
        <text x="302" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00AED6" text-anchor="middle">LQRS-Report</text>

        <!-- Report 4 -->
        <rect x="365" y="20" width="115" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <circle cx="422" cy="45" r="14" fill="#DD6B20"/>
        <text x="422" y="50" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF" text-anchor="middle">4</text>
        <text x="422" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C" text-anchor="middle">STOK & VALUASI</text>
        <text x="422" y="86" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Total aset barang &</text>
        <text x="422" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">kondisi gudang</text>
        <text x="422" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#DD6B20" text-anchor="middle">LSTK-Report</text>
    </svg>
    <div class="diagram-caption">Gambar 6.1: Empat Pilar Modul Pelaporan Terpadu Sistem POS</div>
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

{{-- SVG VECTOR GAMBAR 6.2 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="18" width="450" height="35" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="35" y="32" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">DARI TANGGAL:</text>
        <rect x="35" y="35" width="90" height="14" rx="3" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="42" y="45" font-family="Helvetica" font-size="6.5" fill="#1A202C">01/08/2026</text>

        <text x="135" y="32" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">SAMPAI TANGGAL:</text>
        <rect x="135" y="35" width="90" height="14" rx="3" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="142" y="45" font-family="Helvetica" font-size="6.5" fill="#1A202C">31/08/2026</text>

        <text x="235" y="32" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">METODE BAYAR:</text>
        <rect x="235" y="35" width="90" height="14" rx="3" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="242" y="45" font-family="Helvetica" font-size="6.5" fill="#1A202C">Semua Metode</text>

        <rect x="340" y="30" width="60" height="18" rx="4" fill="#00AA13"/>
        <text x="370" y="42" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">FILTER</text>

        <rect x="405" y="30" width="65" height="18" rx="4" fill="#EE2737"/>
        <text x="437" y="42" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PDF TTE 📄</text>

        <!-- Summary Bar -->
        <rect x="25" y="60" width="450" height="80" rx="6" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
        <text x="35" y="80" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00661A">REKAPITULASI PENJUALAN BULAN AGUSTUS 2026:</text>
        <text x="35" y="100" font-family="Helvetica" font-size="7" fill="#2D3748">Total Transaksi Selesai : <tspan font-weight="bold" fill="#1A202C">142 Transaksi</tspan></text>
        <text x="35" y="115" font-family="Helvetica" font-size="7" fill="#2D3748">Total Item Terjual : <tspan font-weight="bold" fill="#1A202C">512 Unit</tspan></text>
        <text x="260" y="100" font-family="Helvetica" font-size="7" fill="#2D3748">Total Omset Kotor : <tspan font-weight="bold" fill="#00AA13">Rp 12.850.000</tspan></text>
        <text x="260" y="115" font-family="Helvetica" font-size="7" fill="#2D3748">Status Rekonsiliasi : <tspan font-weight="bold" fill="#00880F">✔ 100% Cocok</tspan></text>
    </svg>
    <div class="diagram-caption">Gambar 6.2: Antarmuka Filter Laporan Penjualan & Panel Ringkasan Periode</div>
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

{{-- SVG VECTOR GAMBAR 6.3 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="132" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">💵 KAS TUNAI DI LACI (CASH)</text>
        <text x="132" y="65" font-family="Helvetica" font-size="14" font-weight="bold" fill="#00AA13" text-anchor="middle">Rp 8.500.000</text>
        <text x="35" y="88" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Uang fisik dalam laci kasir</text>
        <text x="35" y="102" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Dihitung saat penutupan shift</text>
        <text x="35" y="116" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Bebas potongan fee MDR 0%</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#00AED6" stroke-width="1.5"/>
        <text x="367" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00AED6" text-anchor="middle">💳 KAS DIGITAL QRIS (BANK NET)</text>
        <text x="367" y="65" font-family="Helvetica" font-size="14" font-weight="bold" fill="#00AED6" text-anchor="middle">Rp 4.319.550</text>
        <text x="270" y="88" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Bruto QRIS: Rp 4.350.000</text>
        <text x="270" y="102" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Potongan MDR 0.7%: -Rp 30.450</text>
        <text x="270" y="116" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">• Masuk ke rekening settlement bank</text>
    </svg>
    <div class="diagram-caption">Gambar 6.3: Pemisahan Akuntabel Antara Kas Fisik Laci dan Kas Digital Perbankan</div>
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

{{-- SVG VECTOR GAMBAR 6.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="135" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="92" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#718096" text-anchor="middle">NILAI TRANSAKSI BRUTO</text>
        <text x="92" y="65" font-family="Helvetica" font-size="11" font-weight="bold" fill="#1A202C" text-anchor="middle">Rp 100.000</text>
        <text x="92" y="85" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Nominal yang dibayar</text>
        <text x="92" y="98" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">oleh pelanggan QRIS</text>

        <!-- Minus -->
        <circle cx="180" cy="77" r="12" fill="#EE2737"/>
        <text x="180" y="82" font-family="Helvetica" font-size="14" font-weight="bold" fill="#FFFFFF" text-anchor="middle">-</text>

        <rect x="200" y="20" width="135" height="115" rx="8" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
        <text x="267" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#E53E3E" text-anchor="middle">BIAYA MDR DOKU (0.7%)</text>
        <text x="267" y="65" font-family="Helvetica" font-size="12" font-weight="bold" fill="#E53E3E" text-anchor="middle">Rp 700</text>
        <text x="267" y="85" font-family="Helvetica" font-size="6.5" fill="#C53030" text-anchor="middle">Fee resmi gateway</text>
        <text x="267" y="98" font-family="Helvetica" font-size="6.5" fill="#C53030" text-anchor="middle">Bank Indonesia QRIS</text>

        <!-- Equals -->
        <circle cx="355" cy="77" r="12" fill="#00AA13"/>
        <text x="355" y="82" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">=</text>

        <rect x="375" y="20" width="105" height="115" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="427" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">PENDAPATAN BERSIH</text>
        <text x="427" y="65" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00AA13" text-anchor="middle">Rp 99.300</text>
        <text x="427" y="85" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">Dana bersih masuk</text>
        <text x="427" y="98" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">ke rekening toko</text>
    </svg>
    <div class="diagram-caption">Gambar 6.4: Skema Kalkulasi Pemotongan Biaya MDR QRIS DOKU 0.7% Otomatis</div>
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

{{-- SVG VECTOR GAMBAR 6.5 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="20" fill="#00AED6"/>
        <text x="35" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">WAKTU / INVOICE</text>
        <text x="170" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">NOMINAL BRUTO</text>
        <text x="280" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">MDR 0.7%</text>
        <text x="360" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">NETTO REKENING</text>
        <text x="445" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="end">STATUS</text>

        <!-- Row 1 -->
        <rect x="25" y="40" width="450" height="22" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="54" font-family="Helvetica" font-size="6.5" fill="#1A202C">10:15 • INV-001</text>
        <text x="170" y="54" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">Rp 51.000</text>
        <text x="280" y="54" font-family="Helvetica" font-size="6.5" fill="#E53E3E">-Rp 357</text>
        <text x="360" y="54" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Rp 50.643</text>
        <text x="445" y="54" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00AA13" text-anchor="end">PAID ✔</text>

        <!-- Row 2 -->
        <rect x="25" y="62" width="450" height="22" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="76" font-family="Helvetica" font-size="6.5" fill="#1A202C">11:30 • INV-004</text>
        <text x="170" y="76" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C">Rp 120.000</text>
        <text x="280" y="76" font-family="Helvetica" font-size="6.5" fill="#E53E3E">-Rp 840</text>
        <text x="360" y="76" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Rp 119.160</text>
        <text x="445" y="76" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00AA13" text-anchor="end">PAID ✔</text>

        <!-- Total -->
        <rect x="25" y="84" width="450" height="40" fill="#EBF8FF" stroke="#90CDF4" stroke-width="1"/>
        <text x="35" y="108" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0">TOTAL REKAPITULASI QRIS DOKU:</text>
        <text x="445" y="108" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#2B6CB0" text-anchor="end">Netto: Rp 169.803</text>
    </svg>
    <div class="diagram-caption">Gambar 6.5: Tabel Laporan Audit Transaksi Digital QRIS & Verifikasi Settlement DOKU</div>
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

{{-- SVG VECTOR GAMBAR 6.6 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="45" rx="8" fill="#00360D"/>
        <text x="40" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#A8DAB5">TOTAL VALUASI ASET GUDANG AKTIF:</text>
        <text x="40" y="55" font-family="Helvetica" font-size="13" font-weight="bold" fill="#FFFFFF">Rp 48.750.000</text>
        <text x="300" y="48" font-family="Helvetica" font-size="7.5" fill="#E2E8F0">340 Macam Produk • 1.840 Unit Total</text>

        <!-- Breakdown by Status -->
        <rect x="25" y="75" width="140" height="65" rx="6" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
        <text x="95" y="93" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F" text-anchor="middle">STOK AMAN (&gt;5)</text>
        <text x="95" y="112" font-family="Helvetica" font-size="10" font-weight="bold" fill="#00AA13" text-anchor="middle">312 Produk</text>
        <text x="95" y="128" font-family="Helvetica" font-size="6" fill="#276749" text-anchor="middle">Valuasi: Rp 45.2M</text>

        <rect x="180" y="75" width="140" height="65" rx="6" fill="#FFFAF0" stroke="#FBD38D" stroke-width="1"/>
        <text x="250" y="93" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#DD6B20" text-anchor="middle">STOK MENIPIS (1-5)</text>
        <text x="250" y="112" font-family="Helvetica" font-size="10" font-weight="bold" fill="#DD6B20" text-anchor="middle">24 Produk</text>
        <text x="250" y="128" font-family="Helvetica" font-size="6" fill="#C05621" text-anchor="middle">Valuasi: Rp 3.55M</text>

        <rect x="335" y="75" width="140" height="65" rx="6" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
        <text x="405" y="93" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#E53E3E" text-anchor="middle">STOK HABIS (0)</text>
        <text x="405" y="112" font-family="Helvetica" font-size="10" font-weight="bold" fill="#E53E3E" text-anchor="middle">4 Produk</text>
        <text x="405" y="128" font-family="Helvetica" font-size="6" fill="#C53030" text-anchor="middle">Perlu Pengadaan Segera</text>
    </svg>
    <div class="diagram-caption">Gambar 6.6: Ringkasan Laporan Valuasi Aset Inventaris Barang Dagangan Toko</div>
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

{{-- SVG VECTOR GAMBAR 6.7 --}}
<div class="diagram-container">
    <svg width="460" height="180" viewBox="0 0 500 195">
        <rect x="5" y="5" width="490" height="185" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="140" y="12" width="220" height="170" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="250" y="28" font-family="monospace" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">*** TUTUP KASIR HARIAN ***</text>
        <text x="250" y="38" font-family="monospace" font-size="6" fill="#718096" text-anchor="middle">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
        <text x="250" y="47" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="middle">--------------------------------</text>
        
        <text x="150" y="58" font-family="monospace" font-size="6" fill="#1A202C">Tanggal : {{ date('d/m/Y H:i') }}</text>
        <text x="150" y="67" font-family="monospace" font-size="6" fill="#1A202C">Kasir   : Siti Rahma</text>
        <text x="150" y="76" font-family="monospace" font-size="6" fill="#1A202C">Shift   : Siang (08:00 - 16:00)</text>
        <text x="250" y="85" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="middle">--------------------------------</text>
        
        <text x="150" y="96" font-family="monospace" font-size="6" fill="#1A202C">Kas Masuk Tunai  : Rp 1.100.000</text>
        <text x="150" y="106" font-family="monospace" font-size="6" fill="#1A202C">QRIS DOKU Bruto  : Rp   350.000</text>
        <text x="150" y="116" font-family="monospace" font-size="6" fill="#1A202C">Potongan MDR 0.7%: -Rp    2.450</text>
        <text x="250" y="126" font-family="monospace" font-size="6" fill="#1A202C" text-anchor="middle">--------------------------------</text>
        
        <text x="150" y="137" font-family="monospace" font-size="6.5" font-weight="bold" fill="#1A202C">TOTAL OMSET : Rp 1.450.000</text>
        <text x="150" y="147" font-family="monospace" font-size="6.5" font-weight="bold" fill="#00880F">FISIK LACI  : Rp 1.100.000</text>
        <text x="150" y="157" font-family="monospace" font-size="6.5" font-weight="bold" fill="#00AED6">BANK NETTO  : Rp   347.550</text>

        <text x="250" y="172" font-family="monospace" font-size="5.5" fill="#718096" text-anchor="middle">Disahkan oleh Supervisor Kasir</text>
    </svg>
    <div class="diagram-caption">Gambar 6.7: Format Struk Ringkasan Penutupan Kasir Harian (Daily Closing Slip)</div>
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

{{-- SVG VECTOR GAMBAR 6.8 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="125" rx="8" fill="#FFFFFF" stroke="#1A202C" stroke-width="1"/>
        <rect x="25" y="15" width="450" height="20" rx="8" fill="#00661A"/>
        <text x="35" y="28" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }} • LAPORAN KEUANGAN & ARUS KAS (A4 LANDSCAPE)</text>
        <text x="465" y="28" font-family="Helvetica" font-size="6.5" fill="#E2E8F0" text-anchor="end">No: LKEU/{{ date('m/d/Y') }}/001</text>

        <!-- Mini Table -->
        <rect x="35" y="42" width="430" height="50" rx="4" fill="#F8FAFC" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="45" y="56" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C">NO INVOICE</text>
        <text x="140" y="56" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C">TANGGAL</text>
        <text x="220" y="56" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C">PELANGGAN</text>
        <text x="310" y="56" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C">METODE</text>
        <text x="455" y="56" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C" text-anchor="end">NETTO</text>
        <line x1="45" y1="60" x2="455" y2="60" stroke="#CBD5E0" stroke-width="0.5"/>
        <text x="45" y="74" font-family="Helvetica" font-size="6" fill="#4A5568">INV-20260826-0001</text>
        <text x="140" y="74" font-family="Helvetica" font-size="6" fill="#4A5568">26/08/2026</text>
        <text x="220" y="74" font-family="Helvetica" font-size="6" fill="#4A5568">Pelanggan Umum</text>
        <text x="310" y="74" font-family="Helvetica" font-size="6" fill="#00880F">TUNAI</text>
        <text x="455" y="74" font-family="Helvetica" font-size="6" font-weight="bold" fill="#00AA13" text-anchor="end">Rp 76.000</text>

        <!-- Signature Block -->
        <rect x="330" y="98" width="135" height="35" rx="4" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="0.5"/>
        <text x="397" y="109" font-family="Helvetica" font-size="5.5" font-weight="bold" fill="#00661A" text-anchor="middle">DISAHKAN SECARA DIGITAL (TTE)</text>
        <text x="397" y="119" font-family="Helvetica" font-size="5" fill="#2D3748" text-anchor="middle">Kepala Bagian Keuangan</text>
        <text x="397" y="127" font-family="Helvetica" font-size="4.5" fill="#718096" text-anchor="middle">Hash Kriptografi SHA-256 Valid</text>
    </svg>
    <div class="diagram-caption">Gambar 6.8: Standar Format Cetak Ekspor PDF Landscape Laporan Resmi Perusahaan</div>
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

{{-- SVG VECTOR GAMBAR 7.1 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="24" rx="8" fill="#00661A"/>
        <text x="250" y="36" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SYARAT SAHNYA TANDA TANGAN ELEKTRONIK (PASAL 11 UU ITE NO. 11/2008)</text>

        <text x="40" y="58" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">a. Pembuatan TTE Terkait Hanya Pada Penandatangan:</text>
        <text x="40" y="70" font-family="Helvetica" font-size="6.8" fill="#2D3748">Hanya user login terotentikasi yang dapat menghasilkan hash stempel dokumen.</text>

        <text x="40" y="86" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">b. Kuasa Sepenuhnya Berada Pada Penandatangan:</text>
        <text x="40" y="98" font-family="Helvetica" font-size="6.8" fill="#2D3748">Kunci sesi dan kredensial terlindungi oleh enkripsi hash Bcrypt.</text>

        <text x="40" y="114" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">c. Perubahan Pasca-Penandatanganan Terdeteksi:</text>
        <text x="40" y="126" font-family="Helvetica" font-size="6.8" fill="#2D3748">Setiap manipulasi data akan langsung menggagalkan hash verifikasi SHA-256.</text>
    </svg>
    <div class="diagram-caption">Gambar 7.1: Pemenuhan Asas Hukum UU ITE No. 11/2008 pada Modul TTE Dokumen</div>
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

{{-- SVG VECTOR GAMBAR 7.2 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#00360D" stroke="#00AA13" stroke-width="1.5"/>
        <rect x="20" y="25" width="130" height="110" rx="8" fill="#FFFFFF"/>
        <text x="85" y="45" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00661A" text-anchor="middle">DATA LAPORAN</text>
        <text x="30" y="65" font-family="Helvetica" font-size="6.5" fill="#4A5568">• No: LKEU/08/26/2026</text>
        <text x="30" y="78" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Total: Rp 1.450.000</text>
        <text x="30" y="91" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Tanggal: 26/08/2026</text>
        <text x="30" y="104" font-family="Helvetica" font-size="6.5" fill="#4A5568">• User: Siti Rahma</text>

        <!-- Arrow -->
        <path d="M160 80 L195 80" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
        <polygon points="195,76 202,80 195,84" fill="#FFFFFF"/>

        <rect x="210" y="25" width="120" height="110" rx="8" fill="#FFFFFF"/>
        <text x="270" y="45" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">HASHING ENGINE</text>
        <circle cx="270" cy="75" r="18" fill="#2B6CB0"/>
        <text x="270" y="80" font-family="Helvetica" font-size="14" fill="#FFFFFF" text-anchor="middle">🔒</text>
        <text x="270" y="110" font-family="Helvetica" font-size="7" font-weight="bold" fill="#2B6CB0" text-anchor="middle">SHA-256 Enkripsi</text>
        <text x="270" y="122" font-family="Helvetica" font-size="5.5" fill="#718096" text-anchor="middle">+ APP_KEY Secret</text>

        <!-- Arrow -->
        <path d="M340 80 L375 80" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
        <polygon points="375,76 382,80 375,84" fill="#FFFFFF"/>

        <rect x="385" y="25" width="100" height="110" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="435" y="45" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">DIGITAL QR TTE</text>
        <rect x="410" y="55" width="50" height="50" fill="#1A202C"/>
        <text x="435" y="83" font-family="monospace" font-size="5" fill="#FFFFFF" text-anchor="middle">QR TTE</text>
        <text x="435" y="120" font-family="Helvetica" font-size="6" font-weight="bold" fill="#00880F" text-anchor="middle">Tervalidasi ✔</text>
    </svg>
    <div class="diagram-caption">Gambar 7.2: Alur Pembentukan Hash Kriptografi SHA-256 dan Stempel QR Code TTE</div>
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

{{-- SVG VECTOR GAMBAR 7.3 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="40" rx="8" fill="#00661A"/>
        <text x="250" y="44" font-family="monospace" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">LKEU / 08 / 05 / 2026 / 001</text>
        
        <!-- Explanations -->
        <rect x="25" y="70" width="105" height="70" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="77" y="88" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">KODE BUKU</text>
        <text x="77" y="105" font-family="monospace" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">LKEU / LPK</text>
        <text x="77" y="122" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">Jenis Buku Laporan</text>

        <rect x="140" y="70" width="105" height="70" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="192" y="88" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">BULAN PERIODE</text>
        <text x="192" y="105" font-family="monospace" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">08 (Agustus)</text>
        <text x="192" y="122" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">Bulan Data Laporan</text>

        <rect x="255" y="70" width="105" height="70" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="307" y="88" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">TANGGAL LAPORAN</text>
        <text x="307" y="105" font-family="monospace" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">05 (Tgl Data)</text>
        <text x="307" y="122" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">Bukan Tgl Dicetak</text>

        <rect x="370" y="70" width="105" height="70" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="422" y="88" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">TAHUN & URUT</text>
        <text x="422" y="105" font-family="monospace" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">2026 / 001</text>
        <text x="422" y="122" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">Tahun & No Urut</text>
    </svg>
    <div class="diagram-caption">Gambar 7.3: Format Anatomi Nomor Dokumen Laporan Dinamis Berbasis Tanggal Periode</div>
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

{{-- SVG VECTOR GAMBAR 7.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="132" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">PROFIL PENGGUNA SISTEM</text>
        <text x="35" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">Nama Akun: <tspan font-weight="bold" fill="#1A202C">Budi Santoso, S.E.</tspan></text>
        <text x="35" y="75" font-family="Helvetica" font-size="6.8" fill="#4A5568">Email: <tspan fill="#1A202C">budi@toko.site</tspan></text>
        <text x="35" y="90" font-family="Helvetica" font-size="6.8" fill="#4A5568">Role: <tspan font-weight="bold" fill="#00880F">Administrator</tspan></text>
        <text x="35" y="105" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">Alias TTE: Kepala Bagian Keuangan</text>

        <!-- Arrow -->
        <path d="M245 80 L265 80" stroke="#00AA13" stroke-width="2.5" stroke-linecap="round"/>
        <polygon points="265,76 272,80 265,84" fill="#00AA13"/>

        <rect x="275" y="20" width="200" height="120" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="375" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00661A" text-anchor="middle">STEMPEL DOKUMEN PDF</text>
        <rect x="300" y="50" width="150" height="80" rx="6" fill="#FFFFFF" stroke="#A8DAB5" stroke-width="1"/>
        <text x="375" y="68" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">DITANDATANGANI DIGITAL</text>
        <text x="375" y="85" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">Budi Santoso, S.E.</text>
        <text x="375" y="98" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Kepala Bagian Keuangan</text>
        <text x="375" y="115" font-family="Helvetica" font-size="5.5" fill="#718096" text-anchor="middle">Verifikasi: /verify/document</text>
    </svg>
    <div class="diagram-caption">Gambar 7.4: Pemetaan Profil Akun dan Gelar Jabatan Resmi pada Stempel TTE Laporan</div>
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

{{-- SVG VECTOR GAMBAR 7.5 --}}
<div class="diagram-container">
    <svg width="460" height="190" viewBox="0 0 500 205">
        <rect x="5" y="5" width="490" height="195" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="50" y="15" width="400" height="175" rx="10" fill="#FFFFFF" stroke="#68D391" stroke-width="1.5"/>
        <!-- Header -->
        <rect x="50" y="15" width="400" height="26" rx="10" fill="#00661A"/>
        <text x="250" y="32" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SERTIFIKAT RESMI VERIFIKASI TANDA TANGAN ELEKTRONIK</text>

        <!-- Badge Valid -->
        <rect x="185" y="50" width="130" height="22" rx="11" fill="#E6F4EA" stroke="#A8DAB5" stroke-width="1"/>
        <text x="250" y="65" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">✔ DOKUMEN ASLI & VALID</text>

        <text x="70" y="90" font-family="Helvetica" font-size="6.8" fill="#718096">Nomor Dokumen : <tspan font-weight="bold" fill="#1A202C">LKEU/08/26/2026/001</tspan></text>
        <text x="70" y="105" font-family="Helvetica" font-size="6.8" fill="#718096">Jenis Dokumen  : <tspan font-weight="bold" fill="#1A202C">Laporan Keuangan & Arus Kas</tspan></text>
        <text x="70" y="120" font-family="Helvetica" font-size="6.8" fill="#718096">Penandatangan  : <tspan font-weight="bold" fill="#00880F">Budi Santoso, S.E. (Kepala Keuangan)</tspan></text>
        <text x="70" y="135" font-family="Helvetica" font-size="6.8" fill="#718096">Waktu TTE      : <tspan font-weight="bold" fill="#1A202C">26 Agustus 2026, 17:00:15 WIB</tspan></text>
        <text x="70" y="150" font-family="Helvetica" font-size="6.8" fill="#718096">Hash SHA-256   : <tspan font-family="monospace" fill="#2B6CB0">7f83b1657ff1fc53b92dc18148a1d65dfc2d4b1f</tspan></text>

        <rect x="70" y="162" width="360" height="20" rx="4" fill="#F0FFF4"/>
        <text x="250" y="176" font-family="Helvetica" font-size="6" font-weight="bold" fill="#276749" text-anchor="middle">Keabsahan diakui secara hukum berdasarkan UU ITE No. 11 Tahun 2008 Pasal 11</text>
    </svg>
    <div class="diagram-caption">Gambar 7.5: Sertifikat Digital Portal Publik Verifikasi Keabsahan Laporan (/verify/document)</div>
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

{{-- SVG VECTOR GAMBAR 7.6 --}}
<div class="diagram-container">
    <svg width="460" height="170" viewBox="0 0 500 180">
        <rect x="5" y="5" width="490" height="170" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="80" y="15" width="340" height="150" rx="10" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="80" y="15" width="340" height="24" rx="10" fill="#00360D"/>
        <text x="250" y="31" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">VERIFIKASI TRANSAKSI RESMI KASIR</text>

        <text x="100" y="55" font-family="Helvetica" font-size="7" fill="#718096">Toko: <tspan font-weight="bold" fill="#1A202C">{{ $shop['shop_name'] ?? 'Toko Berkah' }}</tspan></text>
        <text x="100" y="70" font-family="Helvetica" font-size="7" fill="#718096">Nomor Invoice: <tspan font-weight="bold" fill="#00880F">INV-20260826-0001</tspan></text>
        <text x="100" y="85" font-family="Helvetica" font-size="7" fill="#718096">Total Belanja: <tspan font-weight="bold" fill="#1A202C">Rp 76.000 (Lunas Tunai)</tspan></text>
        <text x="100" y="100" font-family="Helvetica" font-size="7" fill="#718096">Kasir Bertugas: <tspan font-weight="bold" fill="#1A202C">Siti Rahma</tspan></text>
        <text x="100" y="115" font-family="Helvetica" font-size="7" fill="#718096">Waktu Transaksi: <tspan fill="#1A202C">26/08/2026 14:30 WIB</tspan></text>

        <rect x="100" y="128" width="300" height="24" rx="4" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
        <text x="250" y="144" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">✔ TRANSAKSI SAH & TERCATAT DALAM SERVER RESMI</text>
    </svg>
    <div class="diagram-caption">Gambar 7.6: Laman Publik Verifikasi Faktur Struk Belanja Pelanggan (/verify/tte/{trx})</div>
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

{{-- SVG VECTOR GAMBAR 7.7 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="132" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">⏱️ SEBELUM 24 JAM (AKTIF)</text>
        <text x="35" y="58" font-family="Helvetica" font-size="6.8" fill="#276749">• Tautan WhatsApp dapat dibuka bebas</text>
        <text x="35" y="72" font-family="Helvetica" font-size="6.8" fill="#276749">• Pelanggan dapat mengunduh nota PDF</text>
        <text x="35" y="86" font-family="Helvetica" font-size="6.8" fill="#276749">• Rincian barang belanja tampil lengkap</text>
        <text x="35" y="100" font-family="Helvetica" font-size="6.8" fill="#276749">• Tanda tangan digital TTE aktif</text>
        <text x="35" y="118" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">✔ Akses Diterima (HTTP 200)</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1.5"/>
        <text x="367" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#E53E3E" text-anchor="middle">🔒 SETELAH 24 JAM (KADALUARSA)</text>
        <text x="270" y="58" font-family="Helvetica" font-size="6.8" fill="#C53030">• Tautan otomatis diblokir sistem</text>
        <text x="270" y="72" font-family="Helvetica" font-size="6.8" fill="#C53030">• Mencegah kebocoran data belanja lama</text>
        <text x="270" y="86" font-family="Helvetica" font-size="6.8" fill="#C53030">• Halaman menampilkan peringatan aman</text>
        <text x="270" y="100" font-family="Helvetica" font-size="6.8" fill="#C53030">• Data di database tetap aman & abadi</text>
        <text x="270" y="118" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#E53E3E">✖ Akses Kadaluarsa (HTTP 403)</text>
    </svg>
    <div class="diagram-caption">Gambar 7.7: Mekanisme Kedaluwarsa Tautan Faktur WhatsApp 24 Jam demi Keamanan Data</div>
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

{{-- SVG VECTOR GAMBAR 8.1 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="20" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="72" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">1. IDENTITAS TOKO</text>
        <text x="72" y="60" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">Nama usaha, alamat,</text>
        <text x="72" y="72" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">telepon & upload logo</text>
        <text x="72" y="110" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">Branding Toko</text>

        <rect x="135" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="187" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#2B6CB0" text-anchor="middle">2. AUDIO KASIR</text>
        <text x="187" y="60" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">Upload berkas MP3/WAV</text>
        <text x="187" y="72" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">suara bel transaksi</text>
        <text x="187" y="110" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">Audio Chime</text>

        <rect x="250" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="302" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#EE2737" text-anchor="middle">3. DOKU GATEWAY</text>
        <text x="302" y="60" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">Client ID, Secret Key</text>
        <text x="302" y="72" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">& Sandbox/Prod switch</text>
        <text x="302" y="110" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#EE2737" text-anchor="middle">Dynamic QRIS</text>

        <rect x="365" y="20" width="115" height="115" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="422" y="38" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00AED6" text-anchor="middle">4. TELEGRAM BOT</text>
        <text x="422" y="60" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">Bot Token, Chat ID</text>
        <text x="422" y="72" font-family="Helvetica" font-size="6.2" fill="#4A5568" text-anchor="middle">notifikasi omset harian</text>
        <text x="422" y="110" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00AED6" text-anchor="middle">Alert Telegram</text>
    </svg>
    <div class="diagram-caption">Gambar 8.1: Struktur Panel Pengaturan Sistem Terpadu (resources/views/admin/settings/index.blade.php)</div>
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

{{-- SVG VECTOR GAMBAR 8.2 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="130" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="40" y="34" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C">FORM IDENTITAS USAHA & TOKO</text>
        
        <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA TOKO RESMI (*)</text>
        <rect x="40" y="56" width="200" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="68" font-family="Helvetica" font-size="6.8" fill="#1A202C">{{ $shop['shop_name'] ?? 'Toko Berkah' }}</text>

        <text x="260" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NOMOR TELEPON / WA (*)</text>
        <rect x="260" y="56" width="200" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="268" y="68" font-family="Helvetica" font-size="6.8" fill="#1A202C">{{ $shop['shop_phone'] ?? '081234567890' }}</text>

        <text x="40" y="88" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">ALAMAT LENGKAP TOKO (*)</text>
        <rect x="40" y="92" width="420" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="104" font-family="Helvetica" font-size="6.8" fill="#1A202C">{{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77, Jember' }}</text>

        <rect x="360" y="118" width="100" height="20" rx="4" fill="#00AA13"/>
        <text x="410" y="131" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN IDENTITAS</text>
    </svg>
    <div class="diagram-caption">Gambar 8.2: Formulir Konfigurasi Identitas Toko, Nomor Kontak, dan Alamat Usaha</div>
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

{{-- SVG VECTOR GAMBAR 8.3 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="132" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">🏷️ NAMA APLIKASI (APP_NAME)</text>
        <text x="35" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Mengganti teks brand pada sidebar</text>
        <text x="35" y="74" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Menjadi judul pada tab peramban</text>
        <text x="35" y="88" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Tercetak pada cover buku panduan</text>
        <text x="35" y="105" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00AA13">Nilai: '{{ $shop['app_name'] ?? 'SIKANDA' }} POS'</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="367" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">🔢 PREFIX NOMOR INVOICE</text>
        <text x="270" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Awalan kode nomor transaksi</text>
        <text x="270" y="74" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Membedakan cabang toko / mesin kasir</text>
        <text x="270" y="88" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Cth: INV, TRX, POS, SLN</text>
        <text x="270" y="105" font-family="Helvetica" font-size="7" font-weight="bold" fill="#2B6CB0">Format: INV-YYYYMMDD-0001</text>
    </svg>
    <div class="diagram-caption">Gambar 8.3: Pengaturan Branding Nama Aplikasi dan Prefix Faktur Penjualan</div>
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

{{-- SVG VECTOR GAMBAR 8.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="40" y="38" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C">UNGGAH SUARA BEL TRANSAKSI KASIR (SOUND EFFECT)</text>
        
        <rect x="40" y="50" width="420" height="40" rx="6" fill="#F7FAFC" stroke="#00AA13" stroke-width="1" stroke-dasharray="4,4"/>
        <text x="250" y="70" font-family="Helvetica" font-size="7" fill="#00880F" text-anchor="middle">📁 Klik untuk memilih berkas audio (.mp3, .wav) maksimal 2MB</text>
        <text x="250" y="82" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">Berkas saat ini: chimes_bell_success.mp3</text>

        <rect x="40" y="102" width="100" height="22" rx="4" fill="#00880F"/>
        <text x="90" y="116" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">▶ TES SUARA</text>

        <rect x="340" y="102" width="120" height="22" rx="4" fill="#00AA13"/>
        <text x="400" y="116" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN AUDIO</text>
    </svg>
    <div class="diagram-caption">Gambar 8.4: Antarmuka Pengunggahan dan Pengujian Suara Bel Notifikasi Kasir</div>
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

{{-- SVG VECTOR GAMBAR 8.5 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="130" rx="8" fill="#FFFFFF" stroke="#EE2737" stroke-width="1"/>
        <text x="40" y="34" font-family="Helvetica" font-size="8" font-weight="bold" fill="#EE2737">KREDENSIAL DOKU PAYMENT GATEWAY</text>

        <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">DOKU CLIENT ID (*)</text>
        <rect x="40" y="56" width="420" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="67" font-family="monospace" font-size="6.5" fill="#1A202C">MALL-ID-829103984712</text>

        <text x="40" y="82" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">DOKU SECRET KEY (*)</text>
        <rect x="40" y="86" width="420" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="97" font-family="monospace" font-size="6.5" fill="#1A202C">SK-live-8928374982374928374928374</text>

        <text x="40" y="112" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">MODE LINGKUNGAN:</text>
        <rect x="40" y="116" width="80" height="18" rx="4" fill="#00AA13"/>
        <text x="80" y="128" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">● PRODUCTION</text>

        <rect x="360" y="116" width="100" height="18" rx="4" fill="#EE2737"/>
        <text x="410" y="128" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN GATEWAY</text>
    </svg>
    <div class="diagram-caption">Gambar 8.5: Formulir Konfigurasi API Kredensial Gateway Pembayaran QRIS DOKU</div>
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

{{-- SVG VECTOR GAMBAR 8.6 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="130" rx="8" fill="#FFFFFF" stroke="#00AED6" stroke-width="1"/>
        <text x="40" y="34" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00AED6">INTEGRASI TELEGRAM BOT ALERT</text>

        <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">TELEGRAM BOT TOKEN</text>
        <rect x="40" y="56" width="420" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="67" font-family="monospace" font-size="6.5" fill="#1A202C">718293847:AAFe793284jshdfkjsdhf938472938</text>

        <text x="40" y="82" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">CHAT ID / GRUP ID TUJUAN</text>
        <rect x="40" y="86" width="420" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="97" font-family="monospace" font-size="6.5" fill="#1A202C">-1009283749283 (Grup Manajemen Toko)</text>

        <rect x="40" y="114" width="100" height="20" rx="4" fill="#00AED6"/>
        <text x="90" y="127" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">📨 TES NOTIFIKASI</text>

        <rect x="360" y="114" width="100" height="20" rx="4" fill="#00AA13"/>
        <text x="410" y="127" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN BOT</text>
    </svg>
    <div class="diagram-caption">Gambar 8.6: Formulir Konfigurasi Token Bot Telegram dan Pengujian Notifikasi Real-Time</div>
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

{{-- SVG VECTOR GAMBAR 8.7 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="130" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="40" y="34" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C">CATATAN KAKI (FOOTER) STRUK KASIR THERMAL</text>

        <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">PESAN FOOTER BARIS 1</text>
        <rect x="40" y="56" width="420" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="67" font-family="Helvetica" font-size="6.5" fill="#1A202C">Terima Kasih Telah Berbelanja di Toko Kami!</text>

        <text x="40" y="82" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">PESAN FOOTER BARIS 2 (KEBIJAKAN RETUR)</text>
        <rect x="40" y="86" width="420" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="97" font-family="Helvetica" font-size="6.5" fill="#1A202C">Barang yang sudah dibeli tidak dapat ditukar/dikembalikan.</text>

        <rect x="350" y="114" width="110" height="20" rx="4" fill="#00AA13"/>
        <text x="405" y="127" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN FOOTER</text>
    </svg>
    <div class="diagram-caption">Gambar 8.7: Formulir Pengaturan Pesan Catatan Kaki Struk Belanja Kasir</div>
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

{{-- SVG VECTOR GAMBAR 9.1 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="20" fill="#00661A"/>
        <text x="35" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">NAMA PENGGUNA</text>
        <text x="170" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">EMAIL RESMI</text>
        <text x="280" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">PERAN (ROLE)</text>
        <text x="360" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">ALIAS GELAR TTE</text>
        <text x="445" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="end">AKSI</text>

        <!-- User 1 -->
        <rect x="25" y="40" width="450" height="24" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="55" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#1A202C">Budi Santoso, S.E.</text>
        <text x="170" y="55" font-family="Helvetica" font-size="6.8" fill="#4A5568">budi@toko.site</text>
        <text x="280" y="55" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">ADMIN</text>
        <text x="360" y="55" font-family="Helvetica" font-size="6.8" fill="#2B6CB0">Kepala Keuangan</text>
        <text x="445" y="55" font-family="Helvetica" font-size="6.5" fill="#00AA13" text-anchor="end">Edit | Hapus</text>

        <!-- User 2 -->
        <rect x="25" y="64" width="450" height="24" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="79" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#1A202C">Siti Rahma</text>
        <text x="170" y="79" font-family="Helvetica" font-size="6.8" fill="#4A5568">kasir1@toko.site</text>
        <text x="280" y="79" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">KASIR</text>
        <text x="360" y="79" font-family="Helvetica" font-size="6.8" fill="#4A5568">Petugas Kasir Shift 1</text>
        <text x="445" y="79" font-family="Helvetica" font-size="6.5" fill="#00AA13" text-anchor="end">Edit | Hapus</text>
    </svg>
    <div class="diagram-caption">Gambar 9.1: Antarmuka Tabel Manajemen Pengguna Sistem (/admin/users)</div>
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

{{-- SVG VECTOR GAMBAR 9.2 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="15" width="450" height="130" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="40" y="34" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C">FORM TAMBAH PENGGUNA BARU</text>

        <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA LENGKAP (*)</text>
        <rect x="40" y="56" width="200" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="48" y="67" font-family="Helvetica" font-size="6.5" fill="#1A202C">Dewi Lestari</text>

        <text x="260" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">EMAIL RESMI (*)</text>
        <rect x="260" y="56" width="200" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="268" y="67" font-family="Helvetica" font-size="6.5" fill="#1A202C">dewi@toko.site</text>

        <text x="40" y="82" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">PERAN (ROLE) (*)</text>
        <rect x="40" y="86" width="200" height="16" rx="4" fill="#EBF8FF" stroke="#90CDF4" stroke-width="1"/>
        <text x="48" y="97" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0">Kasir (Cashier Only)</text>

        <text x="260" y="82" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">KATA SANDI AWAL (*)</text>
        <rect x="260" y="86" width="200" height="16" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
        <text x="268" y="97" font-family="Helvetica" font-size="6.5" fill="#4A5568">••••••••••••</text>

        <rect x="350" y="112" width="110" height="20" rx="4" fill="#00AA13"/>
        <text x="405" y="125" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN AKUN</text>
    </svg>
    <div class="diagram-caption">Gambar 9.2: Formulir Pendaftaran Akun Staf Baru dan Penetapan Hak Wewenang</div>
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

{{-- SVG VECTOR GAMBAR 9.3 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="40" y="40" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00661A">KOLOM "ALIAS / GELAR JABATAN TTD" PADA MANAJEMEN PENGGUNA</text>
        <text x="40" y="60" font-family="Helvetica" font-size="7" fill="#2D3748">• Kolom ini menentukan teks jabatan yang tertera di bawah tanda tangan digital.</text>
        <text x="40" y="75" font-family="Helvetica" font-size="7" fill="#2D3748">• Contoh gelar jabatan resmi: <tspan font-weight="bold" fill="#00880F">"Kepala Bagian Keuangan", "Store Manager", "Supervisor Kasir"</tspan>.</text>
        <text x="40" y="90" font-family="Helvetica" font-size="7" fill="#2D3748">• Jika dikosongkan, sistem otomatis memakai fallback nama role pengguna.</text>
        <text x="40" y="105" font-family="Helvetica" font-size="7" fill="#2D3748">• Menjadikan seluruh dokumen laporan PDF memiliki keabsahan manajerial formal.</text>
        <text x="40" y="125" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00AA13">✔ Terintegrasi Penuh ke Seluruh Ekspor Laporan Keuangan</text>
    </svg>
    <div class="diagram-caption">Gambar 9.3: Penjelasan Fungsi Kolom Alias Gelar Jabatan pada Sertifikasi Dokumen Formal</div>
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

{{-- SVG VECTOR GAMBAR 9.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#3182CE" stroke-width="1.5"/>
        <text x="132" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">🔑 RESET KATA SANDI ADMIN</text>
        <text x="35" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Admin membuka menu /admin/users</text>
        <text x="35" y="75" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Klik tombol 'Edit' pada nama staf</text>
        <text x="35" y="90" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Masukkan password baru (min 8 char)</text>
        <text x="35" y="105" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">• Password langsung di-hash Bcrypt</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="367" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">🛡️ KEAMANAN KREDENSIAL</text>
        <text x="270" y="60" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Staf diwajibkan ganti password saat login</text>
        <text x="270" y="75" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Sesi perangkat kasir lama otomatis gugur</text>
        <text x="270" y="90" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Audit log pencatatan user aktif</text>
        <text x="270" y="105" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">• Perlindungan akun anti-pembajakan</text>
    </svg>
    <div class="diagram-caption">Gambar 9.4: Alur Penggantian Kata Sandi dan Pemulihan Akun Pengguna oleh Admin</div>
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

{{-- SVG VECTOR GAMBAR 10.1 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#00360D" stroke="#00AA13" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF"/>
        <rect x="25" y="20" width="450" height="24" rx="8" fill="#00661A"/>
        <text x="250" y="36" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">INFRASTRUKTUR SERVER PRODUKSI • DIKELOLA PENUH OLEH I GUSTI SULTAN</text>

        <rect x="40" y="55" width="125" height="75" rx="6" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
        <text x="102" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">1. SERVER HOST</text>
        <text x="102" y="88" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">aaPanel Linux</text>
        <text x="102" y="100" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Nginx & PHP 8.2 FPM</text>
        <text x="102" y="114" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">Uptime: 99.98%</text>

        <rect x="187" y="55" width="125" height="75" rx="6" fill="#EBF8FF" stroke="#90CDF4" stroke-width="1"/>
        <text x="249" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#2B6CB0" text-anchor="middle">2. STORAGE ENGINE</text>
        <text x="249" y="88" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Dedicated /media-file</text>
        <text x="249" y="100" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Streaming Anti-404</text>
        <text x="249" y="114" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">Zero-Broken Image</text>

        <rect x="335" y="55" width="125" height="75" rx="6" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
        <text x="397" y="72" font-family="Helvetica" font-size="7" font-weight="bold" fill="#E53E3E" text-anchor="middle">3. DISASTER RECOVERY</text>
        <text x="397" y="88" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Backup Database Harian</text>
        <text x="397" y="100" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Git Repo Deployment</text>
        <text x="397" y="114" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#E53E3E" text-anchor="middle">Managed: I Gusti Sultan</text>
    </svg>
    <div class="diagram-caption">Gambar 10.1: Arsitektur Infrastruktur Server Produksi yang Dikelola oleh I Gusti Sultan</div>
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

{{-- SVG VECTOR GAMBAR 10.2 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="120" height="110" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="85" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">BROWSER KASIR</text>
        <text x="35" y="60" font-family="Helvetica" font-size="6.5" fill="#718096">Meminta logo toko:</text>
        <text x="35" y="75" font-family="monospace" font-size="6" fill="#2B6CB0">/media-file/logo.png</text>
        <text x="35" y="100" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Permintaan HTTP</text>

        <!-- Arrow -->
        <path d="M150 75 L185 75" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
        <polygon points="185,71 192,75 185,79" fill="#00AA13"/>

        <rect x="195" y="20" width="140" height="110" rx="8" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="265" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">STREAMING CONTROLLER</text>
        <text x="205" y="60" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Validasi mime-type gambar</text>
        <text x="205" y="75" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Cache-Control 30 Hari</text>
        <text x="205" y="90" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Binary stream response</text>
        <text x="205" y="105" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00661A">Anti 404 Symlink Error</text>

        <!-- Arrow -->
        <path d="M340 75 L375 75" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
        <polygon points="375,71 382,75 375,79" fill="#00AA13"/>

        <rect x="385" y="20" width="95" height="110" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="432" y="40" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">FILE SYSTEM</text>
        <text x="395" y="60" font-family="Helvetica" font-size="6.5" fill="#276749">storage/app/</text>
        <text x="395" y="75" font-family="Helvetica" font-size="6.5" fill="#276749">public/logos/</text>
        <text x="395" y="105" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">✔ Terbaca 100%</text>
    </svg>
    <div class="diagram-caption">Gambar 10.2: Mekanisme Dedicated Media Streaming Controller Pengaman Berkas Media Toko</div>
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

{{-- SVG VECTOR GAMBAR 10.3 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="20" fill="#1A202C"/>
        <text x="35" y="34" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">STRUKTUR FILE SYSTEM & HAK AKSES LINUX (CHMOD 755 / CHOWN WWW:WWW)</text>

        <text x="40" y="58" font-family="monospace" font-size="6.8" fill="#00880F">/www/wwwroot/kasir.site/</text>
        <text x="60" y="72" font-family="monospace" font-size="6.8" fill="#4A5568">├── public/storage &rarr; ../storage/app/public (Symlink)</text>
        <text x="60" y="86" font-family="monospace" font-size="6.8" fill="#4A5568">├── storage/app/public/logos/ (Logo Toko)</text>
        <text x="60" y="100" font-family="monospace" font-size="6.8" fill="#4A5568">├── storage/app/public/audio/ (Bel Kasir MP3)</text>
        <text x="60" y="114" font-family="monospace" font-size="6.8" fill="#4A5568">└── storage/logs/laravel.log (Log Monitoring Error)</text>
        <text x="40" y="130" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0">Perintah Pemulihan: php artisan storage:link</text>
    </svg>
    <div class="diagram-caption">Gambar 10.3: Diagram Pohon Direktori Penyimpanan Berkas Media dan Symlink Storage</div>
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

{{-- SVG VECTOR GAMBAR 10.4 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#1A202C" stroke="#4A5568" stroke-width="1.5"/>
        <text x="25" y="24" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#68D391">KONFIGURASI NGINX SERVER BLOCK (/etc/nginx/sites-available/kasir.site):</text>
        <text x="25" y="42" font-family="monospace" font-size="6.2" fill="#E2E8F0">server {</text>
        <text x="45" y="54" font-family="monospace" font-size="6.2" fill="#CBD5E0">listen 80; listen 443 ssl http2;</text>
        <text x="45" y="66" font-family="monospace" font-size="6.2" fill="#CBD5E0">server_name botnomor.my.id kasir.site;</text>
        <text x="45" y="78" font-family="monospace" font-size="6.2" fill="#CBD5E0">root /www/wwwroot/kasir.site/public;</text>
        <text x="45" y="90" font-family="monospace" font-size="6.2" fill="#CBD5E0">location / { try_files $uri $uri/ /index.php?$query_string; }</text>
        <text x="45" y="102" font-family="monospace" font-size="6.2" fill="#CBD5E0">location ~ \.php$ { fastcgi_pass unix:/tmp/php-cgi-82.sock; }</text>
        <text x="45" y="114" font-family="monospace" font-size="6.2" fill="#CBD5E0">client_max_body_size 50M;</text>
        <text x="25" y="126" font-family="monospace" font-size="6.2" fill="#E2E8F0">}</text>
        <text x="25" y="142" font-family="Helvetica" font-size="6" font-weight="bold" fill="#68D391">Dikelola dan Dikonfigurasi Penuh oleh I Gusti Sultan</text>
    </svg>
    <div class="diagram-caption">Gambar 10.4: Snippet Konfigurasi Nginx Web Server untuk Routing Laravel 11</div>
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

{{-- SVG VECTOR GAMBAR 10.5 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#1A202C"/>
        <text x="35" y="36" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#68D391">LOG MONITORING REAL-TIME (storage/logs/laravel.log):</text>
        
        <text x="35" y="56" font-family="monospace" font-size="6" fill="#A0AEC0">[2026-08-26 10:15:02] production.INFO: QRIS Created: TRX-INV001 Rp 51,000</text>
        <text x="35" y="70" font-family="monospace" font-size="6" fill="#68D391">[2026-08-26 10:15:20] production.INFO: Webhook DOKU SUCCESS: TRX-INV001 PAID</text>
        <text x="35" y="84" font-family="monospace" font-size="6" fill="#A0AEC0">[2026-08-26 14:00:10] production.INFO: Report LKEU PDF Generated with TTE Hash</text>
        <text x="35" y="98" font-family="monospace" font-size="6" fill="#63B3ED">[2026-08-26 17:00:00] production.INFO: Daily Auto-Backup MySQL Completed: 24.5 MB</text>
        
        <rect x="35" y="112" width="430" height="18" rx="4" fill="#00360D"/>
        <text x="250" y="124" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#A8DAB5" text-anchor="middle">STATUS KESEHATAN SERVER: 100% OPERASIONAL NORMAL</text>
    </svg>
    <div class="diagram-caption">Gambar 10.5: Pemantauan Berkas Log Aktivitas dan Status Kesehatan Server Laravel</div>
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

{{-- SVG VECTOR GAMBAR 10.6 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="130" height="115" rx="8" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
        <text x="90" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">1. CRON JOB 00:00</text>
        <text x="35" y="60" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Otomatis setiap tengah malam</text>
        <text x="35" y="74" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Ekspor seluruh tabel database</text>
        <text x="35" y="88" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Kompresi berkas .sql.gz</text>
        <text x="35" y="105" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">mysqldump Otomatis</text>

        <!-- Arrow -->
        <path d="M160 80 L185 80" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
        <polygon points="185,76 192,80 185,84" fill="#00AA13"/>

        <rect x="195" y="20" width="130" height="115" rx="8" fill="#FFFFFF" stroke="#2B6CB0" stroke-width="1.5"/>
        <text x="260" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">2. STORAGE AMAN</text>
        <text x="205" y="60" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Disimpan di partisi terisolasi</text>
        <text x="205" y="74" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Rotasi berkas retensi 30 hari</text>
        <text x="205" y="88" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Enkripsi berkas cadangan</text>
        <text x="205" y="105" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0">Offsite Backup</text>

        <!-- Arrow -->
        <path d="M330 80 L355 80" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
        <polygon points="355,76 362,80 355,84" fill="#00AA13"/>

        <rect x="365" y="20" width="110" height="115" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
        <text x="420" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">3. RECOVERY</text>
        <text x="375" y="60" font-family="Helvetica" font-size="6.5" fill="#276749">• Pemulihan &lt; 5 menit</text>
        <text x="375" y="74" font-family="Helvetica" font-size="6.5" fill="#276749">• Nol kehilangan data</text>
        <text x="375" y="88" font-family="Helvetica" font-size="6.5" fill="#276749">• Dikelola langsung oleh:</text>
        <text x="375" y="105" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">I Gusti Sultan</text>
    </svg>
    <div class="diagram-caption">Gambar 10.6: Skema Pencadangan Database Harian Otomatis dan Prosedur Pemulihan Bencana</div>
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

{{-- SVG VECTOR GAMBAR 10.7 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#1A202C"/>
        <text x="35" y="38" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#68D391">PERINTAH RESMI DEPLOY SERVER OLEH I GUSTI SULTAN:</text>

        <rect x="35" y="48" width="430" height="60" rx="6" fill="#00360D" stroke="#00AA13" stroke-width="1"/>
        <text x="45" y="64" font-family="monospace" font-size="6.8" fill="#FFFFFF">cd /www/wwwroot/kasir.site</text>
        <text x="45" y="78" font-family="monospace" font-size="6.8" fill="#68D391">git pull origin main</text>
        <text x="45" y="92" font-family="monospace" font-size="6.8" fill="#CBD5E0">php artisan view:clear &amp;&amp; php artisan route:clear</text>

        <text x="35" y="125" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#68D391">Hasil: Sistem langsung termutakhirkan tanpa downtime operasional toko.</text>
    </svg>
    <div class="diagram-caption">Gambar 10.7: Standar Operasional Prosedur Deployment Pembaruan Sistem di Server aaPanel</div>
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

{{-- SVG VECTOR GAMBAR 10.8 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <rect x="25" y="20" width="450" height="20" fill="#00661A"/>
        <text x="35" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">KENDALA OPERASIONAL</text>
        <text x="200" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">PENYEBAB UTAMA</text>
        <text x="340" y="34" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#FFFFFF">SOLUSI CEPAT</text>

        <!-- Row 1 -->
        <rect x="25" y="40" width="450" height="26" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="55" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#E53E3E">Struk Bluetooth Tidak Keluar</text>
        <text x="200" y="55" font-family="Helvetica" font-size="6.5" fill="#4A5568">Bluetooth printer terputus</text>
        <text x="340" y="55" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Nyalakan ulang Bluetooth &amp; re-pair</text>

        <!-- Row 2 -->
        <rect x="25" y="66" width="450" height="26" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="81" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#E53E3E">QRIS Tidak Mau Terbuka</text>
        <text x="200" y="81" font-family="Helvetica" font-size="6.5" fill="#4A5568">Koneksi internet toko drop</text>
        <text x="340" y="81" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Alihkan ke pembayaran TUNAI</text>

        <!-- Row 3 -->
        <rect x="25" y="92" width="450" height="26" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
        <text x="35" y="107" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#E53E3E">Logo Tidak Tampil</text>
        <text x="200" y="107" font-family="Helvetica" font-size="6.5" fill="#4A5568">Symlink file hilang</text>
        <text x="340" y="107" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Hubungi I Gusti Sultan (Clear Cache)</text>
    </svg>
    <div class="diagram-caption">Gambar 10.8: Matriks Identifikasi Masalah dan Solusi Cepat Operasional Kasir</div>
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

{{-- SVG VECTOR GAMBAR 10.9 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
        <rect x="25" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="35" y="38" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">• POS (Point of Sale):</text>
        <text x="35" y="48" font-family="Helvetica" font-size="6.2" fill="#4A5568">Perangkat lunak kasir pencatat transaksi langsung.</text>

        <text x="35" y="62" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">• QRIS (Quick Response Indonesian Standard):</text>
        <text x="35" y="72" font-family="Helvetica" font-size="6.2" fill="#4A5568">Standar kode QR pembayaran nasional Bank Indonesia.</text>

        <text x="35" y="86" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">• MDR (Merchant Discount Rate):</text>
        <text x="35" y="96" font-family="Helvetica" font-size="6.2" fill="#4A5568">Biaya pemrosesan transaksi QRIS (0.7%).</text>

        <rect x="260" y="20" width="215" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
        <text x="270" y="38" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">• TTE (Tanda Tangan Elektronik):</text>
        <text x="270" y="48" font-family="Helvetica" font-size="6.2" fill="#4A5568">Tanda tangan digital berkekuatan hukum (UU ITE).</text>

        <text x="270" y="62" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">• SHA-256 Hash:</text>
        <text x="270" y="72" font-family="Helvetica" font-size="6.2" fill="#4A5568">Algoritma kriptografi 256-bit pengunci keaslian data.</text>

        <text x="270" y="86" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">• Webhook:</text>
        <text x="270" y="96" font-family="Helvetica" font-size="6.2" fill="#4A5568">Sinyal HTTP otomatis dari gateway saat pembayaran sukses.</text>
    </svg>
    <div class="diagram-caption">Gambar 10.9: Glosarium Istilah Teknis Sistem POS, Finansial, dan Kriptografi</div>
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

{{-- SVG VECTOR GAMBAR 10.10 --}}
<div class="diagram-container">
    <svg width="460" height="150" viewBox="0 0 500 160">
        <rect x="5" y="5" width="490" height="150" rx="10" fill="#00360D" stroke="#00AA13" stroke-width="2"/>
        <text x="250" y="32" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SALURAN DUKUNGAN TEKNIS UTAMA • I GUSTI SULTAN</text>

        <rect x="25" y="45" width="450" height="90" rx="8" fill="#FFFFFF"/>
        <text x="40" y="65" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">Lead Architect &amp; Server Maintainer :</text>
        <text x="240" y="65" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C">I Gusti Sultan</text>

        <text x="40" y="82" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">Layanan Pemeliharaan Server :</text>
        <text x="240" y="82" font-family="Helvetica" font-size="7.5" fill="#1A202C">Pemantauan 24/7, Backup Harian &amp; Update Rutin</text>

        <text x="40" y="99" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">Repositori Kode Sumber :</text>
        <text x="240" y="99" font-family="monospace" font-size="7" fill="#2B6CB0">https://github.com/Igustisultanh12/toko.git</text>

        <text x="40" y="116" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">Status Dukungan :</text>
        <text x="240" y="116" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#38A169">● AKTIF &amp; TERJAMIN PENUH</text>
    </svg>
    <div class="diagram-caption">Gambar 10.10: Lembar Kontak Resmi Pemelihara Server & Pengembang Perangkat Lunak</div>
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

{{-- SVG VECTOR GAMBAR 10.11: PENUTUP BADGE --}}
<div class="diagram-container">
    <svg width="460" height="130" viewBox="0 0 500 140">
        <rect x="5" y="5" width="490" height="130" rx="10" fill="#E6F4EA" stroke="#A8DAB5" stroke-width="1.5"/>
        <circle cx="250" cy="45" r="22" fill="#00AA13"/>
        <path d="M240 45 L247 52 L262 38" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="250" y="82" font-family="Helvetica" font-size="9" font-weight="bold" fill="#00661A" text-anchor="middle">SISTEM KASIR &amp; SERVER BEROPERASI PENUH SECARA AMAN</text>
        <text x="250" y="98" font-family="Helvetica" font-size="7" fill="#2D3748" text-anchor="middle">Hak Cipta Perangkat Lunak &amp; Seluruh Perawatan Server Dikelola Penuh oleh</text>
        <text x="250" y="114" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">I GUSTI SULTAN</text>
    </svg>
    <div class="diagram-caption">Gambar 10.11: Sertifikasi Komitmen Layanan dan Pemeliharaan Server Terpusat</div>
</div>

<div style="margin-top: 25px; text-align: center;">
    <p style="font-size: 7.5pt; color: #718096; text-transform: uppercase; letter-spacing: 1px; font-weight: bold;">
        &copy; {{ date('Y') }} {{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }} &bull; Dikelola oleh I Gusti Sultan. All rights reserved.
    </p>
</div>
