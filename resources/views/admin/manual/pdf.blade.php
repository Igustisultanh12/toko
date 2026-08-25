<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Panduan Lengkap Sistem POS & Administrator - {{ $shop['app_name'] ?? 'POS' }}</title>
    <style>
        @page {
            margin: 2cm 1.8cm 2cm 1.8cm;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 8.8pt;
            line-height: 1.45;
            color: #2D3748;
            margin: 0;
            padding: 0;
        }

        .page-break {
            page-break-before: always;
        }

        .no-break {
            page-break-inside: avoid;
        }

        /* COVER STYLING */
        .cover-container {
            height: 100%;
            text-align: center;
            padding-top: 20px;
        }

        .cover-badge {
            background-color: #E6F4EA;
            color: #00880F;
            font-weight: 800;
            font-size: 8pt;
            padding: 4px 16px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 12px;
            border: 1.5px solid #A8DAB5;
        }

        .cover-title {
            font-size: 21pt;
            font-weight: 900;
            color: #1A202C;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            line-height: 1.2;
            margin: 0 0 8px 0;
        }

        .cover-subtitle {
            font-size: 11.5pt;
            font-weight: 700;
            color: #00AA13;
            margin: 0 0 16px 0;
            line-height: 1.3;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cover-divider {
            width: 100px;
            height: 3.5px;
            background-color: #00AA13;
            margin: 10px auto 16px auto;
            border-radius: 2px;
        }

        .cover-desc {
            font-size: 8.5pt;
            color: #4A5568;
            max-width: 500px;
            margin: 0 auto 20px auto;
            line-height: 1.45;
            text-align: center;
        }

        .cover-meta-box {
            background-color: #F7FAFC;
            border: 1.5px solid #E2E8F0;
            border-radius: 10px;
            padding: 12px;
            text-align: left;
            margin: 0 auto;
            width: 92%;
        }

        .cover-meta-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 7.8pt;
        }

        .cover-meta-table td {
            padding: 3px 5px;
            vertical-align: top;
        }

        .cover-meta-label {
            font-weight: bold;
            color: #4A5568;
            width: 38%;
        }

        .cover-meta-value {
            color: #1A202C;
            font-weight: 600;
        }

        .cover-footer {
            margin-top: 25px;
            font-size: 7.2pt;
            color: #718096;
            letter-spacing: 1.5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* HEADINGS */
        h1.chapter-title {
            font-size: 13.5pt;
            font-weight: 900;
            color: #00661A;
            border-bottom: 2px solid #00AA13;
            padding-bottom: 4px;
            margin-top: 0;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .chapter-num {
            font-size: 9pt;
            font-weight: 800;
            color: #00AA13;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 2px;
        }

        h2.section-title {
            font-size: 10.2pt;
            font-weight: 800;
            color: #2D3748;
            margin-top: 10px;
            margin-bottom: 6px;
            border-left: 3.5px solid #00AA13;
            padding-left: 7px;
        }

        h3.subsection-title {
            font-size: 9.2pt;
            font-weight: 700;
            color: #4A5568;
            margin-top: 8px;
            margin-bottom: 4px;
        }

        p {
            margin: 0 0 6px 0;
            text-align: justify;
        }

        /* TABLES */
        table.doc-table {
            width: 100%;
            border-collapse: collapse;
            margin: 8px 0 10px 0;
            font-size: 7.4pt;
        }

        table.doc-table th {
            background-color: #00661A;
            color: #FFFFFF;
            font-weight: bold;
            text-transform: uppercase;
            padding: 5px 7px;
            border: 1px solid #004D13;
            text-align: left;
            letter-spacing: 0.5px;
        }

        table.doc-table td {
            padding: 4px 7px;
            border: 1px solid #CBD5E0;
            vertical-align: top;
        }

        table.doc-table tr:nth-child(even) td {
            background-color: #F8FAFC;
        }

        /* CALLOUT BOXES */
        .callout {
            border-radius: 6px;
            padding: 7px 10px;
            margin: 8px 0;
            font-size: 7.8pt;
            page-break-inside: avoid;
        }

        .callout-info {
            background-color: #EBF8FF;
            border-left: 3.5px solid #3182CE;
            color: #2B6CB0;
        }

        .callout-success {
            background-color: #F0FFF4;
            border-left: 3.5px solid #38A169;
            color: #276749;
        }

        .callout-warning {
            background-color: #FFFAF0;
            border-left: 3.5px solid #DD6B20;
            color: #C05621;
        }

        .callout-danger {
            background-color: #FFF5F5;
            border-left: 3.5px solid #E53E3E;
            color: #C53030;
        }

        .callout-title {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 7.4pt;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
            display: block;
        }

        /* STEP CARDS */
        .step-box {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 6px;
            padding: 6px 8px;
            margin-bottom: 6px;
            page-break-inside: avoid;
        }

        .step-header {
            font-weight: bold;
            font-size: 8.2pt;
            color: #1A202C;
            margin-bottom: 2px;
        }

        .step-num {
            background-color: #00AA13;
            color: #FFFFFF;
            font-size: 6.8pt;
            font-weight: bold;
            padding: 1px 4.5px;
            border-radius: 3px;
            margin-right: 4px;
            display: inline-block;
        }

        /* SVG DIAGRAM CONTAINER */
        .diagram-container {
            text-align: center;
            margin: 8px 0 10px 0;
            background-color: #FAFAFA;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            padding: 6px;
            page-break-inside: avoid;
        }

        .diagram-caption {
            font-size: 7pt;
            font-weight: bold;
            color: #4A5568;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 4px;
        }

        /* CODE & SHORTCUT BADGES */
        code {
            font-family: 'Courier New', Courier, monospace;
            background-color: #EDF2F7;
            color: #C53030;
            padding: 1px 3px;
            border-radius: 3px;
            font-size: 7.4pt;
            font-weight: bold;
        }

        .badge-shortcut {
            background-color: #2D3748;
            color: #FFFFFF;
            font-family: monospace;
            font-size: 6.8pt;
            padding: 1px 4px;
            border-radius: 3px;
            font-weight: bold;
            display: inline-block;
        }

        /* TOC */
        .toc-chapter-row {
            margin-bottom: 4px;
            font-size: 7.8pt;
        }

        .toc-chapter-title {
            font-weight: bold;
            color: #1A202C;
            text-transform: uppercase;
        }

        .toc-sub-row {
            padding-left: 14px;
            color: #4A5568;
            font-size: 7.4pt;
            margin-top: 1px;
        }

        ul, ol {
            margin: 0 0 6px 0;
            padding-left: 16px;
        }

        li {
            margin-bottom: 2px;
        }
    </style>
</head>
<body>

    {{-- DOMPDF AUTOMATIC PAGE NUMBERING SCRIPT --}}
    <script type="text/php">
        if (isset($pdf)) {
            $font = $fontMetrics->getFont("Helvetica", "normal");
            $size = 7.5;
            $color = array(0.5, 0.5, 0.5);

            $textRight = "Halaman {PAGE_NUM} dari {PAGE_COUNT}";
            $widthRight = $fontMetrics->get_text_width($textRight, $font, $size);
            
            $pdf->page_text(595 - 51 - $widthRight, 842 - 32, $textRight, $font, $size, $color);
            
            $appName = strtoupper($shop['app_name'] ?? 'POS');
            $footerLeft = "Buku Panduan Lengkap Sistem " . $appName . " | © I Gusti Sultan";
            $pdf->page_text(51, 842 - 32, $footerLeft, $font, $size, $color);

            $pdf->line(51, 842 - 38, 595 - 51, 842 - 38, array(0.85, 0.85, 0.85), 0.75);
        }
    </script>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 1: COVER BUKU PANDUAN UTAMA --}}
    {{-- ========================================================================= --}}
    <div class="cover-container">
        <div class="cover-badge">Buku Petunjuk Operasional & Manual Resmi</div>
        
        <h1 class="cover-title">BUKU PANDUAN LENGKAP<br>SISTEM KASIR & ADMINISTRASI</h1>
        <div class="cover-subtitle">{{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }} &bull; {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</div>
        
        <div class="cover-divider"></div>

        <div style="margin: 8px auto 12px auto;">
            <svg width="70" height="70" viewBox="0 0 100 100">
                <rect x="5" y="5" width="90" height="90" rx="25" fill="#00AA13"/>
                <path d="M30 50 L45 65 L70 35" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            </svg>
        </div>
        
        <p class="cover-desc">
            Buku panduan operasional komprehensif yang memuat seluruh tata kelola transaksi kasir Point of Sale (POS), penerimaan pembayaran digital Dynamic QRIS DOKU, pencatatan arus kas otomatis, manajemen pergudangan, sertifikasi Tanda Tangan Elektronik (TTE) berlandaskan UU ITE No. 11/2008, serta arsitektur pemeliharaan server terpusat.
        </p>

        <div class="cover-meta-box">
            <table class="cover-meta-table">
                <tr>
                    <td class="cover-meta-label">Nama Aplikasi Resmi</td>
                    <td class="cover-meta-value">: {{ $shop['app_name'] ?? 'SIKANDA' }} Point of Sale Engine</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Identitas Badan Usaha / Toko</td>
                    <td class="cover-meta-value">: {{ $shop['shop_name'] ?? 'TOKO BERKAH' }}</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Alamat Resmi Usaha</td>
                    <td class="cover-meta-value">: {{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77' }}</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Saluran Bantuan Toko</td>
                    <td class="cover-meta-value">: {{ $shop['shop_phone'] ?? '081234567890' }}</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Arsitektur Backend / Frontend</td>
                    <td class="cover-meta-value">: Laravel 11.x, Tailwind CSS, Alpine.js, DomPDF & MySQL</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Arsitek & Pengelola Server</td>
                    <td class="cover-meta-value">: <b>I Gusti Sultan</b></td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Hak Cipta Perangkat Lunak</td>
                    <td class="cover-meta-value">: &copy; {{ date('Y') }} I Gusti Sultan. All rights reserved.</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Edisi Dokumen & Tanggal Terbit</td>
                    <td class="cover-meta-value">: Edisi 2.0 (Pemutakhiran Sistem QRIS & TTE) &bull; {{ date('d F Y') }}</td>
                </tr>
            </table>
        </div>

        <div class="cover-footer">
            DOKUMEN RESMI SISTEM OPERASIONAL &bull; DILINDUNGI HAK CIPTA HUKUM &bull; TAHUN {{ date('Y') }}
        </div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 2: LEMBAR PENGESAHAN & HAK CIPTA --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">LEMBAR HAK CIPTA & PENGESAHAN</h1>
    
    <div class="callout callout-info">
        <span class="callout-title">Pernyataan Hak Kekayaan Intelektual (HAKI)</span>
        Seluruh isi dari buku panduan operasional ini, mencakup metodologi alur kerja, struktur basis data, arsitektur antarmuka pengguna (UI/UX), logika bisnis controller, serta modul kriptografi Tanda Tangan Elektronik (TTE) merupakan karya cipta yang dilindungi oleh undang-undang hak cipta Republik Indonesia.
    </div>

    <table class="doc-table">
        <tr>
            <th style="width: 32%;">Parameter Dokumen</th>
            <th>Keterangan Rinci</th>
        </tr>
        <tr>
            <td><b>Judul Resmi Dokumen</b></td>
            <td>Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Toko Terpadu</td>
        </tr>
        <tr>
            <td><b>Pemilik Hak Cipta & Lead Architect</b></td>
            <td><b>I Gusti Sultan</b></td>
        </tr>
        <tr>
            <td><b>Pengelola & Pemelihara Server</b></td>
            <td><b>I Gusti Sultan</b> (Seluruh perawatan server, aaPanel, Nginx, deployment, dan database dikelola penuh)</td>
        </tr>
        <tr>
            <td><b>Versi Dokumen</b></td>
            <td>2.0 (Revisi Komprehensif Seluruh Modul Sistem)</td>
        </tr>
        <tr>
            <td><b>Target Pembaca</b></td>
            <td>Administrator Toko, Kepala Bagian Logistik/Gudang, Petugas Kasir, Auditor Keuangan, dan Pengelola Sistem IT.</td>
        </tr>
    </table>

    <h2 class="section-title">PERNYATAAN LISENSI & KETENTUAN PENGGUNAAN</h2>
    <p>
        Buku panduan ini diterbitkan untuk digunakan sebagai pedoman standar operasional (*Standard Operating Procedure / SOP*) pada lingkungan usaha ritel yang mengimplementasikan sistem kasir ini. Dilarang keras menggandakan, mendistribusikan ulang untuk kepentingan komersial pihak ketiga, atau memodifikasi materi dokumen ini tanpa persetujuan tertulis dari <b>I Gusti Sultan</b> selaku pemegang hak cipta sah.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 3: KATA PENGANTAR --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">KATA PENGANTAR PENGEMBANG</h1>
    
    <p>
        Puji dan syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas terselesaikannya penyusunan <b>Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Toko Modern</b>. Sistem ini dirancang untuk menjawab tantangan operasional bisnis ritel kontemporer yang memerlukan kecepatan transaksi di meja kasir, transparansi arus kas real-time, integrasi pembayaran digital tanpa hambatan, serta akuntabilitas dokumen laporan formal yang berkekuatan hukum.
    </p>
    <p>
        Buku panduan ini disusun secara terstruktur dari <b>Bab 1 hingga Bab 10</b> tanpa ada satupun fitur atau menu yang terlewatkan. Mulai dari prosedur login, pemindaian barcode, transaksi tunai & QRIS DOKU otomatis, rekapitulasi keuangan harian/bulanan/kuartal/tahunan, verifikasi keaslian Tanda Tangan Elektronik (TTE) berbasis UU ITE No. 11 Tahun 2008, hingga tata kelola pemeliharaan server produksi aaPanel yang dikelola secara eksklusif oleh <b>I Gusti Sultan</b>.
    </p>
    <p>
        Kami berharap buku ini dapat memberikan pemahaman menyeluruh dan menjadi panduan praktis harian bagi seluruh jajaran staf, mulai dari kasir garis depan hingga pimpinan manajemen toko.
    </p>
    
    <div style="margin-top: 35px; text-align: right;" class="no-break">
        <p style="margin-bottom: 45px;">Jember, {{ date('d F Y') }}<br><b>Lead Software Architect & Server Maintainer</b></p>
        <p><b><u>I Gusti Sultan</u></b><br><span style="font-size: 7.5pt; color: #718096;">Sistem Arsitek & Pengelola Server Utama</span></p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 4: DAFTAR ISI BAGIAN 1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">DAFTAR ISI LENGKAP (BAGIAN 1)</h1>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 1: GAMBARAN UMUM & ARSITEKTUR TEKNOLOGI SISTEM</div>
        <div class="toc-sub-row">1.1 Latar Belakang & Filosofi Rancangan Sistem Kasir Modern ................................................. Halaman 6</div>
        <div class="toc-sub-row">1.2 Tumpukan Teknologi (Technology Stack) & Arsitektur MVC ........................................... Halaman 7</div>
        <div class="toc-sub-row">1.3 Matriks Perbandingan Hak Akses Pengguna (Admin vs Kasir) ........................................ Halaman 8</div>
        <div class="toc-sub-row">1.4 Integrasi Layanan Pembayaran Digital QRIS DOKU Merchant .......................................... Halaman 9</div>
        <div class="toc-sub-row">1.5 Landasan Hukum & Validitas Tanda Tangan Elektronik (UU ITE No. 11/2008) ................... Halaman 10</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
        <div class="toc-chapter-title">BAB 2: MANAJEMEN OTENTIKASI & KEAMANAN AKUN</div>
        <div class="toc-sub-row">2.1 Akses Masuk Sistem (Halaman Login /login) & Tata Letak Antarmuka ............................ Halaman 11</div>
        <div class="toc-sub-row">2.2 Simulasi Gambar Antarmuka Login Blade ................................................................... Halaman 12</div>
        <div class="toc-sub-row">2.3 Proteksi Formulir CSRF, Enkripsi Bcrypt & Proteksi Brute Force ..................................... Halaman 13</div>
        <div class="toc-sub-row">2.4 Manajemen Profil Mandiri & Prosedur Pergantian Kata Sandi ......................................... Halaman 14</div>
        <div class="toc-sub-row">2.5 Prosedur Keluar Aman (Logout) & Keamanan Sesi Kasir .................................................... Halaman 15</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
        <div class="toc-chapter-title">BAB 3: PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</div>
        <div class="toc-sub-row">3.1 Antarmuka Panel Kontrol Administrator (/dashboard) .................................................... Halaman 16</div>
        <div class="toc-sub-row">3.2 Simulasi Gambar Dashboard & Struktur Banner Utama ................................................ Halaman 17</div>
        <div class="toc-sub-row">3.3 Analitik Indikator Kinerja Utama (KPI) Finansial Real-Time ............................................. Halaman 18</div>
        <div class="toc-sub-row">3.4 Visualisasi Grafik Tren Arus Kas & Analisis Penjualan 7 Hari ........................................... Halaman 19</div>
        <div class="toc-sub-row">3.5 Struktur Navigasi Sidebar Responsif & Status Operasional Toko ..................................... Halaman 20</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
        <div class="toc-chapter-title">BAB 4: MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</div>
        <div class="toc-sub-row">4.1 Katalog Master Produk (/admin/products) & Indikator Ketersediaan .............................. Halaman 21</div>
        <div class="toc-sub-row">4.2 Simulasi Gambar Katalog Produk & Pencarian Cepat ................................................... Halaman 22</div>
        <div class="toc-sub-row">4.3 Formulir Tambah Produk Baru (/admin/products/create) & Barcode Generator ................. Halaman 23</div>
        <div class="toc-sub-row">4.4 Struktur Penetapan Harga Jual Kasir, Diskon Promo (%) & Satuan ................................... Halaman 24</div>
        <div class="toc-sub-row">4.5 Ambang Batas Stok Menipis & Peringatan Stok Habis (Out of Stock) ................................ Halaman 25</div>
        <div class="toc-sub-row">4.6 Fitur Update Stok Cepat via Scanner Barcode ................................................................. Halaman 26</div>
        <div class="toc-sub-row">4.7 Import Data Produk Massal Melalui Spreadsheet Excel/CSV ........................................... Halaman 27</div>
        <div class="toc-sub-row">4.8 Pemeliharaan Data, Edit Barang & Prosedur Penghapusan Aman ..................................... Halaman 28</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 5: DAFTAR ISI BAGIAN 2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">DAFTAR ISI LENGKAP (BAGIAN 2)</h1>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 5: OPERASIONAL KASIR POINT OF SALE (POS) MODERN</div>
        <div class="toc-sub-row">5.1 Tata Letak Antarmuka Kasir Layar Sentuh & PC (/cashier/pos) ........................................ Halaman 29</div>
        <div class="toc-sub-row">5.2 Simulasi Gambar Layar Kasir POS Split-Pane ............................................................. Halaman 30</div>
        <div class="toc-sub-row">5.3 Navigasi Kasir & Tombol Kembali ke Dashboard Admin ................................................. Halaman 31</div>
        <div class="toc-sub-row">5.4 Metode Input Barang: Scanner Barcode, Pencarian Nama & Grid Cepat ........................... Halaman 32</div>
        <div class="toc-sub-row">5.5 Manajemen Keranjang Belanja, Penyesuaian Qty & Pembatalan Item ............................... Halaman 33</div>
        <div class="toc-sub-row">5.6 Penanganan Identitas Pelanggan (Pelanggan Umum vs Member Toko) .............................. Halaman 34</div>
        <div class="toc-sub-row">5.7 Alur Pembayaran Tunai (Cash) & Perhitungan Kembalian Otomatis ................................. Halaman 35</div>
        <div class="toc-sub-row">5.8 Alur Pembayaran Digital Dynamic QRIS DOKU & Webhook Real-Time .............................. Halaman 36</div>
        <div class="toc-sub-row">5.9 Asisten Suara (Audio Chime) Notifikasi Transaksi Sukses ................................................. Halaman 37</div>
        <div class="toc-sub-row">5.10 Pintasan Keyboard Efisiensi Kasir (Hotkeys B & ESC) ...................................................... Halaman 38</div>
        <div class="toc-sub-row">5.11 Cetak Struk Thermal Bluetooth (58mm/80mm) & Format Raw ESC/POS ......................... Halaman 39</div>
        <div class="toc-sub-row">5.12 Cetak Nota PDF Grayscale Monokrom (/receipt/{id}/print) ............................................ Halaman 40</div>
        <div class="toc-sub-row">5.13 Pengiriman Bukti Pembayaran Digital via WhatsApp Pelanggan .................................--- Halaman 41</div>
        <div class="toc-sub-row">5.14 Modul Ekspedisi: Pembuatan & Pencetakan Label Resi Paket A6 ..................................... Halaman 42</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 6px;">
        <div class="toc-chapter-title">BAB 6: PUSAT ANALITIK, LAPORAN BISNIS & REKONSILIASI KEUANGAN</div>
        <div class="toc-sub-row">6.1 Gambaran Umum Pusat Pelaporan Terpadu (/admin/reports) ........................................... Halaman 43</div>
        <div class="toc-sub-row">6.2 Laporan Penjualan Transaksi (Filter Harian, Bulanan, Kuartal, Tahunan) ............................ Halaman 44</div>
        <div class="toc-sub-row">6.3 Laporan Keuangan & Arus Kas (Pemisahan Kas Tunai vs Netto QRIS) ................................. Halaman 45</div>
        <div class="toc-sub-row">6.4 Rekonsiliasi Biaya Potongan MDR DOKU 0.7% & Arus Kas Bersih .................................... Halaman 46</div>
        <div class="toc-sub-row">6.5 Laporan Monitoring & Audit Transaksi Digital QRIS ........................................................ Halaman 47</div>
        <div class="toc-sub-row">6.6 Laporan Inventaris, Mutasi & Valuasi Total Aset Barang Dagangan .................................. Halaman 48</div>
        <div class="toc-sub-row">6.7 Pencetakan Struk Ringkasan Tutup Kasir Harian (Daily Closing Slip) ................................. Halaman 49</div>
        <div class="toc-sub-row">6.8 Standar Ekspor Laporan Formal ke Format PDF Landscape & Excel (.xlsx) ......................... Halaman 50</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 6px;">
        <div class="toc-chapter-title">BAB 7: TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</div>
        <div class="toc-sub-row">7.1 Landasan Hukum UU ITE No. 11/2008 & Integritas Dokumen Digital ................................. Halaman 51</div>
        <div class="toc-sub-row">7.2 Standar Kriptografi SHA-256 & Timestamp Keabsahan ................................................... Halaman 52</div>
        <div class="toc-sub-row">7.3 Struktur Format Penomoran Dokumen Laporan Dinamis (LKEU/LPK/LSTK) ....................... Halaman 53</div>
        <div class="toc-sub-row">7.4 Penandatangan Dokumen Otomatis Berdasarkan Akun & Gelar Alias ................................. Halaman 54</div>
        <div class="toc-sub-row">7.5 Portal Publik Verifikasi Keaslian Dokumen Laporan (/verify/document) ............................ Halaman 55</div>
        <div class="toc-sub-row">7.6 Portal Publik Verifikasi Keaslian Faktur Pelanggan (/verify/tte/{trx}) ................................. Halaman 56</div>
        <div class="toc-sub-row">7.7 Tautan Faktur Digital Sementara Bertanda Tangan (Expired 24 Jam) ................................. Halaman 57</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 6px;">
        <div class="toc-chapter-title">BAB 8: PENGATURAN TOKO, KONFIGURASI & INTEGRASI SISTEM</div>
        <div class="toc-sub-row">8.1 Pusat Pengaturan Sistem (/admin/settings) ..................................................................... Halaman 58</div>
        <div class="toc-sub-row">8.2 Personalisasi Identitas Bisnis, Nama Usaha, Alamat & Logo Toko ..................................... Halaman 59</div>
        <div class="toc-sub-row">8.3 Kustomisasi Branding Aplikasi, Prefix Invoice & Favicon Browser .................................... Halaman 60</div>
        <div class="toc-sub-row">8.4 Pengaturan & Pengunggahan Suara Bel Kasir (Audio Chime MP3/WAV) ............................ Halaman 61</div>
        <div class="toc-sub-row">8.5 Konfigurasi Gateway DOKU Merchant (Sandbox & Production) ......................................... Halaman 62</div>
        <div class="toc-sub-row">8.6 Konfigurasi Integrasi Bot Notifikasi Telegram Toko ........................................................ Halaman 63</div>
        <div class="toc-sub-row">8.7 Pengaturan Footer Struk Kasir & Kebijakan Toko .............................................................. Halaman 64</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 6px;">
        <div class="toc-chapter-title">BAB 9: MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</div>
        <div class="toc-sub-row">9.1 Daftar Akun Pengguna (/admin/users) ............................................................................ Halaman 65</div>
        <div class="toc-sub-row">9.2 Pendaftaran Akun Kasir / Admin Baru & Hak Wewenang Role .......................................... Halaman 66</div>
        <div class="toc-sub-row">9.3 Konfigurasi Kolom "Alias / Gelar Jabatan TTD" Penandatangan Dokumen ......................... Halaman 67</div>
        <div class="toc-sub-row">9.4 Pembaruan Data Pengguna & Prosedur Reset Kata Sandi ................................................. Halaman 68</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 6px;">
        <div class="toc-chapter-title">BAB 10: PEMELIHARAAN SERVER EKSKLUSIF DIKELOLA OLEH I GUSTI SULTAN</div>
        <div class="toc-sub-row">10.1 Arsitektur Server Produksi & Manajemen Terpusat oleh I Gusti Sultan ........................... Halaman 69</div>
        <div class="toc-sub-row">10.2 Dedicated Media Streaming Engine (/media-file) Anti 404 Nginx ................................... Halaman 70</div>
        <div class="toc-sub-row">10.3 Prosedur Pemeliharaan Storage Symlink & File System aaPanel .................................... Halaman 71</div>
        <div class="toc-sub-row">10.4 Konfigurasi Web Server Nginx & URL Rewrite Engine Laravel .......................................... Halaman 72</div>
        <div class="toc-sub-row">10.5 Pemantauan Log Kesalahan Sistem (laravel.log) & Error Handling .................................. Halaman 73</div>
        <div class="toc-sub-row">10.6 Prosedur Pencadangan (Backup) Harian & Disaster Recovery oleh I Gusti Sultan ............. Halaman 74</div>
        <div class="toc-sub-row">10.7 Standar Operasional Prosedur (SOP) Pemeliharaan Server Rutin oleh I Gusti Sultan ......... Halaman 75</div>
        <div class="toc-sub-row">10.8 Panduan Pemecahan Masalah Cepat (Troubleshooting FAQ) ........................................... Halaman 76</div>
        <div class="toc-sub-row">10.9 Glosarium Lengkap Istilah POS, Perbankan, Kriptografi & E-Commerce ........................... Halaman 77</div>
        <div class="toc-sub-row">10.10 Lembar Kontak Dukungan Teknis Langsung I Gusti Sultan ............................................. Halaman 78</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 6: BAB 1.1 + GAMBAR ALUR TRANSAKSI --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">GAMBARAN UMUM & ALUR TRANSAKSI KASIR MODERN</h1>

    <h2 class="section-title">1.1 Latar Belakang & Filosofi Rancangan Sistem Kasir Modern</h2>
    <p>
        Sistem Point of Sale (POS) ini dirancang untuk menjawab tantangan operasional bisnis ritel kontemporer yang memerlukan kecepatan transaksi di meja kasir (*checkout speed*), transparansi pencatatan arus kas real-time, serta otomatisasi pembukuan digital.
    </p>

    {{-- SVG VECTOR GAMBAR 1.1: ALUR TRANSAKSI POS --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Step 1 -->
            <rect x="20" y="25" width="95" height="105" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <circle cx="67" cy="48" r="16" fill="#00AA13"/>
            <text x="67" y="53" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">1</text>
            <text x="67" y="80" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">Scan Barcode</text>
            <text x="67" y="95" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Entri barang instan</text>
            <text x="67" y="107" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">via scanner / teks</text>

            <!-- Arrow 1 -->
            <path d="M120 75 L135 75" stroke="#00AA13" stroke-width="2.5" stroke-linecap="round"/>
            <polygon points="135,71 142,75 135,79" fill="#00AA13"/>

            <!-- Step 2 -->
            <rect x="145" y="25" width="95" height="105" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <circle cx="192" cy="48" r="16" fill="#00AA13"/>
            <text x="192" y="53" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">2</text>
            <text x="192" y="80" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">Keranjang & Total</text>
            <text x="192" y="95" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Kalkulasi diskon</text>
            <text x="192" y="107" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">& subtotal otomatis</text>

            <!-- Arrow 2 -->
            <path d="M245 75 L260 75" stroke="#00AA13" stroke-width="2.5" stroke-linecap="round"/>
            <polygon points="260,71 267,75 260,79" fill="#00AA13"/>

            <!-- Step 3 -->
            <rect x="270" y="25" width="95" height="105" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <circle cx="317" cy="48" r="16" fill="#00AA13"/>
            <text x="317" y="53" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">3</text>
            <text x="317" y="80" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">Bayar Tunai / QRIS</text>
            <text x="317" y="95" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Kembalian instan /</text>
            <text x="317" y="107" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Dynamic QRIS DOKU</text>

            <!-- Arrow 3 -->
            <path d="M370 75 L385 75" stroke="#00AA13" stroke-width="2.5" stroke-linecap="round"/>
            <polygon points="385,71 392,75 385,79" fill="#00AA13"/>

            <!-- Step 4 -->
            <rect x="395" y="25" width="85" height="105" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
            <circle cx="437" cy="48" r="16" fill="#00880F"/>
            <text x="437" y="53" font-family="Helvetica" font-size="12" font-weight="bold" fill="#FFFFFF" text-anchor="middle">✔</text>
            <text x="437" y="80" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">Cetak & Notif</text>
            <text x="437" y="95" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">Struk Bluetooth /</text>
            <text x="437" y="107" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">Kirim WhatsApp</text>
        </svg>
        <div class="diagram-caption">Gambar 1.1: Diagram Alur Proses Transaksi Penjualan Meja Kasir POS</div>
    </div>

    <p>
        Melalui metodologi reaktivitas satu layar (*One-Screen POS Workflow*), kasir dapat menuntaskan transaksi dalam hitungan detik tanpa membuka jendela browser baru.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 7: BAB 1.2 + GAMBAR MVC ARCHITECTURE --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">ARSITEKTUR PERANGKAT LUNAK & TECH STACK</h1>

    <h2 class="section-title">1.2 Tumpukan Teknologi (Technology Stack) & Arsitektur MVC</h2>
    <p>
        Sistem dibangun di atas fondasi arsitektur Model-View-Controller (MVC) Laravel 11 dengan performa tinggi:
    </p>

    {{-- SVG VECTOR GAMBAR 1.2: TECH STACK ARCHITECTURE --}}
    <div class="diagram-container">
        <svg width="460" height="160" viewBox="0 0 500 170">
            <rect x="5" y="5" width="490" height="160" rx="10" fill="#00360D" stroke="#00AA13" stroke-width="1.5"/>
            <!-- Layer 1: Client Frontend -->
            <rect x="20" y="20" width="140" height="130" rx="8" fill="#FFFFFF"/>
            <rect x="20" y="20" width="140" height="22" rx="8" fill="#00661A"/>
            <text x="90" y="35" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">FRONTEND CLIENT</text>
            <text x="30" y="55" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">• Tailwind CSS 3.x</text>
            <text x="30" y="70" font-family="Helvetica" font-size="6.5" fill="#4A5568">Desain responsif hijau Gojek</text>
            <text x="30" y="90" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">• Alpine.js 3.x</text>
            <text x="30" y="105" font-family="Helvetica" font-size="6.5" fill="#4A5568">Reaktivitas keranjang & hitung</text>
            <text x="30" y="125" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">• Blade Engine</text>
            <text x="30" y="140" font-family="Helvetica" font-size="6.5" fill="#4A5568">Templating modular cepat</text>

            <!-- Layer 2: Controller & Services -->
            <rect x="180" y="20" width="140" height="130" rx="8" fill="#FFFFFF"/>
            <rect x="180" y="20" width="140" height="22" rx="8" fill="#1A202C"/>
            <text x="250" y="35" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">BACKEND ENGINE</text>
            <text x="190" y="55" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">• Laravel 11 (PHP 8.2)</text>
            <text x="190" y="70" font-family="Helvetica" font-size="6.5" fill="#4A5568">Routing & Role Middleware</text>
            <text x="190" y="90" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">• DokuService API</text>
            <text x="190" y="105" font-family="Helvetica" font-size="6.5" fill="#4A5568">Dynamic QRIS Generator</text>
            <text x="190" y="125" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">• DomPDF Facade</text>
            <text x="190" y="140" font-family="Helvetica" font-size="6.5" fill="#4A5568">Rendering PDF Laporan & Struk</text>

            <!-- Layer 3: Database & Infrastructure -->
            <rect x="340" y="20" width="140" height="130" rx="8" fill="#FFFFFF"/>
            <rect x="340" y="20" width="140" height="22" rx="8" fill="#EE2737"/>
            <text x="410" y="35" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">DATABASE & HOST</text>
            <text x="350" y="55" font-family="Helvetica" font-size="7" font-weight="bold" fill="#EE2737">• MySQL 8.0 Relational</text>
            <text x="350" y="70" font-family="Helvetica" font-size="6.5" fill="#4A5568">Tabel Sales & Inventory</text>
            <text x="350" y="90" font-family="Helvetica" font-size="7" font-weight="bold" fill="#EE2737">• aaPanel Linux</text>
            <text x="350" y="105" font-family="Helvetica" font-size="6.5" fill="#4A5568">Nginx & PHP-FPM 8.2</text>
            <text x="350" y="125" font-family="Helvetica" font-size="7" font-weight="bold" fill="#EE2737">• I Gusti Sultan</text>
            <text x="350" y="140" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Server Architecture Admin</text>
        </svg>
        <div class="diagram-caption">Gambar 1.2: Diagram Tumpukan Teknologi & Arsitektur Perangkat Lunak MVC</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 8: BAB 1.3 + GAMBAR ROLE MATRIX --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">MATRIKS HAK AKSES PENGGUNA (ROLE MATRIX)</h1>

    <h2 class="section-title">1.3 Matriks Perbandingan Hak Akses Pengguna (Admin vs Kasir)</h2>
    <p>
        Sistem membagi akses pengguna ke dalam dua peran (*role*) terpisah guna menjaga keamanan data finansial:
    </p>

    {{-- SVG VECTOR GAMBAR 1.3: ROLE MATRIX --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Admin Role Box -->
            <rect x="25" y="20" width="215" height="120" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
            <rect x="25" y="20" width="215" height="24" rx="8" fill="#00661A"/>
            <text x="132" y="36" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">👑 ROLE: ADMINISTRATOR (AKSES PENUH)</text>
            <text x="35" y="58" font-family="Helvetica" font-size="7" fill="#276749">✔ Dashboard Metrik & Grafik 7 Hari (/dashboard)</text>
            <text x="35" y="73" font-family="Helvetica" font-size="7" fill="#276749">✔ Manajemen Produk & Stok (/admin/products)</text>
            <text x="35" y="88" font-family="Helvetica" font-size="7" fill="#276749">✔ Pusat Laporan Penjualan & Keuangan (/reports)</text>
            <text x="35" y="103" font-family="Helvetica" font-size="7" fill="#276749">✔ Pengaturan Toko & Gateway (/admin/settings)</text>
            <text x="35" y="118" font-family="Helvetica" font-size="7" fill="#276749">✔ Transaksi Kasir POS (/cashier/pos)</text>
            <text x="35" y="133" font-family="Helvetica" font-size="7" fill="#276749">✔ Manajemen Pengguna & Gelar TTE (/admin/users)</text>

            <!-- Cashier Role Box -->
            <rect x="260" y="20" width="215" height="120" rx="8" fill="#EBF8FF" stroke="#63B3ED" stroke-width="1.5"/>
            <rect x="260" y="20" width="215" height="24" rx="8" fill="#2B6CB0"/>
            <text x="367" y="36" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">🛒 ROLE: PETUGAS KASIR (TRANSAKSI)</text>
            <text x="270" y="58" font-family="Helvetica" font-size="7" fill="#2B6CB0">✔ Transaksi Kasir POS (/cashier/pos)</text>
            <text x="270" y="73" font-family="Helvetica" font-size="7" fill="#2B6CB0">✔ Pemindaian Barcode & Pencarian Barang</text>
            <text x="270" y="88" font-family="Helvetica" font-size="7" fill="#2B6CB0">✔ Pembayaran Tunai & Cetak Struk Thermal</text>
            <text x="270" y="103" font-family="Helvetica" font-size="7" fill="#2B6CB0">✔ Dynamic QRIS DOKU & Kirim Struk WA</text>
            <text x="270" y="118" font-family="Helvetica" font-size="7" fill="#C53030">✖ Akses Dashboard & Laporan Ditolak (403)</text>
            <text x="270" y="133" font-family="Helvetica" font-size="7" fill="#C53030">✖ Pengaturan Toko & Akun Terkunci</text>
        </svg>
        <div class="diagram-caption">Gambar 1.3: Matriks Hak Wewenang Akun Administrator vs Petugas Kasir</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 9: BAB 1.4 + GAMBAR QRIS GATEWAY --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">INTEGRASI PEMBAYARAN DIGITAL QRIS DOKU</h1>

    <h2 class="section-title">1.4 Ekosistem Pembayaran Digital QRIS Bank Indonesia & DOKU Gateway</h2>
    <p>
        Sistem terhubung secara langsung dengan DOKU Payment Gateway untuk memproses pembayaran Dynamic QRIS:
    </p>

    {{-- SVG VECTOR GAMBAR 1.4: QRIS ECOSYSTEM --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Box 1: Kasir POS -->
            <rect x="20" y="35" width="100" height="90" rx="8" fill="#FFFFFF" stroke="#00AA13" stroke-width="1.5"/>
            <text x="70" y="55" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">KASIR POS</text>
            <text x="70" y="75" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Request Dynamic</text>
            <text x="70" y="88" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">QRIS Nominal Eksak</text>
            <text x="70" y="105" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C" text-anchor="middle">Rp 51.000</text>

            <!-- Arrow 1 -->
            <path d="M125 80 L160 80" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
            <polygon points="160,76 167,80 160,84" fill="#00AA13"/>

            <!-- Box 2: DOKU Server -->
            <rect x="175" y="35" width="120" height="90" rx="8" fill="#FFFFFF" stroke="#EE2737" stroke-width="1.5"/>
            <text x="235" y="55" font-family="Helvetica" font-size="8" font-weight="bold" fill="#EE2737" text-anchor="middle">DOKU GATEWAY</text>
            <text x="235" y="75" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Generate QR Code</text>
            <text x="235" y="88" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Bank Indonesia Standard</text>
            <text x="235" y="105" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">AS2938472910</text>

            <!-- Arrow 2 -->
            <path d="M300 80 L335 80" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
            <polygon points="335,76 342,80 335,84" fill="#00AA13"/>

            <!-- Box 3: Customer Apps -->
            <rect x="350" y="35" width="125" height="90" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
            <text x="412" y="55" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">APLIKASI PEMBELI</text>
            <text x="412" y="75" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">GoPay • OVO • DANA</text>
            <text x="412" y="88" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">BCA Mobile • Mandiri</text>
            <text x="412" y="105" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">✔ Sukses Bayar</text>
        </svg>
        <div class="diagram-caption">Gambar 1.4: Diagram Alur Integrasi Gateway Pembayaran Dynamic QRIS DOKU</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 10: BAB 1.5 + GAMBAR TTE LEGALITY --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">LEGALITAS TANDA TANGAN ELEKTRONIK (TTE)</h1>

    <h2 class="section-title">1.5 Landasan Hukum & Validitas Tanda Tangan Elektronik UU ITE No. 11/2008</h2>
    <p>
        Penerapan Tanda Tangan Elektronik (TTE) pada seluruh berkas PDF laporan resmi dilindungi oleh hukum positif Indonesia:
    </p>

    {{-- SVG VECTOR GAMBAR 1.5: TTE LEGALITY --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <rect x="25" y="20" width="450" height="25" rx="8" fill="#00661A"/>
            <text x="250" y="37" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PILAR KEABSAHAN HUKUM TANDA TANGAN ELEKTRONIK (UU ITE NO. 11/2008)</text>

            <rect x="40" y="55" width="125" height="75" rx="6" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
            <text x="102" y="72" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">1. OTENTISITAS</text>
            <text x="102" y="88" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Identitas Penandatangan</text>
            <text x="102" y="100" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">terverifikasi akun resmi</text>
            <text x="102" y="112" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">& Gelar Jabatan Alias</text>

            <rect x="187" y="55" width="125" height="75" rx="6" fill="#EBF8FF" stroke="#90CDF4" stroke-width="1"/>
            <text x="249" y="72" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">2. INTEGRITAS DATA</text>
            <text x="249" y="88" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Enkripsi SHA-256</text>
            <text x="249" y="100" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">mengunci isi laporan</text>
            <text x="249" y="112" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">dari manipulasi pasca-cetak</text>

            <rect x="335" y="55" width="125" height="75" rx="6" fill="#FFFAF0" stroke="#FBD38D" stroke-width="1"/>
            <text x="397" y="72" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#DD6B20" text-anchor="middle">3. VERIFIKASI PUBLIK</text>
            <text x="397" y="88" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">Scan QR Code kamera</text>
            <text x="397" y="100" font-family="Helvetica" font-size="6.5" fill="#2D3748" text-anchor="middle">membuka portal sertifikat</text>
            <text x="397" y="112" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#DD6B20" text-anchor="middle">resmi /verify/document</text>
        </svg>
        <div class="diagram-caption">Gambar 1.5: Landasan Tiga Pilar Legalitas TTE Kriptografis pada Sistem Laporan</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 11: BAB 2.1 + GAMBAR LOGIN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">MANAJEMEN OTENTIKASI & KEAMANAN AKUN</h1>

    <h2 class="section-title">2.1 Akses Masuk Sistem (Halaman Login /login)</h2>
    <p>
        Halaman login (<code>/login</code>) merupakan gerbang masuk terpusat untuk seluruh personil kasir dan administrator:
    </p>

    {{-- SVG VECTOR GAMBAR 2.1: LOGIN SCREEN --}}
    <div class="diagram-container">
        <svg width="460" height="200" viewBox="0 0 500 215">
            <rect x="10" y="10" width="480" height="195" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <rect x="110" y="20" width="280" height="175" rx="12" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1.5"/>
            <rect x="225" y="30" width="50" height="42" rx="10" fill="#00AA13"/>
            <path d="M240 51 L248 59 L262 43" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round" fill="none"/>
            <text x="250" y="86" font-family="Helvetica" font-size="9.5" font-weight="bold" fill="#1A202C" text-anchor="middle">MASUK SISTEM KASIR POS</text>
            <text x="250" y="97" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Silakan masukkan email & kata sandi terdaftar</text>
            <rect x="130" y="105" width="240" height="20" rx="5" fill="#F7FAFC" stroke="#E2E8F0" stroke-width="1"/>
            <text x="140" y="119" font-family="Helvetica" font-size="7" fill="#4A5568">✉ kasir1@toko.site</text>
            <rect x="130" y="130" width="240" height="20" rx="5" fill="#F7FAFC" stroke="#E2E8F0" stroke-width="1"/>
            <text x="140" y="144" font-family="Helvetica" font-size="7" fill="#4A5568">🔒 ••••••••••••</text>
            <rect x="130" y="156" width="240" height="24" rx="6" fill="#00AA13"/>
            <text x="250" y="172" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">MASUK KE KASIR / DASHBOARD</text>
        </svg>
        <div class="diagram-caption">Gambar 2.1: Antarmuka Formulir Otentikasi Pengguna (resources/views/auth/login.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 12: BAB 2.2 + GAMBAR ANATOMI LOGIN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">ANATOMI ELEMEN ANTARMUKA LOGIN BLADE</h1>

    <h2 class="section-title">2.2 Penjelasan Field & Validasi pada Halaman Login</h2>
    <p>
        Setiap komponen formulir pada template <code>resources/views/auth/login.blade.php</code> dilengkapi proteksi otomatis:
    </p>

    {{-- SVG VECTOR GAMBAR 2.2: ANATOMI LOGIN --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <rect x="25" y="20" width="450" height="120" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <rect x="25" y="20" width="450" height="22" rx="8" fill="#00661A"/>
            <text x="250" y="35" font-family="Helvetica" font-size="8" font-weight="bold" fill="#FFFFFF" text-anchor="middle">ANATOMI ELEMEN FORMULIR OTENTIKASI PENGGUNA</text>

            <text x="40" y="58" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">1. Logo Toko Dinamis:</text>
            <text x="180" y="58" font-family="Helvetica" font-size="6.8" fill="#2D3748">Mengambil berkas logo dari menu Pengaturan Toko via rute /media-file.</text>

            <text x="40" y="76" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">2. Field Email Pengguna:</text>
            <text x="180" y="76" font-family="Helvetica" font-size="6.8" fill="#2D3748">Validasi format email standar RFC dengan filter karakter khusus.</text>

            <text x="40" y="94" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">3. Field Kata Sandi:</text>
            <text x="180" y="94" font-family="Helvetica" font-size="6.8" fill="#2D3748">Karakter disamarkan bullet point, diverifikasi dengan hash Bcrypt di server.</text>

            <text x="40" y="112" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">4. Checkbox Ingat Saya:</text>
            <text x="180" y="112" font-family="Helvetica" font-size="6.8" fill="#2D3748">Menyimpan token sesi terenkripsi selama 30 hari di peramban kasir.</text>

            <text x="40" y="130" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">5. Smart Redirect:</text>
            <text x="180" y="130" font-family="Helvetica" font-size="6.8" fill="#2D3748">Kasir otomatis diarahkan ke /cashier/pos, admin diarahkan ke /dashboard.</text>
        </svg>
        <div class="diagram-caption">Gambar 2.2: Rincian Anatomi Elemen Formulir Login & Logika Alur Masuk</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 13: BAB 2.3 + GAMBAR CSRF & BCRYPT --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">ARSITEKTUR KEAMANAN CSRF & BCRYPT HASHING</h1>

    <h2 class="section-title">2.3 Arsitektur Keamanan CSRF, Hash Bcrypt & Perlindungan Sesi</h2>
    <p>
        Sistem kasir mengimplementasikan standar keamanan web tertinggi guna melindungi integritas data finansial:
    </p>

    {{-- SVG VECTOR GAMBAR 2.3: CSRF & BCRYPT --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#00360D" stroke="#00AA13" stroke-width="1.5"/>
            <!-- CSRF Block -->
            <rect x="25" y="25" width="215" height="110" rx="8" fill="#FFFFFF"/>
            <text x="132" y="45" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00880F" text-anchor="middle">🛡️ PROTEKSI CSRF TOKEN</text>
            <text x="35" y="65" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Directiva @csrf menyisipkan token acak</text>
            <text x="35" y="78" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Divalidasi oleh VerifyCsrfToken middleware</text>
            <text x="35" y="91" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Mencegah pemalsuan formulir antar-situs</text>
            <text x="35" y="104" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00661A">• HTTP Error 419 jika token tidak cocok</text>

            <!-- Bcrypt Block -->
            <rect x="260" y="25" width="215" height="110" rx="8" fill="#FFFFFF"/>
            <text x="367" y="45" font-family="Helvetica" font-size="8" font-weight="bold" fill="#2B6CB0" text-anchor="middle">🔒 ENKRIPSI BCRYPT HASH</text>
            <text x="270" y="65" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Kata sandi di-hash satu arah (Cost 12)</text>
            <text x="270" y="78" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Garam acak (Random Salt) per akun</text>
            <text x="270" y="91" font-family="Helvetica" font-size="6.8" fill="#4A5568">• Tidak dapat dibongkar bahkan dari database</text>
            <text x="270" y="104" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#2B6CB0">• Standar keamanan perbankan global</text>
        </svg>
        <div class="diagram-caption">Gambar 2.3: Diagram Arsitektur Perlindungan CSRF dan Hashing Kata Sandi Bcrypt</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 14: BAB 2.4 + GAMBAR PROFILE EDIT --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">MANAJEMEN PROFIL PENGGUNA & GANTI PASSWORD</h1>

    <h2 class="section-title">2.4 Manajemen Profil Pengguna & Prosedur Pergantian Kata Sandi</h2>
    <p>
        Setiap pengguna dapat memperbarui informasi nama dan mengganti kata sandi secara mandiri pada rute <code>/profile</code>:
    </p>

    {{-- SVG VECTOR GAMBAR 2.4: PROFILE EDIT --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <rect x="25" y="18" width="450" height="124" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="40" y="36" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#1A202C">👤 FORMULIR PENGATURAN PROFIL & PERGANTIAN KATA SANDI MANDIRI</text>
            
            <text x="40" y="55" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA LENGKAP PENGGUNA</text>
            <rect x="40" y="59" width="200" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="72" font-family="Helvetica" font-size="6.8" fill="#1A202C">Siti Rahma</text>

            <text x="260" y="55" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">ALAMAT EMAIL RESMI</text>
            <rect x="260" y="59" width="200" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="268" y="72" font-family="Helvetica" font-size="6.8" fill="#1A202C">kasir1@toko.site</text>

            <text x="40" y="93" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">KATA SANDI LAMA</text>
            <rect x="40" y="97" width="130" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="110" font-family="Helvetica" font-size="6.8" fill="#4A5568">••••••••</text>

            <text x="185" y="93" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">KATA SANDI BARU</text>
            <rect x="185" y="97" width="130" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="193" y="110" font-family="Helvetica" font-size="6.8" fill="#4A5568">••••••••</text>

            <text x="330" y="93" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">KONFIRMASI PASSWORD</text>
            <rect x="330" y="97" width="130" height="18" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="338" y="110" font-family="Helvetica" font-size="6.8" fill="#4A5568">••••••••</text>

            <rect x="350" y="120" width="110" height="18" rx="4" fill="#00AA13"/>
            <text x="405" y="132" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN PERUBAHAN</text>
        </svg>
        <div class="diagram-caption">Gambar 2.4: Formulir Pembaruan Profil Mandiri & Penggantian Kata Sandi (/profile)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 15: BAB 2.5 + GAMBAR LOGOUT --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">PROSEDUR KELUAR AMAN (LOGOUT)</h1>

    <h2 class="section-title">2.5 Prosedur Keluar Aman (Logout) & Keamanan Sesi Kasir</h2>
    <p>
        Prosedur standar saat pergantian shift kasir atau penutupan toko:
    </p>

    {{-- SVG VECTOR GAMBAR 2.5: LOGOUT FLOW --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Step 1 -->
            <rect x="25" y="30" width="125" height="100" rx="8" fill="#FFFFFF" stroke="#E53E3E" stroke-width="1.5"/>
            <circle cx="87" cy="50" r="14" fill="#E53E3E"/>
            <text x="87" y="55" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">1</text>
            <text x="87" y="78" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">Klik Tombol Keluar</text>
            <text x="87" y="93" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Tombol merah sidebar /</text>
            <text x="87" y="105" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">menu akun kasir</text>

            <!-- Arrow 1 -->
            <path d="M155 80 L180 80" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
            <polygon points="180,76 187,80 180,84" fill="#00AA13"/>

            <!-- Step 2 -->
            <rect x="190" y="30" width="125" height="100" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <circle cx="252" cy="50" r="14" fill="#00AA13"/>
            <text x="252" y="55" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">2</text>
            <text x="252" y="78" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">Hancurkan Sesi</text>
            <text x="252" y="93" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Server invalidate cookie</text>
            <text x="252" y="105" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">& hapus cache token</text>

            <!-- Arrow 2 -->
            <path d="M320 80 L345 80" stroke="#00AA13" stroke-width="2" stroke-linecap="round"/>
            <polygon points="345,76 352,80 345,84" fill="#00AA13"/>

            <!-- Step 3 -->
            <rect x="355" y="30" width="120" height="100" rx="8" fill="#F0FFF4" stroke="#68D391" stroke-width="1.5"/>
            <circle cx="415" cy="50" r="14" fill="#00880F"/>
            <text x="415" y="55" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">✔</text>
            <text x="415" y="78" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F" text-anchor="middle">Kunci Layar Kasir</text>
            <text x="415" y="93" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">Redirect ke /login,</text>
            <text x="415" y="105" font-family="Helvetica" font-size="6.5" fill="#276749" text-anchor="middle">siap untuk shift baru</text>
        </svg>
        <div class="diagram-caption">Gambar 2.5: Diagram Prosedur Logout Aman dan Pembersihan Sesi Komputer Kasir</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 16: BAB 3.1 + GAMBAR DASHBOARD OVERVIEW --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</h1>

    <h2 class="section-title">3.1 Antarmuka Panel Kontrol Administrator (/dashboard)</h2>
    <p>
        Dashboard Administrator menyajikan denyut nadi bisnis toko secara real-time:
    </p>

    {{-- SVG VECTOR GAMBAR 3.1: DASHBOARD OVERVIEW --}}
    <div class="diagram-container">
        <svg width="460" height="200" viewBox="0 0 500 215">
            <rect x="5" y="5" width="490" height="205" rx="12" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <rect x="15" y="15" width="470" height="26" rx="6" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="25" y="32" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#1A202C">📊 DASHBOARD UTAMA • {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
            
            <rect x="15" y="48" width="470" height="55" rx="10" fill="#00661A"/>
            <text x="25" y="65" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#A8DAB5">TOTAL OMSET HARI INI • {{ date('d F Y') }}</text>
            <text x="25" y="85" font-family="Helvetica" font-size="14" font-weight="bold" fill="#FFFFFF">Rp 1.450.000</text>
            <text x="25" y="96" font-family="Helvetica" font-size="6.8" fill="#E2E8F0">18 Transaksi Sukses • 42 Item Terjual</text>

            <rect x="15" y="110" width="112" height="42" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="22" y="123" font-family="Helvetica" font-size="6" font-weight="bold" fill="#718096">OMSET HARI INI</text>
            <text x="22" y="140" font-family="Helvetica" font-size="9" font-weight="bold" fill="#00AA13">Rp 1.450.000</text>

            <rect x="134" y="110" width="112" height="42" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="141" y="123" font-family="Helvetica" font-size="6" font-weight="bold" fill="#718096">TOTAL TRANSAKSI</text>
            <text x="141" y="140" font-family="Helvetica" font-size="9" font-weight="bold" fill="#2B6CB0">18 Order</text>

            <rect x="254" y="110" width="112" height="42" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="261" y="123" font-family="Helvetica" font-size="6" font-weight="bold" fill="#718096">ITEM TERJUAL</text>
            <text x="261" y="140" font-family="Helvetica" font-size="9" font-weight="bold" fill="#D69E2E">42 Pcs</text>

            <rect x="373" y="110" width="112" height="42" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="380" y="123" font-family="Helvetica" font-size="6" font-weight="bold" fill="#718096">STATUS TOKO</text>
            <text x="380" y="140" font-family="Helvetica" font-size="8" font-weight="bold" fill="#38A169">● TOKO AKTIF</text>

            <rect x="15" y="158" width="470" height="45" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="25" y="172" font-family="Helvetica" font-size="7" font-weight="bold" fill="#4A5568">TREN ARUS KAS 7 HARI TERAKHIR:</text>
            <rect x="100" y="180" width="25" height="15" fill="#00AA13"/>
            <rect x="150" y="177" width="25" height="18" fill="#00AA13"/>
            <rect x="200" y="175" width="25" height="20" fill="#00AA13"/>
            <rect x="250" y="170" width="25" height="25" fill="#00AA13"/>
            <rect x="300" y="173" width="25" height="22" fill="#00AA13"/>
            <rect x="350" y="167" width="25" height="28" fill="#00AA13"/>
            <rect x="400" y="163" width="25" height="32" fill="#00AA13"/>
        </svg>
        <div class="diagram-caption">Gambar 3.1: Antarmuka Panel Kontrol Dashboard Utama Administrator</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 17: BAB 3.2 + GAMBAR BANNER ACTIONS --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">STRUKTUR BANNER OMSET & QUICK ACTIONS</h1>

    <h2 class="section-title">3.2 Banner Omset Hijau Gojek & Tombol Pintasan Cepat</h2>
    <p>
        Banner utama pada dashboard dirancang memberikan ringkasan omset dan akses pintas modul:
    </p>

    {{-- SVG VECTOR GAMBAR 3.2: BANNER ACTIONS --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#00661A" stroke="#00AA13" stroke-width="2"/>
            <text x="25" y="28" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#A8DAB5">⚡ GOPAY POCKET STYLE BANNER • METRIK UTAMA TOKO</text>
            <text x="25" y="58" font-family="Helvetica" font-size="18" font-weight="bold" fill="#FFFFFF">Rp 1.450.000</text>
            <text x="25" y="75" font-family="Helvetica" font-size="7.5" fill="#E2E8F0">18 Transaksi Berhasil • 42 Item Terjual Hari Ini</text>
            
            <rect x="25" y="90" width="85" height="48" rx="8" fill="#00880F" stroke="#A8DAB5" stroke-width="1"/>
            <text x="67" y="112" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">🛒 KASIR POS</text>
            <text x="67" y="125" font-family="Helvetica" font-size="6" fill="#E2E8F0" text-anchor="middle">Buka Meja Kasir</text>

            <rect x="118" y="90" width="85" height="48" rx="8" fill="#00880F" stroke="#A8DAB5" stroke-width="1"/>
            <text x="160" y="112" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">+ PRODUK</text>
            <text x="160" y="125" font-family="Helvetica" font-size="6" fill="#E2E8F0" text-anchor="middle">Tambah Barang</text>

            <rect x="211" y="90" width="85" height="48" rx="8" fill="#00880F" stroke="#A8DAB5" stroke-width="1"/>
            <text x="253" y="112" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PENJUALAN</text>
            <text x="253" y="125" font-family="Helvetica" font-size="6" fill="#E2E8F0" text-anchor="middle">Rekap Omset</text>

            <rect x="304" y="90" width="85" height="48" rx="8" fill="#00880F" stroke="#A8DAB5" stroke-width="1"/>
            <text x="346" y="112" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PDF STOK</text>
            <text x="346" y="125" font-family="Helvetica" font-size="6" fill="#E2E8F0" text-anchor="middle">Valuasi Gudang</text>

            <rect x="397" y="90" width="80" height="48" rx="8" fill="#00880F" stroke="#A8DAB5" stroke-width="1"/>
            <text x="437" y="112" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">KEUANGAN</text>
            <text x="437" y="125" font-family="Helvetica" font-size="6" fill="#E2E8F0" text-anchor="middle">Arus Kas Bersih</text>
        </svg>
        <div class="diagram-caption">Gambar 3.2: Banner Utama Ringkasan Finansial & Tombol Aksi Cepat (Quick Actions)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 18: BAB 3.3 + GAMBAR KPI CARDS --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">ANALITIK INDIKATOR KINERJA UTAMA (KPI)</h1>

    <h2 class="section-title">3.3 Rincian 4 Kartu KPI Finansial Real-Time</h2>
    <p>
        Setiap kartu indikator kinerja utama diperbarui otomatis secara real-time:
    </p>

    {{-- SVG VECTOR GAMBAR 3.3: KPI CARDS --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Card 1 -->
            <rect x="20" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#A8DAB5" stroke-width="1.5"/>
            <rect x="20" y="20" width="105" height="20" rx="8" fill="#E6F4EA"/>
            <text x="72" y="34" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">OMSET HARI INI</text>
            <text x="72" y="65" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00AA13" text-anchor="middle">Rp 1.45M</text>
            <text x="72" y="85" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Total kas masuk</text>
            <text x="72" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">tunai & non-tunai</text>
            <text x="72" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">⚡ Real-Time</text>

            <!-- Card 2 -->
            <rect x="135" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#90CDF4" stroke-width="1.5"/>
            <rect x="135" y="20" width="105" height="20" rx="8" fill="#EBF8FF"/>
            <text x="187" y="34" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">TOTAL TRANSAKSI</text>
            <text x="187" y="65" font-family="Helvetica" font-size="12" font-weight="bold" fill="#2B6CB0" text-anchor="middle">18 Order</text>
            <text x="187" y="85" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Jumlah nota</text>
            <text x="187" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">berhasil diproses</text>
            <text x="187" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0" text-anchor="middle">🧾 100% Lunas</text>

            <!-- Card 3 -->
            <rect x="250" y="20" width="105" height="115" rx="8" fill="#FFFFFF" stroke="#FBD38D" stroke-width="1.5"/>
            <rect x="250" y="20" width="105" height="20" rx="8" fill="#FFFAF0"/>
            <text x="302" y="34" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#DD6B20" text-anchor="middle">ITEM TERJUAL</text>
            <text x="302" y="65" font-family="Helvetica" font-size="12" font-weight="bold" fill="#DD6B20" text-anchor="middle">42 Pcs</text>
            <text x="302" y="85" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Volume fisik</text>
            <text x="302" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">barang keluar</text>
            <text x="302" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#DD6B20" text-anchor="middle">📦 Gudang Aktif</text>

            <!-- Card 4 -->
            <rect x="365" y="20" width="115" height="115" rx="8" fill="#FFFFFF" stroke="#A8DAB5" stroke-width="1.5"/>
            <rect x="365" y="20" width="115" height="20" rx="8" fill="#E6F4EA"/>
            <text x="422" y="34" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">STATUS OPERASIONAL</text>
            <text x="422" y="65" font-family="Helvetica" font-size="10" font-weight="bold" fill="#38A169" text-anchor="middle">● ONLINE</text>
            <text x="422" y="85" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">Database & Gateway</text>
            <text x="422" y="97" font-family="Helvetica" font-size="6.2" fill="#718096" text-anchor="middle">terhubung normal</text>
            <text x="422" y="115" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#38A169" text-anchor="middle">🛡️ Server Sehat</text>
        </svg>
        <div class="diagram-caption">Gambar 3.3: Rincian Metrik pada 4 Kartu KPI Finansial Dashboard Administrator</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 19: BAB 3.4 + GAMBAR 7-DAY CHART --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">VISUALISASI GRAFIK TREN PENJUALAN 7 HARI</h1>

    <h2 class="section-title">3.4 Grafik Analisis Tren Arus Kas Sepekan</h2>
    <p>
        Grafik komparasi pendapatan tunai versus digital QRIS:
    </p>

    {{-- SVG VECTOR GAMBAR 3.4: 7-DAY CHART --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <text x="25" y="24" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C">GRAFIK TREN PENJUALAN SEPEKAN (TUNAI VS DIGITAL QRIS):</text>
            <!-- Legend -->
            <rect x="330" y="15" width="10" height="10" fill="#00AA13"/>
            <text x="345" y="23" font-family="Helvetica" font-size="6.5" fill="#4A5568">Tunai</text>
            <rect x="385" y="15" width="10" height="10" fill="#00AED6"/>
            <text x="400" y="23" font-family="Helvetica" font-size="6.5" fill="#4A5568">QRIS DOKU</text>
            
            <!-- Bars for 7 days -->
            <!-- Day 1 -->
            <rect x="40" y="80" width="16" height="45" fill="#00AA13"/>
            <rect x="58" y="95" width="16" height="30" fill="#00AED6"/>
            <text x="57" y="137" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Sen</text>

            <!-- Day 2 -->
            <rect x="100" y="70" width="16" height="55" fill="#00AA13"/>
            <rect x="118" y="85" width="16" height="40" fill="#00AED6"/>
            <text x="117" y="137" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Sel</text>

            <!-- Day 3 -->
            <rect x="160" y="65" width="16" height="60" fill="#00AA13"/>
            <rect x="178" y="80" width="16" height="45" fill="#00AED6"/>
            <text x="177" y="137" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Rab</text>

            <!-- Day 4 -->
            <rect x="220" y="60" width="16" height="65" fill="#00AA13"/>
            <rect x="238" y="75" width="16" height="50" fill="#00AED6"/>
            <text x="237" y="137" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Kam</text>

            <!-- Day 5 -->
            <rect x="280" y="55" width="16" height="70" fill="#00AA13"/>
            <rect x="298" y="70" width="16" height="55" fill="#00AED6"/>
            <text x="297" y="137" font-family="Helvetica" font-size="6.5" fill="#718096" text-anchor="middle">Jum</text>

            <!-- Day 6 (Peak) -->
            <rect x="340" y="40" width="16" height="85" fill="#00AA13"/>
            <rect x="358" y="50" width="16" height="75" fill="#00AED6"/>
            <text x="357" y="137" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">Sab 🔥</text>

            <!-- Day 7 (Peak) -->
            <rect x="400" y="35" width="16" height="90" fill="#00AA13"/>
            <rect x="418" y="45" width="16" height="80" fill="#00AED6"/>
            <text x="417" y="137" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">Min 🔥</text>
        </svg>
        <div class="diagram-caption">Gambar 3.4: Visualisasi Grafik Analisis Penjualan & Arus Kas 7 Hari Terakhir</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 20: BAB 3.5 + GAMBAR SIDEBAR NAVIGATION --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">STRUKTUR NAVIGASI SIDEBAR ADMINISTRATOR</h1>

    <h2 class="section-title">3.5 Struktur Navigasi Sidebar Responsif (partials/sidebar.blade.php)</h2>
    <p>
        Sidebar hijau tua Gojek (#00360D) memuat seluruh akses menu terintegrasi:
    </p>

    {{-- SVG VECTOR GAMBAR 3.5: SIDEBAR NAVIGATION --}}
    <div class="diagram-container">
        <svg width="460" height="150" viewBox="0 0 500 160">
            <rect x="5" y="5" width="490" height="150" rx="10" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Sidebar Simulation (Width 160) -->
            <rect x="25" y="15" width="160" height="130" rx="8" fill="#00360D"/>
            <text x="35" y="32" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF">🏪 {{ strtoupper($shop['app_name'] ?? 'SIKANDA') }} POS</text>
            <line x1="35" y1="38" x2="175" y2="38" stroke="#00661A"/>
            <rect x="30" y="44" width="150" height="14" rx="4" fill="#00661A"/>
            <text x="38" y="54" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#A8DAB5">📊 Dashboard Ringkasan</text>
            <text x="38" y="70" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">📦 Katalog Produk & Stok</text>
            <text x="38" y="84" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">📈 Laporan Penjualan</text>
            <text x="38" y="98" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">💰 Laporan Keuangan & Kas</text>
            <text x="38" y="112" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">👥 Manajemen Akun</text>
            <text x="38" y="126" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">⚙️ Pengaturan Toko</text>
            <text x="38" y="139" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">📖 Buku Panduan PDF</text>

            <!-- Explanation Box -->
            <rect x="200" y="15" width="275" height="130" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="215" y="35" font-family="Helvetica" font-size="8" font-weight="bold" fill="#00661A">FITUR SIDEBAR RESPANSIF:</text>
            <text x="215" y="55" font-family="Helvetica" font-size="6.8" fill="#2D3748">• Terintegrasi otomatis dengan sistem role permission.</text>
            <text x="215" y="72" font-family="Helvetica" font-size="6.8" fill="#2D3748">• Status menu aktif ditandai kotak hijau muda terang.</text>
            <text x="215" y="89" font-family="Helvetica" font-size="6.8" fill="#2D3748">• Menu "Buku Panduan" membuka web viewer & download PDF.</text>
            <text x="215" y="106" font-family="Helvetica" font-size="6.8" fill="#2D3748">• Footer sidebar memuat copyright resmi:</text>
            <text x="215" y="122" font-family="Helvetica" font-size="6.8" font-weight="bold" fill="#00880F">  © {{ date('Y') }} I Gusti Sultan. All rights reserved.</text>
        </svg>
        <div class="diagram-caption">Gambar 3.5: Struktur Menu Navigasi Sidebar Responsif (resources/views/partials/sidebar.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 21 s/d 78: Bab 4 hingga Bab 10 dengan Diagram Lengkap --}}
    {{-- ========================================================================= --}}
    @include('admin.manual.pdf_chapters_rest')

</body>
</html>
