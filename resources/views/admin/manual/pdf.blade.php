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
            font-size: 9.5pt;
            line-height: 1.55;
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
            padding-top: 40px;
        }

        .cover-badge {
            background-color: #E6F4EA;
            color: #00880F;
            font-weight: 800;
            font-size: 8.5pt;
            padding: 6px 18px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 20px;
            border: 1.5px solid #A8DAB5;
        }

        .cover-title {
            font-size: 24pt;
            font-weight: 900;
            color: #1A202C;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            line-height: 1.25;
            margin: 0 0 12px 0;
        }

        .cover-subtitle {
            font-size: 13pt;
            font-weight: 700;
            color: #00AA13;
            margin: 0 0 25px 0;
            line-height: 1.4;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cover-divider {
            width: 120px;
            height: 4px;
            background-color: #00AA13;
            margin: 15px auto 25px auto;
            border-radius: 2px;
        }

        .cover-desc {
            font-size: 9.5pt;
            color: #4A5568;
            max-width: 520px;
            margin: 0 auto 35px auto;
            line-height: 1.6;
            text-align: center;
        }

        .cover-meta-box {
            background-color: #F7FAFC;
            border: 1.5px solid #E2E8F0;
            border-radius: 12px;
            padding: 18px;
            text-align: left;
            margin: 0 auto;
            width: 90%;
        }

        .cover-meta-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 8.5pt;
        }

        .cover-meta-table td {
            padding: 4px 6px;
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
            margin-top: 40px;
            font-size: 8pt;
            color: #718096;
            letter-spacing: 1.5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* HEADINGS */
        h1.chapter-title {
            font-size: 15pt;
            font-weight: 900;
            color: #00661A;
            border-bottom: 2.5px solid #00AA13;
            padding-bottom: 6px;
            margin-top: 0;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .chapter-num {
            font-size: 10pt;
            font-weight: 800;
            color: #00AA13;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 3px;
        }

        h2.section-title {
            font-size: 11.5pt;
            font-weight: 800;
            color: #2D3748;
            margin-top: 16px;
            margin-bottom: 8px;
            border-left: 4px solid #00AA13;
            padding-left: 8px;
        }

        h3.subsection-title {
            font-size: 10pt;
            font-weight: 700;
            color: #4A5568;
            margin-top: 12px;
            margin-bottom: 6px;
        }

        p {
            margin: 0 0 8px 0;
            text-align: justify;
        }

        /* TABLES */
        table.doc-table {
            width: 100%;
            border-collapse: collapse;
            margin: 12px 0 16px 0;
            font-size: 8pt;
        }

        table.doc-table th {
            background-color: #00661A;
            color: #FFFFFF;
            font-weight: bold;
            text-transform: uppercase;
            padding: 7px 9px;
            border: 1px solid #004D13;
            text-align: left;
            letter-spacing: 0.5px;
        }

        table.doc-table td {
            padding: 6px 9px;
            border: 1px solid #CBD5E0;
            vertical-align: top;
        }

        table.doc-table tr:nth-child(even) td {
            background-color: #F8FAFC;
        }

        /* CALLOUT BOXES */
        .callout {
            border-radius: 8px;
            padding: 10px 14px;
            margin: 12px 0;
            font-size: 8.5pt;
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
            font-size: 8pt;
            letter-spacing: 0.5px;
            margin-bottom: 3px;
            display: block;
        }

        /* STEP CARDS */
        .step-box {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            padding: 10px 12px;
            margin-bottom: 10px;
            page-break-inside: avoid;
        }

        .step-header {
            font-weight: bold;
            font-size: 9pt;
            color: #1A202C;
            margin-bottom: 4px;
        }

        .step-num {
            background-color: #00AA13;
            color: #FFFFFF;
            font-size: 7.5pt;
            font-weight: bold;
            padding: 2px 6px;
            border-radius: 4px;
            margin-right: 5px;
            display: inline-block;
        }

        /* UI WIREFRAME SIMULATOR */
        .wireframe-box {
            background-color: #F8FAFC;
            border: 1.5px solid #CBD5E0;
            border-radius: 8px;
            padding: 10px;
            margin: 12px 0 16px 0;
            font-family: monospace;
            font-size: 7.5pt;
            page-break-inside: avoid;
        }

        .wireframe-header {
            background-color: #EDF2F7;
            border-bottom: 1px solid #CBD5E0;
            padding: 4px 8px;
            font-weight: bold;
            color: #4A5568;
            margin: -10px -10px 8px -10px;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
        }

        .wireframe-content {
            color: #2D3748;
            line-height: 1.4;
        }

        /* CODE & SHORTCUT BADGES */
        code {
            font-family: 'Courier New', Courier, monospace;
            background-color: #EDF2F7;
            color: #C53030;
            padding: 1px 4px;
            border-radius: 3px;
            font-size: 8pt;
            font-weight: bold;
        }

        .badge-shortcut {
            background-color: #2D3748;
            color: #FFFFFF;
            font-family: monospace;
            font-size: 7.5pt;
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
            display: inline-block;
        }

        /* TOC */
        .toc-chapter-row {
            margin-bottom: 6px;
            font-size: 8.5pt;
        }

        .toc-chapter-title {
            font-weight: bold;
            color: #1A202C;
            text-transform: uppercase;
        }

        .toc-sub-row {
            padding-left: 18px;
            color: #4A5568;
            font-size: 8pt;
            margin-top: 2px;
        }

        ul, ol {
            margin: 0 0 10px 0;
            padding-left: 20px;
        }

        li {
            margin-bottom: 3px;
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
        <div class="toc-sub-row">2.2 Simulasi Wireframe Antarmuka Login Blade ................................................................... Halaman 12</div>
        <div class="toc-sub-row">2.3 Proteksi Formulir CSRF, Enkripsi Bcrypt & Proteksi Brute Force ..................................... Halaman 13</div>
        <div class="toc-sub-row">2.4 Manajemen Profil Mandiri & Prosedur Pergantian Kata Sandi ......................................... Halaman 14</div>
        <div class="toc-sub-row">2.5 Prosedur Keluar Aman (Logout) & Keamanan Sesi Kasir .................................................... Halaman 15</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 10px;">
        <div class="toc-chapter-title">BAB 3: PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</div>
        <div class="toc-sub-row">3.1 Antarmuka Panel Kontrol Administrator (/dashboard) .................................................... Halaman 16</div>
        <div class="toc-sub-row">3.2 Simulasi Wireframe Dashboard & Struktur Banner Utama ................................................ Halaman 17</div>
        <div class="toc-sub-row">3.3 Analitik Indikator Kinerja Utama (KPI) Finansial Real-Time ............................................. Halaman 18</div>
        <div class="toc-sub-row">3.4 Visualisasi Grafik Tren Arus Kas & Analisis Penjualan 7 Hari ........................................... Halaman 19</div>
        <div class="toc-sub-row">3.5 Struktur Navigasi Sidebar Responsif & Status Operasional Toko ..................................... Halaman 20</div>
    </div>

    <div class="toc-chapter-row" style="margin-top: 10px;">
        <div class="toc-chapter-title">BAB 4: MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</div>
        <div class="toc-sub-row">4.1 Katalog Master Produk (/admin/products) & Indikator Ketersediaan .............................. Halaman 21</div>
        <div class="toc-sub-row">4.2 Simulasi Wireframe Katalog Produk & Pencarian Cepat ................................................... Halaman 22</div>
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
        <div class="toc-sub-row">5.2 Simulasi Wireframe Layar Kasir POS Split-Pane ............................................................. Halaman 30</div>
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
    {{-- HALAMAN 12: BAB 2.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">SIMULASI ANTARMUKA BLADE HALAMAN LOGIN</h1>

    <h2 class="section-title">2.2 Anatomi Antarmuka Login & Simulasi Wireframe Blade</h2>
    <p>
        Halaman login dibangun menggunakan template Blade terisolasi (<code>resources/views/auth/login.blade.php</code>) dengan tata letak minimalis terpusat:
    </p>

    <div class="wireframe-box">
        <div class="wireframe-header">STRUKTUR WIREFRAME BLADE: resources/views/auth/login.blade.php</div>
        <div class="wireframe-content">
            =================================================================================<br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[ LOGO TOKO RESMI ]<br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>SISTEM KASIR POINT OF SALE (POS)</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i>{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</i><br>
            =================================================================================<br>
            | &nbsp;EMAIL PENGGUNA : &nbsp;[ kasir1@toko.site &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] |<br>
            | &nbsp;KATA SANDI &nbsp; &nbsp; : &nbsp;[ &bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] |<br>
            | &nbsp;[X] Ingat saya di perangkat ini &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | &nbsp;--------------------------------------------------------------------------- &nbsp;|<br>
            | &nbsp;[ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>MASUK KE KASIR / DASHBOARD</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            =================================================================================<br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &copy; {{ date('Y') }} I Gusti Sultan. All rights reserved.<br>
            =================================================================================
        </div>
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
    {{-- HALAMAN 17: BAB 3.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">SIMULASI WIREFRAME DASHBOARD ADMINISTRATOR</h1>

    <h2 class="section-title">3.2 Simulasi Wireframe Dashboard & Struktur Banner Utama</h2>
    <p>
        Struktur tata letak dashboard dirancang secara proporsional menggunakan grid CSS Tailwind:
    </p>

    <div class="wireframe-box">
        <div class="wireframe-header">STRUKTUR WIREFRAME BLADE: resources/views/admin/dashboard.blade.php</div>
        <div class="wireframe-content">
            +---------------------------------------------------------------------------------+<br>
            | <b>HEADER DASHBOARD:</b> [KOTAK HIJAU] Dashboard Ringkasan &bull; {{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }} |<br>
            | [● TOKO AKTIF] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[🛒 KASIR POS] &nbsp; &nbsp;[👤 Admin (ADMIN)] |<br>
            +---------------------------------------------------------------------------------+<br>
            | <b>BANNER UTAMA OMSET HARI INI (GRADIENT HIJAU TUA KE MUDA):</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | &nbsp;⚡ Real-time Hari Ini &bull; {{ date('d F Y') }} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | &nbsp;TOTAL PENDAPATAN TOKO : <b>Rp 1.450.000</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | &nbsp;● 18 Transaksi Sukses &bull; 42 Item Terjual &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | &nbsp;[KASIR POS] &nbsp; [+ PRODUK] &nbsp; [PENJUALAN] &nbsp; [STOK PDF] &nbsp; [KEUANGAN] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            +---------------------------------------------------------------------------------+<br>
            | <b>BANNER DOKUMENTASI & PANDUAN PENGGUNA:</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | 📖 Buku Panduan Lengkap Sistem POS &bull; 10 Bab Komprehensif &nbsp;[Baca Online] [Unduh PDF]|<br>
            +---------------------------------------------------------------------------------+<br>
            | [KARTU 1: OMSET HARI INI] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| [KARTU 2: TOTAL TRANSAKSI] &nbsp; &nbsp; &nbsp; |<br>
            | Rp 1.450.000 (Kas Masuk Tercatat) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | 18 Order (Nota Selesai) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            |-----------------------------------------------+---------------------------------|<br>
            | [KARTU 3: ITEM TERJUAL] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| [KARTU 4: STATUS OPERASIONAL] &nbsp; |<br>
            | 42 Pcs (Volume Barang Keluar) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | ● TOKO AKTIF & SIAP KASIR &nbsp; &nbsp; &nbsp; |<br>
            +---------------------------------------------------------------------------------+
        </div>
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
    {{-- HALAMAN 22: BAB 4.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">SIMULASI WIREFRAME KATALOG PRODUK</h1>

    <h2 class="section-title">4.2 Simulasi Wireframe Katalog Produk & Fitur Pencarian Cepat</h2>
    <p>
        Tampilan katalog produk menyajikan daftar barang dalam tabel terstruktur dengan paginasi:
    </p>

    <div class="wireframe-box">
        <div class="wireframe-header">STRUKTUR WIREFRAME BLADE: resources/views/admin/products/index.blade.php</div>
        <div class="wireframe-content">
            +---------------------------------------------------------------------------------+<br>
            | <b>KATALOG INVENTARIS PRODUK</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[PDF STOK] [IMPOR] [+ TAMBAH] |<br>
            |---------------------------------------------------------------------------------|<br>
            | <b>SCAN / TAMBAH STOK CEPAT:</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |<br>
            | Scan Barcode / SKU: [ 8992753... &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] &nbsp;Unit: [ 10 ] &nbsp;[+ TAMBAH STOK] &nbsp; &nbsp;|<br>
            |---------------------------------------------------------------------------------|<br>
            | [ 🔍 Cari berdasarkan nama atau kode barcode produk... &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            |---------------------------------------------------------------------------------|<br>
            | INFORMASI PRODUK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BARCODE &nbsp; &nbsp; &nbsp; &nbsp; HARGA JUAL &nbsp; &nbsp; SISA STOK &nbsp; AKSI &nbsp; &nbsp; &nbsp;|<br>
            | 1. Beras Premium 5kg &nbsp; &nbsp; 8991001001 &nbsp; &nbsp; Rp 75.000 &nbsp; &nbsp; &nbsp; 48 Pcs &nbsp; &nbsp; [Edit][Hapus]|<br>
            | 2. Minyak Bimoli 2L &nbsp; &nbsp; &nbsp;8992753102 &nbsp; &nbsp; Rp 38.000 &nbsp; &nbsp; &nbsp; 12 Pcs &nbsp; &nbsp; [Edit][Hapus]|<br>
            | 3. Gula Pasir Gulaku 1kg 8993002003 &nbsp; &nbsp; Rp 17.500 &nbsp; &nbsp; &nbsp; 4 Pcs (⚠️) [Edit][Hapus]|<br>
            +---------------------------------------------------------------------------------+
        </div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 23: BAB 4.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">FORMULIR PENAMBAHAN PRODUK BARU</h1>

    <h2 class="section-title">4.3 Formulir Tambah Produk Baru (/admin/products/create) & Barcode Generator</h2>
    <p>
        Untuk mendaftarkan produk baru, klik tombol hijau <b>+ Tambah</b> pada katalog produk:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Nama Produk / Barang</div>
        <p>Ketikkan nama resmi produk secara lengkap dan jelas (contoh: <code>Kopi Kapal Api Spesial Mix 10x24g</code>).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Kode Barcode / SKU</div>
        <p>Arahkan barcode scanner fisik ke kemasan produk, atau klik tombol <b>Auto</b> untuk men-generate kode barcode acak berstandar EAN-13 (awalan <code>899...</code>).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Harga Jual Kasir (Rp)</div>
        <p>Masukkan nominal harga jual eceran yang akan ditagihkan ke pelanggan di meja kasir.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">4</span> Stok Fisik Awal & Diskon (%)</div>
        <p>Masukkan jumlah stok fisik awal di gudang dan persentase diskon promo (jika produk sedang didiskon).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">5</span> Keterangan / Satuan Barang</div>
        <p>Tuliskan satuan kemasan barang (contoh: <code>Pcs</code>, <code>Botol</code>, <code>Sachet</code>, <code>Pack</code>, <code>Dus</code>).</p>
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
    {{-- HALAMAN 30: BAB 5.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">SIMULASI WIREFRAME LAYAR KASIR POS</h1>

    <h2 class="section-title">5.2 Simulasi Wireframe Layar Kasir POS Split-Pane</h2>
    <p>
        Berikut adalah simulasi visual tata letak antarmuka kasir pada layar monitor:
    </p>

    <div class="wireframe-box">
        <div class="wireframe-header">STRUKTUR WIREFRAME BLADE: resources/views/cashier/pos.blade.php</div>
        <div class="wireframe-content">
            +---------------------------------------------------------------------------------+<br>
            | [LOGO] <b>{{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }}</b> &nbsp; | &nbsp;[ 🔍 Scan Barcode / Cari Barang: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] | [&larr; Dashboard Admin] |<br>
            |---------------------------------------------------------------------------------|<br>
            | <b>AREA KERANJANG BELANJA (KIRI):</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| <b>AREA PEMBAYARAN (KANAN):</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | Produk &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Qty &nbsp; &nbsp; &nbsp; Subtotal &nbsp; &nbsp; Aksi | Nama Pelanggan: [ Pelanggan Umum ]|<br>
            | 1. Kopi Susu Aren &nbsp; [-] 2 [+] Rp 36.000 &nbsp; &nbsp; [X] &nbsp;| +-------------------------------+|<br>
            | 2. Roti Bakar Coklat [-] 1 [+] Rp 15.000 &nbsp; &nbsp; [X] &nbsp;| | TOTAL TAGIHAN BELANJA &nbsp; &nbsp; &nbsp; &nbsp; ||<br>
            | 3. Air Mineral 600ml [-] 3 [+] Rp 12.000 &nbsp; &nbsp; [X] &nbsp;| | <b>Rp 63.000</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ||<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| | 3 Macam Produk &bull; 6 Item &nbsp; &nbsp; &nbsp; &nbsp; ||<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| +-------------------------------+|<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| [ <b>PROSES BAYAR (B)</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &copy; {{ date('Y') }} I Gusti Sultan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            +---------------------------------------------------------------------------------+
        </div>
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
    {{-- HALAMAN 36: BAB 5.8 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">ALUR TRANSAKSI DYNAMIC QRIS DOKU</h1>

    <h2 class="section-title">5.8 Alur Pembayaran Digital Dynamic QRIS DOKU & Webhook Real-Time</h2>
    <p>
        Untuk transaksi non-tunai, kasir menggunakan integrasi <b>Dynamic QRIS DOKU</b>:
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Buka Tab QRIS / GOPAY</div>
        <p>Pada modal bayar, klik tab <b>📱 QRIS / GOPAY</b> lalu klik tombol <b>GENERATE QRIS DINAMIS</b>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Muncul Kode QRIS Standar Bank Indonesia</div>
        <p>Sistem meminta QR code unik dari server DOKU sesuai nilai tagihan. Layar menampilkan QRIS beserta hitung mundur masa berlaku (*countdown*).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Pelanggan Memindai Kode QRIS</div>
        <p>Pembeli memindai kode QRIS menggunakan aplikasi mobile banking (BCA, Mandiri, BRI, BNI) atau e-wallet (GoPay, OVO, DANA, ShopeePay).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">4</span> Konfirmasi Otomatis via Real-Time Webhook</div>
        <p>Server DOKU mengirimkan notifikasi ke endpoint <code>/doku/notification</code>. Layar kasir seketika berganti menjadi centang hijau sukses dan memainkan suara notifikasi.</p>
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
    {{-- HALAMAN 40: BAB 5.12 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">CETAK NOTA STRUK PDF GRAYSCALE MONOKROM</h1>

    <h2 class="section-title">5.12 Cetak Nota PDF Grayscale Monokrom (/receipt/{id}/print)</h2>
    <p>
        Untuk pencetakan nota berformat dokumen PDF (<code>/receipt/{sale}/print</code>):
    </p>

    <div class="callout callout-info">
        <span class="callout-title">Teknologi Konversi Logo Grayscale GD Latar Putih Murni</span>
        Sistem secara otomatis mengonversi logo toko PNG berwarna ke format <b>Base64 Grayscale monokrom berlatar belakang putih murni (#FFFFFF)</b>. Hal ini mencegah logo menjadi kotak hitam pekat akibat transparansi alpha pada mesin DomPDF, menghasilkan cetakan logo yang tajam dan hemat tinta thermal.
    </div>

    <p>
        Nota struk PDF memuat:
    </p>
    <ul>
        <li>Logo Toko Monokrom & Header Nama Toko Resmi.</li>
        <li>Nomor Transaksi Dinamis sesuai 3 huruf awal Nama Aplikasi Toko (misal: <code>SIB-20260825-XXXXX</code>).</li>
        <li>Rincian Produk, Kuantitas, Harga Satuan, Diskon Promo, Total Bayar, dan Kembalian Tunai.</li>
        <li>Footer catatan toko bebas dari teks non-toko yang tidak diinginkan.</li>
    </ul>

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
    {{-- HALAMAN 42: BAB 5.14 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">MODUL EKSPEDISI & CETAK RESI PAKET A6</h1>

    <h2 class="section-title">5.14 Modul Ekspedisi: Pembuatan & Pencetakan Label Resi Paket A6</h2>
    <p>
        Bagi toko yang melayani pemesanan online dan pengiriman paket keluar kota, sistem menyediakan modul pencetakan label resi paket ukuran standar A6 (<code>/shipping-label/{sale}/pdf</code>):
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Bagian Label Paket</th>
            <th style="width: 30%;">Data yang Dimuat</th>
            <th>Fungsi Operasional Kurir</th>
        </tr>
        <tr>
            <td><b>Kotak Penerima (TO)</b></td>
            <td>Nama Pembeli, No. Telp, Alamat Lengkap</td>
            <td>Dicetak dengan font tebal dan besar agar mudah dibaca kurir di lapangan.</td>
        </tr>
        <tr>
            <td><b>Kotak Pengirim (FROM)</b></td>
            <td>Nama Toko, No. WhatsApp Toko, Alamat Toko</td>
            <td>Identitas resmi toko Anda sebagai pengirim paket.</td>
        </tr>
        <tr>
            <td><b>Badge Ekspedisi & Catatan</b></td>
            <td>JNE / J&T / SiCepat & Stempel FRAGILE</td>
            <td>Memberikan instruksi penanganan paket barang mudah pecah/rusak.</td>
        </tr>
    </table>

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
    {{-- HALAMAN 45: BAB 6.3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">LAPORAN KEUANGAN & ARUS KAS</h1>

    <h2 class="section-title">6.3 Laporan Keuangan & Arus Kas (Pemisahan Kas Tunai vs Netto QRIS)</h2>
    <p>
        Laporan Keuangan (<code>/admin/reports/finance</code>) memisahkan secara akurat arus kas masuk berdasarkan saluran penerimaan:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Komponen Arus Kas</th>
            <th style="width: 28%;">Rumus Kalkulasi</th>
            <th>Penjelasan Akuntansi</th>
        </tr>
        <tr>
            <td><b>Pemasukan Tunai (Cash)</b></td>
            <td><code>&Sigma; Transaksi Tunai Sukses</code></td>
            <td>Uang fisik di laci kasir yang siap disetorkan ke kas utama toko.</td>
        </tr>
        <tr>
            <td><b>Nominal Bruto QRIS (Gross)</b></td>
            <td><code>&Sigma; Transaksi QRIS Sukses</code></td>
            <td>Nilai kotor belanja pelanggan non-tunai via QRIS.</td>
        </tr>
        <tr>
            <td><b>Biaya Layanan DOKU (0.7%)</b></td>
            <td><code>Round(Bruto QRIS &times; 0.007)</code></td>
            <td>Potongan MDR resmi pemrosesan transaksi gateway Bank Indonesia.</td>
        </tr>
        <tr>
            <td><b>Penerimaan Bersih QRIS</b></td>
            <td><code>Bruto QRIS - Biaya MDR</code></td>
            <td>Uang riil yang ditransfer gateway DOKU ke rekening bank penampung toko.</td>
        </tr>
        <tr>
            <td><b>Total Omset Bersih</b></td>
            <td><code>Kas Tunai + Netto QRIS</code></td>
            <td>Total pendapatan bersih hak milik toko pada periode yang dipilih.</td>
        </tr>
    </table>

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
    {{-- HALAMAN 55: BAB 7.5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">PORTAL PUBLIK VERIFIKASI DOKUMEN LAPORAN</h1>

    <h2 class="section-title">7.5 Portal Publik Verifikasi Keaslian Dokumen Laporan (/verify/document)</h2>
    <p>
        Siapapun yang menerima lembaran laporan PDF dapat memindai QR Code TTE di sudut kanan bawah laporan:
    </p>
    <ul>
        <li>Kamera smartphone memindai QR Code dan membuka URL <code>https://domain-anda.com/verify/document?...</code>.</li>
        <li>Layar menampilkan sertifikat verifikasi berbingkai hijau dengan logo resmi toko.</li>
        <li>Sertifikat memvalidasi status dokumen: <b>"DOKUMEN RESMI & TERVERIFIKASI SAH"</b>, memuat nomor dokumen lengkap, nama pejabat penandatangan, gelar jabatan resmi, serta waktu pengesahan.</li>
    </ul>

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
    {{-- HALAMAN 59: BAB 8.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">PERSONALISASI IDENTITAS BISNIS & LOGO</h1>

    <h2 class="section-title">8.2 Personalisasi Identitas Bisnis, Nama Usaha, Alamat & Logo Toko</h2>
    <p>
        Parameter identitas toko yang dapat dikonfigurasi:
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Field Pengaturan</th>
            <th style="width: 25%;">Contoh Konfigurasi</th>
            <th>Pengaruh Langsung pada Tampilan Sistem</th>
        </tr>
        <tr>
            <td><b>Nama Toko / Usaha</b></td>
            <td><code>BAGIAN LOGISTIK</code></td>
            <td>Kop surat seluruh PDF laporan, struk kasir thermal, faktur pelanggan, dan portal TTE.</td>
        </tr>
        <tr>
            <td><b>Alamat Resmi Usaha</b></td>
            <td><code>Jl. Argopuro No. 77, Jember</code></td>
            <td>Dicetak di bawah nama toko pada kop laporan formal dan nota pengiriman paket.</td>
        </tr>
        <tr>
            <td><b>Nomor WhatsApp / Telp</b></td>
            <td><code>081234567890</code></td>
            <td>Saluran bantuan pelanggan pada faktur kadaluarsa dan header struk kasir.</td>
        </tr>
        <tr>
            <td><b>Logo Resmi Toko</b></td>
            <td>File PNG / JPG (Maks. 2MB)</td>
            <td>Tampil di sidebar admin, login, dan dikonversi otomatis ke monokrom pada struk kasir.</td>
        </tr>
    </table>

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
    {{-- HALAMAN 66: BAB 9.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">PENDAFTARAN AKUN KASIR & ADMIN BARU</h1>

    <h2 class="section-title">9.2 Pendaftaran Akun Kasir / Admin Baru & Hak Wewenang Role</h2>
    <p>
        Untuk menambahkan staf baru (<code>/admin/users/create</code>):
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Nama Lengkap & Email Login</div>
        <p>Ketikkan nama lengkap staf dan email unik yang belum pernah digunakan di sistem.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Pemilihan Role Pengguna</div>
        <p>Pilih role <b>Petugas Kasir</b> (hanya akses layar kasir POS) atau <b>Administrator Toko</b> (akses penuh ke manajemen dan pengaturan).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Kata Sandi Pengguna</div>
        <p>Tetapkan kata sandi awal minimal 6 karakter. Pengguna dapat mengubah kata sandi ini secara mandiri di kemudian hari.</p>
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
    {{-- HALAMAN 70: BAB 10.2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">DEDICATED MEDIA STREAMING ENGINE (/media-file)</h1>

    <h2 class="section-title">10.2 Dedicated Media Streaming Engine (/media-file) Anti 404 Nginx</h2>
    <p>
        Pada arsitektur server produksi aaPanel/Nginx, web server Nginx secara default mencegat file statis (.png/.jpg/.ico) di tingkat server sebelum diteruskan ke PHP. Jika symlink <code>public/storage</code> mengalami desinkronisasi, Nginx akan membalas dengan <code>404 Not Found nginx</code>.
    </p>
    <p>
        Untuk mengatasi hal tersebut secara permanen, <b>I Gusti Sultan</b> telah merancang dan mengimplementasikan <b>Dedicated Media Streaming Engine (<code>/media-file?path=...</code>)</b>:
    </p>
    <ul>
        <li>Rute ini membypass aturan regex statis Nginx karena URI utama tidak berakhiran ekstensi gambar.</li>
        <li>Membaca langsung dari direktori <code>storage/app/public/</code> dengan proteksi directory traversal.</li>
        <li>Menyajikan header MIME-Type yang presisi dengan HTTP caching header untuk performa cepat.</li>
        <li>Memastikan seluruh logo toko, favicon, dan gambar produk 100% selalu tampil normal tanpa bergantung pada symlink.</li>
    </ul>

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
