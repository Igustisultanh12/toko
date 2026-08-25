<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Panduan Lengkap Sistem POS & Administrator - {{ $shop['app_name'] ?? 'POS' }}</title>
    <style>
        @page {
            margin: 2.2cm 1.8cm 2.2cm 1.8cm;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 9.2pt;
            line-height: 1.5;
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
            padding-top: 25px;
        }

        .cover-badge {
            background-color: #E6F4EA;
            color: #00880F;
            font-weight: 800;
            font-size: 8.5pt;
            padding: 5px 18px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 15px;
            border: 1.5px solid #A8DAB5;
        }

        .cover-title {
            font-size: 23pt;
            font-weight: 900;
            color: #1A202C;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            line-height: 1.2;
            margin: 0 0 10px 0;
        }

        .cover-subtitle {
            font-size: 12.5pt;
            font-weight: 700;
            color: #00AA13;
            margin: 0 0 20px 0;
            line-height: 1.3;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cover-divider {
            width: 120px;
            height: 4px;
            background-color: #00AA13;
            margin: 12px auto 20px auto;
            border-radius: 2px;
        }

        .cover-desc {
            font-size: 9pt;
            color: #4A5568;
            max-width: 520px;
            margin: 0 auto 25px auto;
            line-height: 1.5;
            text-align: center;
        }

        .cover-meta-box {
            background-color: #F7FAFC;
            border: 1.5px solid #E2E8F0;
            border-radius: 12px;
            padding: 15px;
            text-align: left;
            margin: 0 auto;
            width: 90%;
        }

        .cover-meta-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 8.2pt;
        }

        .cover-meta-table td {
            padding: 3.5px 6px;
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
            margin-top: 30px;
            font-size: 7.5pt;
            color: #718096;
            letter-spacing: 1.5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* HEADINGS */
        h1.chapter-title {
            font-size: 14.5pt;
            font-weight: 900;
            color: #00661A;
            border-bottom: 2.5px solid #00AA13;
            padding-bottom: 5px;
            margin-top: 0;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .chapter-num {
            font-size: 9.5pt;
            font-weight: 800;
            color: #00AA13;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 2px;
        }

        h2.section-title {
            font-size: 11pt;
            font-weight: 800;
            color: #2D3748;
            margin-top: 14px;
            margin-bottom: 7px;
            border-left: 4px solid #00AA13;
            padding-left: 8px;
        }

        h3.subsection-title {
            font-size: 9.8pt;
            font-weight: 700;
            color: #4A5568;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        p {
            margin: 0 0 7px 0;
            text-align: justify;
        }

        /* TABLES */
        table.doc-table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0 14px 0;
            font-size: 7.8pt;
        }

        table.doc-table th {
            background-color: #00661A;
            color: #FFFFFF;
            font-weight: bold;
            text-transform: uppercase;
            padding: 6px 8px;
            border: 1px solid #004D13;
            text-align: left;
            letter-spacing: 0.5px;
        }

        table.doc-table td {
            padding: 5px 8px;
            border: 1px solid #CBD5E0;
            vertical-align: top;
        }

        table.doc-table tr:nth-child(even) td {
            background-color: #F8FAFC;
        }

        /* CALLOUT BOXES */
        .callout {
            border-radius: 8px;
            padding: 8px 12px;
            margin: 10px 0;
            font-size: 8.2pt;
            page-break-inside: avoid;
        }

        .callout-info {
            background-color: #EBF8FF;
            border-left: 4px solid #3182CE;
            color: #2B6CB0;
        }

        .callout-success {
            background-color: #F0FFF4;
            border-left: 4px solid #38A169;
            color: #276749;
        }

        .callout-warning {
            background-color: #FFFAF0;
            border-left: 4px solid #DD6B20;
            color: #C05621;
        }

        .callout-danger {
            background-color: #FFF5F5;
            border-left: 4px solid #E53E3E;
            color: #C53030;
        }

        .callout-title {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 7.8pt;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
            display: block;
        }

        /* STEP CARDS */
        .step-box {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            padding: 8px 10px;
            margin-bottom: 8px;
            page-break-inside: avoid;
        }

        .step-header {
            font-weight: bold;
            font-size: 8.8pt;
            color: #1A202C;
            margin-bottom: 3px;
        }

        .step-num {
            background-color: #00AA13;
            color: #FFFFFF;
            font-size: 7.2pt;
            font-weight: bold;
            padding: 1.5px 5px;
            border-radius: 4px;
            margin-right: 4px;
            display: inline-block;
        }

        /* SVG DIAGRAM CONTAINER */
        .diagram-container {
            text-align: center;
            margin: 12px 0 14px 0;
            background-color: #FAFAFA;
            border: 1.5px solid #E2E8F0;
            border-radius: 10px;
            padding: 10px;
            page-break-inside: avoid;
        }

        .diagram-caption {
            font-size: 7.5pt;
            font-weight: bold;
            color: #4A5568;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 6px;
        }

        /* CODE & SHORTCUT BADGES */
        code {
            font-family: 'Courier New', Courier, monospace;
            background-color: #EDF2F7;
            color: #C53030;
            padding: 1px 4px;
            border-radius: 3px;
            font-size: 7.8pt;
            font-weight: bold;
        }

        .badge-shortcut {
            background-color: #2D3748;
            color: #FFFFFF;
            font-family: monospace;
            font-size: 7.2pt;
            padding: 1.5px 4.5px;
            border-radius: 3px;
            font-weight: bold;
            display: inline-block;
        }

        /* TOC */
        .toc-chapter-row {
            margin-bottom: 5px;
            font-size: 8.2pt;
        }

        .toc-chapter-title {
            font-weight: bold;
            color: #1A202C;
            text-transform: uppercase;
        }

        .toc-sub-row {
            padding-left: 16px;
            color: #4A5568;
            font-size: 7.8pt;
            margin-top: 1.5px;
        }

        ul, ol {
            margin: 0 0 8px 0;
            padding-left: 18px;
        }

        li {
            margin-bottom: 2.5px;
        }
    </style>
</head>
<body>

    {{-- DOMPDF AUTOMATIC PAGE NUMBERING SCRIPT --}}
    <script type="text/php">
        if (isset($pdf)) {
            $font = $fontMetrics->getFont("Helvetica", "normal");
            $size = 8;
            $color = array(0.5, 0.5, 0.5);

            $textRight = "Halaman {PAGE_NUM} dari {PAGE_COUNT}";
            $widthRight = $fontMetrics->get_text_width($textRight, $font, $size);
            
            $pdf->page_text(595 - 51 - $widthRight, 842 - 38, $textRight, $font, $size, $color);
            
            $appName = strtoupper($shop['app_name'] ?? 'POS');
            $footerLeft = "Buku Panduan Lengkap Sistem " . $appName . " | © I Gusti Sultan";
            $pdf->page_text(51, 842 - 38, $footerLeft, $font, $size, $color);

            $pdf->line(51, 842 - 45, 595 - 51, 842 - 45, array(0.85, 0.85, 0.85), 0.75);
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

        {{-- VECTOR LOGO / BADGE --}}
        <div style="margin: 10px auto 15px auto;">
            <svg width="80" height="80" viewBox="0 0 100 100">
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
    
    <div style="margin-top: 40px; text-align: right;" class="no-break">
        <p style="margin-bottom: 50px;">Jember, {{ date('d F Y') }}<br><b>Lead Software Architect & Server Maintainer</b></p>
        <p><b><u>I Gusti Sultan</u></b><br><span style="font-size: 8pt; color: #718096;">Sistem Arsitek & Pengelola Server Utama</span></p>
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

    <div class="toc-chapter-row" style="margin-top: 10px;">
        <div class="toc-chapter-title">BAB 2: MANAJEMEN OTENTIKASI & KEAMANAN AKUN</div>
        <div class="toc-sub-row">2.1 Akses Masuk Sistem (Halaman Login /login) & Tata Letak Antarmuka ............................ Halaman 11</div>
        <div class="toc-sub-row">2.2 Simulasi Gambar Antarmuka Login Blade ................................................................... Halaman 12</div>
        <div class="toc-sub-row">2.3 Proteksi Formulir CSRF, Enkripsi Bcrypt & Proteksi Brute Force ..................................... Halaman 13</div>
        <div class="toc-sub-row">2.4 Manajemen Profil Mandiri & Prosedur Pergantian Kata Sandi ......................................... Halaman 14</div>
        <div class="toc-sub-row">2.5 Prosedur Keluar Aman (Logout) & Keamanan Sesi Kasir .................................................... Halaman 15</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 10px;">
        <div class="toc-chapter-title">BAB 3: PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</div>
        <div class="toc-sub-row">3.1 Antarmuka Panel Kontrol Administrator (/dashboard) .................................................... Halaman 16</div>
        <div class="toc-sub-row">3.2 Simulasi Gambar Dashboard & Struktur Banner Utama ................................................ Halaman 17</div>
        <div class="toc-sub-row">3.3 Analitik Indikator Kinerja Utama (KPI) Finansial Real-Time ............................................. Halaman 18</div>
        <div class="toc-sub-row">3.4 Visualisasi Grafik Tren Arus Kas & Analisis Penjualan 7 Hari ........................................... Halaman 19</div>
        <div class="toc-sub-row">3.5 Struktur Navigasi Sidebar Responsif & Status Operasional Toko ..................................... Halaman 20</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 10px;">
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
        <div class="toc-sub-row">5.13 Pengiriman Bukti Pembayaran Digital via WhatsApp Pelanggan .................................... Halaman 41</div>
        <div class="toc-sub-row">5.14 Modul Ekspedisi: Pembuatan & Pencetakan Label Resi Paket A6 ..................................... Halaman 42</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
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

    <div class="toc-chapter-row" style="margin-top: 8px;">
        <div class="toc-chapter-title">BAB 7: TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</div>
        <div class="toc-sub-row">7.1 Landasan Hukum UU ITE No. 11/2008 & Integritas Dokumen Digital ................................. Halaman 51</div>
        <div class="toc-sub-row">7.2 Standar Kriptografi SHA-256 & Timestamp Keabsahan ................................................... Halaman 52</div>
        <div class="toc-sub-row">7.3 Struktur Format Penomoran Dokumen Laporan Dinamis (LKEU/LPK/LSTK) ....................... Halaman 53</div>
        <div class="toc-sub-row">7.4 Penandatangan Dokumen Otomatis Berdasarkan Akun & Gelar Alias ................................. Halaman 54</div>
        <div class="toc-sub-row">7.5 Portal Publik Verifikasi Keaslian Dokumen Laporan (/verify/document) ............................ Halaman 55</div>
        <div class="toc-sub-row">7.6 Portal Publik Verifikasi Keaslian Faktur Pelanggan (/verify/tte/{trx}) ................................. Halaman 56</div>
        <div class="toc-sub-row">7.7 Tautan Faktur Digital Sementara Bertanda Tangan (Expired 24 Jam) ................................. Halaman 57</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
        <div class="toc-chapter-title">BAB 8: PENGATURAN TOKO, KONFIGURASI & INTEGRASI SISTEM</div>
        <div class="toc-sub-row">8.1 Pusat Pengaturan Sistem (/admin/settings) ..................................................................... Halaman 58</div>
        <div class="toc-sub-row">8.2 Personalisasi Identitas Bisnis, Nama Usaha, Alamat & Logo Toko ..................................... Halaman 59</div>
        <div class="toc-sub-row">8.3 Kustomisasi Branding Aplikasi, Prefix Invoice & Favicon Browser .................................... Halaman 60</div>
        <div class="toc-sub-row">8.4 Pengaturan & Pengunggahan Suara Bel Kasir (Audio Chime MP3/WAV) ............................ Halaman 61</div>
        <div class="toc-sub-row">8.5 Konfigurasi Gateway DOKU Merchant (Sandbox & Production) ......................................... Halaman 62</div>
        <div class="toc-sub-row">8.6 Konfigurasi Integrasi Bot Notifikasi Telegram Toko ........................................................ Halaman 63</div>
        <div class="toc-sub-row">8.7 Pengaturan Footer Struk Kasir & Kebijakan Toko .............................................................. Halaman 64</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
        <div class="toc-chapter-title">BAB 9: MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</div>
        <div class="toc-sub-row">9.1 Daftar Akun Pengguna (/admin/users) ............................................................................ Halaman 65</div>
        <div class="toc-sub-row">9.2 Pendaftaran Akun Kasir / Admin Baru & Hak Wewenang Role .......................................... Halaman 66</div>
        <div class="toc-sub-row">9.3 Konfigurasi Kolom "Alias / Gelar Jabatan TTD" Penandatangan Dokumen ......................... Halaman 67</div>
        <div class="toc-sub-row">9.4 Pembaruan Data Pengguna & Prosedur Reset Kata Sandi ................................................. Halaman 68</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 8px;">
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
    {{-- HALAMAN 6: BAB 1.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">GAMBARAN UMUM & ARSITEKTUR TEKNOLOGI SISTEM</h1>

    <h2 class="section-title">1.1 Latar Belakang & Filosofi Rancangan Sistem Kasir Modern</h2>
    <p>
        Dalam era transformasi digital perniagaan modern, kecepatan dan ketepatan pencatatan transaksi dagang di titik penjualan (*Point of Sale*) memegang peranan krusial dalam menentukan kepuasan pelanggan serta kesehatan arus kas (*cashflow*) badan usaha. Sistem kasir konvensional yang mengandalkan pencatatan buku manual atau aplikasi kasir lawas sering kali menimbulkan berbagai kendala kronis, antara lain:
    </p>
    <ul>
        <li>Antrean panjang di meja kasir akibat proses entri data barang yang lambat dan rentan salah hitung.</li>
        <li>Ketidaksesuaian antara stok fisik di rak toko dengan catatan pembukuan gudang (*stock mismatch*).</li>
        <li>Kesulitan dalam merekonsiliasi pembayaran non-tunai (seperti QRIS dan dompet digital) dengan uang fisik di laci kasir.</li>
        <li>Ketiadaan bukti audit formal berkekuatan hukum atas dokumen laporan keuangan yang dicetak.</li>
    </ul>
    <p>
        Sistem Point of Sale (POS) ini hadir sebagai solusi komprehensif yang memadukan kecepatan eksekusi transaksi di garis depan (*front-office cashier*) dengan keandalan analitik finansial di garis belakang (*back-office management*).
    </p>
    <p>
        Dengan menerapkan metodologi reaktivitas instan (*sub-second transaction latency*), kasir dapat melayani pelanggan dalam hitungan detik, baik untuk pembayaran uang tunai (dengan penghitungan kembalian otomatis) maupun pembayaran digital QRIS Bank Indonesia yang terkonfirmasi secara real-time.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 7: BAB 1.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">ARSITEKTUR TEKNOLOGI & STACK PERANGKAT LUNAK</h1>

    <h2 class="section-title">1.2 Tumpukan Teknologi (Technology Stack) & Arsitektur MVC</h2>
    <p>
        Sistem dirancang dengan arsitektur <i>Model-View-Controller (MVC)</i> bertaraf industri untuk menjamin skalabilitas, kecepatan akses, dan keamanan data tingkat tinggi:
    </p>
    
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Komponen Arsitektur</th>
            <th style="width: 30%;">Pilihan Teknologi</th>
            <th>Peran & Keunggulan Fungsional</th>
        </tr>
        <tr>
            <td><b>Backend Core</b></td>
            <td>Laravel 11.x (PHP 8.2+)</td>
            <td>Menyediakan routing aman, middleware role otentikasi, Eloquent ORM berkecepatan tinggi, serta sistem antrean webhook.</td>
        </tr>
        <tr>
            <td><b>Frontend Styling</b></td>
            <td>Tailwind CSS 3.x</td>
            <td>Menghasilkan antarmuka bernuansa hijau modern (*Gojek style*) yang ringan, responsif, dan ergonomis untuk kasir.</td>
        </tr>
        <tr>
            <td><b>Client Interactivity</b></td>
            <td>Alpine.js 3.x</td>
            <td>Menangani reaktivitas keranjang belanja, kalkulasi uang kembalian instan, serta polling status pembayaran QRIS tanpa reload.</td>
        </tr>
        <tr>
            <td><b>Mesin Rendering PDF</b></td>
            <td>DomPDF Facade</td>
            <td>Menghasilkan dokumen cetak resmi berstandar A4 Landscape (Laporan), A4 Portrait (Faktur), A6 (Label Resi), dan 58mm (Struk Thermal).</td>
        </tr>
        <tr>
            <td><b>Payment Gateway</b></td>
            <td>DOKU Merchant API</td>
            <td>Integrasi QRIS Dinamis Bank Indonesia untuk memfasilitasi transaksi GoPay, OVO, DANA, BCA, Mandiri, ShopeePay, dll.</td>
        </tr>
        <tr>
            <td><b>Relational Database</b></td>
            <td>MySQL 8.0 / MariaDB</td>
            <td>Penyimpanan relasional data produk, transaksi, detail item, audit log, dan pengaturan konfigurasi toko.</td>
        </tr>
    </table>

    <div class="callout callout-info">
        <span class="callout-title">Keunggulan Desain Antarmuka Tailwind CSS</span>
        Antarmuka kasir dirancang dengan prinsip *mobile-first & touch-friendly*. Tombol-tombol navigasi memiliki area sentuh (*hit area*) yang luas dengan sudut membulat (*squircle shape*) untuk kenyamanan kasir saat menggunakan layar sentuh monitor POS maupun perangkat tablet.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 8: BAB 1.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">MATRIKS HAK AKSES PENGGUNA (ROLE MATRIX)</h1>

    <h2 class="section-title">1.3 Matriks Perbandingan Hak Akses Pengguna (Admin vs Kasir)</h2>
    <p>
        Sistem membagi akses pengguna ke dalam dua peran (*role*) terpisah guna mencegah manipulasi data finansial dan menjamin pembagian tanggung jawab yang tertib:
    </p>

    <table class="doc-table">
        <tr>
            <th>Fitur / Modul Menu</th>
            <th style="text-align: center; width: 22%;">Administrator Toko</th>
            <th style="text-align: center; width: 22%;">Petugas Kasir</th>
        </tr>
        <tr>
            <td>Halaman Login & Autentikasi (/login)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
        </tr>
        <tr>
            <td>Dashboard Ringkasan & Omset (/dashboard)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Ditolak (403)</td>
        </tr>
        <tr>
            <td>Katalog & Tambah Produk (/admin/products)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Ditolak (403)</td>
        </tr>
        <tr>
            <td>Import Data Produk Excel (/admin/products/import)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Ditolak (403)</td>
        </tr>
        <tr>
            <td>Operasional Kasir POS (/cashier/pos)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
        </tr>
        <tr>
            <td>Laporan Penjualan, Keuangan & Stok (/admin/reports/*)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Ditolak (403)</td>
        </tr>
        <tr>
            <td>Pengaturan Identitas Toko & DOKU (/admin/settings)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Ditolak (403)</td>
        </tr>
        <tr>
            <td>Manajemen Pengguna & Alias TTE (/admin/users)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Ditolak (403)</td>
        </tr>
    </table>

    <div class="callout callout-success">
        <span class="callout-title">Hak Akses Fleksibel untuk Administrator</span>
        Administrator memiliki wewenang menyeluruh, termasuk membuka rute Kasir POS. Saat berada di layar kasir, header kasir menampilkan tombol pintas <b>← Dashboard Admin</b> agar admin dapat kembali ke dashboard pengelolaan tanpa perlu logout.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 9: BAB 1.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">INTEGRASI PEMBAYARAN DIGITAL QRIS DOKU</h1>

    <h2 class="section-title">1.4 Ekosistem Pembayaran Digital QRIS Bank Indonesia & DOKU Gateway</h2>
    <p>
        Sebagai wujud adaptasi terhadap perkembangan metode pembayaran non-tunai di Indonesia, sistem ini terhubung secara langsung dengan <b>DOKU Payment Gateway</b> untuk menghasilkan kode QRIS Dinamis (*Dynamic QRIS*) standar Bank Indonesia.
    </p>
    <p>
        Karakteristik integrasi QRIS Dinamis pada sistem ini meliputi:
    </p>
    <ul>
        <li><b>Nominal Tagihan Eksak:</b> QR Code yang di-generate memuat nilai total transaksi belanja secara presisi hingga ke satuan rupiah terakhir. Pelanggan tidak perlu mengetik nominal secara manual, mencegah kesalahan input (*overpay / underpay*).</li>
        <li><b>Single-Use Code:</b> Kode QRIS bersifat sekali pakai (*one-time use*) dan otomatis kedaluwarsa jika tidak dibayar dalam batas waktu yang ditentukan.</li>
        <li><b>Asynchronous Webhook Notification:</b> Saat pelanggan menyelesaikan pembayaran di aplikasi e-wallet mereka, server DOKU mengirimkan sinyal HTTP POST webhook ke endpoint <code>/doku/notification</code>. Layar kasir otomatis mendeteksi keberhasilan bayar dalam hitungan detik.</li>
        <li><b>Interoperabilitas Nasional:</b> Mendukung seluruh aplikasi perbankan digital (BCA Mobile, Livin by Mandiri, BRImo, BNI Mobile, CIMB Octo, dll) serta seluruh dompet digital nasional (GoPay, OVO, DANA, ShopeePay, LinkAja, AstraPay).</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 10: BAB 1.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">LEGALITAS TANDA TANGAN ELEKTRONIK (TTE)</h1>

    <h2 class="section-title">1.5 Landasan Hukum & Validitas Tanda Tangan Elektronik UU ITE No. 11/2008</h2>
    <p>
        Dalam tata kelola bisnis formal dan audit perpajakan, keabsahan dokumen laporan menjadi faktor penentu integritas usaha. Sistem ini mengadopsi <b>Tanda Tangan Elektronik (TTE)</b> berbasis kode QR bersertifikasi kriptografis pada setiap lembar laporan resmi (Laporan Penjualan, Laporan Keuangan, Laporan QRIS, Laporan Stok, dan Faktur Penjualan).
    </p>

    <div class="callout callout-success">
        <span class="callout-title">Pasal 11 UU ITE Nomor 11 Tahun 2008</span>
        "Tanda Tangan Elektronik memiliki kekuatan hukum dan akibat hukum yang sah selama memenuhi persyaratan keaslian identitas penandatangan, keutuhan data, dan kepemilikan sarana pembuatan tanda tangan."
    </div>

    <p>
        Penerapan TTE pada sistem kasir ini memenuhi parameter legalitas formal:
    </p>
    <ol>
        <li><b>Otentisitas Identitas (Authenticity):</b> Nama pejabat dan gelar jabatan resmi (*alias*) diambil langsung dari akun pengguna terverifikasi yang mencetak dokumen.</li>
        <li><b>Keutuhan Dokumen (Integrity):</b> Menggunakan tanda tangan kriptografis SHA-256 yang mengunci data laporan dari risiko manipulasi pasca-cetak.</li>
        <li><b>Verifikasi Publik Mandiri:</b> Setiap pihak ketiga dapat memindai QR Code TTE menggunakan kamera ponsel biasa untuk mengakses portal pengujian keaslian dokumen resmi di <code>/verify/document</code>.</li>
    </ol>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 11: BAB 2.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">MANAJEMEN OTENTIKASI & KEAMANAN AKUN</h1>

    <h2 class="section-title">2.1 Akses Masuk Sistem (Halaman Login /login)</h2>
    <p>
        Untuk memastikan hanya petugas berwenang yang dapat mengoperasikan kasir dan mengakses panel administrasi, sistem menerapkan protokol otentikasi terpusat pada rute <code>/login</code>.
    </p>
    <p>
        Setiap petugas kasir dan staf administrator wajib memiliki akun pribadi dengan alamat email dan kata sandi yang terdaftar di basis data. Berbagi akun antar kasir sangat tidak disarankan demi menjaga transparansi audit transaksi per petugas.
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 1</span> Buka Peramban Web</div>
        <p>Buka browser modern (Google Chrome, Firefox, Safari, atau Edge) pada komputer kasir atau tablet.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 2</span> Masukkan Alamat URL Sistem</div>
        <p>Akses alamat domain sistem kasir toko Anda, misalnya: <code>https://domain-anda.com/login</code>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 3</span> Input Kredensial Pengguna</div>
        <p>Ketikkan alamat email dan password akun Anda, lalu klik tombol <b>Masuk ke Kasir</b>.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 12: BAB 2.2 + GAMBAR BLADE LOGIN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">GAMBAR TATA LETAK ANTARMUKA LOGIN BLADE</h1>

    <h2 class="section-title">2.2 Visualisasi Antarmuka Halaman Login (auth/login.blade.php)</h2>
    <p>
        Berikut adalah visualisasi antarmuka formulir otentikasi masuk pengguna:
    </p>

    {{-- SVG VECTOR GAMBAR LOGIN --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <!-- Background Container -->
            <rect x="10" y="10" width="480" height="230" rx="16" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="2"/>
            <!-- Login Card -->
            <rect x="110" y="25" width="280" height="200" rx="14" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1.5"/>
            <!-- Logo Toko Icon -->
            <rect x="225" y="38" width="50" height="50" rx="12" fill="#00AA13"/>
            <path d="M240 63 L248 71 L262 53" stroke="#FFFFFF" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            <!-- Header Text -->
            <text x="250" y="102" font-family="Helvetica" font-size="10" font-weight="bold" fill="#1A202C" text-anchor="middle">MASUK SISTEM KASIR POS</text>
            <text x="250" y="114" font-family="Helvetica" font-size="7" fill="#718096" text-anchor="middle">Silakan masukkan email & kata sandi terdaftar</text>
            <!-- Input Email -->
            <rect x="130" y="123" width="240" height="22" rx="6" fill="#F7FAFC" stroke="#E2E8F0" stroke-width="1"/>
            <text x="140" y="138" font-family="Helvetica" font-size="7.5" fill="#4A5568">✉ kasir1@toko.site</text>
            <!-- Input Password -->
            <rect x="130" y="152" width="240" height="22" rx="6" fill="#F7FAFC" stroke="#E2E8F0" stroke-width="1"/>
            <text x="140" y="167" font-family="Helvetica" font-size="7.5" fill="#4A5568">🔒 ••••••••••••</text>
            <!-- Login Button -->
            <rect x="130" y="182" width="240" height="26" rx="8" fill="#00AA13"/>
            <text x="250" y="199" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">MASUK KE KASIR / DASHBOARD</text>
            <!-- Footer -->
            <text x="250" y="218" font-family="Helvetica" font-size="6.5" fill="#A0AEC0" text-anchor="middle">© I Gusti Sultan. All rights reserved.</text>
        </svg>
        <div class="diagram-caption">Gambar 2.1: Antarmuka Formulir Otentikasi Pengguna (resources/views/auth/login.blade.php)</div>
    </div>

    <p>
        <b>Fitur-Fitur Penting pada Antarmuka Login:</b>
    </p>
    <ul>
        <li><b>Otomatisasi Pengalihan Rute (Smart Redirect):</b> Akun kasir langsung diarahkan ke layar kasir <code>/cashier/pos</code>, sedangkan admin diarahkan ke <code>/dashboard</code>.</li>
        <li><b>Pesan Kesalahan Presisi:</b> Jika email atau password tidak cocok, sistem memberikan notifikasi kesalahan berwarna merah tanpa mengekspos data sensitif server.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 13: BAB 2.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">ARSITEKTUR KEAMANAN CSRF & BCRYPT HASHING</h1>

    <h2 class="section-title">2.3 Arsitektur Keamanan CSRF, Hash Bcrypt & Perlindungan Sesi</h2>
    <p>
        Sistem kasir mengimplementasikan standar keamanan web tertinggi guna melindungi integritas data finansial dan mencegah akses tanpa hak:
    </p>
    
    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Mekanisme Keamanan</th>
            <th style="width: 30%;">Standar Protokol</th>
            <th>Fungsi Perlindungan Terhadap Ancaman</th>
        </tr>
        <tr>
            <td><b>Proteksi Formulir CSRF</b></td>
            <td>Laravel CSRF Token (@csrf)</td>
            <td>Mencegah serangan pemalsuan permintaan antar-situs (*Cross-Site Request Forgery*) pada setiap submit formulir.</td>
        </tr>
        <tr>
            <td><b>Hashing Kata Sandi</b></td>
            <td>Bcrypt Hash (Cost 12)</td>
            <td>Kata sandi dienkripsi satu arah dengan garam acak unik. Tidak dapat didekripsi bahkan jika database bocor.</td>
        </tr>
        <tr>
            <td><b>Enkripsi Sesi Browser</b></td>
            <td>Encrypted Session Cookies</td>
            <td>Data sesi kasir disimpan dalam cookie terenkripsi dengan atribut <code>HttpOnly</code> dan <code>SameSite=Lax</code>.</td>
        </tr>
        <tr>
            <td><b>Proteksi Brute Force</b></td>
            <td>Rate Limiter (5 req/min)</td>
            <td>Mengunci formulir login sementara jika terjadi 5 kali kegagalan input kata sandi berturut-turut.</td>
        </tr>
    </table>

    <div class="callout callout-warning">
        <span class="callout-title">Pentingnya Kerahasiaan Kata Sandi</span>
        Setiap petugas kasir bertanggung jawab penuh atas segala transaksi yang dicatat menggunakan akun pribadinya. Jangan pernah memberikan password kepada personil lain.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 14: BAB 2.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">MANAJEMEN PROFIL PENGGUNA & GANTI PASSWORD</h1>

    <h2 class="section-title">2.4 Manajemen Profil Pengguna & Prosedur Pergantian Kata Sandi</h2>
    <p>
        Setiap pengguna yang telah login dapat mengelola informasi dasar akun pribadinya melalui menu <b>Profil Pengguna</b> (<code>/profile</code>).
    </p>
    
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 1</span> Akses Halaman Profil Akun</div>
        <p>Klik nama pengguna di pojok kanan atas header panel admin atau menu profil kasir untuk membuka formulir edit akun.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 2</span> Perbarui Nama Lengkap & Email</div>
        <p>Sesuaikan nama lengkap Anda jika terjadi perubahan nama personil resmi.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 3</span> Pembaruan Kata Sandi Mandiri</div>
        <p>Masukkan <b>Kata Sandi Lama</b> untuk verifikasi, lalu ketikkan <b>Kata Sandi Baru</b> (minimal 6 karakter) dan konfirmasi kata sandi baru. Klik tombol <b>Simpan Perubahan</b>.</p>
    </div>

    <p>
        Sistem secara otomatis memperbarui hash kata sandi di database dan meregenerasi ID sesi aktif untuk mencegah *session hijacking*.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 15: BAB 2.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">PROSEDUR KELUAR AMAN (LOGOUT)</h1>

    <h2 class="section-title">2.5 Prosedur Keluar Aman (Logout) & Keamanan Multi-Perangkat</h2>
    <p>
        Pada saat pergantian giliran kerja (*shift*) kasir, istirahat kerja, atau toko tutup di malam hari, petugas kasir wajib melakukan proses <b>Keluar (Logout)</b> guna mengunci akses sistem:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Klik Tombol Keluar / Logout</div>
        <p>Klik tombol merah <b>Keluar</b> pada bagian bawah menu navigasi sidebar.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Eksekusi Pembersihan Sesi Terproteksi CSRF</div>
        <p>Sistem memproses permintaan POST terproteksi, menghapus sesi login aktif dari memori server, dan membersihkan seluruh cache lokal browser.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Konfirmasi Pengalihan Halaman</div>
        <p>Browser otomatis dialihkan kembali ke layar login <code>/login</code>. Mesin kasir terkunci aman dan siap digunakan oleh petugas kasir shift berikutnya.</p>
    </div>

    <div class="callout callout-danger">
        <span class="callout-title">Peringatan Keamanan Meja Kasir</span>
        Dilarang meninggalkan komputer kasir dalam kondisi login tanpa pengawasan. Selalu lakukan logout atau kunci layar (*lock screen*) saat meninggalkan meja kasir.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 16: BAB 3.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</h1>

    <h2 class="section-title">3.1 Antarmuka Panel Kontrol Administrator (/dashboard)</h2>
    <p>
        Dashboard Administrator (<code>/dashboard</code>) adalah pusat komando terpadu tempat pengelola toko memantau denyut nadi bisnis secara real-time. Antarmuka ini dirancang dengan gaya visual hijau Gojek (#00AA13) yang modern, bersih, dan memprioritaskan keterbacaan data finansial tingkat tinggi.
    </p>
    <p>
        Komponen utama dashboard administrator terdiri atas:
    </p>
    <ol>
        <li><b>Banner Utama Ringkasan Omset:</b> Menampilkan total penerimaan kas hari berjalan beserta volume produk terjual dan order sukses.</li>
        <li><b>Tombol Aksi Cepat (Quick Action Squircle):</b> Akses satu klik menuju kasir POS, tambah barang, laporan penjualan, rekap stok, dan laporan keuangan.</li>
        <li><b>Banner Buku Panduan Pengguna:</b> Tautan cepat untuk membaca buku pedoman online atau mengunduh dokumen PDF resmi.</li>
        <li><b>Kartu Metrik KPI 4 Kolom:</b> Omset hari ini, total transaksi, item terjual, dan status operasional toko.</li>
        <li><b>Grafik Analisis Tren 7 Hari Terakhir:</b> Visualisasi tren omset tunai vs digital QRIS harian.</li>
    </ol>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 17: BAB 3.2 + GAMBAR DASHBOARD --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">GAMBAR ANTARMUKA DASHBOARD ADMINISTRATOR</h1>

    <h2 class="section-title">3.2 Visualisasi Dashboard & Struktur Banner Utama (admin/dashboard.blade.php)</h2>
    <p>
        Berikut adalah visualisasi panel kontrol dashboard utama administrator:
    </p>

    {{-- SVG VECTOR GAMBAR DASHBOARD --}}
    <div class="diagram-container">
        <svg width="460" height="225" viewBox="0 0 500 245">
            <!-- Background Container -->
            <rect x="5" y="5" width="490" height="235" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Top App Bar -->
            <rect x="15" y="15" width="470" height="30" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="25" y="34" font-family="Helvetica" font-size="9" font-weight="bold" fill="#1A202C">📊 DASHBOARD UTAMA • {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
            <rect x="375" y="20" width="100" height="20" rx="6" fill="#00AA13"/>
            <text x="425" y="33" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">🛒 KASIR POS (B)</text>
            <!-- Banner Omset Gojek Pocket -->
            <rect x="15" y="52" width="470" height="65" rx="12" fill="#00661A"/>
            <text x="30" y="70" font-family="Helvetica" font-size="8" font-weight="bold" fill="#A8DAB5">⚡ REAL-TIME HARI INI • {{ date('d F Y') }}</text>
            <text x="30" y="92" font-family="Helvetica" font-size="16" font-weight="bold" fill="#FFFFFF">Rp 1.450.000</text>
            <text x="30" y="107" font-family="Helvetica" font-size="7.5" fill="#E2E8F0">18 Transaksi Sukses • 42 Item Terjual • Status: Normal</text>
            <!-- Quick Action Buttons on Banner -->
            <rect x="360" y="65" width="55" height="42" rx="8" fill="#00880F"/>
            <text x="387" y="90" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">+ PRODUK</text>
            <rect x="422" y="65" width="55" height="42" rx="8" fill="#00880F"/>
            <text x="449" y="90" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">LAPORAN</text>
            <!-- 4 KPI Cards -->
            <rect x="15" y="125" width="112" height="50" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="25" y="140" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">OMSET HARI INI</text>
            <text x="25" y="158" font-family="Helvetica" font-size="10" font-weight="bold" fill="#00AA13">Rp 1.450.000</text>
            
            <rect x="134" y="125" width="112" height="50" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="144" y="140" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">TOTAL TRANSAKSI</text>
            <text x="144" y="158" font-family="Helvetica" font-size="10" font-weight="bold" fill="#2B6CB0">18 Nota</text>

            <rect x="254" y="125" width="112" height="50" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="264" y="140" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">ITEM TERJUAL</text>
            <text x="264" y="158" font-family="Helvetica" font-size="10" font-weight="bold" fill="#D69E2E">42 Unit</text>

            <rect x="373" y="125" width="112" height="50" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="383" y="140" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">STATUS TOKO</text>
            <text x="383" y="158" font-family="Helvetica" font-size="9" font-weight="bold" fill="#38A169">● AKTIF ONLINE</text>
            <!-- 7-Day Chart Mini Bar -->
            <rect x="15" y="182" width="470" height="48" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="25" y="196" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#4A5568">TREN ARUS KAS 7 HARI TERAKHIR (TUNAI VS DIGITAL QRIS):</text>
            <rect x="100" y="205" width="30" height="16" fill="#00AA13"/>
            <rect x="150" y="202" width="30" height="19" fill="#00AA13"/>
            <rect x="200" y="200" width="30" height="21" fill="#00AA13"/>
            <rect x="250" y="195" width="30" height="26" fill="#00AA13"/>
            <rect x="300" y="198" width="30" height="23" fill="#00AA13"/>
            <rect x="350" y="192" width="30" height="29" fill="#00AA13"/>
            <rect x="400" y="188" width="30" height="33" fill="#00AA13"/>
        </svg>
        <div class="diagram-caption">Gambar 3.1: Antarmuka Dashboard & KPI Analitik Real-Time (resources/views/admin/dashboard.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 18: BAB 3.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">ANALITIK KPI FINANSIAL REAL-TIME</h1>

    <h2 class="section-title">3.3 Analitik Indikator Kinerja Utama (KPI) Finansial Real-Time</h2>
    <p>
        Sistem menghitung metrik finansial secara instan langsung dari tabel <code>sales</code> dan <code>sale_details</code> tanpa jeda pemrosesan (*zero caching latency*):
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Kartu Statistik KPI</th>
            <th style="width: 30%;">Kueri Basis Data</th>
            <th>Interpretasi & Manfaat Manajemen</th>
        </tr>
        <tr>
            <td><b>Penjualan Hari Ini</b></td>
            <td><code>WHERE DATE(created_at) = CURDATE() AND payment_status = 'success'</code></td>
            <td>Mengetahui total uang kotor yang masuk ke kasir per hari ini.</td>
        </tr>
        <tr>
            <td><b>Total Transaksi Sukses</b></td>
            <td><code>COUNT(id) WHERE payment_status = 'success'</code></td>
            <td>Menghitung intensitas pelanggan yang berbelanja di kasir.</td>
        </tr>
        <tr>
            <td><b>Volume Item Terjual</b></td>
            <td><code>SUM(sale_details.quantity)</code></td>
            <td>Memantau pergerakan fisik barang keluar dari etalase toko.</td>
        </tr>
        <tr>
            <td><b>Status Keaktifan Toko</b></td>
            <td>Live Database Heartbeat</td>
            <td>Memastikan sistem terhubung stabil dengan basis data dan payment gateway.</td>
        </tr>
    </table>

    <div class="callout callout-info">
        <span class="callout-title">Kecepatan Kueri SQL Teroptimasi</span>
        Indeks komposit (*composite index*) telah dipasang pada kolom <code>created_at</code> dan <code>payment_status</code> untuk memastikan pemuatan dashboard tetap di bawah 100 milidetik meski data mencapai puluhan ribu transaksi.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 19: BAB 3.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">VISUALISASI GRAFIK TREN ARUS KAS</h1>

    <h2 class="section-title">3.4 Visualisasi Grafik Tren Arus Kas & Analisis Penjualan 7 Hari</h2>
    <p>
        Pada bagian bawah dashboard, disajikan grafik visual tren penerimaan kas 7 hari terakhir. Grafik ini memberikan wawasan mendalam mengenai fluktuasi omset dan perilaku pembayaran pelanggan.
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Elemen Visual Grafik</th>
            <th style="width: 25%;">Warna Indikator</th>
            <th>Makna Finansial</th>
        </tr>
        <tr>
            <td><b>Porsi Pembayaran Tunai</b></td>
            <td>Hijau Solid (#00AA13)</td>
            <td>Menunjukkan nilai total uang tunai yang diterima langsung di kasir.</td>
        </tr>
        <tr>
            <td><b>Porsi Pembayaran QRIS</b></td>
            <td>Biru Cyan (#00AED6)</td>
            <td>Menunjukkan nilai transaksi non-tunai yang masuk via gateway DOKU.</td>
        </tr>
        <tr>
            <td><b>Garis Akumulasi Total</b></td>
            <td>Garis Emas (#FFB800)</td>
            <td>Menunjukkan tren kenaikan atau penurunan total omset harian toko.</td>
        </tr>
    </table>

    <p>
        <b>Manfaat Analitis bagi Manajemen:</b>
    </p>
    <ul>
        <li>Mengidentifikasi hari-hari puncak penjualan (*peak sales days*) dalam satu pekan.</li>
        <li>Melihat tren adopsi pembayaran digital oleh pelanggan toko dari waktu ke waktu.</li>
        <li>Membantu perencanaan pengadaan barang (*restocking*) menjelang akhir pekan.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 20: BAB 3.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">STRUKTUR NAVIGASI SIDEBAR ADMINISTRATOR</h1>

    <h2 class="section-title">3.5 Struktur Navigasi Sidebar Responsif & Status Toko</h2>
    <p>
        Panel admin dilengkapi sidebar navigasi permanen (<code>resources/views/partials/sidebar.blade.php</code>) dengan latar belakang hijau Gojek tua (#00360D) yang elegan:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Menu Navigasi</th>
            <th style="width: 28%;">Rute URL</th>
            <th>Peruntukan Modul</th>
        </tr>
        <tr>
            <td><b>Dashboard Ringkasan</b></td>
            <td><code>/dashboard</code></td>
            <td>Pusat ringkasan metrik omset dan grafik penjualan 7 hari.</td>
        </tr>
        <tr>
            <td><b>Katalog Produk & Stok</b></td>
            <td><code>/admin/products</code></td>
            <td>Pengelolaan master barang, barcode, harga beli, harga jual, dan stok.</td>
        </tr>
        <tr>
            <td><b>Laporan Penjualan</b></td>
            <td><code>/admin/reports</code></td>
            <td>Rekapitulasi transaksi penjualan harian/bulanan/tahunan (PDF/Excel).</td>
        </tr>
        <tr>
            <td><b>Laporan Keuangan & Kas</b></td>
            <td><code>/admin/reports/finance</code></td>
            <td>Arus kas masuk tunai vs netto QRIS DOKU (MDR 0.7%).</td>
        </tr>
        <tr>
            <td><b>Laporan QRIS (DOKU)</b></td>
            <td><code>/admin/reports/qris</code></td>
            <td>Monitoring dan audit transaksi digital QRIS gateway.</td>
        </tr>
        <tr>
            <td><b>Laporan Stok Barang</b></td>
            <td><code>/admin/reports/stock</code></td>
            <td>Valuasi aset barang dagangan dan status ketersediaan gudang.</td>
        </tr>
        <tr>
            <td><b>Manajemen Akun</b></td>
            <td><code>/admin/users</code></td>
            <td>Pengelolaan akun kasir/admin dan konfigurasi alias gelar TTE.</td>
        </tr>
        <tr>
            <td><b>Pengaturan Toko</b></td>
            <td><code>/admin/settings</code></td>
            <td>Identitas toko, logo, branding, audio bel kasir, dan DOKU API.</td>
        </tr>
        <tr>
            <td><b>Buku Panduan PDF</b></td>
            <td><code>/admin/manual-guide</code></td>
            <td>Web viewer dan pengunduhan buku panduan resmi PDF 10 bab.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 21: BAB 4.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</h1>

    <h2 class="section-title">4.1 Katalog Master Produk (/admin/products)</h2>
    <p>
        Modul Manajemen Produk (<code>/admin/products</code>) merupakan basis data utama seluruh komoditas yang diperjualbelikan di toko. Melalui modul ini, administrator dapat mendaftarkan barang baru, menetapkan kode barcode, mengatur harga jual, mengontrol jumlah stok fisik, dan mengaktifkan program diskon promo.
    </p>
    <p>
        Setiap perubahan data barang pada modul ini akan langsung terpropagasi secara real-time ke seluruh meja kasir POS tanpa memerlukan restart server.
    </p>

    <div class="callout callout-success">
        <span class="callout-title">Kecepatan Akses Kasir POS</span>
        Katalog produk diindeks secara otomatis pada memory cache peramban kasir untuk menjamin kecepatan pencarian barang di bawah 50 milidetik.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 22: BAB 4.2 + GAMBAR KATALOG PRODUK --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">GAMBAR KATALOG PRODUK & UPDATE STOK CEPAT</h1>

    <h2 class="section-title">4.2 Visualisasi Antarmuka Katalog Master Produk (admin/products/index.blade.php)</h2>
    <p>
        Berikut adalah visualisasi antarmuka manajemen produk dan kotak scanner update stok cepat:
    </p>

    {{-- SVG VECTOR GAMBAR PRODUK INDEX --}}
    <div class="diagram-container">
        <svg width="460" height="225" viewBox="0 0 500 245">
            <!-- Background Container -->
            <rect x="5" y="5" width="490" height="235" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Header Bar -->
            <rect x="15" y="15" width="470" height="30" rx="8" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <text x="25" y="34" font-family="Helvetica" font-size="9" font-weight="bold" fill="#1A202C">📦 KATALOG INVENTARIS PRODUK</text>
            <rect x="310" y="20" width="75" height="20" rx="6" fill="#EDF2F7"/>
            <text x="347" y="33" font-family="Helvetica" font-size="7" font-weight="bold" fill="#4A5568" text-anchor="middle">📥 IMPOR EXCEL</text>
            <rect x="395" y="20" width="80" height="20" rx="6" fill="#00AA13"/>
            <text x="435" y="33" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">+ TAMBAH BARU</text>
            <!-- Quick Stock Update Box -->
            <rect x="15" y="52" width="470" height="42" rx="10" fill="#E6F4EA" stroke="#A8DAB5" stroke-width="1"/>
            <text x="25" y="67" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00661A">⚡ SCAN / TAMBAH STOK CEPAT:</text>
            <rect x="25" y="72" width="220" height="16" rx="4" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="32" y="83" font-family="Helvetica" font-size="6.5" fill="#718096">Pindai barcode barang...</text>
            <rect x="255" y="72" width="60" height="16" rx="4" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="285" y="83" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#1A202C" text-anchor="middle">+ 10</text>
            <rect x="325" y="72" width="90" height="16" rx="4" fill="#00AA13"/>
            <text x="370" y="83" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">+ TAMBAH STOK</text>
            <!-- Table Header -->
            <rect x="15" y="102" width="470" height="20" fill="#00661A"/>
            <text x="25" y="115" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">NAMA BARANG</text>
            <text x="180" y="115" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">BARCODE / SKU</text>
            <text x="280" y="115" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">HARGA JUAL</text>
            <text x="370" y="115" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">SISA STOK</text>
            <text x="440" y="115" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF">AKSI</text>
            <!-- Row 1 -->
            <rect x="15" y="122" width="470" height="24" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="25" y="137" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Beras Premium 5kg</text>
            <text x="180" y="137" font-family="Helvetica" font-size="6.5" fill="#4A5568">8991001001</text>
            <text x="280" y="137" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">Rp 75.000</text>
            <text x="370" y="137" font-family="Helvetica" font-size="7" font-weight="bold" fill="#38A169">48 Pcs</text>
            <text x="440" y="137" font-family="Helvetica" font-size="6.5" fill="#3182CE">Edit • Hapus</text>
            <!-- Row 2 -->
            <rect x="15" y="146" width="470" height="24" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="25" y="161" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Minyak Bimoli 2L</text>
            <text x="180" y="161" font-family="Helvetica" font-size="6.5" fill="#4A5568">8992753102</text>
            <text x="280" y="161" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">Rp 38.000</text>
            <text x="370" y="161" font-family="Helvetica" font-size="7" font-weight="bold" fill="#38A169">12 Pcs</text>
            <text x="440" y="161" font-family="Helvetica" font-size="6.5" fill="#3182CE">Edit • Hapus</text>
            <!-- Row 3 Warning -->
            <rect x="15" y="170" width="470" height="24" fill="#FFFDF0" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="25" y="185" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Gula Pasir Gulaku 1kg</text>
            <text x="180" y="185" font-family="Helvetica" font-size="6.5" fill="#4A5568">8993002003</text>
            <text x="280" y="185" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">Rp 17.500</text>
            <text x="370" y="185" font-family="Helvetica" font-size="7" font-weight="bold" fill="#DD6B20">4 Pcs ⚠️</text>
            <text x="440" y="185" font-family="Helvetica" font-size="6.5" fill="#3182CE">Edit • Hapus</text>
            <!-- Pagination -->
            <text x="25" y="215" font-family="Helvetica" font-size="6.5" fill="#718096">Menampilkan 1-10 dari 45 Produk</text>
            <rect x="410" y="202" width="75" height="18" rx="4" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="447" y="214" font-family="Helvetica" font-size="6.5" fill="#4A5568" text-anchor="middle">Halaman 1 2 3 &gt;</text>
        </svg>
        <div class="diagram-caption">Gambar 4.1: Antarmuka Katalog Inventaris Produk & Kotak Tambah Stok (resources/views/admin/products/index.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 23: BAB 4.3 + GAMBAR FORM PRODUK --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">GAMBAR FORMULIR TAMBAH PRODUK BARU</h1>

    <h2 class="section-title">4.3 Visualisasi Formulir Tambah Produk (admin/products/create.blade.php)</h2>
    <p>
        Berikut adalah tata letak visual formulir penambahan master barang baru:
    </p>

    {{-- SVG VECTOR GAMBAR PRODUK CREATE --}}
    <div class="diagram-container">
        <svg width="460" height="225" viewBox="0 0 500 245">
            <!-- Container -->
            <rect x="5" y="5" width="490" height="235" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Form Card -->
            <rect x="25" y="15" width="450" height="215" rx="12" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="40" y="35" font-family="Helvetica" font-size="10" font-weight="bold" fill="#1A202C">FORMULIR PENDAFTARAN PRODUK BARU</text>
            <!-- Field 1: Nama -->
            <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA PRODUK / BARANG (*)</text>
            <rect x="40" y="56" width="420" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Kopi Susu Aren Botol 250ml</text>
            <!-- Field 2: Barcode -->
            <text x="40" y="90" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">KODE BARCODE / SKU</text>
            <rect x="40" y="94" width="360" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="108" font-family="Helvetica" font-size="7" font-family="monospace" fill="#1A202C">8992753102941</text>
            <rect x="405" y="94" width="55" height="20" rx="5" fill="#E6F4EA"/>
            <text x="432" y="107" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">AUTO</text>
            <!-- Field 3: Harga Jual -->
            <text x="40" y="128" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">HARGA JUAL KASIR (RP) (*)</text>
            <rect x="40" y="132" width="200" height="20" rx="5" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
            <text x="48" y="146" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">Rp 18.000</text>
            <!-- Field 4: Stok Awal -->
            <text x="260" y="128" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">STOK FISIK AWAL (*)</text>
            <rect x="260" y="132" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="268" y="146" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C">50</text>
            <!-- Field 5: Diskon -->
            <text x="40" y="166" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">DISKON PROMO (%)</text>
            <rect x="40" y="170" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="184" font-family="Helvetica" font-size="7" fill="#4A5568">0</text>
            <!-- Field 6: Satuan -->
            <text x="260" y="166" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">KETERANGAN / SATUAN</text>
            <rect x="260" y="170" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="268" y="184" font-family="Helvetica" font-size="7" fill="#4A5568">Botol / Pcs</text>
            <!-- Buttons -->
            <rect x="300" y="200" width="60" height="22" rx="6" fill="#EDF2F7"/>
            <text x="330" y="214" font-family="Helvetica" font-size="7" font-weight="bold" fill="#4A5568" text-anchor="middle">BATAL</text>
            <rect x="370" y="200" width="90" height="22" rx="6" fill="#00AA13"/>
            <text x="415" y="214" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN PRODUK</text>
        </svg>
        <div class="diagram-caption">Gambar 4.2: Formulir Tambah Produk Baru (resources/views/admin/products/create.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 24: BAB 4.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">STRUKTUR PENETAPAN HARGA & DISKON PROMO</h1>

    <h2 class="section-title">4.4 Struktur Penetapan Harga Jual Kasir, Diskon Promo (%) & Satuan</h2>
    <p>
        Sistem mendukung pengelolaan harga yang dinamis untuk mendukung strategi promosi toko:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Kolom Basis Data</th>
            <th style="width: 25%;">Tipe Data</th>
            <th>Aturan & Logika Perhitungan di Kasir</th>
        </tr>
        <tr>
            <td><code>price</code> (Harga Jual)</td>
            <td>Decimal (15,2)</td>
            <td>Harga dasar barang sebelum dipotong diskon promo.</td>
        </tr>
        <tr>
            <td><code>discount_percent</code></td>
            <td>Decimal (5,2)</td>
            <td>Persentase potongan harga (0% s/d 100%). Kasir otomatis memotong harga jika terisi.</td>
        </tr>
        <tr>
            <td><code>description</code> (Satuan)</td>
            <td>String (255)</td>
            <td>Identitas unit barang yang dicetak pada struk belanja pelanggan.</td>
        </tr>
    </table>

    <div class="callout callout-info">
        <span class="callout-title">Contoh Perhitungan Diskon Otomatis</span>
        Jika produk memiliki <code>price = 100.000</code> dan <code>discount_percent = 10%</code>, kasir otomatis menghitung harga bersih menjadi <code>Rp 90.000</code> pada saat barcode discan.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 25: BAB 4.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">AMBANG BATAS STOK MENIPIS & ALERTS</h1>

    <h2 class="section-title">4.5 Ambang Batas Stok Menipis & Peringatan Stok Habis (Out of Stock)</h2>
    <p>
        Sistem secara otomatis mengklasifikasikan status ketersediaan barang ke dalam 3 tingkatan:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Status Ketersediaan</th>
            <th style="width: 25%;">Kondisi Stok Fisik</th>
            <th>Perilaku Sistem & Tindakan Kasir</th>
        </tr>
        <tr>
            <td><b>Stok Aman (Tersedia)</b></td>
            <td>Stok &gt; 5 Unit</td>
            <td>Badge hijau solid. Produk dapat dijual bebas di kasir POS.</td>
        </tr>
        <tr>
            <td><b>Stok Menipis (Warning)</b></td>
            <td>1 &le; Stok &le; 5 Unit</td>
            <td>Badge kuning dengan ikon peringatan. Memberi sinyal bagian gudang untuk restock.</td>
        </tr>
        <tr>
            <td><b>Stok Habis (Empty)</b></td>
            <td>Stok = 0 Unit</td>
            <td>Badge merah. Sistem mengunci produk agar tidak bisa ditambahkan ke keranjang kasir.</td>
        </tr>
    </table>

    <div class="callout callout-danger">
        <span class="callout-title">Perlindungan Anti-Overselling</span>
        Jika stok barang tersisa 1 unit dan ada kasir yang menjualnya, stok otomatis menjadi 0 dan sistem seketika menolak transaksi kedua untuk barang yang sama.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 26: BAB 4.6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">FITUR UPDATE STOK CEPAT VIA SCANNER</h1>

    <h2 class="section-title">4.6 Fitur Update Stok Cepat via Scanner Barcode</h2>
    <p>
        Untuk mempercepat proses penerimaan barang kiriman dari pemasok (*supplier incoming goods*), sistem menyediakan modul <b>Update Stok Cepat</b> langsung pada halaman katalog produk tanpa perlu membuka form edit satu per satu:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Letakkan Kursor pada Kolom Scan Barcode</div>
        <p>Buka <code>/admin/products</code>. Kursor otomatis terfokus pada kolom <i>Scan Barcode / Kode SKU</i>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Pindai Barcode Kardus / Kemasan Barang</div>
        <p>Arahkan scanner ke barcode produk. Nomor barcode otomatis terisi.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Masukkan Jumlah Unit Tambahan</div>
        <p>Ketikkan jumlah barang yang masuk (misal: <code>24</code>) lalu tekan <b>Enter</b>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">4</span> Konfirmasi Penambahan Stok Instan</div>
        <p>Sistem memproses permintaan via AJAX, menambah stok produk di database, dan memunculkan notifikasi hijau: <i>"Stok untuk produk 'Minyak Bimoli' berhasil ditambahkan. Total stok sekarang: 36 Pcs."</i></p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 27: BAB 4.7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">IMPORT DATA PRODUK MASSAL VIA EXCEL/CSV</h1>

    <h2 class="section-title">4.7 Import Data Produk Massal Melalui Spreadsheet Excel/CSV</h2>
    <p>
        Bagi toko yang memiliki ratusan item baru, gunakan fitur <b>Impor Produk Excel</b> (<code>/admin/products/import</code>):
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Nama Kolom Excel</th>
            <th style="width: 25%;">Status Kewajiban</th>
            <th>Format Pengisian Data</th>
        </tr>
        <tr>
            <td><code>nama</code></td>
            <td>Wajib Diisi</td>
            <td>Nama lengkap produk (Teks, maksimal 255 karakter).</td>
        </tr>
        <tr>
            <td><code>barcode</code></td>
            <td>Opsional / Wajib Unik</td>
            <td>Kode angka barcode produk (Angka / Teks). Jika kosong, barcode dapat di-generate otomatis.</td>
        </tr>
        <tr>
            <td><code>harga</code></td>
            <td>Wajib Diisi</td>
            <td>Nominal harga jual kasir (Hanya angka murni, tanpa 'Rp' atau tanda titik).</td>
        </tr>
        <tr>
            <td><code>stok</code></td>
            <td>Wajib Diisi</td>
            <td>Jumlah fisik stok awal barang (Bilangan bulat positif).</td>
        </tr>
    </table>

    <div class="callout callout-warning">
        <span class="callout-title">Validasi Baris Otomatis</span>
        Jika terdapat baris data yang salah format (misal harga berupa huruf), sistem akan menolak baris tersebut dan memunculkan pesan kesalahan nomor baris tanpa merusak data baris lainnya.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 28: BAB 4.8 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">PEMELIHARAAN DATA & PENGHAPUSAN AMAN</h1>

    <h2 class="section-title">4.8 Pemeliharaan Data, Edit Barang & Prosedur Penghapusan Aman</h2>
    <p>
        Administrator dapat memperbarui data barang kapan saja melalui menu <b>Edit Produk</b> (<code>/admin/products/{id}/edit</code>). Seluruh perubahan nama, harga, maupun barcode akan langsung aktif di kasir.
    </p>

    <h3 class="subsection-title">Kebijakan Penghapusan Produk:</h3>
    <ul>
        <li><b>Produk Tanpa Riwayat Transaksi:</b> Dapat dihapus secara permanen dari basis data jika produk tidak lagi dijual.</li>
        <li><b>Produk dengan Riwayat Transaksi Kasir:</b> Sistem menjaga integritas relasional (*referential integrity*). Transaksi masa lalu yang memuat produk tersebut akan tetap tercatat di laporan keuangan dengan mempertahankan nama dan harga historis saat transaksi terjadi (*snapshot pricing*).</li>
    </ul>

    <div class="callout callout-info">
        <span class="callout-title">Snapshot Pricing pada Detail Penjualan</span>
        Sistem kasir menyimpan harga produk pada tabel <code>sale_details.price_at_transaction</code> saat transaksi dibuat. Sehingga jika di kemudian hari harga produk diubah, laporan penjualan masa lalu tidak akan mengalami perubahan nilai.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 29: BAB 5.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">OPERASIONAL KASIR POINT OF SALE (POS) MODERN</h1>

    <h2 class="section-title">5.1 Tata Letak Antarmuka Kasir Layar Sentuh & PC (/cashier/pos)</h2>
    <p>
        Antarmuka kasir Point of Sale (<code>/cashier/pos</code>) dirancang dengan tata letak dua panel terpisah (*split-pane layout*) yang mengoptimalkan alur kerja kasir:
    </p>
    <ul>
        <li><b>Panel Kiri (60% Area Layar):</b> Menampilkan input pencarian/barcode, tombol kontrol keranjang belanja, rincian tabel barang yang sedang dibeli, tombol pengubah kuantitas (+/-), dan tombol hapus item.</li>
        <li><b>Panel Kanan (40% Area Layar):</b> Kartu total tagihan bergaya dompet digital Gojek (*Gojek green pocket*), kolom nama pelanggan, tombol proses pembayaran (B), dan footer hak cipta resmi.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 30: BAB 5.2 + GAMBAR LAYAR KASIR POS --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">GAMBAR LAYAR KASIR POS DUA PANEL</h1>

    <h2 class="section-title">5.2 Visualisasi Antarmuka Kasir Split-Pane (resources/views/cashier/pos.blade.php)</h2>
    <p>
        Berikut adalah visualisasi antarmuka utama meja kasir Point of Sale:
    </p>

    {{-- SVG VECTOR GAMBAR KASIR POS --}}
    <div class="diagram-container">
        <svg width="460" height="225" viewBox="0 0 500 245">
            <!-- Container -->
            <rect x="5" y="5" width="490" height="235" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Top POS Header -->
            <rect x="15" y="15" width="470" height="28" rx="8" fill="#00360D"/>
            <text x="25" y="33" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#FFFFFF">🛒 {{ strtoupper($shop['app_name'] ?? 'SIKANDA') }} POS • {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
            <rect x="365" y="19" width="110" height="20" rx="5" fill="#1A202C"/>
            <text x="420" y="32" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">← DASHBOARD ADMIN</text>
            <!-- Left Pane: Cart (Width 290) -->
            <rect x="15" y="50" width="290" height="180" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1"/>
            <!-- Search Bar -->
            <rect x="25" y="58" width="270" height="22" rx="6" fill="#F7FAFC" stroke="#00AA13" stroke-width="1.5"/>
            <text x="35" y="72" font-family="Helvetica" font-size="7.5" fill="#2D3748">🔍 Scan Barcode / Ketik Nama Barang...</text>
            <!-- Cart Item 1 -->
            <rect x="25" y="86" width="270" height="28" rx="6" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="32" y="100" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C">Kopi Susu Aren 250ml</text>
            <text x="32" y="109" font-family="Helvetica" font-size="6.5" fill="#718096">@ Rp 18.000</text>
            <rect x="185" y="91" width="18" height="18" rx="4" fill="#EDF2F7"/>
            <text x="194" y="103" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">-</text>
            <text x="212" y="103" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">2</text>
            <rect x="222" y="91" width="18" height="18" rx="4" fill="#EDF2F7"/>
            <text x="231" y="103" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">+</text>
            <text x="255" y="103" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">36.000</text>
            <!-- Cart Item 2 -->
            <rect x="25" y="118" width="270" height="28" rx="6" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="32" y="132" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C">Roti Bakar Cokelat Keju</text>
            <text x="32" y="141" font-family="Helvetica" font-size="6.5" fill="#718096">@ Rp 15.000</text>
            <rect x="185" y="123" width="18" height="18" rx="4" fill="#EDF2F7"/>
            <text x="194" y="135" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">-</text>
            <text x="212" y="135" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="middle">1</text>
            <rect x="222" y="123" width="18" height="18" rx="4" fill="#EDF2F7"/>
            <text x="231" y="135" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C" text-anchor="middle">+</text>
            <text x="255" y="135" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#00880F">15.000</text>

            <!-- Right Pane: Pay Pocket (Width 170) -->
            <rect x="315" y="50" width="170" height="180" rx="10" fill="#00661A"/>
            <text x="325" y="68" font-family="Helvetica" font-size="7" font-weight="bold" fill="#A8DAB5">NAMA PEMBELI:</text>
            <rect x="325" y="73" width="150" height="18" rx="4" fill="#FFFFFF"/>
            <text x="332" y="85" font-family="Helvetica" font-size="7" fill="#4A5568">Pelanggan Umum</text>
            <!-- Tagihan Box -->
            <rect x="325" y="98" width="150" height="60" rx="8" fill="#004D13"/>
            <text x="335" y="112" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#A8DAB5">TOTAL TAGIHAN BELANJA</text>
            <text x="335" y="134" font-family="Helvetica" font-size="14" font-weight="bold" fill="#FFFFFF">Rp 51.000</text>
            <text x="335" y="148" font-family="Helvetica" font-size="6.5" fill="#E2E8F0">2 Macam Produk • 3 Item</text>
            <!-- Pay Button -->
            <rect x="325" y="166" width="150" height="32" rx="8" fill="#00AA13" stroke="#A8DAB5" stroke-width="1"/>
            <text x="400" y="186" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PROSES BAYAR (B)</text>
            <!-- Footer -->
            <text x="400" y="218" font-family="Helvetica" font-size="6" fill="#A8DAB5" text-anchor="middle">© I Gusti Sultan. All rights reserved.</text>
        </svg>
        <div class="diagram-caption">Gambar 5.1: Layar Kasir Point of Sale (POS) Dua Panel (resources/views/cashier/pos.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 31: BAB 5.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">NAVIGASI KASIR & AKSES ADMINISTRATOR</h1>

    <h2 class="section-title">5.3 Navigasi Kasir & Tombol Kembali ke Dashboard Admin</h2>
    <p>
        Sistem membedakan tampilan header kasir berdasarkan peran (*role*) akun yang sedang aktif login:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Akun Login</th>
            <th style="width: 30%;">Tampilan Tombol Header</th>
            <th>Fungsi Navigasi</th>
        </tr>
        <tr>
            <td><b>Administrator</b></td>
            <td>Tombol Hitam <code>← Dashboard Admin</code></td>
            <td>Memungkinkan pemilik/admin berpindah cepat ke dashboard manajemen tanpa perlu logout.</td>
        </tr>
        <tr>
            <td><b>Petugas Kasir</b></td>
            <td>Indikator Nama Kasir + Tombol Keluar</td>
            <td>Menjaga kasir tetap fokus pada transaksi penjualan tanpa akses ke menu konfigurasi.</td>
        </tr>
    </table>

    <div class="callout callout-info">
        <span class="callout-title">Keamanan Akses Tingkat Middleware</span>
        Meskipun tombol navigasi dashboard hanya tampil untuk admin, rute admin (<code>/admin/*</code>) tetap diproteksi ketat oleh <code>RoleMiddleware</code> di backend sehingga tidak dapat ditembus oleh kasir biasa.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 32: BAB 5.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">METODE PENCARIAN & INPUT BARANG DI KASIR</h1>

    <h2 class="section-title">5.4 Metode Input Barang: Scanner Barcode, Pencarian Nama & Grid Cepat</h2>
    <p>
        Kasir dapat memasukkan barang ke keranjang belanja melalui 3 metode fleksibel:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">Metode 1</span> Pemindaian Barcode Scanner (USB / Wireless)</div>
        <p>Arahkan scanner ke barcode kemasan barang. Sistem secara otomatis mencari produk, membunyikan nada bip, dan menambah item ke keranjang belanja.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Metode 2</span> Pencarian Teks Nama Barang</div>
        <p>Ketikkan 2 atau 3 huruf dari nama produk pada kolom pencarian (misal: <code>kop</code>). Daftar produk yang cocok akan muncul seketika dalam dropdown interaktif.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Metode 3</span> Klik Grid Produk Populer</div>
        <p>Pada layar sentuh, kasir cukup mengetuk kartu produk yang sering dibeli pelanggan pada katalog cepat.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 33: BAB 5.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">MANAJEMEN KERANJANG BELANJA KASIR</h1>

    <h2 class="section-title">5.5 Manajemen Keranjang Belanja, Penyesuaian Qty & Pembatalan Item</h2>
    <p>
        Setiap item yang masuk ke keranjang belanja dapat dikelola dengan mudah oleh kasir:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Aksi Kasir</th>
            <th style="width: 25%;">Kontrol Antarmuka</th>
            <th>Perilaku Reaktif Sistem (Alpine.js)</th>
        </tr>
        <tr>
            <td><b>Tambah Jumlah (Qty +)</b></td>
            <td>Tombol <code>[+]</code> atau scan ulang barcode</td>
            <td>Menambah jumlah beli +1 dan otomatis menghitung ulang subtotal dan total belanja.</td>
        </tr>
        <tr>
            <td><b>Kurang Jumlah (Qty -)</b></td>
            <td>Tombol <code>[-]</code></td>
            <td>Mengurangi jumlah beli -1. Jika kuantitas mencapai 0, item otomatis dihapus dari keranjang.</td>
        </tr>
        <tr>
            <td><b>Hapus Item Satuan</b></td>
            <td>Tombol silang merah <code>[X]</code></td>
            <td>Menghapus baris produk tersebut dari daftar belanja pembeli.</td>
        </tr>
        <tr>
            <td><b>Reset Seluruh Keranjang</b></td>
            <td>Tombol <code>Reset / Batal</code> atau hotkey ESC</td>
            <td>Mengosongkan seluruh keranjang belanja untuk melayani pembeli baru.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 34: BAB 5.6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">PENANGANAN IDENTITAS PELANGGAN</h1>

    <h2 class="section-title">5.6 Penanganan Identitas Pelanggan (Pelanggan Umum vs Member Toko)</h2>
    <p>
        Di atas kartu total tagihan, kasir dapat memasukkan nama pembeli:
    </p>
    <ul>
        <li><b>Pelanggan Umum (Default):</b> Jika pembeli tidak menyebutkan nama, kolom otomatis bernilai <code>Pelanggan Umum</code>. Kasir dapat mengklik tautan cepat <i>Set Umum</i> kapan saja.</li>
        <li><b>Pelanggan Khusus / Grosir / Member:</b> Kasir dapat mengetikkan nama pelanggan (misal: <code>Pak H. Budi</code> atau <code>Koperasi Mandiri</code>). Nama ini akan tercatat di nota struk, faktur pengiriman, dan laporan penjualan.</li>
    </ul>

    <div class="callout callout-info">
        <span class="callout-title">Pencarian Riwayat Pembelian Pelanggan</span>
        Nama pelanggan yang tercatat dapat difilter di Laporan Penjualan (<code>/admin/reports</code>) untuk melihat riwayat total belanja pelanggan tersebut dalam kurun waktu tertentu.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 35: BAB 5.7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">ALUR TRANSAKSI PEMBAYARAN TUNAI (CASH)</h1>

    <h2 class="section-title">5.7 Alur Pembayaran Tunai (Cash) & Perhitungan Kembalian Otomatis</h2>
    <p>
        Pembayaran tunai adalah metode paling umum di kasir ritel. Sistem menyediakan kalkulator kembalian otomatis:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Tekan Tombol PROSES BAYAR (B)</div>
        <p>Kasir menekan tombol huruf <code>B</code> di keyboard atau mengklik tombol hijau proses bayar.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Pilih Tab Pembayaran Tunai</div>
        <p>Pilih tab <b>💵 TUNAI (CASH)</b>. Kolom uang diterima otomatis terfokus.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Input Uang yang Diserahkan Pembeli</div>
        <p>Ketikkan nominal uang kertas yang diserahkan pembeli (misal: <code>100000</code>). Kotak hijau putus-putus seketika memunculkan nominal <b>Uang Kembalian</b> dalam angka besar yang jelas.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">4</span> Selesaikan Transaksi & Buka Laci Kasir</div>
        <p>Klik tombol <b>SELESAIKAN TRANSAKSI</b>. Sistem memotong stok, membunyikan chime audio sukses, dan menampilkan opsi cetak struk thermal.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 36: BAB 5.8 + GAMBAR MODAL BAYAR & QRIS --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">GAMBAR MODAL PEMBAYARAN DYNAMIC QRIS</h1>

    <h2 class="section-title">5.8 Visualisasi Modal Pembayaran QRIS DOKU Dinamis</h2>
    <p>
        Berikut adalah visualisasi dialog modal pembayaran QRIS pada layar kasir:
    </p>

    {{-- SVG VECTOR GAMBAR MODAL QRIS --}}
    <div class="diagram-container">
        <svg width="460" height="225" viewBox="0 0 500 245">
            <!-- Overlay Backdrop -->
            <rect x="5" y="5" width="490" height="235" rx="14" fill="#2D3748" opacity="0.85"/>
            <!-- Modal Window -->
            <rect x="90" y="15" width="320" height="215" rx="12" fill="#FFFFFF"/>
            <!-- Modal Header -->
            <rect x="90" y="15" width="320" height="28" rx="12" fill="#00661A"/>
            <text x="250" y="33" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">PEMBAYARAN DOKU DYNAMIC QRIS</text>
            <!-- Total Tagihan Bar -->
            <rect x="105" y="49" width="290" height="26" rx="6" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
            <text x="115" y="65" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00661A">TOTAL TAGIHAN: </text>
            <text x="385" y="66" font-family="Helvetica" font-size="11" font-weight="bold" fill="#00880F" text-anchor="end">Rp 51.000</text>
            <!-- QRIS Code Box -->
            <rect x="185" y="80" width="130" height="110" rx="8" fill="#F8FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <!-- Simulated QR Pattern -->
            <rect x="200" y="90" width="30" height="30" fill="#1A202C"/>
            <rect x="205" y="95" width="20" height="20" fill="#FFFFFF"/>
            <rect x="210" y="100" width="10" height="10" fill="#1A202C"/>

            <rect x="270" y="90" width="30" height="30" fill="#1A202C"/>
            <rect x="275" y="95" width="20" height="20" fill="#FFFFFF"/>
            <rect x="280" y="100" width="10" height="10" fill="#1A202C"/>

            <rect x="200" y="145" width="30" height="30" fill="#1A202C"/>
            <rect x="205" y="150" width="20" height="20" fill="#FFFFFF"/>
            <rect x="210" y="155" width="10" height="10" fill="#1A202C"/>

            <!-- Center QRIS badge -->
            <rect x="240" y="125" width="20" height="20" rx="4" fill="#00AA13"/>
            <text x="250" y="138" font-family="Helvetica" font-size="6" font-weight="bold" fill="#FFFFFF" text-anchor="middle">Q</text>
            <!-- Status Text -->
            <text x="250" y="199" font-family="Helvetica" font-size="7" font-weight="bold" fill="#3182CE" text-anchor="middle">⏳ Menunggu Pembeli Memindai QRIS (DOKU Gateway)...</text>
            <text x="250" y="210" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">Otomatis Terkonfirmasi Real-Time & Audio Bell Berbunyi</text>
            <!-- Close Button -->
            <text x="395" y="32" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">✕</text>
        </svg>
        <div class="diagram-caption">Gambar 5.2: Modal Pembayaran Dynamic QRIS Real-Time DOKU (resources/views/cashier/pos.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 37: BAB 5.9 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">ASISTEN SUARA & AUDIO CHIME KASIR</h1>

    <h2 class="section-title">5.9 Asisten Suara (Audio Chime) Notifikasi Transaksi Sukses</h2>
    <p>
        Untuk memberikan konfirmasi auditori kepada kasir dan pembeli di tengah keramaian toko, sistem dilengkapi fitur <b>Audio Voice / Chime Notifikasi</b>:
    </p>
    <ul>
        <li><b>Nada Konfirmasi Berhasil:</b> Setiap kali transaksi kasir (tunai maupun QRIS) berhasil tersimpan, sistem memutar berkas audio lonceng kasir modern.</li>
        <li><b>Kustomisasi Nada Suara:</b> Administrator dapat mengunggah berkas suara khusus (.mp3 atau .wav) melalui menu Pengaturan Toko (<code>/admin/settings</code>).</li>
    </ul>

    <div class="callout callout-success">
        <span class="callout-title">Keamanan Transaksi QRIS dengan Audio</span>
        Bunyi chime memberikan kepastian langsung kepada kasir bahwa dana QRIS pelanggan benar-benar telah masuk ke sistem tanpa kasir perlu memeriksa ponsel atau dashboard bank penampung.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 38: BAB 5.10 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">PINTASAN KEYBOARD (HOTKEYS) EFISIENSI KASIR</h1>

    <h2 class="section-title">5.10 Pintasan Keyboard Efisiensi Kasir (Hotkeys B & ESC)</h2>
    <p>
        Kasir profesional dapat mengoperasikan seluruh alur transaksi tanpa menyentuh mouse dengan memanfaatkan tombol pintasan (*keyboard hotkeys*):
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Tombol Keyboard</th>
            <th style="width: 30%;">Aksi yang Dijalankan</th>
            <th>Kondisi Penggunaan</th>
        </tr>
        <tr>
            <td><span class="badge-shortcut">B</span></td>
            <td>Buka Dialog Modal Pembayaran</td>
            <td>Aktif jika keranjang belanja berisi minimal 1 item produk.</td>
        </tr>
        <tr>
            <td><span class="badge-shortcut">ESC</span></td>
            <td>Tutup Modal / Transaksi Baru</td>
            <td>Menutup popup aktif atau mereset kasir untuk melayani pelanggan berikutnya.</td>
        </tr>
        <tr>
            <td><span class="badge-shortcut">Enter</span></td>
            <td>Submit Barcode / Simpan</td>
            <td>Memproses pemindaian barcode pada input pencarian barang.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 39: BAB 5.11 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">CETAK STRUK THERMAL BLUETOOTH</h1>

    <h2 class="section-title">5.11 Cetak Struk Thermal Bluetooth (58mm/80mm) & Raw ESC/POS</h2>
    <p>
        Sistem mendukung pencetakan langsung ke printer thermal kasir portabel via koneksi Bluetooth Serial:
    </p>
    <ul>
        <li><b>Perintah Standar ESC/POS:</b> Mengirimkan data raw byte langsung ke printer tanpa perlu membuka jendela print dialog browser yang lambat.</li>
        <li><b>Kesesuaian Lebar Kertas:</b> Mendukung format kertas kasir standar 58mm (32 karakter per baris) dan 80mm (48 karakter per baris).</li>
        <li><b>Struktur Teks Rapi:</b> Menampilkan nama toko di posisi tengah, tanggal, nomor invoice dinamis, rincian barang dan harga rata kiri-kanan, total belanja, serta catatan terima kasih.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 40: BAB 5.12 + GAMBAR STRUK NOTA PDF --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">GAMBAR CETAK NOTA STRUK PDF GRAYSCALE</h1>

    <h2 class="section-title">5.12 Visualisasi Nota Struk Kasir Thermal (cashier/print-receipt.blade.php)</h2>
    <p>
        Berikut adalah visualisasi tata letak nota belanja struk kasir thermal:
    </p>

    {{-- SVG VECTOR GAMBAR STRUK --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <!-- Container -->
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Thermal Paper Simulation -->
            <rect x="160" y="12" width="180" height="225" rx="4" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <!-- Paper Header -->
            <text x="250" y="28" font-family="monospace" font-size="8.5" font-weight="bold" fill="#1A202C" text-anchor="middle">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
            <text x="250" y="38" font-family="monospace" font-size="6" fill="#4A5568" text-anchor="middle">{{ $shop['shop_address'] ?? 'Jl. Argopuro No. 77' }}</text>
            <text x="250" y="47" font-family="monospace" font-size="6" fill="#4A5568" text-anchor="middle">Telp: {{ $shop['shop_phone'] ?? '081234567890' }}</text>
            <!-- Dashed Line -->
            <line x1="170" y1="52" x2="330" y2="52" stroke="#A0AEC0" stroke-dasharray="2,2"/>
            <!-- Meta Data -->
            <text x="170" y="62" font-family="monospace" font-size="6" fill="#1A202C">No. Trx : SIB-20260825-0012</text>
            <text x="170" y="71" font-family="monospace" font-size="6" fill="#1A202C">Tgl/Jam : 25/08/2026 14:32</text>
            <text x="170" y="80" font-family="monospace" font-size="6" fill="#1A202C">Kasir   : Siti Rahma</text>
            <text x="170" y="89" font-family="monospace" font-size="6" fill="#1A202C">Pelanggan: Budi Santoso</text>
            <line x1="170" y1="94" x2="330" y2="94" stroke="#A0AEC0" stroke-dasharray="2,2"/>
            <!-- Items -->
            <text x="170" y="104" font-family="monospace" font-size="6.5" font-weight="bold" fill="#1A202C">Kopi Susu Aren 250ml</text>
            <text x="170" y="113" font-family="monospace" font-size="6" fill="#1A202C">2 x 18.000</text>
            <text x="330" y="113" font-family="monospace" font-size="6.5" font-weight="bold" fill="#1A202C" text-anchor="end">36.000</text>

            <text x="170" y="124" font-family="monospace" font-size="6.5" font-weight="bold" fill="#1A202C">Roti Bakar Cokelat</text>
            <text x="170" y="133" font-family="monospace" font-size="6" fill="#1A202C">1 x 15.000</text>
            <text x="330" y="133" font-family="monospace" font-size="6.5" font-weight="bold" fill="#1A202C" text-anchor="end">15.000</text>
            <line x1="170" y1="138" x2="330" y2="138" stroke="#A0AEC0" stroke-dasharray="2,2"/>
            <!-- Totals -->
            <text x="170" y="149" font-family="monospace" font-size="7" font-weight="bold" fill="#1A202C">TOTAL BELANJA :</text>
            <text x="330" y="149" font-family="monospace" font-size="7.5" font-weight="bold" fill="#1A202C" text-anchor="end">Rp 51.000</text>
            <text x="170" y="159" font-family="monospace" font-size="6" fill="#1A202C">METODE BAYAR  : TUNAI</text>
            <text x="170" y="168" font-family="monospace" font-size="6" fill="#1A202C">DITERIMA      : Rp 100.000</text>
            <text x="170" y="177" font-family="monospace" font-size="6.5" font-weight="bold" fill="#00880F">KEMBALIAN     : Rp 49.000</text>
            <line x1="170" y1="182" x2="330" y2="182" stroke="#A0AEC0" stroke-dasharray="2,2"/>
            <!-- QR Struk -->
            <rect x="235" y="186" width="30" height="30" fill="#1A202C"/>
            <rect x="240" y="191" width="20" height="20" fill="#FFFFFF"/>
            <rect x="245" y="196" width="10" height="10" fill="#1A202C"/>
            <!-- Footer text -->
            <text x="250" y="224" font-family="monospace" font-size="5.5" fill="#4A5568" text-anchor="middle">Terima Kasih Atas Kunjungan Anda</text>
            <text x="250" y="231" font-family="monospace" font-size="5" fill="#718096" text-anchor="middle">Simpan struk ini sebagai bukti resmi</text>
        </svg>
        <div class="diagram-caption">Gambar 5.3: Format Cetak Struk Kasir Thermal Bluetooth & PDF Grayscale</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 41: BAB 5.13 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">PENGIRIMAN STRUK DIGITAL VIA WHATSAPP</h1>

    <h2 class="section-title">5.13 Pengiriman Bukti Pembayaran Digital via WhatsApp Pelanggan</h2>
    <p>
        Mendukung konsep toko modern ramah lingkungan (*paperless transaction*), kasir dapat mengirimkan struk digital langsung ke nomor WhatsApp pembeli:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Masukkan Nomor WhatsApp Pelanggan</div>
        <p>Pada modal sukses transaksi, ketikkan nomor WhatsApp pembeli (misal: <code>081234567890</code>).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Klik Tombol Hijau Kirim WA</div>
        <p>Sistem memformat nomor ke standar internasional (awalan <code>62...</code>) dan membuka WhatsApp API.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Pesan Teks & Tautan Faktur Terkirim</div>
        <p>Pelanggan menerima pesan resmi ucapan terima kasih beserta tautan unduh faktur digital bertanda tangan yang berlaku selama 24 jam.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 42: BAB 5.14 + GAMBAR LABEL RESI PAKET A6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">GAMBAR LABEL RESI PENGIRIMAN PAKET A6</h1>

    <h2 class="section-title">5.14 Visualisasi Label Resi Ekspedisi Pengiriman A6 (shipping/label_pdf.blade.php)</h2>
    <p>
        Berikut adalah format resmi label pengiriman paket barang pesanan pelanggan:
    </p>

    {{-- SVG VECTOR GAMBAR LABEL RESI --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- A6 Label Box -->
            <rect x="110" y="15" width="280" height="218" rx="8" fill="#FFFFFF" stroke="#1A202C" stroke-width="2"/>
            <!-- Top Header -->
            <rect x="110" y="15" width="280" height="32" fill="#1A202C"/>
            <text x="120" y="32" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
            <text x="120" y="42" font-family="Helvetica" font-size="6.5" fill="#CBD5E0">Telp: {{ $shop['shop_phone'] ?? '081234567890' }}</text>
            <rect x="305" y="21" width="75" height="18" rx="4" fill="#EE2737"/>
            <text x="342" y="33" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">JNE REGULER</text>
            <!-- Recipient Box -->
            <rect x="120" y="55" width="260" height="75" rx="6" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="130" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">KEPADA / PENERIMA (TO):</text>
            <text x="130" y="85" font-family="Helvetica" font-size="10" font-weight="bold" fill="#1A202C">BAPAK H. AHMAD FAUZI</text>
            <text x="130" y="97" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#4A5568">📱 0813-9876-5432</text>
            <text x="130" y="109" font-family="Helvetica" font-size="7" fill="#2D3748">Jl. Diponegoro No. 45, RT 02/05, Kebon Jeruk</text>
            <text x="130" y="119" font-family="Helvetica" font-size="7" fill="#2D3748">Jakarta Barat, DKI Jakarta (11530)</text>
            <!-- Sender Box -->
            <rect x="120" y="136" width="260" height="50" rx="6" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="130" y="149" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">DARI / PENGIRIM (FROM):</text>
            <text x="130" y="161" font-family="Helvetica" font-size="8" font-weight="bold" fill="#1A202C">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }} (0812-3456-7890)</text>
            <text x="130" y="172" font-family="Helvetica" font-size="6.5" fill="#4A5568">{{ $shop['shop_address'] ?? 'Jalan Argopuro No. 77, Jember' }}</text>
            <!-- Footer Instruction -->
            <rect x="120" y="192" width="260" height="30" rx="4" fill="#FFF5F5" stroke="#FEB2B2" stroke-width="1"/>
            <text x="250" y="206" font-family="Helvetica" font-size="7" font-weight="bold" fill="#E53E3E" text-anchor="middle">⚠️ FRAGILE: BARANG PECAH BELAH / JANGAN DIBANTING</text>
            <text x="250" y="216" font-family="Helvetica" font-size="6" fill="#718096" text-anchor="middle">No. Invoice POS: SIB-20260825-0012</text>
        </svg>
        <div class="diagram-caption">Gambar 5.4: Format Cetak Label Resi Pengiriman Standar A6 (resources/views/shipping/label_pdf.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 43: BAB 6.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">PUSAT ANALITIK, LAPORAN BISNIS & KEUANGAN</h1>

    <h2 class="section-title">6.1 Gambaran Umum Pusat Pelaporan Terpadu (/admin/reports)</h2>
    <p>
        Modul Pelaporan Terpadu (<code>/admin/reports</code>) menyajikan rekaman menyeluruh seluruh transaksi bisnis. Laporan dirancang memenuhi standar pembukuan akuntansi dan audit resmi, terbagi ke dalam 4 buku laporan spesifik:
    </p>
    <ol>
        <li><b>Laporan Penjualan:</b> Rincian faktur transaksi barang terjual per pelanggan.</li>
        <li><b>Laporan Keuangan & Arus Kas:</b> Rekonsiliasi kas masuk tunai vs penerimaan bersih QRIS DOKU.</li>
        <li><b>Laporan QRIS (DOKU):</b> Audit khusus transaksi digital dan potongan biaya layanan MDR 0.7%.</li>
        <li><b>Laporan Stok Barang:</b> Inventarisasi kuantitas fisik dan valuasi total kekayaan aset toko.</li>
    </ol>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 44: BAB 6.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">LAPORAN PENJUALAN TRANSAKSI</h1>

    <h2 class="section-title">6.2 Laporan Penjualan Transaksi (Filter Harian, Bulanan, Kuartal, Tahunan)</h2>
    <p>
        Laporan Penjualan (<code>/admin/reports</code>) memuat rincian invoice setiap order belanja. Administrator dapat memfilter data dengan fleksibel:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Filter Periode</th>
            <th style="width: 30%;">Parameter Input</th>
            <th>Keluaran Laporan</th>
        </tr>
        <tr>
            <td><b>Harian (Daily)</b></td>
            <td>Pilih Tanggal (YYYY-MM-DD)</td>
            <td>Rekapitulasi penjualan per satu hari kerja spesifik.</td>
        </tr>
        <tr>
            <td><b>Bulanan (Monthly)</b></td>
            <td>Pilih Bulan & Tahun (YYYY-MM)</td>
            <td>Rekapitulasi omset dalam kurun waktu satu bulan kalender.</td>
        </tr>
        <tr>
            <td><b>3 Bulan (Kuartal)</b></td>
            <td>Pilih Kuartal (Q1, Q2, Q3, Q4) & Tahun</td>
            <td>Evaluasi kinerja triwulan untuk rapat evaluasi berkala.</td>
        </tr>
        <tr>
            <td><b>Tahunan (Yearly)</b></td>
            <td>Pilih Tahun (YYYY)</td>
            <td>Akumulasi omset satu tahun penuh untuk laporan SPT pajak tahunan.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 45: BAB 6.3 + GAMBAR LAPORAN KEUANGAN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">GAMBAR LAPORAN KEUANGAN & REKONSILIASI KAS</h1>

    <h2 class="section-title">6.3 Visualisasi Laporan Arus Kas & Potongan MDR (reports/finance.blade.php)</h2>
    <p>
        Berikut adalah visualisasi laporan keuangan resmi beserta pembagian kas tunai dan netto QRIS:
    </p>

    {{-- SVG VECTOR GAMBAR LAPORAN KEUANGAN --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Report Document Container -->
            <rect x="25" y="15" width="450" height="218" rx="8" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <!-- Official Header -->
            <text x="250" y="32" font-family="Helvetica" font-size="9" font-weight="bold" fill="#1A202C" text-anchor="middle">LAPORAN KEUANGAN & REKONSILIASI ARUS KAS</text>
            <text x="250" y="43" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F" text-anchor="middle">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>
            <text x="250" y="53" font-family="monospace" font-size="6.5" fill="#4A5568" text-anchor="middle">Nomor Dokumen: LKEU-TUNAI/05/VIII/SIBALOG/2026</text>
            <line x1="35" y1="58" x2="465" y2="58" stroke="#1A202C" stroke-width="1.5"/>
            <!-- 3 Summary Cards -->
            <rect x="35" y="65" width="135" height="42" rx="6" fill="#F0FFF4" stroke="#68D391" stroke-width="1"/>
            <text x="42" y="78" font-family="Helvetica" font-size="6" font-weight="bold" fill="#276749">KAS TUNAI (CASH)</text>
            <text x="42" y="96" font-family="Helvetica" font-size="10" font-weight="bold" fill="#00880F">Rp 850.000</text>

            <rect x="182" y="65" width="135" height="42" rx="6" fill="#EBF8FF" stroke="#63B3ED" stroke-width="1"/>
            <text x="190" y="78" font-family="Helvetica" font-size="6" font-weight="bold" fill="#2B6CB0">NETTO QRIS (DOKU 0.7%)</text>
            <text x="190" y="96" font-family="Helvetica" font-size="10" font-weight="bold" fill="#3182CE">Rp 595.800</text>

            <rect x="330" y="65" width="135" height="42" rx="6" fill="#FFFAF0" stroke="#FBD38D" stroke-width="1"/>
            <text x="338" y="78" font-family="Helvetica" font-size="6" font-weight="bold" fill="#C05621">TOTAL OMSET BERSIH</text>
            <text x="338" y="96" font-family="Helvetica" font-size="10" font-weight="bold" fill="#DD6B20">Rp 1.445.800</text>
            <!-- Mini Data Table -->
            <rect x="35" y="114" width="430" height="16" fill="#00661A"/>
            <text x="42" y="125" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">NO. TRANSAKSI</text>
            <text x="150" y="125" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">METODE BAYAR</text>
            <text x="250" y="125" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">NOMINAL BRUTO</text>
            <text x="350" y="125" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">FEE MDR (0.7%)</text>
            <text x="425" y="125" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">NETTO</text>

            <rect x="35" y="130" width="430" height="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="42" y="141" font-family="monospace" font-size="6" fill="#1A202C">SIB-20260825-001</text>
            <text x="150" y="141" font-family="Helvetica" font-size="6" fill="#276749">TUNAI</text>
            <text x="250" y="141" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C">Rp 50.000</text>
            <text x="350" y="141" font-family="Helvetica" font-size="6" fill="#718096">Rp 0</text>
            <text x="425" y="141" font-family="Helvetica" font-size="6" font-weight="bold" fill="#00880F">Rp 50.000</text>

            <rect x="35" y="146" width="430" height="16" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="42" y="157" font-family="monospace" font-size="6" fill="#1A202C">SIB-20260825-002</text>
            <text x="150" y="157" font-family="Helvetica" font-size="6" fill="#2B6CB0">QRIS DOKU</text>
            <text x="250" y="157" font-family="Helvetica" font-size="6" font-weight="bold" fill="#1A202C">Rp 100.000</text>
            <text x="350" y="157" font-family="Helvetica" font-size="6" fill="#E53E3E">Rp 700</text>
            <text x="425" y="157" font-family="Helvetica" font-size="6" font-weight="bold" fill="#00880F">Rp 99.300</text>
            <!-- TTE QR Stamp on Bottom Right -->
            <rect x="380" y="170" width="85" height="55" rx="4" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="422" y="180" font-family="Helvetica" font-size="5" font-weight="bold" fill="#4A5568" text-anchor="middle">DISAHKAN SECARA TTE</text>
            <rect x="407" y="184" width="30" height="30" fill="#1A202C"/>
            <rect x="412" y="189" width="20" height="20" fill="#FFFFFF"/>
            <rect x="417" y="194" width="10" height="10" fill="#1A202C"/>
            <text x="422" y="221" font-family="Helvetica" font-size="5" font-weight="bold" fill="#00880F" text-anchor="middle">KEPALA BAGIAN LOGISTIK</text>
        </svg>
        <div class="diagram-caption">Gambar 6.1: Antarmuka Laporan Keuangan & Rekonsiliasi Kas (resources/views/reports/finance.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 46: BAB 6.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">REKONSILIASI BIAYA POTONGAN MDR DOKU</h1>

    <h2 class="section-title">6.4 Rekonsiliasi Biaya Potongan MDR DOKU 0.7% & Arus Kas Bersih</h2>
    <p>
        Banyak sistem kasir konvensional mengabaikan potongan biaya MDR, sehingga saat uang dicairkan dari gateway ke rekening bank toko, terjadi selisih pembukuan (*unbalanced bookkeeping*).
    </p>
    <p>
        Sistem kasir ini secara otomatis memperhitungkan potongan MDR 0.7% pada setiap transaksi QRIS:
    </p>

    <div class="callout callout-success">
        <span class="callout-title">Contoh Simulasi Rekonsiliasi Akuntansi</span>
        Transaksi QRIS sebesar <b>Rp 100.000</b>:<br>
        - Nominal Bruto (Uang Pelanggan) = Rp 100.000<br>
        - Biaya Layanan DOKU (0.7%) = Rp 700<br>
        - Penerimaan Bersih Toko (Netto) = <b>Rp 99.300</b><br>
        Dengan pencatatan otomatis ini, saldo pembukuan di sistem dijamin 100% cocok dengan mutasi rekening koran bank toko.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 47: BAB 6.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">LAPORAN MONITORING & AUDIT QRIS DOKU</h1>

    <h2 class="section-title">6.5 Laporan Monitoring & Audit Transaksi Digital QRIS (/admin/reports/qris)</h2>
    <p>
        Modul khusus monitoring QRIS (<code>/admin/reports/qris</code>) menyajikan audit lengkap seluruh lalu lintas transaksi digital toko:
    </p>
    <ul>
        <li><b>Monitoring Transaksi Pending:</b> Menampilkan daftar QRIS yang sedang dibuat namun belum dibayar pembeli.</li>
        <li><b>Rekapitulasi Fee Gateway:</b> Akumulasi total biaya layanan MDR yang dibayarkan ke DOKU dalam periode laporan.</li>
        <li><b>Pencarian Invoice Gateway:</b> Fitur penelusuran nomor invoice untuk pengecekan kendala transaksi jika pelanggan mengklaim saldo telah terpotong.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 48: BAB 6.6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">LAPORAN INVENTARIS & VALUASI ASET BARANG</h1>

    <h2 class="section-title">6.6 Laporan Inventaris, Mutasi & Valuasi Total Aset Barang Dagangan</h2>
    <p>
        Laporan Stok Barang (<code>/admin/reports/stock</code>) menyajikan posisi inventaris pergudangan dan nilai total kekayaan barang dagangan:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Indikator Inventaris</th>
            <th style="width: 30%;">Formula Perhitungan</th>
            <th>Manfaat Pengawasan Manajemen</th>
        </tr>
        <tr>
            <td><b>Total Varian Produk</b></td>
            <td><code>COUNT(products.id)</code></td>
            <td>Mengetahui banyaknya keanekaragaman SKU barang yang dijual.</td>
        </tr>
        <tr>
            <td><b>Total Kuantitas Fisik</b></td>
            <td><code>SUM(products.stock)</code></td>
            <td>Mengetahui total keseluruhan unit barang yang ada di gudang.</td>
        </tr>
        <tr>
            <td><b>Valuasi Total Aset Toko</b></td>
            <td><code>SUM(stock &times; price)</code></td>
            <td>Menghitung total nilai uang yang tertanam dalam bentuk persediaan barang dagangan.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 49: BAB 6.7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">STRUK RINGKASAN TUTUP KASIR HARIAN</h1>

    <h2 class="section-title">6.7 Pencetakan Struk Ringkasan Tutup Kasir Harian (Daily Closing Slip)</h2>
    <p>
        Di akhir jam operasional toko (*shift closing*), kasir mencetak <b>Struk Ringkasan Harian</b> melalui tombol <code>Cetak Struk Harian</code>:
    </p>
    <ul>
        <li>Mencatat total pendapatan kotor hari berjalan.</li>
        <li>Mencatat rincian per produk: nama barang, jumlah kuantitas terjual hari itu, dan total nominal per produk.</li>
        <li>Menjadi bukti serah terima kas fisik antara kasir yang bertugas dengan bendahara/pemilik toko.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 50: BAB 6.8 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">STANDAR EKSPOR LAPORAN KE PDF & EXCEL</h1>

    <h2 class="section-title">6.8 Standar Ekspor Laporan Formal ke Format PDF Landscape & Excel (.xlsx)</h2>
    <p>
        Seluruh laporan di sistem kasir ini dirancang untuk dapat diekspor dalam 2 format resmi:
    </p>
    <ol>
        <li><b>PDF Landscape A4 Resmi:</b> Dilengkapi kop nama toko, nomor dokumen resmi berformat dinamis, tabel data bergaris rapi, ringkasan rekonsiliasi kas, serta stempel <b>QR Code TTE Digital</b>.</li>
        <li><b>Excel Spreadsheet (.xlsx):</b> Berkas lembar kerja Excel terstruktur yang dapat diolah kembali oleh akuntan untuk penyusunan laporan keuangan tahunan.</li>
    </ol>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 51: BAB 7.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</h1>

    <h2 class="section-title">7.1 Landasan Hukum UU ITE No. 11/2008 & Integritas Dokumen Digital</h2>
    <p>
        Setiap berkas PDF resmi yang dicetak oleh sistem dilengkapi stempel <b>Tanda Tangan Elektronik (TTE)</b> berbasis kode QR kriptografis.
    </p>
    <p>
        Penerapan TTE pada sistem ini merujuk secara sah pada <i>Undang-Undang Republik Indonesia Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (UU ITE)</i> serta <i>Peraturan Pemerintah No. 71 Tahun 2019 tentang Penyelenggaraan Sistem dan Transaksi Elektronik (PSTE)</i>. Dokumen bertanda tangan elektronik memiliki keabsahan hukum penuh di hadapan pengadilan, auditor keuangan, dan instansi perpajakan.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 52: BAB 7.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">STANDAR KRIPTOGRAFI SHA-256 & TIMESTAMP</h1>

    <h2 class="section-title">7.2 Standar Kriptografi SHA-256 & Timestamp Keabsahan</h2>
    <p>
        Untuk memastikan dokumen laporan tidak dapat dimanipulasi (*tamper-proof*), sistem mengimplementasikan standar kriptografi mutakhir:
    </p>
    <ul>
        <li><b>Enkripsi Kriptografis SHA-256:</b> Setiap dokumen laporan menghasilkan hash kriptografi unik berdasarkan kombinasi nomor invoice, nominal, tanggal, dan identitas penandatangan.</li>
        <li><b>Stempel Waktu Kriptografis (Cryptographic Timestamp):</b> Merekam detik dan waktu persis saat dokumen disahkan oleh sistem, mencegah pemalsuan tanggal mundur (*backdating*).</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 53: BAB 7.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">STRUKTUR PENOMORAN DOKUMEN LAPORAN DINAMIS</h1>

    <h2 class="section-title">7.3 Struktur Format Penomoran Dokumen Laporan Dinamis (LKEU/LPK/LSTK)</h2>
    <p>
        Nomor dokumen laporan dibuat secara otomatis dengan formula dinamis:
    </p>
    <div class="callout callout-info" style="font-family: monospace; font-size: 9pt; text-align: center;">
        [KODE]-[METODE]/[TANGGAL_DATA]/[BULAN_ROMAWI]/[NAMA_APLIKASI]/[TAHUN]
    </div>

    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Contoh Nomor Dokumen</th>
            <th style="width: 25%;">Jenis Laporan</th>
            <th>Penjelasan Komponen Nomor</th>
        </tr>
        <tr>
            <td><code>LKEU-TUNAI/05/VIII/SIBALOG/2026</code></td>
            <td>Laporan Keuangan Tunai</td>
            <td>Laporan keuangan kas tunai untuk data tanggal 5 Agustus 2026 aplikasi SIBALOG.</td>
        </tr>
        <tr>
            <td><code>LKEU-QRIS/05/VIII/SIBALOG/2026</code></td>
            <td>Laporan Transaksi QRIS</td>
            <td>Laporan transaksi digital QRIS untuk data tanggal 5 Agustus 2026.</td>
        </tr>
        <tr>
            <td><code>LPK-JUAL/05/VIII/SIBALOG/2026</code></td>
            <td>Laporan Penjualan Produk</td>
            <td>Laporan penjualan barang dagangan untuk data tanggal 5 Agustus 2026.</td>
        </tr>
    </table>

    <p>
        <b>Ketentuan Penting Penomoran:</b>
        Tanggal pada nomor dokumen selalu mengambil <b>tanggal dari filter data transaksi</b> (bukan tanggal saat tombol print diklik).
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 54: BAB 7.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">PENANDATANGAN DOKUMEN OTOMATIS & ALIAS TTE</h1>

    <h2 class="section-title">7.4 Penandatangan Dokumen Otomatis Berdasarkan Akun & Gelar Alias</h2>
    <p>
        Saat dokumen PDF dicetak, sistem secara cerdas menentukan identitas penandatangan dokumen:
    </p>
    <ol>
        <li><b>Nama Penandatangan:</b> Diambil dari <code>Auth::user()->name</code> (nama personil yang sedang login dan mencetak dokumen).</li>
        <li><b>Gelar Jabatan Resmi (Alias TTD):</b> Jika akun memiliki nilai pada kolom <code>alias</code> (misal: <i>"Kepala Bagian Logistik & Operasional"</i>), maka teks gelar jabatan tersebut dicetak tepat di atas QR Code TTE. Jika kolom alias kosong, sistem menggunakan gelar default sesuai role.</li>
    </ol>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 55: BAB 7.5 + GAMBAR SERTIFIKAT TTE --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">GAMBAR PORTAL VERIFIKASI DIGITAL TTE</h1>

    <h2 class="section-title">7.5 Visualisasi Sertifikat Verifikasi Dokumen TTE (reports/verify_report_tte.blade.php)</h2>
    <p>
        Berikut adalah tampilan sertifikat hijau resmi saat QR Code TTE dipindai oleh pihak ketiga:
    </p>

    {{-- SVG VECTOR GAMBAR SERTIFIKAT TTE --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Certificate Container Card -->
            <rect x="70" y="15" width="360" height="218" rx="12" fill="#FFFFFF" stroke="#38A169" stroke-width="2"/>
            <!-- Top Verified Badge -->
            <rect x="70" y="15" width="360" height="35" rx="12" fill="#00661A"/>
            <circle cx="95" cy="32" r="10" fill="#00AA13"/>
            <path d="M90 32 L94 36 L101 28" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" fill="none"/>
            <text x="115" y="36" font-family="Helvetica" font-size="9" font-weight="bold" fill="#FFFFFF">DOKUMEN RESMI & TERVERIFIKASI ASLI</text>
            <!-- Cert Body -->
            <text x="250" y="68" font-family="Helvetica" font-size="8.5" font-weight="bold" fill="#1A202C" text-anchor="middle">PORTAL VERIFIKASI KEABSAHAN TTE (UU ITE NO. 11/2008)</text>
            <text x="250" y="79" font-family="Helvetica" font-size="7" fill="#718096" text-anchor="middle">Sistem Sertifikasi Dokumen Digital {{ strtoupper($shop['app_name'] ?? 'POS') }}</text>
            
            <!-- Metadata Box -->
            <rect x="90" y="90" width="320" height="90" rx="8" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
            <text x="100" y="105" font-family="Helvetica" font-size="7" font-weight="bold" fill="#276749">Nomor Dokumen :</text>
            <text x="190" y="105" font-family="monospace" font-size="7" font-weight="bold" fill="#1A202C">LKEU-TUNAI/05/VIII/SIBALOG/2026</text>

            <text x="100" y="120" font-family="Helvetica" font-size="7" font-weight="bold" fill="#276749">Nama Pejabat   :</text>
            <text x="190" y="120" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">BAMBANG PAMUNGKAS, S.E.</text>

            <text x="100" y="135" font-family="Helvetica" font-size="7" font-weight="bold" fill="#276749">Gelar Jabatan  :</text>
            <text x="190" y="135" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00880F">Kepala Bagian Logistik & Operasional</text>

            <text x="100" y="150" font-family="Helvetica" font-size="7" font-weight="bold" fill="#276749">Nama Usaha     :</text>
            <text x="190" y="150" font-family="Helvetica" font-size="7" fill="#1A202C">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</text>

            <text x="100" y="165" font-family="Helvetica" font-size="7" font-weight="bold" fill="#276749">Status Validasi:</text>
            <text x="190" y="165" font-family="Helvetica" font-size="7" font-weight="bold" fill="#38A169">✔ SAH SECARA HUKUM & TERDAFTAR</text>

            <!-- Bottom Hash Info -->
            <text x="250" y="195" font-family="monospace" font-size="5.5" fill="#718096" text-anchor="middle">SHA-256: 8f4b23c91d8e20fa7b63... (Integritas Terkunci)</text>
            <text x="250" y="215" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F" text-anchor="middle">© {{ date('Y') }} I Gusti Sultan. All rights reserved.</text>
        </svg>
        <div class="diagram-caption">Gambar 7.1: Sertifikat Digital Portal Verifikasi Dokumen TTE (resources/views/reports/verify_report_tte.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 56: BAB 7.6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">PORTAL PUBLIK VERIFIKASI FAKTUR PELANGGAN</h1>

    <h2 class="section-title">7.6 Portal Publik Verifikasi Keaslian Faktur Pelanggan (/verify/tte/{trx})</h2>
    <p>
        Pada nota faktur belanja pelanggan, terdapat QR Code verifikasi transaksi unik. Saat dipindai, browser membuka portal <code>/verify/tte/{transaction_number}</code>:
    </p>
    <ul>
        <li>Memvalidasi keaslian faktur bahwa transaksi benar-benar tercatat di database toko.</li>
        <li>Menampilkan rincian barang yang dibeli, total nominal, metode bayar (Tunai/QRIS), nama kasir yang melayani, dan stempel status <b>LUNAS</b>.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 57: BAB 7.7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">TAUTAN FAKTUR SEMENTARA BERTANDA TANGAN (24 JAM)</h1>

    <h2 class="section-title">7.7 Tautan Faktur Digital Sementara Bertanda Tangan (Expired 24 Jam)</h2>
    <p>
        Untuk menjaga kerahasiaan data transaksi dan mencegah tautan struk belanja disalahgunakan oleh pihak ketiga, tautan faktur WhatsApp yang dikirimkan ke pembeli diamankan dengan <b>Signed URL Security</b>:
    </p>
    <ul>
        <li>Tautan unduh faktur digital hanya aktif selama <b>24 Jam (1 Hari)</b> sejak transaksi diselesaikan.</li>
        <li>Jika tautan diakses setelah lewat 24 jam, sistem otomatis mengarahkan pelanggan ke halaman peringatan <code>/reports/invoice_expired</code> yang menyarankan pelanggan menghubungi nomor WhatsApp toko untuk meminta tautan baru.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 58: BAB 8.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">PENGATURAN TOKO, KONFIGURASI & INTEGRASI SISTEM</h1>

    <h2 class="section-title">8.1 Pusat Pengaturan Sistem (/admin/settings)</h2>
    <p>
        Menu Pengaturan Toko (<code>/admin/settings</code>) memungkinkan administrator mengontrol seluruh identitas bisnis dan konfigurasi teknis gateway tanpa perlu mengubah kode sumber aplikasi.
    </p>
    <p>
        Seluruh pengaturan disimpan dalam basis data pada tabel <code>settings</code> berformat *key-value pair* dan dapat diperbarui sewaktu-waktu oleh administrator toko.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 59: BAB 8.2 + GAMBAR PENGATURAN TOKO --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">GAMBAR FORMULIR PENGATURAN TOKO & LOGO</h1>

    <h2 class="section-title">8.2 Visualisasi Antarmuka Pengaturan Toko (admin/settings/index.blade.php)</h2>
    <p>
        Berikut adalah visualisasi formulir pengaturan identitas toko dan integrasi gateway:
    </p>

    {{-- SVG VECTOR GAMBAR PENGATURAN --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- Settings Card -->
            <rect x="25" y="15" width="450" height="218" rx="12" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="40" y="34" font-family="Helvetica" font-size="9.5" font-weight="bold" fill="#1A202C">⚙️ PUSAT PENGATURAN IDENTITAS TOKO & GATEWAY</text>
            <!-- Field 1: Nama Toko -->
            <text x="40" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA BADAN USAHA / TOKO</text>
            <rect x="40" y="56" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">{{ $shop['shop_name'] ?? 'BAGIAN LOGISTIK' }}</text>
            <!-- Field 2: Nama Aplikasi -->
            <text x="260" y="52" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">NAMA APLIKASI (BRANDING)</text>
            <rect x="260" y="56" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="268" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">{{ $shop['app_name'] ?? 'SIBALOG' }}</text>
            <!-- Field 3: Alamat -->
            <text x="40" y="90" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">ALAMAT RESMI USAHA</text>
            <rect x="40" y="94" width="420" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="108" font-family="Helvetica" font-size="7" fill="#1A202C">{{ $shop['shop_address'] ?? 'Jalan Argopuro No. 77, Jember, Jawa Timur' }}</text>
            <!-- Field 4: Upload Logo -->
            <text x="40" y="128" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">UNGGAH LOGO RESMI TOKO (PNG/JPG)</text>
            <rect x="40" y="132" width="200" height="28" rx="5" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
            <text x="48" y="149" font-family="Helvetica" font-size="6.5" fill="#00880F">📁 [Pilih Berkas Logo Baru...]</text>
            <!-- Field 5: Audio Bel -->
            <text x="260" y="128" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">AUDIO BEL KASIR (.MP3 / .WAV)</text>
            <rect x="260" y="132" width="200" height="28" rx="5" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
            <text x="268" y="149" font-family="Helvetica" font-size="6.5" fill="#00880F">🔔 [Pilih Berkas Suara Kasir...]</text>
            <!-- Field 6: DOKU API -->
            <text x="40" y="174" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">DOKU CLIENT ID / MALL ID</text>
            <rect x="40" y="178" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="48" y="192" font-family="Helvetica" font-size="6.5" fill="#4A5568">MALL_ID_123456</text>
            <!-- Field 7: Telegram -->
            <text x="260" y="174" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#718096">TELEGRAM BOT TOKEN</text>
            <rect x="260" y="178" width="200" height="20" rx="5" fill="#F7FAFC" stroke="#CBD5E0" stroke-width="1"/>
            <text x="268" y="192" font-family="Helvetica" font-size="6.5" fill="#4A5568">bot71829381:AAF_xxxxx...</text>
            <!-- Save Button -->
            <rect x="340" y="204" width="120" height="22" rx="6" fill="#00AA13"/>
            <text x="400" y="218" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">SIMPAN PENGATURAN</text>
        </svg>
        <div class="diagram-caption">Gambar 8.1: Pusat Pengaturan Toko & Integrasi Gateway (resources/views/admin/settings/index.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 60: BAB 8.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">BRANDING APLIKASI & PREFIX NOMOR INVOICE</h1>

    <h2 class="section-title">8.3 Kustomisasi Branding Aplikasi, Prefix Invoice & Favicon Browser</h2>
    <p>
        Selain identitas toko fisik, administrator dapat mengatur branding sistem perangkat lunak:
    </p>
    <ul>
        <li><b>Nama Aplikasi Toko:</b> Mengubah nama sistem (misal: <code>SIBALOG</code> atau <code>SIKANDA</code>). Nama ini tampil di tab browser dan dokumen resmi.</li>
        <li><b>Prefix Nomor Transaksi Dinamis:</b> Sistem secara otomatis mengambil 3 huruf awal dari nama aplikasi untuk dijadikan awalan nomor nota kasir (contoh: <code>SIBALOG</code> &rarr; <code>SIB-20260825-XXXXX</code>).</li>
        <li><b>Favicon Tab Browser:</b> Mengunggah file ikon (.ico/.png) untuk personalisasi tab browser kasir.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 61: BAB 8.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">PENGATURAN SUARA BEL KASIR (AUDIO CHIME)</h1>

    <h2 class="section-title">8.4 Pengaturan & Pengunggahan Suara Bel Kasir (Audio Chime MP3/WAV)</h2>
    <p>
        Administrator dapat menyesuaikan nada bel notifikasi kasir:
    </p>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Siapkan Berkas Audio</div>
        <p>Siapkan berkas audio pendek bernada jernih dalam format <code>.mp3</code> atau <code>.wav</code> (ukuran di bawah 1MB).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Unggah di Menu Pengaturan Toko</div>
        <p>Buka menu <code>/admin/settings</code>, pilih berkas audio pada kolom <i>Audio Bel Kasir</i>, lalu klik <b>Simpan Pengaturan</b>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Uji Coba Suara</div>
        <p>Audio baru akan langsung dimainkan setiap kali kasir menyelesaikan transaksi tunai maupun QRIS.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 62: BAB 8.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">KONFIGURASI GATEWAY DOKU MERCHANT</h1>

    <h2 class="section-title">8.5 Konfigurasi Gateway DOKU Merchant (Sandbox & Production)</h2>
    <p>
        Untuk mengaktifkan pembayaran digital Dynamic QRIS, isi kredensial API dari portal DOKU Merchant:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Parameter DOKU</th>
            <th style="width: 30%;">Format Nilai</th>
            <th>Fungsi Integrasi</th>
        </tr>
        <tr>
            <td><b>DOKU Client ID</b></td>
            <td>String Alfanumerik (MALLID)</td>
            <td>Identitas merchant unik yang terdaftar resmi di DOKU.</td>
        </tr>
        <tr>
            <td><b>DOKU Secret Key</b></td>
            <td>Shared Secret Key Kriptografis</td>
            <td>Kunci privat untuk membubuhkan tanda tangan HMAC-SHA256 pada setiap permintaan QRIS.</td>
        </tr>
        <tr>
            <td><b>DOKU Environment</b></td>
            <td>Sandbox / Production</td>
            <td>Pilihan mode uji coba (*Sandbox*) atau mode penerimaan uang nyata (*Production*).</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 63: BAB 8.6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">KONFIGURASI BOT NOTIFIKASI TELEGRAM</h1>

    <h2 class="section-title">8.6 Konfigurasi Integrasi Bot Notifikasi Telegram Toko</h2>
    <p>
        Sistem dapat mengirimkan laporan uang masuk otomatis ke ponsel pemilik toko melalui aplikasi Telegram:
    </p>
    <ul>
        <li><b>Telegram Bot Token:</b> Token otorisasi bot yang didapatkan dari <code>@BotFather</code>.</li>
        <li><b>Telegram Chat ID:</b> ID grup atau ID obrolan pribadi pemilik toko tempat notifikasi akan dikirimkan.</li>
        <li><b>Format Pesan:</b> Pesan otomatis memuat nomor invoice, rincian barang belanjaan, metode bayar (Tunai/QRIS), nama kasir yang bertugas, dan waktu transaksi.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 64: BAB 8.7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">PENGATURAN FOOTER STRUK KASIR</h1>

    <h2 class="section-title">8.7 Pengaturan Footer Struk Kasir & Kebijakan Toko</h2>
    <p>
        Administrator dapat mengatur pesan penutup pada struk belanja pelanggan melalui kolom <i>Footer Struk Kasir</i>:
    </p>
    <ul>
        <li>Contoh: <code>"Barang yang sudah dibeli tidak dapat ditukar atau dikembalikan. Terima kasih atas kunjungan Anda!"</code>.</li>
        <li>Pesan ini akan tercetak otomatis di bagian bawah struk thermal Bluetooth maupun nota PDF struk kasir.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 65: BAB 9.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</h1>

    <h2 class="section-title">9.1 Daftar Akun Pengguna (/admin/users)</h2>
    <p>
        Modul Manajemen Pengguna (<code>/admin/users</code>) mengontrol seluruh akun staf kasir dan administrator yang memiliki hak akses ke sistem.
    </p>
    <p>
        Tabel pengguna menampilkan nama lengkap, alamat email login, lencana peran (*badge role*), gelar jabatan resmi (*alias TTD*), serta tombol pengeditan data akun.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 66: BAB 9.2 + GAMBAR PENGGUNA & ALIAS TTE --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">GAMBAR MANAJEMEN AKUN & GELAR JABATAN TTE</h1>

    <h2 class="section-title">9.2 Visualisasi Antarmuka Manajemen Pengguna (admin/users/index.blade.php)</h2>
    <p>
        Berikut adalah visualisasi daftar akun pengguna dan pengaturan alias penandatangan dokumen:
    </p>

    {{-- SVG VECTOR GAMBAR USERS --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="1.5"/>
            <!-- User Table Card -->
            <rect x="15" y="15" width="470" height="218" rx="10" fill="#FFFFFF" stroke="#CBD5E0" stroke-width="1"/>
            <text x="25" y="34" font-family="Helvetica" font-size="9.5" font-weight="bold" fill="#1A202C">👥 DAFTAR AKUN PENGGUNA & GELAR JABATAN TTE</text>
            <rect x="375" y="20" width="100" height="20" rx="5" fill="#00AA13"/>
            <text x="425" y="33" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">+ TAMBAH AKUN</text>
            <!-- Table Header -->
            <rect x="25" y="48" width="450" height="18" fill="#00661A"/>
            <text x="32" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">NAMA LENGKAP</text>
            <text x="140" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">EMAIL LOGIN</text>
            <text x="240" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">ROLE WEWENANG</text>
            <text x="320" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">GELAR JABATAN (ALIAS TTD)</text>
            <text x="440" y="60" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#FFFFFF">AKSI</text>
            <!-- Row 1 -->
            <rect x="25" y="68" width="450" height="24" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="32" y="83" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">I Gusti Sultan</text>
            <text x="140" y="83" font-family="Helvetica" font-size="6.5" fill="#4A5568">admin@toko.site</text>
            <rect x="240" y="73" width="60" height="14" rx="4" fill="#00661A"/>
            <text x="270" y="83" font-family="Helvetica" font-size="6" font-weight="bold" fill="#FFFFFF" text-anchor="middle">ADMIN</text>
            <text x="320" y="83" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Lead Software Architect</text>
            <text x="440" y="83" font-family="Helvetica" font-size="6.5" fill="#3182CE">Edit</text>
            <!-- Row 2 -->
            <rect x="25" y="94" width="450" height="24" fill="#F8FAFC" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="32" y="109" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Bambang Pamungkas</text>
            <text x="140" y="109" font-family="Helvetica" font-size="6.5" fill="#4A5568">bambang@toko.site</text>
            <rect x="240" y="99" width="60" height="14" rx="4" fill="#00661A"/>
            <text x="270" y="109" font-family="Helvetica" font-size="6" font-weight="bold" fill="#FFFFFF" text-anchor="middle">ADMIN</text>
            <text x="320" y="109" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00880F">Kepala Bagian Logistik</text>
            <text x="440" y="109" font-family="Helvetica" font-size="6.5" fill="#3182CE">Edit</text>
            <!-- Row 3 -->
            <rect x="25" y="120" width="450" height="24" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="0.5"/>
            <text x="32" y="135" font-family="Helvetica" font-size="7" font-weight="bold" fill="#1A202C">Siti Rahma</text>
            <text x="140" y="135" font-family="Helvetica" font-size="6.5" fill="#4A5568">kasir1@toko.site</text>
            <rect x="240" y="125" width="60" height="14" rx="4" fill="#3182CE"/>
            <text x="270" y="135" font-family="Helvetica" font-size="6" font-weight="bold" fill="#FFFFFF" text-anchor="middle">KASIR</text>
            <text x="320" y="135" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#4A5568">Kasir Utama Shift Pagi</text>
            <text x="440" y="135" font-family="Helvetica" font-size="6.5" fill="#3182CE">Edit</text>
            <!-- Explanatory Box -->
            <rect x="25" y="152" width="450" height="65" rx="6" fill="#F0FFF4" stroke="#A8DAB5" stroke-width="1"/>
            <text x="35" y="167" font-family="Helvetica" font-size="7" font-weight="bold" fill="#00661A">💡 PENTING: PENGARUH GELAR JABATAN (ALIAS TTD) PADA DOKUMEN LAPORAN:</text>
            <text x="35" y="180" font-family="Helvetica" font-size="6.5" fill="#2D3748">• Teks yang diisi pada kolom "Alias TTD" akan dicetak tepat di atas stempel QR Code TTE.</text>
            <text x="35" y="192" font-family="Helvetica" font-size="6.5" fill="#2D3748">• Jika akun mencetak laporan keuangan, gelar resmi memberikan kekuatan hukum formal saat audit.</text>
            <text x="35" y="204" font-family="Helvetica" font-size="6.5" fill="#2D3748">• Setiap personil dapat memiliki gelar jabatan spesifik sesuai struktur organisasi toko.</text>
        </svg>
        <div class="diagram-caption">Gambar 9.1: Manajemen Akun Pengguna & Kolom Alias Gelar TTE (resources/views/admin/users/index.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 67: BAB 9.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">KONFIGURASI GELAR JABATAN ALIAS TTE</h1>

    <h2 class="section-title">9.3 Konfigurasi Kolom "Alias / Gelar Jabatan TTD" Penandatangan Dokumen</h2>
    <p>
        Salah satu fitur unggulan sistem ini adalah dukungan <b>Gelar Jabatan Resmi (Alias TTD)</b> yang fleksibel untuk seluruh role:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Role Akun</th>
            <th style="width: 35%;">Contoh Isian Kolom Alias TTD</th>
            <th>Tampilan pada QR Code TTE Laporan Resmi</th>
        </tr>
        <tr>
            <td><b>Administrator</b></td>
            <td><code>Kepala Bagian Logistik & Distribusi</code></td>
            <td>Dicetak di bawah nama admin pada kop tanda tangan dokumen laporan.</td>
        </tr>
        <tr>
            <td><b>Administrator</b></td>
            <td><code>Manager Operasional & Keuangan</code></td>
            <td>Memberikan legitimasi manajerial formal pada audit laporan keuangan.</td>
        </tr>
        <tr>
            <td><b>Petugas Kasir</b></td>
            <td><code>Kasir Senior Shift Pagi</code></td>
            <td>Mengidentifikasi petugas kasir yang bertanggung jawab atas penutupan kas harian.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 68: BAB 9.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">PEMBARUAN DATA PENGGUNA & RESET PASSWORD</h1>

    <h2 class="section-title">9.4 Pembaruan Data Pengguna & Prosedur Reset Kata Sandi</h2>
    <p>
        Jika ada staf yang lupa kata sandi atau mengalami pergantian jabatan:
    </p>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Buka Form Edit Akun</div>
        <p>Akses <code>/admin/users/{id}/edit</code> melalui tombol edit pada tabel pengguna.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Ubah Gelar Jabatan / Role</div>
        <p>Perbarui kolom nama, email, role, atau gelar alias TTE sesuai kebutuhan.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Reset Password (Opsional)</div>
        <p>Jika ingin mereset password, ketikkan password baru pada kolom kata sandi. Jika tidak ingin mengubah password, biarkan kolom kata sandi kosong.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 69: BAB 10.1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PEMELIHARAAN SERVER EKSKLUSIF DIKELOLA OLEH I GUSTI SULTAN</h1>

    <h2 class="section-title">10.1 Arsitektur Server Produksi & Manajemen Terpusat oleh I Gusti Sultan</h2>
    <p>
        Seluruh infrastruktur server produksi, konfigurasi web server Nginx, lingkungan runtime PHP-FPM 8.2+, basis data MySQL, manajemen kontrol panel aaPanel, sertifikat keamanan SSL/TLS, proteksi firewall, hingga skema pencadangan (*backup*) data toko <b>dikelola dan dipelihara secara profesional dan eksklusif oleh I Gusti Sultan</b>.
    </p>
    <p>
        Pendekatan manajemen terpusat ini menjamin sistem kasir POS memiliki tingkat ketersediaan (*uptime*) 99.9%, terlindung dari kerentanan keamanan siber, dan selalu siap memproses ribuan transaksi per hari tanpa kendala teknis.
    </p>

    <div class="callout callout-success">
        <span class="callout-title">Jaminan Kinerja & Pemeliharaan Terpusat</span>
        Pengguna dan pengelola toko tidak perlu mengkhawatirkan kompleksitas teknis server Linux, update patch keamanan, atau optimasi database, karena seluruh aspek pemeliharaan teknis ditangani secara langsung oleh <b>I Gusti Sultan</b>.
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 70: BAB 10.2 + GAMBAR ARSITEKTUR SERVER --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">GAMBAR ARSITEKTUR SERVER DIKELOLA OLEH I GUSTI SULTAN</h1>

    <h2 class="section-title">10.2 Visualisasi Infrastruktur Server & Dedicated Media Engine (I Gusti Sultan)</h2>
    <p>
        Berikut adalah diagram arsitektur server produksi, engine media anti-404, dan pengelolaan aaPanel:
    </p>

    {{-- SVG VECTOR GAMBAR ARSITEKTUR SERVER --}}
    <div class="diagram-container">
        <svg width="460" height="230" viewBox="0 0 500 250">
            <rect x="5" y="5" width="490" height="240" rx="14" fill="#00360D" stroke="#00AA13" stroke-width="2"/>
            <!-- Header Server Title -->
            <text x="250" y="28" font-family="Helvetica" font-size="10" font-weight="bold" fill="#FFFFFF" text-anchor="middle">ARSITEKTUR SERVER PRODUKSI & PEMELIHARAAN TERPUSAT</text>
            <text x="250" y="40" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#A8DAB5" text-anchor="middle">DIKELOLA EKSKLUSIF OLEH: I GUSTI SULTAN (LEAD SYSTEM ARCHITECT)</text>

            <!-- Box 1: aaPanel Linux Host -->
            <rect x="25" y="55" width="135" height="130" rx="8" fill="#FFFFFF"/>
            <rect x="25" y="55" width="135" height="22" rx="8" fill="#1A202C"/>
            <text x="92" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">🖥️ aaPanel Linux Host</text>
            <text x="35" y="90" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00661A">• AlmaLinux / Ubuntu</text>
            <text x="35" y="103" font-family="Helvetica" font-size="6.5" fill="#4A5568">• SSL Let's Encrypt Auto</text>
            <text x="35" y="116" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Firewall Port 80/443</text>
            <text x="35" y="129" font-family="Helvetica" font-size="6.5" fill="#4A5568">• PHP-FPM 8.2 Socket</text>
            <text x="35" y="142" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Daily Auto Dump Cron</text>
            <text x="35" y="155" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#38A169">• Path: /www/wwwroot</text>

            <!-- Box 2: Nginx Web Server & Streaming Route -->
            <rect x="182" y="55" width="135" height="130" rx="8" fill="#FFFFFF"/>
            <rect x="182" y="55" width="135" height="22" rx="8" fill="#00661A"/>
            <text x="249" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">⚡ Nginx & Media Engine</text>
            <text x="190" y="90" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00661A">• Reverse Proxy HTTPS</text>
            <text x="190" y="103" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Gzip Compression</text>
            <text x="190" y="116" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#2B6CB0">• /media-file Engine</text>
            <text x="190" y="129" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Anti 404 Nginx Bypass</text>
            <text x="190" y="142" font-family="Helvetica" font-size="6.5" fill="#4A5568">• MIME-Type Dispatcher</text>
            <text x="190" y="155" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#38A169">• Sub-50ms Response</text>

            <!-- Box 3: Laravel 11 Backend & DOKU Gateway -->
            <rect x="340" y="55" width="135" height="130" rx="8" fill="#FFFFFF"/>
            <rect x="340" y="55" width="135" height="22" rx="8" fill="#EE2737"/>
            <text x="407" y="70" font-family="Helvetica" font-size="7" font-weight="bold" fill="#FFFFFF" text-anchor="middle">⚙️ Laravel 11 & DOKU</text>
            <text x="348" y="90" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#00661A">• Eloquent ORM MySQL</text>
            <text x="348" y="103" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Dynamic QRIS Gateway</text>
            <text x="348" y="116" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Real-time Webhook</text>
            <text x="348" y="129" font-family="Helvetica" font-size="6.5" fill="#4A5568">• SHA-256 TTE Crypt</text>
            <text x="348" y="142" font-family="Helvetica" font-size="6.5" fill="#4A5568">• Signed URL 24h Expire</text>
            <text x="348" y="155" font-family="Helvetica" font-size="6.5" font-weight="bold" fill="#38A169">• Log: storage/logs</text>

            <!-- Bottom Guarantee Bar -->
            <rect x="25" y="195" width="450" height="35" rx="8" fill="#00880F"/>
            <text x="250" y="210" font-family="Helvetica" font-size="7.5" font-weight="bold" fill="#FFFFFF" text-anchor="middle">GARANSI PERAWATAN & DUKUNGAN SISTEM 24/7 OLEH I GUSTI SULTAN</text>
            <text x="250" y="222" font-family="Helvetica" font-size="6.5" fill="#E6F4EA" text-anchor="middle">Server Uptime 99.9% • Update Kode GitHub Terjadwal • Pembersihan Cache Otomatis</text>
        </svg>
        <div class="diagram-caption">Gambar 10.1: Arsitektur Infrastruktur Server & Pemeliharaan Terpusat oleh I Gusti Sultan</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 71: BAB 10.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PEMELIHARAAN STORAGE SYMLINK AAPANEL</h1>

    <h2 class="section-title">10.3 Prosedur Pemeliharaan Storage Symlink & File System aaPanel</h2>
    <p>
        Sebagai bagian dari standar pemeliharaan server produksi di aaPanel, <b>I Gusti Sultan</b> memastikan struktur direktori storage selalu berada dalam kondisi optimal:
    </p>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Pembuatan Symlink Resmi Laravel</div>
        <p>Mengeksekusi perintah <code>php artisan storage:link</code> di direktori root project <code>/www/wwwroot/kasir.site</code>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Pengaturan Izin Akses Direktori (Permissions)</div>
        <p>Memastikan folder <code>storage/</code> dan <code>bootstrap/cache/</code> memiliki izin kepemilikan <code>www:www</code> dengan hak akses <code>775</code>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Fallback Storage Route</div>
        <p>Menyiapkan route fallback <code>/storage/{path}</code> di <code>routes/web.php</code> untuk melayani file jika symlink OS terputus.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 72: BAB 10.4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">KONFIGURASI NGINX & REWRITE ENGINE</h1>

    <h2 class="section-title">10.4 Konfigurasi Web Server Nginx & URL Rewrite Engine Laravel</h2>
    <p>
        Web server Nginx pada aaPanel dikonfigurasi secara presisi oleh <b>I Gusti Sultan</b> untuk mendukung URL rewrite Laravel:
    </p>

    <div class="callout callout-info" style="font-family: monospace; font-size: 8pt;">
        location / {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;try_files $uri $uri/ /index.php?$query_string;<br>
        }<br>
        <br>
        location ~ \.php$ {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;fastcgi_pass unix:/tmp/php-cgi-82.sock;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;fastcgi_index index.php;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;include fastcgi.conf;<br>
        }
    </div>

    <p>
        Konfigurasi ini memastikan seluruh lalu lintas webhook dari gateway DOKU, permintaan API kasir, dan pengunduhan PDF diproses secara instan tanpa kendala routing.
    </p>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 73: BAB 10.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PEMANTAUAN LOG SISTEM (LARAVEL.LOG)</h1>

    <h2 class="section-title">10.5 Pemantauan Log Kesalahan Sistem (laravel.log) & Error Handling</h2>
    <p>
        Aktivitas transaksi kasir dan respons webhook DOKU dipantau secara berkala melalui berkas log <code>storage/logs/laravel.log</code>.
    </p>
    <p>
        Setiap anomali transaksi atau kegagalan koneksi perbankan akan tercatat lengkap dengan stempel waktu dan jejak eksekusi (*stack trace*) untuk penanganan segera oleh <b>I Gusti Sultan</b>:
    </p>
    <ul>
        <li><b>Log Transaksi QRIS:</b> Mencatat payload JSON webhook dari gateway DOKU dan status verifikasi tanda tangan.</li>
        <li><b>Log Notifikasi Telegram:</b> Memantau status pengiriman pesan notifikasi uang masuk ke ponsel pemilik toko.</li>
        <li><b>Log Kesalahan Input:</b> Merekam kegagalan kueri atau kesalahan validasi form untuk perbaikan cepat.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 74: BAB 10.6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PENCADANGAN BASIS DATA & DISASTER RECOVERY</h1>

    <h2 class="section-title">10.6 Prosedur Pencadangan (Backup) Harian & Disaster Recovery oleh I Gusti Sultan</h2>
    <p>
        Untuk menjamin keamanan seluruh riwayat transaksi dan data inventaris toko dari risiko kehilangan data, <b>I Gusti Sultan</b> menerapkan skema pencadangan otomatis:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Jenis Pencadangan</th>
            <th style="width: 25%;">Frekuensi Rutin</th>
            <th>Cakupan Data & Lokasi Penyimpanan</th>
        </tr>
        <tr>
            <td><b>Daily Database Snapshot</b></td>
            <td>Setiap Hari (Pukul 02.00 WIB)</td>
            <td>Dump seluruh tabel MySQL (sales, products, users, settings) ke storage terenkripsi.</td>
        </tr>
        <tr>
            <td><b>Media Asset Backup</b></td>
            <td>Setiap Pekan</td>
            <td>Arsip kompresi seluruh logo toko, favicon, dan berkas faktur digital.</td>
        </tr>
        <tr>
            <td><b>Disaster Recovery Plan</b></td>
            <td>Siaga 24/7</td>
            <td>Prosedur pemulihan cepat (*quick restore*) dalam hitungan menit jika terjadi insiden server.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 75: BAB 10.7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">SOP PEMELIHARAAN SERVER RUTIN</h1>

    <h2 class="section-title">10.7 Standar Operasional Prosedur (SOP) Pemeliharaan Server Rutin oleh I Gusti Sultan</h2>
    <p>
        Setiap kali pembaruan fitur atau perbaikan sistem dirilis ke repository GitHub, <b>I Gusti Sultan</b> mengeksekusi prosedur pemeliharaan standar berikut di terminal server produksi:
    </p>

    <div class="callout callout-info" style="font-family: monospace; font-size: 8.5pt;">
        cd /www/wwwroot/kasir.site<br>
        git pull origin main<br>
        php artisan view:clear<br>
        php artisan route:clear<br>
        php artisan config:clear
    </div>

    <p>
        <b>Pembersihan Cache Berkala:</b>
    </p>
    <ul>
        <li><code>view:clear</code>: Membersihkan file kompilasi Blade lama agar perubahan tampilan langsung aktif.</li>
        <li><code>route:clear</code>: Meregenerasi cache tabel rute URL untuk performa pencocokan alamat yang cepat.</li>
        <li><code>config:clear</code>: Memastikan perubahan file <code>.env</code> dan pengaturan toko langsung terbaca oleh aplikasi.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 76: BAB 10.8 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PANDUAN TROUBLESHOOTING & SOLUSI CEPAT</h1>

    <h2 class="section-title">10.8 Panduan Pemecahan Masalah Cepat (Troubleshooting FAQ)</h2>
    <p>
        Panduan solusi cepat untuk kendala operasional yang sering ditemui:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Gejala Masalah</th>
            <th style="width: 30%;">Analisis Penyebab</th>
            <th>Langkah Solusi Pemecahan</th>
        </tr>
        <tr>
            <td><b>Transaksi QRIS belum otomatis berubah sukses</b></td>
            <td>Koneksi webhook dari DOKU terhambat firewall atau URL webhook belum terdaftar.</td>
            <td>Periksa URL notification di DOKU Merchant dashboard: <code>https://domain-anda.com/doku/notification</code>. I Gusti Sultan akan memeriksa log transaksi.</td>
        </tr>
        <tr>
            <td><b>Printer Bluetooth tidak merespons cetak</b></td>
            <td>Perangkat bluetooth terputus atau kertas thermal habis.</td>
            <td>Pastikan printer dalam kondisi ON, kertas terpasang benar, dan lakukan pairing ulang Bluetooth pada PC/ponsel kasir.</td>
        </tr>
        <tr>
            <td><b>Logo pada struk kasir PDF tidak tampil</b></td>
            <td>Format gambar rusak atau ekstensi GD belum aktif.</td>
            <td>Sistem telah dilengkapi konverter otomatis GD Grayscale latar putih buatan I Gusti Sultan sehingga logo dijamin tampil tajam.</td>
        </tr>
        <tr>
            <td><b>Perubahan nama toko belum tampil di laporan</b></td>
            <td>Cache Blade template web browser atau server masih aktif.</td>
            <td>Jalankan pembersihan cache <code>php artisan view:clear</code> di server aaPanel.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 77: BAB 10.9 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">GLOSARIUM LENGKAP ISTILAH SISTEM</h1>

    <h2 class="section-title">10.9 Glosarium Lengkap Istilah POS, Perbankan, Kriptografi & E-Commerce</h2>
    <ul>
        <li><b>POS (Point of Sale):</b> Titik penjualan tempat transaksi barang dagangan dan penerimaan uang kasir berlangsung.</li>
        <li><b>Dynamic QRIS:</b> Kode QRIS satu kali pakai yang memuat nominal transaksi secara presisi dan otomatis hangus setelah dibayar.</li>
        <li><b>MDR (Merchant Discount Rate):</b> Tarif pemrosesan transaksi pembayaran digital perbankan (0.7% untuk QRIS).</li>
        <li><b>TTE (Tanda Tangan Elektronik):</b> Tanda tangan digital berdasar UU ITE No. 11/2008 yang dienkripsi secara kriptografis.</li>
        <li><b>Bcrypt Hash:</b> Fungsi hash adaptif satu arah untuk mengamankan kata sandi pengguna dari kebocoran data.</li>
        <li><b>aaPanel:</b> Kontrol panel manajemen web server Linux untuk hosting aplikasi Laravel dan basis data.</li>
        <li><b>Nginx:</b> Perangkat lunak web server berkinerja tinggi yang menangani permintaan HTTP dan SSL reverse proxy.</li>
        <li><b>I Gusti Sultan:</b> Lead Software Architect dan Pengelola Utama Seluruh Infrastruktur Server & Aplikasi.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 78: LEMBAR KONTAK & DUKUNGAN TEKNIS --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">LEMBAR KONTAK & DUKUNGAN TEKNIS RESMI</h1>
    
    <div class="callout callout-success">
        <span class="callout-title">Layanan Bantuan & Dukungan Teknis Terpusat</span>
        Seluruh infrastruktur server, penambahan modul fitur kustom, integrasi payment gateway tambahan, serta bantuan penanganan kendala teknis dikelola secara langsung oleh <b>I Gusti Sultan</b>.
    </div>

    <table class="doc-table">
        <tr>
            <th style="width: 35%;">Saluran Dukungan</th>
            <th>Rincian Informasi Kontak Resmi</th>
        </tr>
        <tr>
            <td><b>Nama Pengembang & Arsitek</b></td>
            <td><b>I Gusti Sultan</b></td>
        </tr>
        <tr>
            <td><b>Peran & Tanggung Jawab</b></td>
            <td>Lead Software Architect, Database Administrator & Server Infrastructure Maintainer</td>
        </tr>
        <tr>
            <td><b>Layanan Pemeliharaan Server</b></td>
            <td>aaPanel Management, Nginx Web Server, MySQL Tuning, SSL Security & Webhook Monitoring</td>
        </tr>
        <tr>
            <td><b>Status Hak Cipta Sistem</b></td>
            <td>&copy; {{ date('Y') }} I Gusti Sultan. All rights reserved.</td>
        </tr>
    </table>

    <div style="margin-top: 50px; text-align: center;" class="no-break">
        <p style="font-size: 11pt; font-weight: 800; color: #00661A; text-transform: uppercase;">
            TERIMA KASIH TELAH MENGGUNAKAN SISTEM POS KASIR & ADMINISTRASI MODERN
        </p>
        <p style="font-size: 9pt; color: #718096;">
            Dokumen Buku Panduan Resmi &bull; Edisi 2.0 &bull; Diterbitkan Tahun {{ date('Y') }}
        </p>
    </div>

</body>
</html>
