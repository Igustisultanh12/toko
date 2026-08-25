<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Panduan Lengkap Sistem POS & Administrator - {{ $shop['app_name'] ?? 'POS' }}</title>
    <style>
        @page {
            margin: 2.2cm 2cm 2.2cm 2cm;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 10pt;
            line-height: 1.6;
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

        /* HEADER & FOOTER MARGINS */
        .cover-page {
            height: 100%;
            text-align: center;
            padding-top: 50px;
        }

        .cover-badge {
            background-color: #E6F4EA;
            color: #00880F;
            font-weight: bold;
            font-size: 9pt;
            padding: 6px 16px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 25px;
            border: 1px solid #CEEAD6;
        }

        .cover-title {
            font-size: 26pt;
            font-weight: 900;
            color: #1A202C;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            line-height: 1.2;
            margin: 0 0 15px 0;
        }

        .cover-subtitle {
            font-size: 13pt;
            font-weight: 600;
            color: #00AA13;
            margin: 0 0 35px 0;
            line-height: 1.4;
        }

        .cover-divider {
            width: 100px;
            height: 4px;
            background-color: #00AA13;
            margin: 20px auto 35px auto;
            border-radius: 2px;
        }

        .cover-desc {
            font-size: 10pt;
            color: #718096;
            max-width: 480px;
            margin: 0 auto 50px auto;
            line-height: 1.6;
        }

        .cover-meta-box {
            background-color: #F7FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 12px;
            padding: 20px;
            text-align: left;
            margin: 0 auto;
            width: 85%;
        }

        .cover-meta-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9pt;
        }

        .cover-meta-table td {
            padding: 5px 8px;
            vertical-align: top;
        }

        .cover-meta-label {
            font-weight: bold;
            color: #4A5568;
            width: 35%;
        }

        .cover-meta-value {
            color: #1A202C;
            font-weight: 600;
        }

        .cover-footer {
            margin-top: 60px;
            font-size: 8.5pt;
            color: #A0AEC0;
            letter-spacing: 1px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* HEADINGS */
        h1.chapter-title {
            font-size: 18pt;
            font-weight: 900;
            color: #00661A;
            border-bottom: 2.5px solid #00AA13;
            padding-bottom: 8px;
            margin-top: 0;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .chapter-num {
            font-size: 11pt;
            font-weight: 800;
            color: #00AA13;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 4px;
        }

        h2.section-title {
            font-size: 13pt;
            font-weight: 800;
            color: #2D3748;
            margin-top: 22px;
            margin-bottom: 10px;
            border-left: 4px solid #00AA13;
            padding-left: 10px;
        }

        h3.subsection-title {
            font-size: 11pt;
            font-weight: 700;
            color: #4A5568;
            margin-top: 16px;
            margin-bottom: 8px;
        }

        p {
            margin: 0 0 10px 0;
            text-align: justify;
        }

        /* TABLES */
        table.doc-table {
            width: 100%;
            border-collapse: collapse;
            margin: 14px 0 18px 0;
            font-size: 8.5pt;
        }

        table.doc-table th {
            background-color: #00661A;
            color: #FFFFFF;
            font-weight: bold;
            text-transform: uppercase;
            padding: 8px 10px;
            border: 1px solid #004D13;
            text-align: left;
            letter-spacing: 0.5px;
        }

        table.doc-table td {
            padding: 7px 10px;
            border: 1px solid #CBD5E0;
            vertical-align: top;
        }

        table.doc-table tr:nth-child(even) td {
            background-color: #F7FAFC;
        }

        /* CALLOUT BOXES */
        .callout {
            border-radius: 8px;
            padding: 12px 16px;
            margin: 14px 0;
            font-size: 9pt;
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
            font-size: 8.5pt;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
            display: block;
        }

        /* STEP CARDS */
        .step-box {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 12px;
            page-break-inside: avoid;
        }

        .step-header {
            font-weight: bold;
            font-size: 9.5pt;
            color: #1A202C;
            margin-bottom: 5px;
        }

        .step-num {
            background-color: #00AA13;
            color: #FFFFFF;
            font-size: 8pt;
            font-weight: bold;
            padding: 2px 7px;
            border-radius: 4px;
            margin-right: 6px;
            display: inline-block;
        }

        /* CODE & SHORTCUT BADGES */
        code {
            font-family: 'Courier New', Courier, monospace;
            background-color: #EDF2F7;
            color: #C53030;
            padding: 2px 5px;
            border-radius: 4px;
            font-size: 8.5pt;
            font-weight: bold;
        }

        .badge-shortcut {
            background-color: #2D3748;
            color: #FFFFFF;
            font-family: monospace;
            font-size: 8pt;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: bold;
            display: inline-block;
        }

        /* TOC */
        .toc-item {
            margin-bottom: 8px;
            font-size: 9.5pt;
        }

        .toc-chapter {
            font-weight: bold;
            color: #1A202C;
            text-transform: uppercase;
        }

        .toc-sub {
            padding-left: 20px;
            color: #4A5568;
            font-size: 9pt;
            margin-top: 3px;
        }

        .toc-dots {
            border-bottom: 1px dotted #CBD5E0;
            margin: 0 5px;
            flex-grow: 1;
        }

        ul, ol {
            margin: 0 0 12px 0;
            padding-left: 22px;
        }

        li {
            margin-bottom: 4px;
        }

        .footer-page {
            position: fixed;
            bottom: -15px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 8pt;
            color: #A0AEC0;
            border-top: 1px solid #E2E8F0;
            padding-top: 8px;
        }
    </style>
</head>
<body>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 1: COVER BUKU PANDUAN RESMI --}}
    {{-- ========================================================================= --}}
    <div class="cover-page">
        <div class="cover-badge">Buku Petunjuk Operasional & Manual Resmi</div>
        
        <h1 class="cover-title">BUKU PANDUAN LENGKAP<br>SISTEM KASIR & ADMINISTRASI</h1>
        <div class="cover-subtitle">{{ strtoupper($shop['app_name'] ?? 'SIKANDA POS') }} &bull; {{ strtoupper($shop['shop_name'] ?? 'TOKO KITA') }}</div>
        
        <div class="cover-divider"></div>
        
        <p class="cover-desc">
            Buku pedoman resmi pengoperasian seluruh modul sistem kasir Point of Sale (POS) dan panel kontrol administrator modern, mencakup manajemen otentikasi, inventaris produk, transaksi tunai & QRIS DOKU, laporan analitik bisnis, serta tanda tangan elektronik bersertifikasi.
        </p>

        <div class="cover-meta-box">
            <table class="cover-meta-table">
                <tr>
                    <td class="cover-meta-label">Nama Aplikasi</td>
                    <td class="cover-meta-value">: {{ $shop['app_name'] ?? 'SIKANDA' }} Point of Sale Engine</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Nama Badan Usaha / Toko</td>
                    <td class="cover-meta-value">: {{ $shop['shop_name'] ?? 'TOKO BERKAH' }}</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Alamat Usaha</td>
                    <td class="cover-meta-value">: {{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77' }}</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Kontak Resmi</td>
                    <td class="cover-meta-value">: {{ $shop['shop_phone'] ?? '081234567890' }}</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Arsitektur & Framework</td>
                    <td class="cover-meta-value">: Laravel 11.x, Tailwind CSS, Alpine.js & DomPDF</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Hak Cipta Pengembang</td>
                    <td class="cover-meta-value">: &copy; {{ date('Y') }} I Gusti Sultan. All rights reserved.</td>
                </tr>
                <tr>
                    <td class="cover-meta-label">Tanggal Terbit Dokumen</td>
                    <td class="cover-meta-value">: {{ date('d F Y') }}</td>
                </tr>
            </table>
        </div>

        <div class="cover-footer">
            DOKUMEN OPERASIONAL RESMI &bull; DILINDUNGI HAK CIPTA &bull; EDISI TAHUN {{ date('Y') }}
        </div>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 2: LEMBAR HAK CIPTA & KATA PENGANTAR --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">LEMBAR HAK CIPTA & PENGESAHAN</h1>
    
    <div class="callout callout-info">
        <span class="callout-title">Hak Cipta Dilindungi Undang-Undang</span>
        Seluruh isi dari dokumen buku panduan ini, desain antarmuka, struktur basis data, dan kode sumber aplikasi sistem kasir berada di bawah perlindungan hak kekayaan intelektual (HAKI).
    </div>

    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Item Informasi</th>
            <th>Rincian Keterangan</th>
        </tr>
        <tr>
            <td><b>Judul Dokumen</b></td>
            <td>Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Toko</td>
        </tr>
        <tr>
            <td><b>Pemegang Hak Cipta</b></td>
            <td><b>I Gusti Sultan</b></td>
        </tr>
        <tr>
            <td><b>Edisi / Versi</b></td>
            <td>Edisi 2.0 (Pemutakhiran Sistem QRIS Dinamis & TTE Kriptografis)</td>
        </tr>
        <tr>
            <td><b>Tahun Penerbitan</b></td>
            <td>{{ date('Y') }}</td>
        </tr>
        <tr>
            <td><b>Peruntukan Dokumen</b></td>
            <td>Panduan Operasional Administrator Toko, Kepala Gudang, Petugas Kasir, dan Tim Pengelola IT.</td>
        </tr>
    </table>

    <h2 class="section-title">KATA PENGANTAR</h2>
    <p>
        Puji dan syukur kami panjatkan atas terselesaikannya penyusunan <b>Buku Panduan Lengkap Sistem Kasir Point of Sale (POS) dan Administrasi Modern</b>. Sistem ini dikembangkan dengan tujuan utama memberikan solusi terpadu, cepat, aman, dan efisien bagi pengelolaan transaksi ritel, manajemen stok pergudangan, integrasi pembayaran digital QRIS DOKU, dan pencatatan laporan keuangan berstandar akuntansi.
    </p>
    <p>
        Buku panduan ini disusun secara komprehensif agar dapat dijadikan rujukan operasional harian bagi seluruh jajaran personil, mulai dari <b>Petugas Kasir</b> yang melayani transaksi di garis depan hingga <b>Administrator Toko / Pemilik Usaha</b> yang mengontrol arus kas dan strategi bisnis. Kami berharap buku ini dapat memberikan pemahaman menyeluruh sehingga seluruh fitur unggulan sistem dapat dimanfaatkan secara optimal.
    </p>
    
    <div style="margin-top: 30px; text-align: right;">
        <p style="margin-bottom: 50px;">Jember, {{ date('d F Y') }}<br><b>Tim Pengembang Sistem</b></p>
        <p><b><u>I Gusti Sultan</u></b><br><span style="font-size: 8.5pt; color: #718096;">Lead Software Architect & Developer</span></p>
    </div>

    {{-- ========================================================================= --}}
    {{-- HALAMAN 3: DAFTAR ISI SISTEMATIS --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <h1 class="chapter-title">DAFTAR ISI SISTEMATIS</h1>

    <div class="toc-item">
        <div class="toc-chapter">BAB 1: GAMBARAN UMUM & ARSITEKTUR TEKNOLOGI SISTEM</div>
        <div class="toc-sub">1.1 Latar Belakang & Filosofi Perancangan Sistem</div>
        <div class="toc-sub">1.2 Tumpukan Teknologi (Technology Stack) Modern</div>
        <div class="toc-sub">1.3 Matriks Hak Akses Pengguna (Role Permission Matrix)</div>
        <div class="toc-sub">1.4 Integrasi Layanan Pembayaran Digital QRIS DOKU Merchant</div>
        <div class="toc-sub">1.5 Landasan Hukum & Validitas Tanda Tangan Elektronik (UU ITE)</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 2: MANAJEMEN OTENTIKASI & KEAMANAN AKUN</div>
        <div class="toc-sub">2.1 Akses Masuk Sistem (Halaman Login /login)</div>
        <div class="toc-sub">2.2 Proteksi Formulir CSRF & Enkripsi Kata Sandi Bcrypt</div>
        <div class="toc-sub">2.3 Manajemen Profil & Pembaruan Password Mandiri</div>
        <div class="toc-sub">2.4 Prosedur Keluar Aman (Logout) & Keamanan Sesi Kasir</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 3: PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</div>
        <div class="toc-sub">3.1 Antarmuka Panel Kontrol Administrator (/dashboard)</div>
        <div class="toc-sub">3.2 Metrik Finansial Real-Time (Omset, Pendapatan Bersih, Transaksi)</div>
        <div class="toc-sub">3.3 Grafik Tren Arus Kas & Analitik Penjualan 7 Hari Terakhir</div>
        <div class="toc-sub">3.4 Status Keaktifan Toko & Navigasi Cepat Menuju Kasir</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 4: MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</div>
        <div class="toc-sub">4.1 Katalog Master Produk (/admin/products)</div>
        <div class="toc-sub">4.2 Penambahan Produk Baru & Pengisian Barcode/SKU</div>
        <div class="toc-sub">4.3 Struktur Harga Modal (HPP) vs Harga Jual Eceran</div>
        <div class="toc-sub">4.4 Pemantauan Stok, Ambang Batas Menipis & Peringatan Habis</div>
        <div class="toc-sub">4.5 Pengunggahan Foto Produk & Manajemen File Media</div>
        <div class="toc-sub">4.6 Import Data Produk Massal via Excel/CSV (/admin/products/import)</div>
        <div class="toc-sub">4.7 Update Cepat Stok & Penghapusan Produk Secara Aman</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 5: OPERASIONAL KASIR POINT OF SALE (POS)</div>
        <div class="toc-sub">5.1 Antarmuka Kasir Layar Sentuh & PC (/cashier/pos)</div>
        <div class="toc-sub">5.2 Metode Pencarian Barang & Pemindaian Barcode Scanner</div>
        <div class="toc-sub">5.3 Manajemen Keranjang Belanja & Pengaturan Jumlah (Qty)</div>
        <div class="toc-sub">5.4 Penanganan Identitas Pelanggan (Umum vs Member)</div>
        <div class="toc-sub">5.5 Transaksi Pembayaran Tunai (Cash) & Hitung Kembalian Otomatis</div>
        <div class="toc-sub">5.6 Pembayaran Digital Dynamic QRIS DOKU & Real-Time Webhook</div>
        <div class="toc-sub">5.7 Asisten Suara (Audio Chime) Notifikasi Transaksi Sukses</div>
        <div class="toc-sub">5.8 Pintasan Keyboard Efisiensi Kasir (Hotkeys B & ESC)</div>
        <div class="toc-sub">5.9 Cetak Struk Thermal Bluetooth & Format Nota PDF Grayscale</div>
        <div class="toc-sub">5.10 Pengiriman Bukti Struk Transaksi via WhatsApp Pelanggan</div>
        <div class="toc-sub">5.11 Ekspedisi: Cetak Label Resi Pengiriman Paket Standar A6</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 6: PUSAT ANALITIK & LAPORAN KEUANGAN</div>
        <div class="toc-sub">6.1 Pusat Pelaporan Sistem (/admin/reports)</div>
        <div class="toc-sub">6.2 Laporan Penjualan Transaksi (Harian, Bulanan, Kuartal, Tahunan)</div>
        <div class="toc-sub">6.3 Laporan Keuangan & Arus Kas (Pemisahan Kas Tunai vs Netto QRIS)</div>
        <div class="toc-sub">6.4 Laporan Monitoring & Rekonsiliasi Transaksi QRIS DOKU</div>
        <div class="toc-sub">6.5 Laporan Inventaris, Mutasi & Valuasi Total Aset Barang</div>
        <div class="toc-sub">6.6 Cetak Struk Ringkasan Tutup Kasir Harian (Closing Slip)</div>
        <div class="toc-sub">6.7 Standar Ekspor Laporan Resmi ke PDF Landscape & Excel (.xlsx)</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 7: TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</div>
        <div class="toc-sub">7.1 Landasan Hukum UU ITE No. 11/2008 & Integritas Dokumen</div>
        <div class="toc-sub">7.2 Standar Kriptografi SHA-256 & Timestamp Keabsahan</div>
        <div class="toc-sub">7.3 Struktur Format Penomoran Dokumen Laporan Dinamis (LKEU/LPK)</div>
        <div class="toc-sub">7.4 Penandatangan Dokumen Otomatis Berdasarkan Akun & Alias</div>
        <div class="toc-sub">7.5 Portal Publik Verifikasi Keaslian Dokumen Laporan (/verify/document)</div>
        <div class="toc-sub">7.6 Portal Publik Verifikasi Keaslian Faktur Pelanggan (/verify/tte/{trx})</div>
        <div class="toc-sub">7.7 Tautan Faktur Digital Sementara Bertanda Tangan (Expired 24 Jam)</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 8: PENGATURAN TOKO & INTEGRASI SISTEM</div>
        <div class="toc-sub">8.1 Pusat Pengaturan Sistem (/admin/settings)</div>
        <div class="toc-sub">8.2 Personalisasi Identitas Bisnis & Logo Toko</div>
        <div class="toc-sub">8.3 Kustomisasi Branding Aplikasi & Favicon Browser</div>
        <div class="toc-sub">8.4 Pengaturan & Pengunggahan Suara Bel Kasir (Audio Chime)</div>
        <div class="toc-sub">8.5 Konfigurasi Gateway DOKU Merchant (Sandbox/Production)</div>
        <div class="toc-sub">8.6 Konfigurasi Integrasi Bot Notifikasi Telegram</div>
        <div class="toc-sub">8.7 Pengaturan Footer Struk Kasir & Catatan Toko</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 9: MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</div>
        <div class="toc-sub">9.1 Daftar Akun Pengguna (/admin/users)</div>
        <div class="toc-sub">9.2 Pendaftaran Akun Baru & Penugasan Wewenang (Role)</div>
        <div class="toc-sub">9.3 Konfigurasi Gelar Jabatan Resmi (Alias TTE)</div>
        <div class="toc-sub">9.4 Perubahan Data Akun & Prosedur Reset Kata Sandi</div>
    </div>

    <div class="toc-item">
        <div class="toc-chapter">BAB 10: PEMELIHARAAN SERVER & TROUBLESHOOTING</div>
        <div class="toc-sub">10.1 Manajemen Storage & Rute Streaming Anti-404 (/media-file)</div>
        <div class="toc-sub">10.2 Prosedur Symlink Storage pada Server aaPanel</div>
        <div class="toc-sub">10.3 Konfigurasi Web Server Nginx & URL Rewrite Engine</div>
        <div class="toc-sub">10.4 Pemeriksaan Log Sistem (laravel.log)</div>
        <div class="toc-sub">10.5 Panduan Pemecahan Masalah Cepat (Troubleshooting FAQ)</div>
        <div class="toc-sub">10.6 Glosarium Istilah POS, Perbankan, & E-Commerce</div>
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 1: GAMBARAN UMUM & ARSITEKTUR SISTEM --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 01</div>
    <h1 class="chapter-title">GAMBARAN UMUM & ARSITEKTUR TEKNOLOGI SISTEM</h1>

    <h2 class="section-title">1.1 Latar Belakang & Filosofi Perancangan Sistem</h2>
    <p>
        Dalam era transformasi digital modern, kecepatan dan ketepatan pencatatan transaksi dagang menjadi pilar utama keberhasilan operasional bisnis ritel. Sistem Point of Sale (POS) ini dirancang khusus untuk menjembatani kebutuhan operasional harian kasir yang menuntut responsivitas tinggi (*sub-second transaction latency*) dengan kebutuhan analitik finansial pihak manajemen yang memerlukan data akurat, transparan, dan dapat diverifikasi keasliannya secara hukum.
    </p>
    <p>
        Filosofi utama perancangan sistem meliputi:
    </p>
    <ul>
        <li><b>Kemudahan Penggunaan (High Usability):</b> Antarmuka kasir dirancang minimalis dengan prinsip *one-screen workflow*, memungkinkan pemrosesan transaksi dalam hitungan detik tanpa membuka banyak jendela.</li>
        <li><b>Keandalan Finansial (Financial Reliability):</b> Rekonsiliasi otomatis antara transaksi tunai dan transaksi non-tunai (QRIS DOKU) dengan perhitungan potongan MDR (*Merchant Discount Rate*) 0.7% secara presisi.</li>
        <li><b>Keabsahan Dokumen Digital:</b> Penerapan Tanda Tangan Elektronik (TTE) berbasis QR Code terenkripsi SHA-256 pada seluruh laporan formal, memenuhi ketentuan UU ITE No. 11 Tahun 2008.</li>
    </ul>

    <h2 class="section-title">1.2 Tumpukan Teknologi (Technology Stack) Modern</h2>
    <p>
        Sistem dibangun di atas fondasi teknologi *enterprise-grade* yang terbukti stabil, aman, dan mudah dipelihara:
    </p>
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Komponen</th>
            <th style="width: 30%;">Teknologi Terpilih</th>
            <th>Peran & Keunggulan Fungsional</th>
        </tr>
        <tr>
            <td><b>Backend Framework</b></td>
            <td>Laravel 11.x (PHP 8.2+)</td>
            <td>Menyediakan arsitektur MVC tangguh, ORM Eloquent, middleware otentikasi role-based, dan enkripsi data berstandar industri.</td>
        </tr>
        <tr>
            <td><b>Frontend Styling</b></td>
            <td>Tailwind CSS 3.x</td>
            <td>Utility-first CSS framework untuk tampilan responsif, modern, dan ringan diakses baik di PC, tablet, maupun layar sentuh POS.</td>
        </tr>
        <tr>
            <td><b>Client Reactivity</b></td>
            <td>Alpine.js 3.x</td>
            <td>Micro-reactive framework untuk manajemen keranjang belanja, kalkulasi kembalian tunai, dan modal QRIS tanpa perlu reload halaman.</td>
        </tr>
        <tr>
            <td><b>PDF Generation</b></td>
            <td>DomPDF Engine</td>
            <td>Rendering laporan berstandar A4 Landscape dan Faktur A4 dengan presisi tata letak cetak dokumen hukum formal.</td>
        </tr>
        <tr>
            <td><b>Payment Gateway</b></td>
            <td>DOKU Merchant Gateway</td>
            <td>Menghasilkan QRIS Dinamis Bank Indonesia secara otomatis dan memproses konfirmasi pembayaran via webhook real-time.</td>
        </tr>
    </table>

    <h2 class="section-title">1.3 Matriks Hak Akses Pengguna (Role Permission Matrix)</h2>
    <p>
        Sistem membagi wewenang pengguna ke dalam dua peran (*role*) utama untuk memastikan integritas data dan pembagian tugas yang jelas (*segregation of duties*):
    </p>
    <table class="doc-table">
        <tr>
            <th>Modul / Fitur Sistem</th>
            <th style="text-align: center; width: 20%;">Administrator</th>
            <th style="text-align: center; width: 20%;">Petugas Kasir</th>
        </tr>
        <tr>
            <td>Akses Masuk & Logout (/login)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
        </tr>
        <tr>
            <td>Dashboard & Statistik Omset (/dashboard)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Dibatasi</td>
        </tr>
        <tr>
            <td>Katalog & Tambah Produk (/admin/products)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Dibatasi</td>
        </tr>
        <tr>
            <td>Operasional Kasir POS (/cashier/pos)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
        </tr>
        <tr>
            <td>Pusat Laporan & Analitik Keuangan (/admin/reports)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Dibatasi</td>
        </tr>
        <tr>
            <td>Pengaturan Identitas Toko & DOKU (/admin/settings)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Dibatasi</td>
        </tr>
        <tr>
            <td>Manajemen Pengguna & Alias TTE (/admin/users)</td>
            <td style="text-align: center; color: #00880F; font-weight: bold;">✔ Akses Penuh</td>
            <td style="text-align: center; color: #E53E3E; font-weight: bold;">✖ Dibatasi</td>
        </tr>
    </table>

    <div class="callout callout-success">
        <span class="callout-title">Fleksibilitas Akses Role Administrator</span>
        Akun dengan role <b>Administrator</b> memiliki wewenang universal, termasuk akses langsung ke halaman transaksi kasir POS <code>/cashier/pos</code>. Saat berada di halaman kasir, sistem menyediakan tombol navigasi khusus <b>← Dashboard Admin</b> di header kasir untuk memudahkan admin kembali ke panel kontrol.
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 2: MANAJEMEN OTENTIKASI & KEAMANAN AKUN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 02</div>
    <h1 class="chapter-title">MANAJEMEN OTENTIKASI & KEAMANAN AKUN</h1>

    <h2 class="section-title">2.1 Akses Masuk Sistem (Halaman Login)</h2>
    <p>
        Seluruh pengguna wajib melakukan otentikasi sebelum dapat mengakses antarmuka kasir maupun dashboard admin. Halaman login dapat diakses melalui rute <code>/login</code> atau rute root sistem <code>/</code>.
    </p>

    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 1</span> Buka Browser & Akses URL Sistem</div>
        <p>Buka peramban (Google Chrome / Mozilla Firefox / Microsoft Edge), lalu ketikkan alamat domain toko Anda (misal: <code>https://domain-anda.com/login</code>).</p>
    </div>

    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 2</span> Masukkan Kredensial Pengguna</div>
        <p>Isi kolom <b>Email Kasir/Admin</b> dan <b>Kata Sandi (Password)</b> terdaftar. Centang opsi <b>Ingat saya</b> jika perangkat digunakan secara pribadi.</p>
    </div>

    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 3</span> Klik Tombol Masuk ke Kasir / Dashboard</div>
        <p>Sistem akan memvalidasi kredensial. Jika akun ber-role <code>admin</code>, sistem otomatis mengarahkan ke <code>/dashboard</code>. Jika ber-role <code>cashier</code>, sistem langsung mengarahkan ke halaman kasir <code>/cashier/pos</code>.</p>
    </div>

    <h2 class="section-title">2.2 Proteksi Formulir CSRF & Enkripsi Kata Sandi</h2>
    <p>
        Setiap permintaan formulir pada sistem dilindungi oleh <i>Cross-Site Request Forgery (CSRF) Token</i> untuk mencegah manipulasi sesi oleh pihak ketiga. Kata sandi disimpan ke dalam basis data menggunakan algoritma hashing satu arah <b>Bcrypt</b> dengan faktor kerja (*work factor*) tinggi, sehingga kata sandi tidak dapat dibaca oleh siapapun termasuk oleh pengelola basis data.
    </p>

    <h2 class="section-title">2.3 Prosedur Keluar Aman (Logout) & Pembersihan Sesi</h2>
    <p>
        Ketika pergantian shift kasir atau selesai menggunakan panel admin, pengguna diwajibkan melakukan proses <b>Keluar (Logout)</b>:
    </p>
    <ul>
        <li>Pada panel admin, klik tombol merah <b>Keluar</b> yang berada di bagian bawah sidebar navigasi.</li>
        <li>Pada kasir POS, kasir dapat kembali ke dashboard (jika admin) atau logout untuk mengunci akses mesin kasir.</li>
        <li>Sistem secara otomatis menghancurkan token sesi aktif (*session flush*) dan meregenerasi CSRF token baru.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- BAB 3: PUSAT KOMANDO & DASHBOARD ADMINISTRATOR --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 03</div>
    <h1 class="chapter-title">PUSAT KOMANDO & DASHBOARD ADMINISTRATOR</h1>

    <h2 class="section-title">3.1 Antarmuka Panel Kontrol Administrator</h2>
    <p>
        Dashboard Administrator (<code>/dashboard</code>) merupakan pusat monitoring operasional dan performa bisnis secara real-time. Antarmuka ini dirancang menggunakan palet warna Gojek Hijau Modern (#00AA13) yang nyaman di mata dan memberikan kontras tinggi untuk pemantauan data finansial.
    </p>

    <h2 class="section-title">3.2 Metrik Finansial Real-Time (KPI Cards)</h2>
    <p>
        Di bagian atas dashboard, terdapat 4 kartu statistik utama yang diperbarui secara otomatis:
    </p>
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Kartu Statistik</th>
            <th style="width: 30%;">Sumber Data</th>
            <th>Fungsi & Interpretasi Bisnis</th>
        </tr>
        <tr>
            <td><b>Total Omset Hari Ini</b></td>
            <td>Penjualan sukses hari berjalan</td>
            <td>Menampilkan total nilai kotor uang masuk pada hari ini (kombinasi tunai dan QRIS).</td>
        </tr>
        <tr>
            <td><b>Total Pemasukan Bersih</b></td>
            <td>Tunai + (QRIS - Fee 0.7%)</td>
            <td>Menampilkan total uang riil yang menjadi hak toko setelah dikurangi biaya layanan transaksi QRIS DOKU.</td>
        </tr>
        <tr>
            <td><b>Transaksi Berhasil</b></td>
            <td>Jumlah transaksi status 'success'</td>
            <td>Mengukur volume transaksi pelanggan yang berhasil dilayani di kasir.</td>
        </tr>
        <tr>
            <td><b>Transaksi Tertunda (Pending)</b></td>
            <td>Transaksi QRIS belum terbayar</td>
            <td>Memantau QRIS yang sedang dibuat namun belum dipindai/dibayar oleh pelanggan.</td>
        </tr>
    </table>

    <h2 class="section-title">3.3 Grafik Tren Arus Kas & Analitik 7 Hari Terakhir</h2>
    <p>
        Grafik interaktif menampilkan pergerakan omset selama 7 hari ke belakang. Grafik ini membedakan secara visual porsi pembayaran <b>Tunai (Cash)</b> dengan warna hijau solid dan pembayaran <b>QRIS Digital</b> dengan warna biru cyan, memudahkan pengelola membaca tren preferensi cara bayar pelanggan.
    </p>

    <h2 class="section-title">3.4 Indikator Status Toko & Pintasan Kasir</h2>
    <p>
        Di bagian header dashboard, terdapat badge <b>Toko Aktif</b> dengan lampu animasi hijau berkedip (*pulsing indicator*), menandakan mesin transaksi siap menerima order kasir. Tombol pintasan hijau <b>Kasir POS</b> memungkinkan administrator langsung berpindah ke mode kasir hanya dengan satu klik.
    </p>

    {{-- ========================================================================= --}}
    {{-- BAB 4: MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 04</div>
    <h1 class="chapter-title">MANAJEMEN INVENTARIS PRODUK & PERGUDANGAN</h1>

    <h2 class="section-title">4.1 Katalog Master Produk (/admin/products)</h2>
    <p>
        Menu Manajemen Produk mengelola seluruh database barang dagangan yang dijual di kasir. Tabel produk dilengkapi fitur pencarian instan nama barang, filter kategori, status ketersediaan stok, harga beli, harga jual, dan margin profit.
    </p>

    <h2 class="section-title">4.2 Prosedur Penambahan Produk Baru</h2>
    <p>
        Untuk mendaftarkan produk baru, klik tombol <b>+ Tambah Produk</b> pada halaman produk (<code>/admin/products/create</code>). Isi form dengan lengkap:
    </p>
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Kolom Input</th>
            <th style="width: 20%;">Tipe Data</th>
            <th>Deskripsi & Aturan Pengisian</th>
        </tr>
        <tr>
            <td><b>Nama Produk</b></td>
            <td>Teks (Wajib)</td>
            <td>Nama resmi barang dagangan (contoh: <code>Beras Premium 5kg</code>).</td>
        </tr>
        <tr>
            <td><b>Kode Barcode / SKU</b></td>
            <td>Alfanumerik (Wajib)</td>
            <td>Nomor barcode kemasan atau SKU internal. Dapat discan langsung menggunakan barcode scanner ke kolom ini.</td>
        </tr>
        <tr>
            <td><b>Kategori Produk</b></td>
            <td>Pilihan / Teks</td>
            <td>Kelompok barang (contoh: <code>Sembako</code>, <code>Minuman</code>, <code>Snack</code>, <code>Alat Tulis</code>).</td>
        </tr>
        <tr>
            <td><b>Harga Modal (Beli)</b></td>
            <td>Nominal Angka</td>
            <td>Harga pokok pembelian per unit untuk perhitungan laba bersih.</td>
        </tr>
        <tr>
            <td><b>Harga Jual Kasir</b></td>
            <td>Nominal Angka (Wajib)</td>
            <td>Harga eceran resmi yang akan ditagihkan ke pelanggan di mesin kasir.</td>
        </tr>
        <tr>
            <td><b>Stok Awal</b></td>
            <td>Bilangan Bulat (Wajib)</td>
            <td>Jumlah fisik barang yang tersedia di rak/gudang saat ini.</td>
        </tr>
        <tr>
            <td><b>Foto Produk</b></td>
            <td>Gambar (PNG/JPG)</td>
            <td>Foto barang untuk mempermudah identifikasi kasir pada antarmuka layar sentuh.</td>
        </tr>
    </table>

    <h2 class="section-title">4.3 Ambang Batas Stok Menipis & Peringatan Habis</h2>
    <p>
        Sistem secara otomatis melacak pergerakan stok setiap kali transaksi kasir berhasil disimpan:
    </p>
    <ul>
        <li><b>Stok Aman (> 10 unit):</b> Ditandai dengan badge hijau <code>Tersedia</code>.</li>
        <li><b>Stok Menipis (1 - 10 unit):</b> Ditandai dengan badge kuning <code>Menipis</code>, memberi peringatan dini kepada bagian logistik/pembelian untuk melakukan pemesanan ulang (*restock*).</li>
        <li><b>Stok Habis (0 unit):</b> Ditandai dengan badge merah <code>Habis</code>. Produk yang stoknya habis otomatis diblokir dari keranjang belanja kasir untuk mencegah *overselling*.</li>
    </ul>

    <h2 class="section-title">4.4 Import Data Produk Massal via Excel/CSV</h2>
    <p>
        Untuk toko yang memiliki ratusan hingga ribuan jenis barang dagangan, sistem menyediakan fitur <b>Import Massal Excel/CSV</b> (<code>/admin/products/import</code>):
    </p>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 1</span> Unduh Template Format Excel</div>
        <p>Klik tombol <b>Unduh Contoh Template Excel</b> pada halaman import untuk mendapatkan struktur kolom yang sesuai (Nama, SKU, Kategori, Harga Beli, Harga Jual, Stok).</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 2</span> Isi Data Produk di Excel</div>
        <p>Lengkapi baris data produk Anda di Microsoft Excel atau Google Sheets, lalu simpan dalam format <code>.xlsx</code> atau <code>.csv</code>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">Langkah 3</span> Unggah & Proses Data</div>
        <p>Pilih file yang telah diisi, lalu klik tombol <b>Mulai Import Produk</b>. Sistem akan membaca dan mendaftarkan seluruh barang ke basis data dalam beberapa detik.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 5: OPERASIONAL KASIR POINT OF SALE (POS) --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 05</div>
    <h1 class="chapter-title">OPERASIONAL KASIR POINT OF SALE (POS)</h1>

    <h2 class="section-title">5.1 Antarmuka Kasir Layar Sentuh & PC (/cashier/pos)</h2>
    <p>
        Antarmuka kasir POS dirancang dengan tata letak dua kolom (<i>two-pane ergonomic layout</i>):
    </p>
    <ul>
        <li><b>Kolom Kiri (60% Lebar Layar):</b> Area katalog produk visual, kolom pencarian cepat, scanner barcode, dan tabel keranjang belanja aktif.</li>
        <li><b>Kolom Kanan (40% Lebar Layar):</b> Kartu ringkasan pembayaran total belanja (*Gojek green style*), input nama pelanggan, dan tombol pemicu proses pembayaran.</li>
    </ul>

    <h2 class="section-title">5.2 Metode Pencarian Barang & Pemindaian Barcode</h2>
    <p>
        Kasir dapat memasukkan barang ke dalam keranjang belanja melalui 3 metode:
    </p>
    <ol>
        <li><b>Pemindaian Barcode Scanner (USB / Wireless):</b> Cukup arahkan scanner ke barcode kemasan barang. Sistem otomatis mencari produk yang cocok, membunyikan nada, dan menambahkan kuantitas ke keranjang secara instan.</li>
        <li><b>Pencarian Nama Produk:</b> Ketikkan 2-3 huruf dari nama produk pada kolom input pencarian, lalu tekan <code>Enter</code> atau klik pada hasil pencarian.</li>
        <li><b>Klik Grid Produk Cepat:</b> Klik langsung pada kartu produk yang tampil di layar kasir.</li>
    </ol>

    <h2 class="section-title">5.3 Alur Pembayaran Tunai (Cash) & Hitung Kembalian</h2>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Buka Modal Pembayaran</div>
        <p>Tekan tombol hijau <b>PROSES BAYAR (B)</b> atau tekan tombol huruf <code>B</code> pada keyboard.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Pilih Metode Pembayaran TUNAI</div>
        <p>Pilih tab <b>💵 TUNAI (CASH)</b>. Masukkan nominal uang yang diserahkan oleh pembeli pada kolom <i>Uang Diterima</i>.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Perhitungan Uang Kembalian Otomatis</div>
        <p>Sistem secara otomatis menghitung dan menampilkan nominal <b>Uang Kembalian</b> dalam kotak hijau bergaris putus-putus dengan teks besar. Tombol selesaikan transaksi akan terkunci jika uang yang diterima kurang dari total tagihan.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">4</span> Simpan & Selesaikan Transaksi</div>
        <p>Klik tombol <b>SELESAIKAN TRANSAKSI</b>. Sistem memotong stok barang, mencatat transaksi ke database, memutar audio notifikasi sukses, dan membuka dialog cetak struk.</p>
    </div>

    <h2 class="section-title">5.4 Alur Pembayaran Digital Dynamic QRIS (DOKU Gateway)</h2>
    <p>
        Sistem terintegrasi penuh dengan <b>DOKU Merchant Gateway</b> untuk pembayaran non-tunai melalui QRIS Bank Indonesia (GoPay, OVO, DANA, BCA Mobile, Livin Mandiri, ShopeePay, LinkAja, dll):
    </p>
    <ol>
        <li>Pada modal pembayaran, pilih tab <b>📱 QRIS / GOPAY</b> lalu klik <b>GENERATE QRIS DINAMIS</b>.</li>
        <li>Sistem secara otomatis meminta kode QRIS unik dari API DOKU sesuai nominal transaksi yang presisi.</li>
        <li>Kode QRIS tampil di layar beserta batas waktu pembayaran (countdown). Kasir mempersilakan pembeli memindai QRIS tersebut menggunakan aplikasi perbankan / e-wallet mereka.</li>
        <li>Sistem melakukan *background polling* dan menerima *webhook notification* saat pembayaran berhasil dilakukan oleh pelanggan.</li>
        <li>Setelah dana masuk terkonfirmasi sah, layar kasir otomatis menampilkan centang hijau sukses dan memainkan suara lonceng kasir.</li>
    </ol>

    <h2 class="section-title">5.5 Pintasan Keyboard Efisiensi Kasir (Hotkeys)</h2>
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Tombol Pintasan</th>
            <th style="width: 30%;">Fungsi Aksi</th>
            <th>Keterangan Operasional</th>
        </tr>
        <tr>
            <td><span class="badge-shortcut">B</span></td>
            <td>Buka Modal Pembayaran</td>
            <td>Membuka dialog kasir jika keranjang belanja berisi minimal 1 barang.</td>
        </tr>
        <tr>
            <td><span class="badge-shortcut">ESC</span></td>
            <td>Batal / Transaksi Baru</td>
            <td>Menutup modal popup aktif, atau mereset transaksi kasir untuk melayani pembeli berikutnya.</td>
        </tr>
        <tr>
            <td><span class="badge-shortcut">Enter</span></td>
            <td>Pilih / Submit Input</td>
            <td>Memproses pemindaian barcode pada kolom pencarian produk.</td>
        </tr>
    </table>

    <h2 class="section-title">5.6 Cetak Struk Kasir & Nota Pembayaran</h2>
    <p>
        Sistem mendukung dua metode keluaran bukti transaksi:
    </p>
    <ul>
        <li><b>Cetak Struk Thermal Bluetooth (58mm / 80mm):</b> Mengirimkan data teks raw ESC/POS langsung ke printer thermal portabel kasir via Bluetooth tanpa dialog cetak browser.</li>
        <li><b>Cetak Nota PDF Resmi (<code>/receipt/{id}/print</code>):</b> Dokumen struk berformat PDF dengan logo toko monokrom (*grayscale*) latar belakang putih bersih yang tajam dan hemat tinta thermal.</li>
    </ul>

    <h2 class="section-title">5.7 Pengiriman Struk via WhatsApp & Cetak Resi Ekspedisi A6</h2>
    <p>
        Selain cetak fisik, sistem menyediakan fitur modern:
    </p>
    <ul>
        <li><b>Kirim Struk ke WhatsApp Pelanggan:</b> Kasir cukup memasukkan nomor WhatsApp pelanggan (misal: <code>08123456789</code>) lalu klik <b>Kirim WA</b>. Sistem menyusun teks ucapan terima kasih dan tautan resmi faktur digital.</li>
        <li><b>Cetak Label Pengiriman Paket A6:</b> Untuk toko yang melayani pengiriman paket jarak jauh, klik tombol <b>📦 Kirim Paket (Cetak Resi)</b>. Sistem menyediakan form nama penerima, alamat tujuan, no HP, ekspedisi (J&T, JNE, SiCepat, dll) dan menghasilkan label tempel paket ukuran A6 siap cetak.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- BAB 6: PUSAT ANALITIK & LAPORAN KEUANGAN --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 06</div>
    <h1 class="chapter-title">PUSAT ANALITIK & LAPORAN KEUANGAN LENGKAP</h1>

    <h2 class="section-title">6.1 Pusat Pelaporan Sistem (/admin/reports)</h2>
    <p>
        Modul laporan menyediakan visibilitas penuh atas seluruh perputaran uang dan barang dagangan. Laporan dibagi ke dalam 4 buku laporan spesifik:
    </p>

    <h2 class="section-title">6.2 Laporan Penjualan Transaksi (/admin/reports/sales)</h2>
    <p>
        Merekam seluruh rincian transaksi penjualan barang ke pelanggan. Dilengkapi filter dinamis:
    </p>
    <ul>
        <li><b>Filter Periode:</b> Harian (pilih tanggal spesifik), Bulanan (pilih bulan & tahun), 3 Bulan (Kuartal Q1-Q4), Tahunan, atau Semua Periode.</li>
        <li><b>Filter Kanal Bayar:</b> Semua Metode, Khusus Tunai (Cash), atau Khusus QRIS.</li>
        <li><b>Filter Status Transaksi:</b> Sukses (Lunas) atau Tertunda (Pending).</li>
        <li><b>Format Ekspor:</b> Unduh PDF Resmi A4 Landscape (dengan TTE) atau Unduh Excel (.xlsx).</li>
    </ul>

    <h2 class="section-title">6.3 Laporan Keuangan & Arus Kas (/admin/reports/finance)</h2>
    <p>
        Laporan Keuangan memisahkan secara akurat arus kas masuk berdasarkan saluran penerimaan:
    </p>
    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Komponen Finansial</th>
            <th style="width: 30%;">Rumus Kalkulasi</th>
            <th>Penjelasan & Rekonsiliasi</th>
        </tr>
        <tr>
            <td><b>Pemasukan Kas Tunai (Cash)</b></td>
            <td><code>&Sigma; Total Transaksi Tunai Sukses</code></td>
            <td>Uang fisik yang diterima langsung di laci kasir dan siap disetorkan.</td>
        </tr>
        <tr>
            <td><b>Nominal Bruto QRIS (Gross)</b></td>
            <td><code>&Sigma; Total Transaksi QRIS Sukses</code></td>
            <td>Total nilai belanja digital yang dibayar pelanggan via QRIS.</td>
        </tr>
        <tr>
            <td><b>Biaya Layanan DOKU (MDR 0.7%)</b></td>
            <td><code>Round(Nominal Bruto QRIS &times; 0.007)</code></td>
            <td>Biaya pemrosesan transaksi Payment Gateway DOKU sesuai regulasi Bank Indonesia.</td>
        </tr>
        <tr>
            <td><b>Penerimaan Netto QRIS (Net)</b></td>
            <td><code>Nominal Bruto QRIS - Biaya MDR</code></td>
            <td>Uang riil yang masuk ke rekening bank penampung toko.</td>
        </tr>
        <tr>
            <td><b>Total Pendapatan Bersih</b></td>
            <td><code>Kas Tunai + Penerimaan Netto QRIS</code></td>
            <td>Total omset bersih hak milik toko untuk periode yang dipilih.</td>
        </tr>
    </table>

    <h2 class="section-title">6.4 Laporan Monitoring & Rekonsiliasi QRIS (/admin/reports/qris)</h2>
    <p>
        Menyajikan rincian setiap transaksi digital QRIS yang diproses via gateway DOKU, mencakup waktu transaksi, nomor invoice unik, nama pelanggan, nominal kotor, potongan MDR 0.7%, penerimaan bersih, dan status pembayaran.
    </p>

    <h2 class="section-title">6.5 Laporan Inventaris & Valuasi Aset Stok (/admin/reports/stock)</h2>
    <p>
        Menghitung total nilai kekayaan aset barang dagangan yang tersimpan di toko:
    </p>
    <ul>
        <li><b>Total Jumlah Produk:</b> Menghitung banyaknya varian SKU barang yang terdaftar.</li>
        <li><b>Total Fisik Stok:</b> Akumulasi seluruh unit barang di gudang.</li>
        <li><b>Valuasi Total Aset Barang:</b> Hasil perkalian antara <code>Jumlah Stok &times; Harga Jual</code> untuk seluruh barang dagangan.</li>
    </ul>

    <h2 class="section-title">6.6 Struk Ringkasan Tutup Kasir Harian (Daily Closing Slip)</h2>
    <p>
        Di akhir shift kerja, kasir dapat mencetak <b>Struk Ringkasan Harian</b> melalui tombol <code>Cetak Struk Harian</code>. Struk ini merangkum total omset hari itu, rincian kuantitas setiap produk yang terjual, dan total kas yang wajib disetorkan ke bendahara toko.
    </p>

    {{-- ========================================================================= --}}
    {{-- BAB 7: TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 07</div>
    <h1 class="chapter-title">TANDA TANGAN ELEKTRONIK (TTE) & SERTIFIKASI DIGITAL</h1>

    <h2 class="section-title">7.1 Landasan Hukum UU ITE No. 11 Tahun 2008</h2>
    <p>
        Setiap dokumen laporan resmi (Laporan Penjualan, Laporan Keuangan, Laporan QRIS, dan Laporan Stok) yang dicetak dalam format PDF dilengkapi dengan <b>Tanda Tangan Elektronik (TTE)</b> berbasis kode QR kriptografis. Berdasarkan <i>Pasal 11 Undang-Undang Republik Indonesia Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (UU ITE)</i>, Tanda Tangan Elektronik memiliki kekuatan hukum dan akibat hukum yang sah setara dengan tanda tangan basah.
    </p>

    <h2 class="section-title">7.2 Struktur Format Penomoran Dokumen Laporan Dinamis</h2>
    <p>
        Nomor dokumen laporan dibuat secara otomatis dan dinamis dengan format:
    </p>
    <div class="callout callout-info" style="font-family: monospace; font-size: 10pt; text-align: center;">
        [KODE]-[METODE]/[TANGGAL_DATA]/[BULAN_ROMAWI]/[NAMA_APLIKASI]/[TAHUN]
    </div>
    <p>
        <b>Ketentuan Penting Penomoran Tanggal:</b>
        Tanggal, bulan Romawi, dan tahun pada nomor dokumen selalu mengambil <b>tanggal dari data laporan yang difilter</b> (bukan tanggal saat tombol cetak diklik). Contoh: Jika Anda memfilter laporan keuangan tanggal 5 Agustus 2026 dan mencetaknya pada tanggal 26 Agustus 2026, nomor dokumen yang tercetak akan tetap <code>LKEU-TUNAI/05/VIII/SIBALOG/2026</code>.
    </p>

    <h2 class="section-title">7.3 Portal Publik Verifikasi Keaslian Dokumen (/verify/document)</h2>
    <p>
        Siapapun pihak ketiga (auditor, pimpinan, mitra) yang menerima dokumen PDF laporan dapat memindai (*scan*) QR Code TTE yang tertera di sudut kanan bawah laporan menggunakan kamera ponsel:
    </p>
    <ol>
        <li>Kamera ponsel memindai QR Code dan membuka URL verifikasi resmi <code>https://domain-anda.com/verify/document?...</code>.</li>
        <li>Portal verifikasi memvalidasi tanda tangan kriptografis SHA-256 dan menampilkan layar verifikasi hijau resmi.</li>
        <li>Layar menampilkan status: <b>"DOKUMEN ASLI & TERVERIFIKASI"</b>, nomor dokumen sah, nama pejabat penandatangan, gelar jabatan resmi (*alias*), dan stempel waktu pengesahan.</li>
    </ol>

    <h2 class="section-title">7.4 Tautan Faktur Pelanggan Sementara (Expired 24 Jam)</h2>
    <p>
        Untuk melindungi privasi data transaksi pelanggan yang dikirim melalui WhatsApp, tautan unduh faktur digital <code>/invoice/{trx}/download</code> dilengkapi dengan <i>Signed URL Security</i> yang memiliki masa kedaluwarsa <b>24 Jam (1 Hari)</b>. Jika tautan diakses setelah lewat 24 jam, sistem otomatis mengarahkan ke halaman <code>/reports/invoice_expired</code> yang meminta pelanggan menghubungi admin toko untuk permintaan tautan baru.
    </p>

    {{-- ========================================================================= --}}
    {{-- BAB 8: PENGATURAN TOKO & INTEGRASI GATEWAY --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 08</div>
    <h1 class="chapter-title">PENGATURAN TOKO & INTEGRASI SISTEM</h1>

    <h2 class="section-title">8.1 Pusat Pengaturan Sistem (/admin/settings)</h2>
    <p>
        Menu Pengaturan Toko memungkinkan administrator menyesuaikan seluruh identitas bisnis dan konfigurasi teknis tanpa mengubah satu barispun kode sumber aplikasi.
    </p>

    <h2 class="section-title">8.2 Parameter Konfigurasi Identitas Bisnis</h2>
    <table class="doc-table">
        <tr>
            <th style="width: 25%;">Nama Parameter</th>
            <th style="width: 25%;">Contoh Nilai</th>
            <th>Dampak Tampilan pada Sistem</th>
        </tr>
        <tr>
            <td><b>Nama Toko / Usaha</b></td>
            <td><code>BAGIAN LOGISTIK</code></td>
            <td>Menjadi kop surat pada seluruh dokumen PDF, laporan Excel, faktur pelanggan, dan header struk kasir.</td>
        </tr>
        <tr>
            <td><b>Nama Aplikasi (Branding)</b></td>
            <td><code>SIBALOG POS</code></td>
            <td>Tampil di judul tab browser, header sistem, dan menjadi penentu 3 huruf awal prefix nomor invoice kasir (contoh: <code>SIB-20260825-XXXXX</code>).</td>
        </tr>
        <tr>
            <td><b>Alamat Usaha</b></td>
            <td><code>Jl. Argopuro No. 77</code></td>
            <td>Dicetak di bawah nama toko pada kop laporan formal dan faktur pengiriman.</td>
        </tr>
        <tr>
            <td><b>Nomor WhatsApp Toko</b></td>
            <td><code>081234567890</code></td>
            <td>Ditampilkan sebagai saluran bantuan pelanggan pada halaman faktur kadaluarsa.</td>
        </tr>
        <tr>
            <td><b>Logo Toko</b></td>
            <td>File PNG / JPG</td>
            <td>Logo resmi toko yang tampil di sidebar, login, dan dikonversi otomatis ke grayscale pada struk thermal.</td>
        </tr>
        <tr>
            <td><b>Favicon Browser</b></td>
            <td>File ICO / PNG</td>
            <td>Ikon tab peramban web browser.</td>
        </tr>
        <tr>
            <td><b>Audio Bel Kasir</b></td>
            <td>File MP3 / WAV</td>
            <td>Suara lonceng/chime kustom yang berbunyi setiap kali transaksi kasir berhasil diselesaikan.</td>
        </tr>
    </table>

    <h2 class="section-title">8.3 Konfigurasi Gateway DOKU & Telegram Bot</h2>
    <ul>
        <li><b>DOKU Client ID & Secret Key:</b> Kredensial API yang didapatkan dari dashboard DOKU Merchant untuk memproses QRIS otomatis.</li>
        <li><b>DOKU Environment:</b> Pilihan mode <code>Sandbox</code> untuk pengujian kasir atau <code>Production</code> untuk transaksi uang nyata.</li>
        <li><b>Telegram Bot Token & Chat ID:</b> Pengaturan bot Telegram untuk mengirimkan laporan notifikasi otomatis setiap kali ada uang masuk tunai maupun QRIS ke ponsel pemilik toko.</li>
    </ul>

    {{-- ========================================================================= --}}
    {{-- BAB 9: MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE) --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 09</div>
    <h1 class="chapter-title">MANAJEMEN PENGGUNA & GELAR JABATAN (ALIAS TTE)</h1>

    <h2 class="section-title">9.1 Daftar Akun Pengguna (/admin/users)</h2>
    <p>
        Administrator dapat melihat seluruh akun kasir dan admin yang terdaftar di sistem, status akun, alamat email login, role wewenang, serta gelar jabatan penandatangan resmi.
    </p>

    <h2 class="section-title">9.2 Pendaftaran Akun Baru & Penugasan Wewenang</h2>
    <p>
        Untuk mendaftarkan kasir atau admin baru (<code>/admin/users/create</code>):
    </p>
    <div class="step-box">
        <div class="step-header"><span class="step-num">1</span> Nama Lengkap & Email</div>
        <p>Isi nama lengkap personil (contoh: <code>Ahmad Subarjo</code>) dan alamat email unik yang akan digunakan untuk login.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">2</span> Pemilihan Role (Peran)</div>
        <p>Pilih role <b>Petugas Kasir</b> untuk personil meja transaksi kasir, atau <b>Administrator Toko</b> untuk staf manajerial.</p>
    </div>
    <div class="step-box">
        <div class="step-header"><span class="step-num">3</span> Pengisian Kolom "Alias / Gelar Jabatan TTD"</div>
        <p>Isi kolom <b>Alias / Gelar Jabatan TTD</b> (contoh: <code>Kasir Utama Shift Pagi</code>, <code>Kepala Gudang Logistik</code>, <code>Manager Operasional</code>). Teks jabatan ini akan dicetak tepat di atas tanda tangan digital TTE pada setiap dokumen laporan yang dicetak oleh akun tersebut.</p>
    </div>

    {{-- ========================================================================= --}}
    {{-- BAB 10: PEMELIHARAAN SERVER & TROUBLESHOOTING --}}
    {{-- ========================================================================= --}}
    <div class="page-break"></div>

    <div class="chapter-num">BAB 10</div>
    <h1 class="chapter-title">PEMELIHARAAN SERVER, AAPANEL & TROUBLESHOOTING</h1>

    <h2 class="section-title">10.1 Manajemen File Storage & Rute Streaming Anti-404 (/media-file)</h2>
    <p>
        Pada lingkungan server produksi aaPanel/Nginx, web server Nginx secara default sering mencegat file statis (.png/.jpg) sebelum menyentuh PHP. Jika symlink <code>public/storage</code> belum aktif, Nginx akan membalas dengan error <code>404 Not Found nginx</code>.
    </p>
    <p>
        Sistem mengimplementasikan solusi permanen berupa <b>Dedicated Streaming Media Route (<code>/media-file?path=...</code>)</b>. Rute ini membypass aturan regex Nginx karena tidak menggunakan ekstensi file statis pada URI utama, sehingga seluruh logo, favicon, dan foto produk dijamin 100% tampil normal tanpa bergantung pada status symlink.
    </p>

    <h2 class="section-title">10.2 Prosedur Pemeliharaan & Deploy Update Server di aaPanel</h2>
    <p>
        Setiap kali melakukan pembaruan kode dari GitHub repository di terminal server aaPanel, jalankan urutan perintah berikut:
    </p>
    <div class="callout callout-info" style="font-family: monospace; font-size: 8.5pt;">
        cd /www/wwwroot/kasir.site<br>
        git pull origin main<br>
        php artisan view:clear<br>
        php artisan route:clear<br>
        php artisan config:clear
    </div>

    <h2 class="section-title">10.3 Panduan Pemecahan Masalah Cepat (FAQ & Troubleshooting)</h2>
    <table class="doc-table">
        <tr>
            <th style="width: 30%;">Gejala Masalah</th>
            <th style="width: 30%;">Kemungkinan Penyebab</th>
            <th>Langkah Solusi Pemecahan</th>
        </tr>
        <tr>
            <td><b>Transaksi QRIS tidak otomatis lunas</b></td>
            <td>URL Webhook di DOKU belum diarahkan atau terhalang firewall.</td>
            <td>Pastikan URL Notification di DOKU Merchant Dashboard diset ke <code>https://domain-anda.com/doku/notification</code>.</td>
        </tr>
        <tr>
            <td><b>Printer Bluetooth tidak mencetak struk</b></td>
            <td>Bluetooth ponsel/PC belum terpasang (*paired*) atau printer mati.</td>
            <td>Nyalakan printer thermal, lakukan pairing bluetooth pada perangkat, lalu buka kembali halaman kasir.</td>
        </tr>
        <tr>
            <td><b>Gambar logo tidak muncul di struk PDF</b></td>
            <td>Format file PNG rusak atau ekstensi GD PHP belum aktif.</td>
            <td>Pastikan ekstensi <code>php-gd</code> aktif di server. Sistem otomatis mengonversi logo ke grayscale berlatar belakang putih.</td>
        </tr>
        <tr>
            <td><b>Perubahan nama toko belum berubah</b></td>
            <td>Cache konfigurasi Laravel masih menyimpan data lama.</td>
            <td>Jalankan perintah <code>php artisan config:clear</code> dan <code>php artisan view:clear</code> di terminal server.</td>
        </tr>
    </table>

    <h2 class="section-title">10.4 Glosarium Istilah Penting</h2>
    <ul>
        <li><b>POS (Point of Sale):</b> Sistem perangkat lunak dan keras untuk memproses transaksi penjualan kasir di titik pembayaran.</li>
        <li><b>QRIS (Quick Response Code Indonesian Standard):</b> Standar nasional pembayaran berbasis kode QR dari Bank Indonesia.</li>
        <li><b>MDR (Merchant Discount Rate):</b> Tarif biaya layanan transaksi yang dipotong oleh penyedia jasa pembayaran (sebesar 0.7% untuk QRIS).</li>
        <li><b>TTE (Tanda Tangan Elektronik):</b> Tanda tangan digital kriptografis yang memiliki kekuatan pembuktian hukum sah sesuai UU ITE.</li>
        <li><b>SKU (Stock Keeping Unit):</b> Kode unik alfanumerik untuk mengidentifikasi setiap varian barang dagangan di gudang.</li>
    </ul>

    {{-- FOOTER COPYRIGHT SEMUA HALAMAN BUKU --}}
    <div class="footer-page">
        &copy; {{ date('Y') }} I Gusti Sultan. All rights reserved. &bull; Buku Panduan Resmi Sistem Kasir & Administrasi {{ $shop['app_name'] ?? 'POS' }}
    </div>

</body>
</html>
