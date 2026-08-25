<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Panduan Lengkap Sistem POS & Administrator - {{ $shop['app_name'] ?? 'POS' }}</title>
    <style>
        @page {
            margin: 1.8cm 1.6cm 1.8cm 1.6cm;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 8.5pt;
            line-height: 1.4;
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
            padding-top: 15px;
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
            font-size: 13pt;
            font-weight: 900;
            color: #00661A;
            border-bottom: 2px solid #00AA13;
            padding-bottom: 3px;
            margin-top: 0;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .chapter-num {
            font-size: 8.5pt;
            font-weight: 800;
            color: #00AA13;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 2px;
        }

        h2.section-title {
            font-size: 9.8pt;
            font-weight: 800;
            color: #2D3748;
            margin-top: 8px;
            margin-bottom: 5px;
            border-left: 3.5px solid #00AA13;
            padding-left: 6px;
        }

        p {
            margin: 0 0 5px 0;
            text-align: justify;
        }

        /* TABLES */
        table.doc-table {
            width: 100%;
            border-collapse: collapse;
            margin: 6px 0 8px 0;
            font-size: 7.2pt;
        }

        table.doc-table th {
            background-color: #00661A;
            color: #FFFFFF;
            font-weight: bold;
            text-transform: uppercase;
            padding: 4px 6px;
            border: 1px solid #004D13;
            text-align: left;
            letter-spacing: 0.5px;
        }

        table.doc-table td {
            padding: 4px 6px;
            border: 1px solid #CBD5E0;
            vertical-align: top;
        }

        table.doc-table tr:nth-child(even) td {
            background-color: #F8FAFC;
        }

        /* CALLOUT BOXES */
        .callout {
            border-radius: 6px;
            padding: 6px 8px;
            margin: 6px 0;
            font-size: 7.5pt;
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

        .callout-title {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 7pt;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
            display: block;
        }

        /* ========================================================================= */
        /* UI WIREFRAME & GRAPHICAL MOCKUP ENGINE (100% DOMPDF COMPATIBLE) */
        /* ========================================================================= */
        .ui-mockup {
            width: 100%;
            margin: 8px 0;
            border: 1px solid #CBD5E0;
            border-radius: 6px;
            background-color: #FFFFFF;
            page-break-inside: avoid;
        }

        .ui-window-bar {
            background-color: #2D3748;
            color: #FFFFFF;
            padding: 4px 8px;
            font-size: 6.8pt;
            font-weight: bold;
        }

        .ui-window-dot {
            display: inline-block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-right: 2px;
        }
        .dot-red { background-color: #E53E3E; }
        .dot-yellow { background-color: #ECC94B; }
        .dot-green { background-color: #38A169; }

        .ui-window-body {
            padding: 8px 10px;
            background-color: #F8FAFC;
        }

        .ui-caption {
            font-size: 6.5pt;
            font-weight: bold;
            color: #4A5568;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 3px 0;
            background-color: #EDF2F7;
            border-top: 1px solid #CBD5E0;
        }

        .ui-input-box {
            background-color: #FFFFFF;
            border: 1px solid #CBD5E0;
            border-radius: 4px;
            padding: 3px 6px;
            font-size: 7pt;
            color: #1A202C;
            margin-top: 2px;
        }

        .ui-label {
            font-size: 6pt;
            font-weight: bold;
            color: #718096;
            text-transform: uppercase;
            display: block;
        }

        .ui-btn {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 6.5pt;
            font-weight: bold;
            text-align: center;
        }
        .ui-btn-primary { background-color: #00AA13; color: #FFFFFF; }
        .ui-btn-dark { background-color: #1A202C; color: #FFFFFF; }
        .ui-btn-blue { background-color: #2B6CB0; color: #FFFFFF; }
        .ui-btn-red { background-color: #E53E3E; color: #FFFFFF; }
        .ui-btn-light { background-color: #E2E8F0; color: #2D3748; }

        .ui-badge {
            display: inline-block;
            padding: 1px 6px;
            border-radius: 10px;
            font-size: 5.8pt;
            font-weight: bold;
        }
        .badge-green { background-color: #E6F4EA; color: #00880F; border: 1px solid #A8DAB5; }
        .badge-yellow { background-color: #FFFAF0; color: #DD6B20; border: 1px solid #FBD38D; }
        .badge-red { background-color: #FFF5F5; color: #E53E3E; border: 1px solid #FEB2B2; }
        .badge-blue { background-color: #EBF8FF; color: #2B6CB0; border: 1px solid #90CDF4; }

        /* RECEIPT THERMAL MOCKUP */
        .receipt-box {
            width: 250px;
            margin: 0 auto;
            background-color: #FFFFFF;
            border: 1px dashed #718096;
            padding: 8px 10px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 6.5pt;
            color: #1A202C;
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
            margin: 0 0 5px 0;
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
            
            $pdf->page_text(595 - 45 - $widthRight, 842 - 30, $textRight, $font, $size, $color);
            
            $appName = strtoupper($shop['app_name'] ?? 'POS');
            $footerLeft = "Buku Panduan Lengkap Sistem " . $appName . " | © I Gusti Sultan";
            $pdf->page_text(45, 842 - 30, $footerLeft, $font, $size, $color);

            $pdf->line(45, 842 - 35, 595 - 45, 842 - 35, array(0.85, 0.85, 0.85), 0.75);
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
            <div style="display: inline-block; width: 60px; height: 60px; background-color: #00AA13; border-radius: 15px; line-height: 60px; color: #FFFFFF; font-size: 28pt; font-weight: bold;">
                ✔
            </div>
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
        Puji dan syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas terselesaikannya penyusunan <b>Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Toko Modern</b>. Sistem ini dirancang untuk menjawab tantangan operasional bisnis ritel kontemporer yang memerlukan kecepatan transaksi di meja kasir (*checkout speed*), transparansi arus kas real-time, integrasi pembayaran digital tanpa hambatan, serta akuntabilitas dokumen laporan formal yang berkekuatan hukum.
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
        <div class="toc-sub-row">5.13 Pengiriman Bukti Pembayaran Digital via WhatsApp Pelanggan .................................... Halaman 41</div>
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

    {{-- WIREFRAME MOCKUP 1.1 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; DIAGRAM ALUR PROSES TRANSAKSI MEJA KASIR POS
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 22%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="background-color: #00AA13; color: white; border-radius: 50%; width: 18px; height: 18px; line-height: 18px; margin: 0 auto 4px auto; font-weight: bold; font-size: 7.5pt;">1</div>
                            <div style="font-weight: bold; font-size: 7pt; color: #1A202C;">Scan Barcode</div>
                            <div style="font-size: 6pt; color: #718096; margin-top: 2px;">Entri barang instan via scanner / teks</div>
                        </div>
                    </td>
                    <td style="width: 4%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 22%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="background-color: #00AA13; color: white; border-radius: 50%; width: 18px; height: 18px; line-height: 18px; margin: 0 auto 4px auto; font-weight: bold; font-size: 7.5pt;">2</div>
                            <div style="font-weight: bold; font-size: 7pt; color: #1A202C;">Keranjang Belanja</div>
                            <div style="font-size: 6pt; color: #718096; margin-top: 2px;">Kalkulasi diskon & subtotal otomatis</div>
                        </div>
                    </td>
                    <td style="width: 4%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 22%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="background-color: #00AA13; color: white; border-radius: 50%; width: 18px; height: 18px; line-height: 18px; margin: 0 auto 4px auto; font-weight: bold; font-size: 7.5pt;">3</div>
                            <div style="font-weight: bold; font-size: 7pt; color: #1A202C;">Bayar Tunai / QRIS</div>
                            <div style="font-size: 6pt; color: #718096; margin-top: 2px;">Kembalian instan / Dynamic QRIS DOKU</div>
                        </div>
                    </td>
                    <td style="width: 4%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 22%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #F0FFF4; border: 1.5px solid #38A169; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="background-color: #38A169; color: white; border-radius: 50%; width: 18px; height: 18px; line-height: 18px; margin: 0 auto 4px auto; font-weight: bold; font-size: 7.5pt;">✔</div>
                            <div style="font-weight: bold; font-size: 7pt; color: #00880F;">Cetak & E-Struk</div>
                            <div style="font-size: 6pt; color: #276749; margin-top: 2px;">Struk Bluetooth / Kirim WA Pembeli</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 1.1: Diagram Alur Proses Transaksi Penjualan Meja Kasir POS</div>
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

    {{-- WIREFRAME MOCKUP 1.2 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar" style="background-color: #00360D;">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; ARSITEKTUR TEKNOLOGI & MVC FRAMEWORK ENGINE
        </div>
        <div class="ui-window-body" style="background-color: #F0FFF4;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 32%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; overflow: hidden;">
                            <div style="background-color: #00661A; color: white; padding: 4px; font-weight: bold; font-size: 6.8pt; text-align: center;">1. FRONTEND LAYER</div>
                            <div style="padding: 6px; font-size: 6.2pt; color: #2D3748;">
                                <b style="color: #00880F;">• Tailwind CSS 3.x</b><br>
                                Desain antarmuka hijau Gojek responsif.<br><br>
                                <b style="color: #00880F;">• Alpine.js 3.x</b><br>
                                Reaktivitas keranjang & hitung kembalian.<br><br>
                                <b style="color: #00880F;">• Blade Engine</b><br>
                                Templating modular cepat.
                            </div>
                        </div>
                    </td>
                    <td style="width: 34%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; overflow: hidden;">
                            <div style="background-color: #1A202C; color: white; padding: 4px; font-weight: bold; font-size: 6.8pt; text-align: center;">2. BACKEND MVC ENGINE</div>
                            <div style="padding: 6px; font-size: 6.2pt; color: #2D3748;">
                                <b style="color: #1A202C;">• Laravel 11 (PHP 8.2)</b><br>
                                Routing, ORM Eloquent, Auth Middleware.<br><br>
                                <b style="color: #1A202C;">• DokuService API</b><br>
                                Dynamic QRIS generator & webhook.<br><br>
                                <b style="color: #1A202C;">• DomPDF Engine</b><br>
                                Rendering dokumen PDF formal & nota.
                            </div>
                        </div>
                    </td>
                    <td style="width: 34%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; overflow: hidden;">
                            <div style="background-color: #EE2737; color: white; padding: 4px; font-weight: bold; font-size: 6.8pt; text-align: center;">3. SERVER & DATABASE</div>
                            <div style="padding: 6px; font-size: 6.2pt; color: #2D3748;">
                                <b style="color: #EE2737;">• MySQL 8.0 Engine</b><br>
                                Basis data relasional ACID transaksi.<br><br>
                                <b style="color: #EE2737;">• Nginx & FastCGI</b><br>
                                Web server produksi Linux aaPanel.<br><br>
                                <b style="color: #00880F;">• I Gusti Sultan</b><br>
                                Server architect & maintenance terpusat.
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 1.2: Diagram Tumpukan Teknologi & Arsitektur Perangkat Lunak MVC</div>
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

    {{-- WIREFRAME MOCKUP 1.3 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; PERBANDINGAN HAK WEWENANG ROLE PENGGUNA SISTEM
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 6px;">
                            <div style="background-color: #00661A; color: white; padding: 3px; font-weight: bold; font-size: 7pt; text-align: center; border-radius: 4px; margin-bottom: 6px;">
                                👑 ROLE: ADMINISTRATOR (AKSES PENUH)
                            </div>
                            <div style="font-size: 6.2pt; color: #276749; line-height: 1.5;">
                                ✔ Dashboard Metrik & Grafik 7 Hari (<code>/dashboard</code>)<br>
                                ✔ Manajemen Produk, Stok & Barcode (<code>/admin/products</code>)<br>
                                ✔ Pusat 4 Buku Laporan & Rekap Omset (<code>/reports</code>)<br>
                                ✔ Pengaturan Toko, Audio & Gateway (<code>/admin/settings</code>)<br>
                                ✔ Manajemen Staf Pengguna & Gelar TTE (<code>/admin/users</code>)<br>
                                ✔ Transaksi Meja Kasir POS (<code>/cashier/pos</code>)
                            </div>
                        </div>
                    </td>
                    <td style="width: 50%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #EBF8FF; border: 1.5px solid #90CDF4; border-radius: 6px; padding: 6px;">
                            <div style="background-color: #2B6CB0; color: white; padding: 3px; font-weight: bold; font-size: 7pt; text-align: center; border-radius: 4px; margin-bottom: 6px;">
                                🛒 ROLE: PETUGAS KASIR (TRANSAKSI)
                            </div>
                            <div style="font-size: 6.2pt; color: #2B6CB0; line-height: 1.5;">
                                ✔ Transaksi Meja Kasir POS (<code>/cashier/pos</code>)<br>
                                ✔ Pemindaian Barcode Laser & Pencarian Barang<br>
                                ✔ Pembayaran Tunai & Hitung Uang Kembalian<br>
                                ✔ Generate Dynamic QRIS DOKU & Kirim WA<br>
                                <span style="color: #E53E3E; font-weight: bold;">✖ Akses Menu Dashboard & Laporan Ditolak (403)</span><br>
                                <span style="color: #E53E3E; font-weight: bold;">✖ Pengaturan Toko & Manajemen Akun Terkunci</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 1.3: Matriks Hak Wewenang Akun Administrator vs Petugas Kasir</div>
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

    {{-- WIREFRAME MOCKUP 1.4 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; DIAGRAM ALUR INTEGRASI DYNAMIC QRIS DOKU MERCHANT
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 30%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-weight: bold; font-size: 7pt; color: #00880F;">KASIR POS</div>
                            <div style="font-size: 6pt; color: #4A5568; margin: 4px 0;">Request Dynamic QRIS dengan nominal belanja presisi</div>
                            <div class="ui-badge badge-green">Rp 51.000 (Eksak)</div>
                        </div>
                    </td>
                    <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 30%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #EE2737; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-weight: bold; font-size: 7pt; color: #EE2737;">DOKU GATEWAY</div>
                            <div style="font-size: 6pt; color: #4A5568; margin: 4px 0;">Generate QR Standar Bank Indonesia & broadcast webhook</div>
                            <div class="ui-badge badge-blue">AS2938472910</div>
                        </div>
                    </td>
                    <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 30%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #F0FFF4; border: 1.5px solid #38A169; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-weight: bold; font-size: 7pt; color: #00880F;">APLIKASI PEMBELI</div>
                            <div style="font-size: 6pt; color: #276749; margin: 4px 0;">GoPay • OVO • DANA • BCA Mobile • Mandiri Livin</div>
                            <div class="ui-badge badge-green">✔ Lunas Real-Time</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 1.4: Diagram Alur Integrasi Gateway Pembayaran Dynamic QRIS DOKU</div>
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

    {{-- WIREFRAME MOCKUP 1.5 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; TIGA PILAR KEABSAHAN HUKUM TANDA TANGAN ELEKTRONIK (UU ITE PASAL 11)
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 33%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 6px; padding: 6px;">
                            <div style="font-weight: bold; font-size: 7pt; color: #00880F; margin-bottom: 3px;">1. OTENTISITAS</div>
                            <div style="font-size: 6pt; color: #2D3748;">
                                Identitas penandatangan terverifikasi akun resmi terdaftar & Gelar Jabatan Alias penandatangan resmi.
                            </div>
                        </div>
                    </td>
                    <td style="width: 33%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #EBF8FF; border: 1px solid #90CDF4; border-radius: 6px; padding: 6px;">
                            <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0; margin-bottom: 3px;">2. INTEGRITAS DATA</div>
                            <div style="font-size: 6pt; color: #2D3748;">
                                Enkripsi SHA-256 mengunci isi laporan dari manipulasi angka pasca-cetak. Setiap perubahan terdeteksi otomatis.
                            </div>
                        </div>
                    </td>
                    <td style="width: 34%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFAF0; border: 1px solid #FBD38D; border-radius: 6px; padding: 6px;">
                            <div style="font-weight: bold; font-size: 7pt; color: #DD6B20; margin-bottom: 3px;">3. VERIFIKASI PUBLIK</div>
                            <div style="font-size: 6pt; color: #2D3748;">
                                Pemindaian QR Code membuka portal sertifikat digital resmi <code>/verify/document</code> tanpa aplikasi khusus.
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 1.5: Landasan Tiga Pilar Legalitas TTE Kriptografis pada Sistem Laporan</div>
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

    {{-- WIREFRAME MOCKUP 2.1 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; https://kasir.site/login - FORMULIR MASUK SISTEM KASIR POS
        </div>
        <div class="ui-window-body" style="text-align: center; padding: 15px;">
            <div style="display: inline-block; width: 280px; background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 8px; padding: 12px; text-align: left;">
                <div style="text-align: center; margin-bottom: 8px;">
                    <div style="display: inline-block; width: 32px; height: 32px; background-color: #00AA13; border-radius: 8px; line-height: 32px; color: white; font-weight: bold; font-size: 14pt;">✔</div>
                    <div style="font-weight: 900; font-size: 8.5pt; color: #1A202C; margin-top: 4px;">MASUK SISTEM KASIR</div>
                    <div style="font-size: 6pt; color: #718096;">Masukkan kredensial akun kasir / admin Anda</div>
                </div>

                <span class="ui-label">ALAMAT EMAIL RESMI</span>
                <div class="ui-input-box">✉ kasir1@toko.site</div>

                <div style="margin-top: 6px;">
                    <span class="ui-label">KATA SANDI</span>
                    <div class="ui-input-box">🔒 ••••••••••••</div>
                </div>

                <div style="margin: 8px 0; font-size: 6pt; color: #4A5568;">
                    <input type="checkbox" checked> Ingat sesi masuk saya (30 Hari)
                </div>

                <div style="background-color: #00AA13; color: white; text-align: center; padding: 5px; border-radius: 5px; font-weight: bold; font-size: 7.5pt;">
                    MASUK KE KASIR / DASHBOARD
                </div>

                <div style="text-align: center; margin-top: 8px; font-size: 5.5pt; color: #718096;">
                    © {{ date('Y') }} I Gusti Sultan. All rights reserved.
                </div>
            </div>
        </div>
        <div class="ui-caption">Gambar 2.1: Antarmuka Formulir Otentikasi Pengguna (resources/views/auth/login.blade.php)</div>
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

    {{-- WIREFRAME MOCKUP 2.2 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; ANATOMI STRUKTUR KOMPONEN & VALIDASI LOGIN BLADE
        </div>
        <div class="ui-window-body">
            <table class="doc-table">
                <tr>
                    <th style="width: 25%;">Komponen Blade</th>
                    <th style="width: 35%;">Spesifikasi Validasi</th>
                    <th>Fungsi Operasional</th>
                </tr>
                <tr>
                    <td><b>Logo Toko Dinamis</b></td>
                    <td>Rute <code>/media-file</code> otomatis</td>
                    <td>Menampilkan identitas toko tanpa risiko error 404 Nginx.</td>
                </tr>
                <tr>
                    <td><b>Input Email</b></td>
                    <td><code>required|email|max:255</code></td>
                    <td>Menerima alamat surel resmi personil terdaftar.</td>
                </tr>
                <tr>
                    <td><b>Input Password</b></td>
                    <td><code>required|min:8</code></td>
                    <td>Disamarkan karakter bullet, dicocokkan dengan hash Bcrypt.</td>
                </tr>
                <tr>
                    <td><b>Smart Redirect</b></td>
                    <td>Role-Based Redirection</td>
                    <td>Kasir otomatis masuk ke <code>/cashier/pos</code>, Admin ke <code>/dashboard</code>.</td>
                </tr>
                <tr>
                    <td><b>Copyright Banner</b></td>
                    <td>&copy; I Gusti Sultan</td>
                    <td>Menegaskan hak cipta dan lisensi resmi perangkat lunak.</td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 2.2: Rincian Anatomi Elemen Formulir Login & Logika Alur Masuk</div>
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

    {{-- WIREFRAME MOCKUP 2.3 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar" style="background-color: #00360D;">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; DIAGRAM MEKANISME PROTEKSI CSRF & ENKRIPSI BCRYPT
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 8px;">
                            <div style="font-weight: bold; font-size: 7.5pt; color: #00880F; margin-bottom: 4px;">🛡️ PROTEKSI CSRF TOKEN</div>
                            <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                                • Directiva <code>@csrf</code> menyisipkan token unik per sesi.<br>
                                • Divalidasi oleh <code>VerifyCsrfToken</code> middleware.<br>
                                • Menolak serangan Cross-Site Request Forgery.<br>
                                • Error HTTP 419 Page Expired jika sesi tidak valid.
                            </div>
                        </div>
                    </td>
                    <td style="width: 50%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 8px;">
                            <div style="font-weight: bold; font-size: 7.5pt; color: #2B6CB0; margin-bottom: 4px;">🔒 ENKRIPSI BCRYPT HASH</div>
                            <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                                • Kata sandi di-hash satu arah (Algoritma Cost 12).<br>
                                • Garam acak (*Random Salt*) unik per setiap akun.<br>
                                • Sandi tidak dapat dibaca bahkan dari basis data.<br>
                                • Standar enkripsi perbankan dan enterprise global.
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 2.3: Diagram Arsitektur Perlindungan CSRF dan Hashing Kata Sandi Bcrypt</div>
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

    {{-- WIREFRAME MOCKUP 2.4 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; https://kasir.site/profile - PENGATURAN PROFIL & KATA SANDI MANDIRI
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; padding: 4px; vertical-align: top;">
                        <span class="ui-label">NAMA LENGKAP PENGGUNA</span>
                        <div class="ui-input-box">Siti Rahma</div>
                    </td>
                    <td style="width: 50%; padding: 4px; vertical-align: top;">
                        <span class="ui-label">ALAMAT EMAIL RESMI</span>
                        <div class="ui-input-box">kasir1@toko.site</div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 4px; vertical-align: top;">
                        <span class="ui-label">KATA SANDI SAAT INI</span>
                        <div class="ui-input-box">••••••••</div>
                    </td>
                    <td style="padding: 4px; vertical-align: top;">
                        <span class="ui-label">KATA SANDI BARU</span>
                        <div class="ui-input-box">••••••••</div>
                    </td>
                </tr>
            </table>
            <div style="text-align: right; margin-top: 8px;">
                <div class="ui-btn ui-btn-primary">SIMPAN PERUBAHAN PROFIL</div>
            </div>
        </div>
        <div class="ui-caption">Gambar 2.4: Formulir Pembaruan Profil Mandiri & Penggantian Kata Sandi (/profile)</div>
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

    {{-- WIREFRAME MOCKUP 2.5 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; DIAGRAM ALUR KELUAR AMAN (SECURE LOGOUT WORKFLOW)
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 30%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #E53E3E; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-weight: bold; font-size: 7pt; color: #E53E3E;">1. KLIK LOGOUT</div>
                            <div style="font-size: 6pt; color: #718096; margin-top: 2px;">Tombol merah sidebar / menu profil kasir</div>
                        </div>
                    </td>
                    <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 30%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-weight: bold; font-size: 7pt; color: #00880F;">2. HANCURKAN SESI</div>
                            <div style="font-size: 6pt; color: #718096; margin-top: 2px;">Server invalidate cookie sesi & token kasir</div>
                        </div>
                    </td>
                    <td style="width: 5%; text-align: center; font-size: 10pt; color: #00AA13; font-weight: bold;">➔</td>
                    <td style="width: 30%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #F0FFF4; border: 1.5px solid #38A169; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-weight: bold; font-size: 7pt; color: #00880F;">3. REDIRECT /LOGIN</div>
                            <div style="font-size: 6pt; color: #276749; margin-top: 2px;">Layar terkunci aman, siap untuk shift berikutnya</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 2.5: Diagram Prosedur Logout Aman dan Pembersihan Sesi Komputer Kasir</div>
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

    {{-- WIREFRAME MOCKUP 3.1 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; https://kasir.site/dashboard - PANEL KONTROL ADMINISTRATOR
        </div>
        <div class="ui-window-body">
            <!-- Header Banner -->
            <div style="background-color: #00661A; color: white; border-radius: 6px; padding: 8px 10px; margin-bottom: 6px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="vertical-align: middle;">
                            <div style="font-size: 6.5pt; color: #A8DAB5; font-weight: bold;">TOTAL OMSET HARI INI • {{ date('d F Y') }}</div>
                            <div style="font-size: 14pt; font-weight: 900; color: #FFFFFF;">Rp 1.450.000</div>
                            <div style="font-size: 6pt; color: #E2E8F0;">18 Transaksi Berhasil • 42 Item Terjual</div>
                        </td>
                        <td style="text-align: right; vertical-align: middle;">
                            <div class="ui-btn ui-btn-primary" style="background-color: #00AA13; border: 1px solid #A8DAB5;">🛒 BUKA KASIR POS</div>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- 4 KPI Cards -->
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 6px;">
                <tr>
                    <td style="width: 25%; padding: 2px;">
                        <div style="background-color: #FFFFFF; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px 6px;">
                            <div style="font-size: 5.5pt; font-weight: bold; color: #718096;">OMSET HARI INI</div>
                            <div style="font-size: 8.5pt; font-weight: bold; color: #00AA13;">Rp 1.45M</div>
                        </div>
                    </td>
                    <td style="width: 25%; padding: 2px;">
                        <div style="background-color: #FFFFFF; border: 1px solid #90CDF4; border-radius: 4px; padding: 4px 6px;">
                            <div style="font-size: 5.5pt; font-weight: bold; color: #718096;">TOTAL ORDER</div>
                            <div style="font-size: 8.5pt; font-weight: bold; color: #2B6CB0;">18 Transaksi</div>
                        </div>
                    </td>
                    <td style="width: 25%; padding: 2px;">
                        <div style="background-color: #FFFFFF; border: 1px solid #FBD38D; border-radius: 4px; padding: 4px 6px;">
                            <div style="font-size: 5.5pt; font-weight: bold; color: #718096;">ITEM TERJUAL</div>
                            <div style="font-size: 8.5pt; font-weight: bold; color: #DD6B20;">42 Pcs</div>
                        </div>
                    </td>
                    <td style="width: 25%; padding: 2px;">
                        <div style="background-color: #FFFFFF; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px 6px;">
                            <div style="font-size: 5.5pt; font-weight: bold; color: #718096;">STATUS SERVER</div>
                            <div style="font-size: 8pt; font-weight: bold; color: #38A169;">● AKTIF ONLINE</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 3.1: Antarmuka Panel Kontrol Dashboard Utama Administrator</div>
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

    {{-- WIREFRAME MOCKUP 3.2 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar" style="background-color: #00360D;">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; STRUKTUR BANNER UTAMA GOPAY POCKET & TOMBOL AKSI CEPAT
        </div>
        <div class="ui-window-body" style="background-color: #00661A;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="vertical-align: middle; padding: 6px;">
                        <div style="font-size: 7pt; color: #A8DAB5; font-weight: bold;">⚡ TOTAL PENDAPATAN HARI INI</div>
                        <div style="font-size: 16pt; font-weight: 900; color: #FFFFFF;">Rp 1.450.000</div>
                        <div style="font-size: 6.5pt; color: #E2E8F0;">18 Transaksi Berhasil • 42 Item Terjual Hari Ini</div>
                    </td>
                </tr>
            </table>
            <table style="width: 100%; border-collapse: collapse; margin-top: 6px;">
                <tr>
                    <td style="width: 20%; padding: 2px;">
                        <div style="background-color: #00880F; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; text-align: center; color: white; font-size: 6.5pt; font-weight: bold;">
                            🛒 KASIR POS
                        </div>
                    </td>
                    <td style="width: 20%; padding: 2px;">
                        <div style="background-color: #00880F; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; text-align: center; color: white; font-size: 6.5pt; font-weight: bold;">
                            📦 + PRODUK
                        </div>
                    </td>
                    <td style="width: 20%; padding: 2px;">
                        <div style="background-color: #00880F; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; text-align: center; color: white; font-size: 6.5pt; font-weight: bold;">
                            📈 PENJUALAN
                        </div>
                    </td>
                    <td style="width: 20%; padding: 2px;">
                        <div style="background-color: #00880F; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; text-align: center; color: white; font-size: 6.5pt; font-weight: bold;">
                            💰 KEUANGAN
                        </div>
                    </td>
                    <td style="width: 20%; padding: 2px;">
                        <div style="background-color: #00880F; border: 1px solid #A8DAB5; border-radius: 4px; padding: 4px; text-align: center; color: white; font-size: 6.5pt; font-weight: bold;">
                            📖 PANDUAN
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 3.2: Banner Utama Ringkasan Finansial & Tombol Aksi Cepat (Quick Actions)</div>
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

    {{-- WIREFRAME MOCKUP 3.3 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; RINCIAN 4 KARTU METRIK KPI FINANSIAL REAL-TIME
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 25%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-size: 6pt; font-weight: bold; color: #00880F;">OMSET HARI INI</div>
                            <div style="font-size: 11pt; font-weight: 900; color: #00AA13; margin: 4px 0;">Rp 1.45M</div>
                            <div style="font-size: 5.5pt; color: #718096;">Total arus kas masuk</div>
                            <div class="ui-badge badge-green" style="margin-top: 3px;">⚡ Real-Time</div>
                        </div>
                    </td>
                    <td style="width: 25%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-size: 6pt; font-weight: bold; color: #2B6CB0;">TOTAL TRANSAKSI</div>
                            <div style="font-size: 11pt; font-weight: 900; color: #2B6CB0; margin: 4px 0;">18 Order</div>
                            <div style="font-size: 5.5pt; color: #718096;">Jumlah nota kasir</div>
                            <div class="ui-badge badge-blue" style="margin-top: 3px;">🧾 100% Lunas</div>
                        </div>
                    </td>
                    <td style="width: 25%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #DD6B20; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-size: 6pt; font-weight: bold; color: #DD6B20;">ITEM TERJUAL</div>
                            <div style="font-size: 11pt; font-weight: 900; color: #DD6B20; margin: 4px 0;">42 Pcs</div>
                            <div style="font-size: 5.5pt; color: #718096;">Volume fisik keluar</div>
                            <div class="ui-badge badge-yellow" style="margin-top: 3px;">📦 Gudang Aktif</div>
                        </div>
                    </td>
                    <td style="width: 25%; padding: 4px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1.5px solid #38A169; border-radius: 6px; padding: 6px; text-align: center;">
                            <div style="font-size: 6pt; font-weight: bold; color: #38A169;">STATUS SISTEM</div>
                            <div style="font-size: 9pt; font-weight: 900; color: #38A169; margin: 4px 0;">● ONLINE</div>
                            <div style="font-size: 5.5pt; color: #718096;">Database & Gateway</div>
                            <div class="ui-badge badge-green" style="margin-top: 3px;">🛡️ Server Sehat</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 3.3: Rincian Metrik pada 4 Kartu KPI Finansial Dashboard Administrator</div>
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

    {{-- WIREFRAME MOCKUP 3.4 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; GRAFIK TREN PENJUALAN 7 HARI (TUNAI VS DIGITAL QRIS)
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 6px;">
                <tr>
                    <td style="font-size: 6.5pt; font-weight: bold; color: #1A202C;">TREN TRANSAKSI SEPEKAN:</td>
                    <td style="text-align: right; font-size: 6pt;">
                        <span style="display: inline-block; width: 8px; height: 8px; background-color: #00AA13; vertical-align: middle;"></span> Tunai &nbsp;&nbsp;
                        <span style="display: inline-block; width: 8px; height: 8px; background-color: #00AED6; vertical-align: middle;"></span> QRIS DOKU
                    </td>
                </tr>
            </table>
            <table style="width: 100%; border-collapse: collapse; text-align: center; font-size: 6pt;">
                <tr style="height: 65px; vertical-align: bottom;">
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 35px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 20px; width: 14px; margin: 0 auto;"></div></td>
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 42px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 25px; width: 14px; margin: 0 auto;"></div></td>
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 45px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 30px; width: 14px; margin: 0 auto;"></div></td>
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 48px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 32px; width: 14px; margin: 0 auto;"></div></td>
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 52px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 38px; width: 14px; margin: 0 auto;"></div></td>
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 60px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 45px; width: 14px; margin: 0 auto;"></div></td>
                    <td style="width: 14%;"><div style="background-color: #00AA13; height: 65px; width: 14px; margin: 0 auto;"></div><div style="background-color: #00AED6; height: 50px; width: 14px; margin: 0 auto;"></div></td>
                </tr>
                <tr style="border-top: 1px solid #CBD5E0;">
                    <td>Sen</td><td>Sel</td><td>Rab</td><td>Kam</td><td>Jum</td><td style="font-weight: bold; color: #00880F;">Sab 🔥</td><td style="font-weight: bold; color: #00880F;">Min 🔥</td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 3.4: Visualisasi Grafik Analisis Penjualan & Arus Kas 7 Hari Terakhir</div>
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

    {{-- WIREFRAME MOCKUP 3.5 --}}
    <div class="ui-mockup">
        <div class="ui-window-bar">
            <span class="ui-window-dot dot-red"></span>
            <span class="ui-window-dot dot-yellow"></span>
            <span class="ui-window-dot dot-green"></span>
            &nbsp; STRUKTUR MENU NAVIGASI SIDEBAR RESPONSIF
        </div>
        <div class="ui-window-body">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 40%; vertical-align: top;">
                        <div style="background-color: #00360D; border-radius: 6px; padding: 6px; color: white;">
                            <div style="font-size: 7.5pt; font-weight: bold; padding: 3px 6px; border-bottom: 1px solid #00661A;">
                                🏪 {{ strtoupper($shop['app_name'] ?? 'SIKANDA') }} POS
                            </div>
                            <div style="background-color: #00661A; border-radius: 4px; padding: 3px 6px; margin-top: 4px; font-size: 6.5pt; font-weight: bold; color: #A8DAB5;">
                                📊 Dashboard Ringkasan
                            </div>
                            <div style="padding: 3px 6px; font-size: 6.2pt; color: #E2E8F0;">📦 Katalog Produk & Stok</div>
                            <div style="padding: 3px 6px; font-size: 6.2pt; color: #E2E8F0;">📈 Laporan Penjualan</div>
                            <div style="padding: 3px 6px; font-size: 6.2pt; color: #E2E8F0;">💰 Laporan Keuangan & Kas</div>
                            <div style="padding: 3px 6px; font-size: 6.2pt; color: #E2E8F0;">👥 Manajemen Pengguna</div>
                            <div style="padding: 3px 6px; font-size: 6.2pt; color: #E2E8F0;">⚙️ Pengaturan Toko</div>
                            <div style="padding: 3px 6px; font-size: 6.2pt; color: #E2E8F0;">📖 Buku Panduan PDF</div>
                        </div>
                    </td>
                    <td style="width: 60%; padding-left: 10px; vertical-align: top;">
                        <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 8px;">
                            <div style="font-weight: bold; font-size: 7.5pt; color: #00661A; margin-bottom: 4px;">FITUR SIDEBAR TERPADU:</div>
                            <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                                • Terintegrasi otomatis dengan sistem role permission.<br>
                                • Status menu aktif ditandai highlight hijau muda terang.<br>
                                • Tombol cepat akses modul transaksi dan unduh panduan.<br>
                                • Footer sidebar memuat copyright resmi:<br>
                                <b style="color: #00880F;">© {{ date('Y') }} I Gusti Sultan. All rights reserved.</b>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="ui-caption">Gambar 3.5: Struktur Menu Navigasi Sidebar Responsif (resources/views/partials/sidebar.blade.php)</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 21 s/d 78: Bab 4 hingga Bab 10 dengan Diagram HTML/CSS Lengkap --}}
    {{-- ========================================================================= --}}
    @include('admin.manual.pdf_chapters_rest')

</body>
</html>
