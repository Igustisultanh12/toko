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

        /* COVER PAGE STYLING */
        .cover-container {
            height: 100%;
            text-align: center;
            padding-top: 35px;
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
            font-size: 16pt;
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
            font-size: 12pt;
            font-weight: 800;
            color: #2D3748;
            margin-top: 18px;
            margin-bottom: 8px;
            border-left: 4px solid #00AA13;
            padding-left: 8px;
        }

        h3.subsection-title {
            font-size: 10.5pt;
            font-weight: 700;
            color: #4A5568;
            margin-top: 14px;
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
            $fontBold = $fontMetrics->getFont("Helvetica", "bold");
            $size = 8;
            $color = array(0.5, 0.5, 0.5);

            $textRight = "Halaman {PAGE_NUM} dari {PAGE_COUNT}";
            $widthRight = $fontMetrics->get_text_width($textRight, $font, $size);
            
            // Render footer on every page except cover
            $pdf->page_text(595 - 55 - $widthRight, 842 - 38, $textRight, $font, $size, $color);
            
            $appName = strtoupper($shop['app_name'] ?? 'POS');
            $footerLeft = "Buku Panduan Resmi Sistem " . $appName . " | © I Gusti Sultan";
            $pdf->page_text(55, 842 - 38, $footerLeft, $font, $size, $color);

            // Garis pembatas footer
            $pdf->line(55, 842 - 45, 595 - 55, 842 - 45, array(0.85, 0.85, 0.85), 0.75);
        }
    </script>

    {{-- ========================================================================= --}}
    {{-- COVER PAGE --}}
    {{-- ========================================================================= --}}
    <div class="cover-container">
        <div class="cover-badge">Dokumentasi Resmi & Manual Operasional Terpadu</div>
        
        <h1 class="cover-title">BUKU PANDUAN LENGKAP<br>SISTEM KASIR & ADMINISTRASI</h1>
        <div class="cover-subtitle">{{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }} &bull; {{ strtoupper($shop['shop_name'] ?? 'TOKO KITA') }}</div>
        
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
    {{-- LEMBAR HAK CIPTA & KATA PENGANTAR --}}
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

    <h2 class="section-title">KATA PENGANTAR PENGEMBANG</h2>
    <p>
        Puji dan syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas terselesaikannya penyusunan <b>Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Toko Modern</b>. Sistem ini dirancang untuk menjawab tantangan operasional bisnis ritel kontemporer yang memerlukan kecepatan transaksi di meja kasir, transparansi arus kas real-time, integrasi pembayaran digital tanpa hambatan, serta akuntabilitas dokumen laporan formal yang berkekuatan hukum.
    </p>
    <p>
        Buku panduan ini disusun secara terstruktur dari <b>Bab 1 hingga Bab 10</b> tanpa ada satupun fitur atau menu yang terlewatkan. Mulai dari prosedur login, pemindaian barcode, transaksi tunai & QRIS DOKU otomatis, rekapitulasi keuangan harian/bulanan/kuartal/tahunan, verifikasi keaslian Tanda Tangan Elektronik (TTE) berbasis UU ITE No. 11 Tahun 2008, hingga tata kelola pemeliharaan server produksi aaPanel yang dikelola secara eksklusif oleh <b>I Gusti Sultan</b>.
    </p>
    
    <div style="margin-top: 30px; text-align: right;" class="no-break">
        <p style="margin-bottom: 50px;">Jember, {{ date('d F Y') }}<br><b>Lead Software Architect & Server Maintainer</b></p>
        <p><b><u>I Gusti Sultan</u></b><br><span style="font-size: 8pt; color: #718096;">Sistem Arsitek & Pengelola Server Utama</span></p>
    </div>

    {{-- ========================================================================= --}}
    {{-- DAFTAR ISI RINCI --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">DAFTAR ISI LENGKAP</h1>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 1: GAMBARAN UMUM & ARSITEKTUR TEKNOLOGI SISTEM</div>
        <div class="toc-sub-row">1.1 Latar Belakang & Filosofi Rancangan Sistem Kasir Modern</div>
        <div class="toc-sub-row">1.2 Tumpukan Teknologi (Technology Stack) & Arsitektur MVC</div>
        <div class="toc-sub-row">1.3 Matriks Perbandingan Hak Akses Pengguna (Admin vs Kasir)</div>
        <div class="toc-sub-row">1.4 Integrasi Layanan Pembayaran Digital QRIS DOKU Merchant</div>
        <div class="toc-sub-row">1.5 Landasan Hukum & Validitas Tanda Tangan Elektronik (UU ITE No. 11/2008)</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 2: MANAJEMEN OTENTIKASI & KEAMANAN AKUN</div>
        <div class="toc-sub-row">2.1 Akses Masuk Sistem (Halaman Login /login) & Tata Letak Antarmuka</div>
        <div class="toc-sub-row">2.2 Proteksi Formulir CSRF, Enkripsi Bcrypt & Proteksi Brute Force</div>
        <div class="toc-sub-row">2.3 Manajemen Profil Mandiri & Prosedur Pergantian Kata Sandi</div>
        <div class="toc-sub-row">2.4 Prosedur Keluar Aman (Logout) & Pembersihan Sesi Aktif</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 3: PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</div>
        <div class="toc-sub-row">3.1 Antarmuka Panel Kontrol Administrator (/dashboard)</div>
        <div class="toc-sub-row">3.2 Indikator Kinerja Utama (KPI) & Metrik Finansial Real-Time</div>
        <div class="toc-sub-row">3.3 Grafik Visual Tren Arus Kas & Analitik Penjualan 7 Hari Terakhir</div>
        <div class="toc-sub-row">3.4 Status Keaktifan Toko (Live Status) & Tombol Aksi Cepat</div>
        <div class="toc-sub-row">3.5 Struktur Navigasi Sidebar Responsif</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 4: MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</div>
        <div class="toc-sub-row">4.1 Katalog Master Produk (/admin/products) & Indikator Stok</div>
        <div class="toc-sub-row">4.2 Formulir Tambah Produk Baru (/admin/products/create) & Generator Barcode</div>
        <div class="toc-sub-row">4.3 Penentuan Harga Jual Kasir, Diskon Promo (%) & Keterangan Satuan</div>
        <div class="toc-sub-row">4.4 Ambang Batas Stok Menipis & Peringatan Stok Habis (Out of Stock)</div>
        <div class="toc-sub-row">4.5 Fitur Update Stok Cepat Melalui Scanner Barcode</div>
        <div class="toc-sub-row">4.6 Import Data Produk Massal Melalui Spreadsheet Excel/CSV</div>
        <div class="toc-sub-row">4.7 Pengeditan Data Barang & Prosedur Penghapusan Aman</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 5: OPERASIONAL KASIR POINT OF SALE (POS) MODERN</div>
        <div class="toc-sub-row">5.1 Tata Letak Antarmuka Kasir Layar Sentuh & PC (/cashier/pos)</div>
        <div class="toc-sub-row">5.2 Navigasi Kasir & Tombol Kembali ke Dashboard Admin</div>
        <div class="toc-sub-row">5.3 Metode Input Barang: Scanner Barcode, Pencarian Nama & Grid Cepat</div>
        <div class="toc-sub-row">5.4 Manajemen Keranjang Belanja, Penyesuaian Qty & Pembatalan Item</div>
        <div class="toc-sub-row">5.5 Penanganan Data Pelanggan (Pelanggan Umum vs Member Toko)</div>
        <div class="toc-sub-row">5.6 Alur Pembayaran Tunai (Cash) & Perhitungan Kembalian Otomatis</div>
        <div class="toc-sub-row">5.7 Alur Pembayaran Digital Dynamic QRIS DOKU & Webhook Real-Time</div>
        <div class="toc-sub-row">5.8 Asisten Suara (Audio Chime) Notifikasi Transaksi Sukses</div>
        <div class="toc-sub-row">5.9 Pintasan Keyboard Efisiensi Kasir (Hotkeys B & ESC)</div>
        <div class="toc-sub-row">5.10 Cetak Struk Thermal Bluetooth & Format Nota PDF Grayscale</div>
        <div class="toc-sub-row">5.11 Pengiriman Bukti Pembayaran Digital via WhatsApp Pelanggan</div>
        <div class="toc-sub-row">5.12 Modul Ekspedisi: Pembuatan & Pencetakan Label Resi Paket A6</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 6: PUSAT ANALITIK, LAPORAN BISNIS & REKONSILIASI KEUANGAN</div>
        <div class="toc-sub-row">6.1 Gambaran Umum Pusat Pelaporan Terpadu (/admin/reports)</div>
        <div class="toc-sub-row">6.2 Laporan Penjualan Transaksi (Filter Harian, Bulanan, Kuartal, Tahunan)</div>
        <div class="toc-sub-row">6.3 Laporan Keuangan & Arus Kas (Pemisahan Kas Tunai vs Netto QRIS DOKU 0.7%)</div>
        <div class="toc-sub-row">6.4 Laporan Monitoring & Audit Transaksi Digital QRIS</div>
        <div class="toc-sub-row">6.5 Laporan Inventaris, Mutasi & Valuasi Total Aset Barang Dagangan</div>
        <div class="toc-sub-row">6.6 Pencetakan Struk Ringkasan Tutup Kasir Harian (Daily Closing Slip)</div>
        <div class="toc-sub-row">6.7 Standar Ekspor Laporan Formal ke Format PDF Landscape & Excel (.xlsx)</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 7: TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</div>
        <div class="toc-sub-row">7.1 Landasan Hukum UU ITE No. 11/2008 & Integritas Dokumen Digital</div>
        <div class="toc-sub-row">7.2 Standar Kriptografi SHA-256 & Timestamp Keabsahan</div>
        <div class="toc-sub-row">7.3 Struktur Format Penomoran Dokumen Laporan Dinamis (LKEU / LPK / LSTK)</div>
        <div class="toc-sub-row">7.4 Penandatangan Dokumen Otomatis Berdasarkan Akun & Gelar Jabatan (Alias)</div>
        <div class="toc-sub-row">7.5 Portal Publik Verifikasi Keaslian Dokumen Laporan (/verify/document)</div>
        <div class="toc-sub-row">7.6 Portal Publik Verifikasi Keaslian Faktur Pelanggan (/verify/tte/{trx})</div>
        <div class="toc-sub-row">7.7 Tautan Faktur Digital Sementara Bertanda Tangan (Expired 24 Jam)</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 8: PENGATURAN TOKO, KONFIGURASI & INTEGRASI SISTEM</div>
        <div class="toc-sub-row">8.1 Pusat Pengaturan Sistem (/admin/settings)</div>
        <div class="toc-sub-row">8.2 Personalisasi Identitas Bisnis & Logo Toko</div>
        <div class="toc-sub-row">8.3 Kustomisasi Branding Aplikasi & Favicon Browser</div>
        <div class="toc-sub-row">8.4 Pengaturan & Pengunggahan Suara Bel Kasir (Audio Chime MP3/WAV)</div>
        <div class="toc-sub-row">8.5 Konfigurasi Gateway DOKU Merchant (Sandbox & Production)</div>
        <div class="toc-sub-row">8.6 Konfigurasi Notifikasi Telegram Bot Toko</div>
        <div class="toc-sub-row">8.7 Pengaturan Footer Struk Kasir & Kebijakan Toko</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 9: MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</div>
        <div class="toc-sub-row">9.1 Daftar Akun Pengguna (/admin/users)</div>
        <div class="toc-sub-row">9.2 Pendaftaran Akun Kasir / Admin Baru (/admin/users/create)</div>
        <div class="toc-sub-row">9.3 Konfigurasi Kolom "Alias / Gelar Jabatan TTD"</div>
        <div class="toc-sub-row">9.4 Perubahan Data Akun, Pengeditan & Reset Kata Sandi</div>
    </div>

    <div class="toc-chapter-row">
        <div class="toc-chapter-title">BAB 10: PEMELIHARAAN SERVER EKSLUSIF DIKELOLA OLEH I GUSTI SULTAN</div>
        <div class="toc-sub-row">10.1 Arsitektur Server Produksi & Manajemen Terpusat oleh I Gusti Sultan</div>
        <div class="toc-sub-row">10.2 Manajemen Storage Media & Rute Streaming Anti-404 (/media-file)</div>
        <div class="toc-sub-row">10.3 Prosedur Pembuatan & Perbaikan Storage Symlink pada aaPanel</div>
        <div class="toc-sub-row">10.4 Konfigurasi Web Server Nginx & URL Rewrite Engine</div>
        <div class="toc-sub-row">10.5 Pemantauan Log Kesalahan Sistem (laravel.log)</div>
        <div class="toc-sub-row">10.6 Prosedur Backup Basis Data & Pemeliharaan Berkala oleh I Gusti Sultan</div>
        <div class="toc-sub-row">10.7 Panduan Pemecahan Masalah Cepat (FAQ & Troubleshooting)</div>
        <div class="toc-sub-row">10.8 Glosarium Istilah POS, Perbankan, Kriptografi & E-Commerce</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 1 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">GAMBARAN UMUM & ARSITEKTUR TEKNOLOGI SISTEM</h1>

    <h2 class="section-title">1.1 Latar Belakang & Filosofi Rancangan Sistem Kasir Modern</h2>
    <p>
        Dalam dinamika bisnis ritel dan pergudangan modern, efisiensi waktu pelayanan di meja kasir (*checkout speed*) berbanding lurus dengan kepuasan pelanggan dan produktivitas usaha. Sistem Point of Sale (POS) ini dirancang secara khusus untuk memenuhi tuntutan operasional kasir modern yang menginginkan kecepatan entri barang dalam hitungan milidetik, perhitungan nominal yang presisi, serta rekonsiliasi otomatis antara pembayaran tunai dan pembayaran digital non-tunai.
    </p>
    <p>
        Filosofi utama yang mendasari perancangan sistem ini mencakup:
    </p>
    <ul>
        <li><b>Prinsip Alur Kerja Satu Layar (One-Screen POS Workflow):</b> Kasir dapat mencari barang, memindai barcode, mengatur kuantitas, memilih diskon, memproses pembayaran tunai maupun QRIS, serta mencetak struk tanpa perlu berpindah-pindah jendela browser.</li>
        <li><b>Keandalan Finansial Akuntansi (Financial Reliability):</b> Setiap transaksi kasir tercatat secara berpasangan dengan pemisahan saluran bayar, menghitung otomatis biaya potongan MDR (*Merchant Discount Rate*) 0.7% pada QRIS DOKU sehingga kas toko selalu seimbang (*reconciled*).</li>
        <li><b>Integritas Hukum Dokumen (Legal Document Integrity):</b> Seluruh berkas laporan resmi dicetak dengan stempel Tanda Tangan Elektronik (TTE) berbasis QR Code berstandar kriptografi SHA-256 yang memenuhi legalitas Undang-Undang ITE No. 11 Tahun 2008.</li>
    </ul>

    <h2 class="section-title">1.2 Tumpukan Teknologi (Technology Stack) & Arsitektur MVC</h2>
    <p>
        Sistem ini dibangun di atas arsitektur perangkat lunak modern <i>Model-View-Controller (MVC)</i> dengan tumpukan teknologi terbaik di industri:
    </p>
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Komponen Sistem</th>
            <th style="width: 28%;">Spesifikasi Teknologi</th>
            <th>Peran & Keunggulan Fungsional</th>
        </tr>
        <tr>
            <td><b>Backend Engine</b></td>
            <td>Laravel 11.x (PHP 8.2+)</td>
            <td>Menyediakan routing aman, middleware role otentikasi, Eloquent ORM berkecepatan tinggi, serta sistem antrean webhook.</td>
        </tr>
        <tr>
            <td><b>Frontend Framework</b></td>
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
    </table>

    <h2 class="section-title">1.3 Matriks Perbandingan Hak Akses Pengguna (Role Permission Matrix)</h2>
    <p>
        Sistem membagi akses pengguna ke dalam dua peran (*role*) terpisah guna mencegah benturan kepentingan dan menjaga keamanan data:
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
        <span class="callout-title">Hak Istimewa Administrator pada Layar Kasir</span>
        Pengguna dengan role <b>Administrator</b> memiliki akses penuh untuk bertransaksi di halaman Kasir POS. Saat login sebagai admin, sistem otomatis menampilkan tombol navigasi khusus <b>← Dashboard Admin</b> pada bagian header kasir untuk mempermudah perpindahan kembali ke panel manajemen tanpa perlu logout.
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 2 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">MANAJEMEN OTENTIKASI & KEAMANAN AKUN</h1>

    <h2 class="section-title">2.1 Akses Masuk Sistem (Halaman Login /login)</h2>
    <p>
        Pintu gerbang utama untuk mengakses sistem adalah rute <code>/login</code>. Halaman ini dirancang dengan kartu otentikasi elegan berlatar belakang putih bersih, menampilkan logo resmi toko, nama aplikasi, kolom input email, kata sandi, opsi ingat sesi, dan tombol masuk.
    </p>

    {{-- WIREFRAME LOGIN --}}
    <div class="wireframe-box">
        <div class="wireframe-header">SIMULASI ANTARMUKA BLADE: resources/views/auth/login.blade.php</div>
        <div class="wireframe-content">
            +-------------------------------------------------------------+<br>
            | &nbsp;[LOGO TOKO]&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |<br>
            | &nbsp;<b>MASUK KE SISTEM KASIR POS</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |<br>
            | &nbsp;Silakan masukkan email dan kata sandi kasir / admin terdaftar &nbsp; |<br>
            | &nbsp;--------------------------------------------------------- |<br>
            | &nbsp;EMAIL PENGGUNA : [ kasir1@toko.site &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] |<br>
            | &nbsp;KATA SANDI &nbsp; &nbsp; : [ &bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            | &nbsp;[X] Ingat saya di perangkat ini &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |<br>
            | &nbsp;[ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>MASUK KE KASIR / DASHBOARD</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] |<br>
            | &nbsp;--------------------------------------------------------- |<br>
            | &nbsp;<b>{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }} POS</b> &bull; &copy; {{ date('Y') }} I Gusti Sultan |<br>
            +-------------------------------------------------------------+
        </div>
    </div>

    <h2 class="section-title">2.2 Proteksi Keamanan Formulir, CSRF & Bcrypt Hashing</h2>
    <p>
        Setiap pengiriman formulir login dilindungi oleh mekanisme keamanan berlapis:
    </p>
    <ul>
        <li><b>Cross-Site Request Forgery (CSRF) Protection:</b> Setiap sesi web menerima token kriptografis unik <code>@csrf</code> yang divalidasi oleh middleware Laravel sebelum permintaan diproses.</li>
        <li><b>Bcrypt Password Hashing:</b> Kata sandi pengguna tidak pernah disimpan dalam format teks biasa (*plaintext*), melainkan di-hash menggunakan algoritma Bcrypt dengan garam acak (*random salt*).</li>
        <li><b>Rate Limiting & Anti Brute-Force:</b> Sistem membatasi percobaan login yang gagal berulang kali untuk melindungi akun dari serangan tebak kata sandi otomatis.</li>
    </ul>

    <h2 class="section-title">2.3 Prosedur Keluar Aman (Logout) & Pembersihan Sesi</h2>
    <p>
        Pada saat pergantian giliran kerja (*shift*) kasir atau selesai menggunakan komputer admin:
    </p>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Klik Tombol Keluar</div>
        <p>Klik tombol merah <b>Keluar</b> di bagian bawah sidebar panel admin atau menu akun kasir.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Penghancuran Sesi Otomatis</div>
        <p>Sistem mengirimkan HTTP POST terproteksi CSRF ke rute <code>/logout</code>, menghapus cookie sesi browser, dan mengalihkan halaman kembali ke layar login.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 3 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</h1>

    <h2 class="section-title">3.1 Antarmuka Panel Kontrol Administrator (/dashboard)</h2>
    <p>
        Dashboard Administrator (<code>/dashboard</code>) menyajikan rangkuman performa toko secara real-time. Informasi disajikan dengan kartu metrik berwarna dinamis, grafik tren omset 7 hari, status keaktifan toko, dan pintasan cepat menuju modul-modul penting.
    </p>

    {{-- WIREFRAME DASHBOARD --}}
    <div class="wireframe-box">
        <div class="wireframe-header">SIMULASI ANTARMUKA BLADE: resources/views/admin/dashboard.blade.php</div>
        <div class="wireframe-content">
            +---------------------------------------------------------------------------------+<br>
            | <b>BANNER UTAMA: GOPAY POCKET STYLE (HIJAU TUA)</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; |<br>
            | Total Omset Hari Ini : <b>Rp 1.450.000</b> &nbsp; | 18 Transaksi Sukses &bull; 42 Item Terjual &nbsp; &nbsp;|<br>
            | [KASIR POS] &nbsp; [+ PRODUK] &nbsp; [LAP. PENJUALAN] &nbsp; [LAP. STOK] &nbsp; [LAP. KEUANGAN] &nbsp; &nbsp;|<br>
            +---------------------------------------------------------------------------------+<br>
            | <b>DOKUMENTASI & BUKU PANDUAN BANNER:</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | 📖 Buku Panduan Lengkap Sistem POS & Administrator &nbsp; [Baca Online] &nbsp;[Unduh PDF] |<br>
            +---------------------------------------------------------------------------------+<br>
            | [KARTU 1: OMSET HARI INI] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| [KARTU 2: TOTAL TRANSAKSI] &nbsp; &nbsp; &nbsp; |<br>
            | Rp 1.450.000 (Kas Masuk Tercatat) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | 18 Order (Nota & Invoice Selesai) |<br>
            |-----------------------------------------------+---------------------------------|<br>
            | [KARTU 3: ITEM TERJUAL] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| [KARTU 4: STATUS TOKO] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | 42 Pcs (Volume Barang Keluar) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | ● TOKO AKTIF & SIAP TRANSAKSI &nbsp; &nbsp;|<br>
            +---------------------------------------------------------------------------------+<br>
            | <b>GRAFIK TREN ARUS KAS 7 HARI TERAKHIR:</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | [|| Tunai (Hijau)] &nbsp; &nbsp;[|| QRIS Digital (Cyan)] &nbsp; &nbsp;[== Garis Total Akumulasi] &nbsp; &nbsp; |<br>
            +---------------------------------------------------------------------------------+
        </div>
    </div>

    <h2 class="section-title">3.2 Indikator Kinerja Utama (KPI) Finansial</h2>
    <p>
        Empat metrik utama pada dashboard memberikan gambaran cepat kepada manajemen:
    </p>
    <ul>
        <li><b>Total Penjualan Hari Ini:</b> Akumulasi seluruh uang masuk kotor pada hari berjalan.</li>
        <li><b>Total Transaksi Berhasil:</b> Jumlah struk/nota yang berhasil diproses oleh kasir.</li>
        <li><b>Volume Item Terjual:</b> Kuantitas unit fisik barang yang keluar dari gudang.</li>
        <li><b>Peringatan Stok Menipis:</b> Jumlah produk yang stoknya tersisa di bawah ambang batas (alert kuning).</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- BAB 4 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</h1>

    <h2 class="section-title">4.1 Katalog Master Produk (/admin/products)</h2>
    <p>
        Menu Manajemen Produk mengelola master data barang dagangan toko. Tabel produk menampilkan nama barang, kode barcode/SKU, harga jual kasir, sisa stok fisik, persentase diskon promo, dan tombol aksi (Edit & Hapus).
    </p>

    {{-- WIREFRAME PRODUK CREATE --}}
    <div class="wireframe-box">
        <div class="wireframe-header">SIMULASI ANTARMUKA BLADE: resources/views/admin/products/create.blade.php</div>
        <div class="wireframe-content">
            +---------------------------------------------------------------------------------+<br>
            | <b>FORMULIR PENAMBAHAN PRODUK BARU</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[&larr; Kembali] |<br>
            |---------------------------------------------------------------------------------|<br>
            | NAMA PRODUK / BARANG (*): &nbsp;[ Minyak Goreng Bimoli 2 Liter &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] |<br>
            | KODE BARCODE / SKU &nbsp; &nbsp; : &nbsp;[ 8992753102941 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] [Auto] |<br>
            | HARGA JUAL KASIR (RP) (*):[ 38000 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            | STOK AWAL BARANG (*) &nbsp; &nbsp;:[ 24 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] |<br>
            | DISKON PROMO (%) &nbsp; &nbsp; &nbsp; &nbsp;:[ 0 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            | KETERANGAN / SATUAN &nbsp; &nbsp; :[ Pouch / Botol &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            |---------------------------------------------------------------------------------|<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[Batal] &nbsp;[<b>SIMPAN PRODUK</b>] &nbsp;|<br>
            +---------------------------------------------------------------------------------+
        </div>
    </div>

    <h2 class="section-title">4.2 Fitur Update Stok Cepat via Scanner Barcode</h2>
    <p>
        Pada halaman utama produk (<code>/admin/products</code>), terdapat kartu khusus <b>Scan / Tambah Stok Cepat</b>. Petugas gudang dapat memindai barcode barang masuk, mengisi kuantitas unit tambahan, lalu menekan Enter. Sistem langsung meng-increment stok produk di database secara asinkron (AJAX) tanpa perlu membuka form edit.
    </p>

    <h2 class="section-title">4.3 Import Massal Data Produk via Excel / CSV</h2>
    <p>
        Jika toko memiliki ratusan data barang baru, gunakan fitur <b>Impor Produk Excel</b> (<code>/admin/products/import</code>). Sistem menerima berkas <code>.xlsx</code> atau <code>.csv</code> dengan susunan kolom standar: <code>nama</code>, <code>barcode</code>, <code>harga</code>, dan <code>stok</code>.
    </p>

    {{-- ========================================================================= --}}
    {{-- BAB 5 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">OPERASIONAL KASIR POINT OF SALE (POS) MODERN</h1>

    <h2 class="section-title">5.1 Antarmuka Kasir Layar Sentuh & PC (/cashier/pos)</h2>
    <p>
        Halaman Kasir POS merupakan jantung operasional transaksi harian. Dirancang dengan antarmuka terpisah dua panel:
    </p>

    {{-- WIREFRAME KASIR POS --}}
    <div class="wireframe-box">
        <div class="wireframe-header">SIMULASI ANTARMUKA BLADE: resources/views/cashier/pos.blade.php</div>
        <div class="wireframe-content">
            +---------------------------------------------------------------------------------+<br>
            | [LOGO] <b>{{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }}</b> &nbsp; | &nbsp;[Cari Produk / Scan Barcode: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ] | [&larr; Dashboard Admin] |<br>
            |---------------------------------------------------------------------------------|<br>
            | <b>AREA KIRI: KERANJANG BELANJA AKTIF</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | <b>AREA KANAN: TOTAL & BAYAR</b> &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            | Item Produk &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Qty &nbsp; &nbsp; &nbsp; Subtotal &nbsp; &nbsp; Aksi | Nama Pelanggan: [ Pelanggan Umum ]|<br>
            | 1. Kopi Susu Aren &nbsp; &nbsp;[-] 2 [+] Rp 36.000 &nbsp; &nbsp; [X] &nbsp;|<br>
            | 2. Roti Bakar Cokelat [-] 1 [+] Rp 15.000 &nbsp; &nbsp; [X] &nbsp;| +-------------------------------+|<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| | TOTAL TAGIHAN BELANJA &nbsp; &nbsp; &nbsp; &nbsp; ||<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| | <b>Rp 51.000</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ||<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| | 2 Macam Produk &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ||<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| +-------------------------------+|<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| [ <b>PROSES BAYAR (B)</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;] |<br>
            | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &copy; {{ date('Y') }} I Gusti Sultan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|<br>
            +---------------------------------------------------------------------------------+
        </div>
    </div>

    <h2 class="section-title">5.2 Alur Transaksi Pembayaran Tunai & QRIS DOKU</h2>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Metode A</span> Pembayaran Tunai (Cash)</div>
        <p>Kasir menekan tombol <code>B</code>, memilih tab Tunai, lalu memasukkan nominal uang diterima. Kotak hijau otomatis menampilkan uang kembalian. Klik <b>Selesaikan Transaksi</b> untuk menyimpan order dan mencetak struk.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Metode B</span> Pembayaran Digital Dynamic QRIS (DOKU)</div>
        <p>Kasir memilih tab QRIS lalu klik <b>Generate QRIS Dinamis</b>. Kode QRIS Bank Indonesia tampil di layar beserta batas waktu (countdown). Pembeli memindai QRIS tersebut menggunakan GoPay, OVO, DANA, BCA, Livin Mandiri, dll. Saat dana berhasil masuk, layar kasir otomatis mengonfirmasi sukses (*webhook* real-time) dan menyuarakan bel notifikasi.</p>
    </div>

    <h2 class="section-title">5.3 Pengiriman Struk WhatsApp & Cetak Resi Paket A6</h2>
    <p>
        Setelah transaksi selesai, kasir dapat:
    </p>
    <ul>
        <li><b>Kirim Struk WA:</b> Masukkan nomor WA pembeli (misal: <code>08123456789</code>) lalu klik <b>Kirim</b> untuk mengirim tautan faktur digital resmi.</li>
        <li><b>Cetak Resi Ekspedisi A6:</b> Klik <b>📦 Kirim Paket (Cetak Resi)</b> untuk menginput nama penerima, alamat tujuan, ekspedisi (JNE, J&T, SiCepat), dan mencetak label pengiriman standar A6 portrait.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- BAB 6 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">PUSAT ANALITIK & LAPORAN KEUANGAN LENGKAP</h1>

    <h2 class="section-title">6.1 Pusat Pelaporan Terpadu (/admin/reports)</h2>
    <p>
        Modul Laporan menyediakan laporan akuntansi terperinci yang mencakup seluruh aspek bisnis:
    </p>

    <h2 class="section-title">6.2 Laporan Keuangan & Arus Kas (/admin/reports/finance)</h2>
    <p>
        Laporan Keuangan memisahkan uang masuk fisik di laci kasir dengan uang digital yang masuk ke rekening bank:
    </p>
    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Komponen Arus Kas</th>
            <th style="width: 28%;">Rumus Perhitungan</th>
            <th>Uraian Akuntansi & Rekonsiliasi</th>
        </tr>
        <tr>
            <td><b>Pemasukan Tunai (Cash)</b></td>
            <td><code>&Sigma; Penjualan Tunai Sukses</code></td>
            <td>Uang fisik riil yang diterima di kasir toko dan siap disetorkan ke bank.</td>
        </tr>
        <tr>
            <td><b>Nominal Bruto QRIS (Gross)</b></td>
            <td><code>&Sigma; Penjualan QRIS Sukses</code></td>
            <td>Nilai transaksi digital yang dibayar pelanggan via QRIS.</td>
        </tr>
        <tr>
            <td><b>Biaya Layanan DOKU (0.7%)</b></td>
            <td><code>Round(Bruto QRIS &times; 0.007)</code></td>
            <td>Biaya MDR pemrosesan transaksi gateway sesuai aturan resmi Bank Indonesia.</td>
        </tr>
        <tr>
            <td><b>Penerimaan Bersih QRIS</b></td>
            <td><code>Bruto QRIS - Biaya MDR</code></td>
            <td>Uang riil yang ditransfer DOKU ke rekening bank penampung toko.</td>
        </tr>
        <tr>
            <td><b>Total Omset Bersih</b></td>
            <td><code>Kas Tunai + Netto QRIS</code></td>
            <td>Total pendapatan bersih hak milik usaha pada periode laporan yang dipilih.</td>
        </tr>
    </table>

    <h2 class="section-title">6.3 Standar Ekspor Laporan Resmi ke PDF & Excel</h2>
    <p>
        Setiap laporan dapat diekspor ke dalam 2 format resmi:
    </p>
    <ul>
        <li><b>PDF Landscape A4 Resmi:</b> Dilengkapi kop nama toko, nomor dokumen resmi, tabel transaksi, rekonsiliasi kas, serta stempel <b>QR Code Tanda Tangan Elektronik (TTE)</b>.</li>
        <li><b>Spreadsheet Excel (.xlsx):</b> Berkas Excel terstruktur dengan rumus matematis siap audit untuk kebutuhan pembukuan akuntan.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- BAB 7 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</h1>

    <h2 class="section-title">7.1 Landasan Hukum UU ITE No. 11 Tahun 2008</h2>
    <p>
        Setiap dokumen laporan resmi (Laporan Penjualan, Laporan Keuangan, Laporan QRIS, dan Laporan Stok) yang dicetak dalam format PDF dilengkapi dengan <b>Tanda Tangan Elektronik (TTE)</b> berbasis kode QR kriptografis. Berdasarkan <i>Pasal 11 UU ITE No. 11 Tahun 2008</i>, Tanda Tangan Elektronik memiliki kekuatan hukum dan akibat hukum yang sah setara dengan tanda tangan basah.
    </p>

    <h2 class="section-title">7.2 Struktur Penomoran Dokumen Laporan Dinamis</h2>
    <p>
        Format nomor dokumen laporan dibuat secara otomatis dan dinamis:
    </p>
    <div class="callout callout-info" style="font-family: monospace; font-size: 9pt; text-align: center;">
        [KODE]-[METODE]/[TANGGAL_DATA]/[BULAN_ROMAWI]/[NAMA_APLIKASI]/[TAHUN]
    </div>
    <p>
        <b>Ketentuan Penting:</b>
        Tanggal, bulan Romawi, dan tahun pada nomor dokumen selalu mengambil <b>tanggal dari data laporan yang difilter</b> (bukan tanggal saat tombol cetak diklik). Contoh: Jika Anda memfilter laporan keuangan tanggal 5 Agustus 2026 dan mencetaknya pada tanggal 26 Agustus 2026, nomor dokumen yang tercetak akan tetap <code>LKEU-TUNAI/05/VIII/SIBALOG/2026</code>.
    </p>

    <h2 class="section-title">7.3 Portal Publik Verifikasi Keaslian Dokumen (/verify/document)</h2>
    <p>
        Saat QR Code TTE pada laporan PDF dipindai menggunakan kamera ponsel:
    </p>
    <ol>
        <li>Browser membuka halaman publik <code>https://domain-anda.com/verify/document?...</code>.</li>
        <li>Sistem memvalidasi tanda tangan kriptografis SHA-256 dan stempel waktu (*timestamp*).</li>
        <li>Layar menampilkan sertifikat hijau: <b>"DOKUMEN ASLI & TERVERIFIKASI"</b>, memuat nomor dokumen, nama penandatangan, gelar jabatan resmi (*alias*), dan tanggal pengesahan.</li>
    </ol>

    {{-- ========================================================================= --}}
    {{-- BAB 8 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">PENGATURAN TOKO & INTEGRASI SISTEM</h1>

    <h2 class="section-title">8.1 Pusat Pengaturan Sistem (/admin/settings)</h2>
    <p>
        Menu Pengaturan Toko memungkinkan administrator menyesuaikan seluruh identitas bisnis dan konfigurasi gateway pembayaran tanpa menyentuh kode program.
    </p>

    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Kolom Pengaturan</th>
            <th style="width: 25%;">Contoh Konfigurasi</th>
            <th>Pengaruh Langsung pada Sistem</th>
        </tr>
        <tr>
            <td><b>Nama Toko / Usaha</b></td>
            <td><code>BAGIAN LOGISTIK</code></td>
            <td>Menjadi kop surat pada seluruh PDF laporan, struk kasir, faktur pengiriman, dan portal TTE.</td>
        </tr>
        <tr>
            <td><b>Nama Aplikasi (Branding)</b></td>
            <td><code>SIBALOG POS</code></td>
            <td>Menentukan 3 huruf awal nomor invoice kasir (contoh: <code>SIB-20260825-XXXXX</code>) dan judul web tab.</td>
        </tr>
        <tr>
            <td><b>Alamat & Kontak Toko</b></td>
            <td><code>Jl. Argopuro No. 77 / 08123..</code></td>
            <td>Dicetak pada header struk kasir dan halaman faktur kadaluarsa.</td>
        </tr>
        <tr>
            <td><b>Logo & Favicon Toko</b></td>
            <td>File PNG / JPG / ICO</td>
            <td>Ditampilkan pada sidebar, login, dan dikonversi otomatis ke format monokrom struk thermal.</td>
        </tr>
        <tr>
            <td><b>Audio Bel Kasir</b></td>
            <td>File MP3 / WAV</td>
            <td>Suara lonceng kasir kustom yang berbunyi saat pembayaran sukses.</td>
        </tr>
        <tr>
            <td><b>Kredensial DOKU Gateway</b></td>
            <td>Client ID & Secret Key</td>
            <td>API key untuk generate QRIS Dinamis dan integrasi webhook transaksi non-tunai.</td>
        </tr>
        <tr>
            <td><b>Telegram Bot Notifikasi</b></td>
            <td>Bot Token & Chat ID</td>
            <td>Mengirimkan notifikasi laporan uang masuk tunai & QRIS otomatis ke Telegram pemilik toko.</td>
        </tr>
    </table>

    {{-- ========================================================================= --}}
    {{-- BAB 9 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</h1>

    <h2 class="section-title">9.1 Daftar Akun Pengguna (/admin/users)</h2>
    <p>
        Administrator dapat melihat seluruh akun kasir dan admin yang terdaftar, status keaktifan, alamat email login, role wewenang, serta gelar jabatan penandatangan resmi.
    </p>

    <h2 class="section-title">9.2 Pendaftaran Akun Baru & Penugasan Wewenang</h2>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Buka Menu Manajemen Akun</div>
        <p>Akses menu <b>Manajemen Akun</b> di sidebar admin lalu klik tombol <b>+ Tambah Pengguna</b> (<code>/admin/users/create</code>).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Isi Data Nama, Email & Kata Sandi</div>
        <p>Lengkapi nama lengkap personil, alamat email login unik, dan kata sandi minimal 6 karakter.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Pilih Role & Isi Gelar Jabatan (Alias TTD)</div>
        <p>Pilih role <b>Petugas Kasir</b> atau <b>Administrator Toko</b>. Isi kolom <b>Alias / Gelar Jabatan TTD</b> (contoh: <code>Kasir Utama Shift Pagi</code>, <code>Kepala Bagian Logistik</code>, <code>Manager Keuangan</code>). Gelar ini akan dicetak tepat di atas QR Code TTE pada setiap laporan yang dicetak oleh akun tersebut.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 10 --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PEMELIHARAAN SERVER EKSLUSIF DIKELOLA OLEH I GUSTI SULTAN</h1>

    <h2 class="section-title">10.1 Arsitektur Server Produksi & Manajemen Terpusat oleh I Gusti Sultan</h2>
    <p>
        Seluruh infrastruktur server produksi, konfigurasi web server Nginx, lingkungan PHP-FPM 8.2+, basis data MySQL, manajemen kontrol panel aaPanel, sertifikat keamanan SSL/TLS, proteksi firewall, hingga skema pencadangan (*backup*) data toko <b>dikelola dan dipelihara secara profesional oleh I Gusti Sultan</b>.
    </p>
    <p>
        Pendekatan manajemen terpusat ini menjamin sistem kasir POS memiliki tingkat ketersediaan (*uptime*) 99.9%, terlindung dari kerentanan keamanan siber, dan selalu siap memproses ribuan transaksi per hari tanpa kendala teknis.
    </p>

    <h2 class="section-title">10.2 Manajemen Storage Media & Rute Streaming Anti-404 (/media-file)</h2>
    <p>
        Pada arsitektur server produksi aaPanel/Nginx, web server Nginx secara default mencegat file statis (.png/.jpg/.ico) di tingkat server sebelum diteruskan ke PHP. Jika symlink <code>public/storage</code> mengalami desinkronisasi, Nginx akan membalas dengan <code>404 Not Found nginx</code>.
    </p>
    <p>
        Untuk mengatasi hal tersebut secara permanen, <b>I Gusti Sultan</b> telah merancang dan mengimplementasikan <b>Dedicated Media Streaming Engine (<code>/media-file?path=...</code>)</b>. Rute ini membypass aturan regex statis Nginx dan membaca langsung dari direktori <code>storage/app/public/</code> dengan proteksi directory traversal, memastikan logo toko, favicon, dan foto produk 100% selalu muncul sempurna.
    </p>

    <h2 class="section-title">10.3 Prosedur Pemeliharaan & Deploy Update Server di aaPanel</h2>
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

    <h2 class="section-title">10.4 Pemantauan Log Kesalahan Sistem (laravel.log)</h2>
    <p>
        Aktivitas transaksi kasir dan respons webhook DOKU dipantau secara berkala melalui berkas log <code>storage/logs/laravel.log</code>. Setiap anomali transaksi atau kegagalan koneksi perbankan akan tercatat lengkap dengan stempel waktu dan jejak eksekusi (*stack trace*) untuk penanganan segera oleh <b>I Gusti Sultan</b>.
    </p>

    <h2 class="section-title">10.5 Prosedur Pencadangan (Backup) & Pemulihan Basis Data</h2>
    <p>
        Pencadangan basis data dilakukan secara otomatis setiap hari meliputi:
    </p>
    <ul>
        <li><b>Daily Database Dump:</b> Pencadangan snapshot tabel transaksi (sales, sale_details, products, users, settings).</li>
        <li><b>Media Asset Backup:</b> Pencadangan seluruh logo dan bukti faktur di direktori storage.</li>
        <li><b>Disaster Recovery Plan:</b> Prosedur pemulihan cepat (*quick restore*) dalam hitungan menit jika terjadi kegagalan perangkat keras server.</li>
    </ul>

    <h2 class="section-title">10.6 Panduan Pemecahan Masalah Cepat (FAQ & Troubleshooting)</h2>
    <table class="doc-table">
        <tr>
            <th style="width: 28%;">Kendala Operasional</th>
            <th style="width: 30%;">Analisis Penyebab</th>
            <th>Langkah Solusi Pemecahan</th>
        </tr>
        <tr>
            <td><b>Pembayaran QRIS belum otomatis berubah sukses</b></td>
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

    <h2 class="section-title">10.7 Glosarium Istilah POS, Perbankan, & Kriptografi</h2>
    <ul>
        <li><b>POS (Point of Sale):</b> Titik penjualan tempat transaksi barang dagangan dan penerimaan uang kasir berlangsung.</li>
        <li><b>Dynamic QRIS:</b> Kode QRIS satu kali pakai yang memuat nominal transaksi secara presisi dan otomatis hangus setelah dibayar.</li>
        <li><b>MDR (Merchant Discount Rate):</b> Tarif pemrosesan transaksi pembayaran digital perbankan (0.7% untuk QRIS).</li>
        <li><b>TTE (Tanda Tangan Elektronik):</b> Tanda tangan digital berdasar UU ITE No. 11/2008 yang dienkripsi secara kriptografis.</li>
        <li><b>Bcrypt Hash:</b> Fungsi hash adaptif satu arah untuk mengamankan kata sandi pengguna dari kebocoran data.</li>
        <li><b>aaPanel:</b> Kontrol panel manajemen web server Linux untuk hosting aplikasi Laravel dan basis data.</li>
        <li><b>I Gusti Sultan:</b> Lead Software Architect dan Pengelola Utama Seluruh Infrastruktur Server & Aplikasi.</li>
    </ul>

    <div class="callout callout-success" style="margin-top: 20px; text-align: center;">
        <span class="callout-title">Layanan Bantuan & Dukungan Teknis Server</span>
        Untuk konsultasi teknis, penambahan fitur kustom, atau penanganan kendala server produksi, silakan menghubungi langsung <b>I Gusti Sultan</b> selaku pengembang dan pengelola resmi sistem.
    </div>

</body>
</html>
