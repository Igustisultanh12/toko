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

{{-- WIREFRAME MOCKUP 5.4 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; METODE INPUT BARANG MEJA KASIR
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #00AA13; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F; margin-bottom: 3px;">📡 PEMINDAIAN BARCODE LASER</div>
                        <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                            • Arahkan scanner ke barcode kemasan produk.<br>
                            • Alat otomatis mengirim data + simulasi tombol ENTER.<br>
                            • Barang langsung masuk keranjang kasir.<br>
                            • Scan berulang otomatis menambah kuantitas (+1).<br>
                            <b style="color: #00880F;">⚡ Kecepatan Respon: &lt; 0.2 detik</b>
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #2B6CB0; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #2B6CB0; margin-bottom: 3px;">⌨️ PENCARIAN TEKS / NAMA BARANG</div>
                        <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                            • Ketik minimal 2 huruf nama barang.<br>
                            • Dropdown saran produk muncul seketika.<br>
                            • Pilih dengan panah bawah keyboard + ENTER.<br>
                            • Solusi untuk produk tanpa label barcode fisik.<br>
                            <b style="color: #2B6CB0;">🔍 Pencarian Fuzzy Matching Cerdas</b>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.4: Perbandingan Alur Input Barang Melalui Barcode Scanner vs Pencarian Teks</div>
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

{{-- WIREFRAME MOCKUP 5.5 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ANATOMI TABEL KERANJANG BELANJA KASIR
    </div>
    <div class="ui-window-body">
        <table class="doc-table" style="margin: 0;">
            <tr>
                <th>NAMA PRODUK</th>
                <th>HARGA SATUAN</th>
                <th style="text-align: center;">KUANTITAS (QTY)</th>
                <th style="text-align: right;">SUBTOTAL</th>
            </tr>
            <tr>
                <td><b>Minyak Goreng Bimoli 2L</b></td>
                <td>Rp 38.000</td>
                <td style="text-align: center;">
                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">-</span>
                    <b>2</b>
                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">+</span>
                </td>
                <td style="text-align: right; font-weight: bold; color: #00880F;">Rp 76.000</td>
            </tr>
            <tr>
                <td><b>Kopi Susu Aren 250ml</b></td>
                <td>Rp 18.000</td>
                <td style="text-align: center;">
                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">-</span>
                    <b>1</b>
                    <span class="ui-btn ui-btn-light" style="padding: 1px 4px;">+</span>
                </td>
                <td style="text-align: right; font-weight: bold; color: #00880F;">Rp 18.000</td>
            </tr>
            <tr style="background-color: #F0FFF4;">
                <td colspan="3" style="font-weight: bold; color: #00661A;">TOTAL BELANJA KERANJANG</td>
                <td style="text-align: right; font-weight: 900; font-size: 8pt; color: #00AA13;">Rp 94.000</td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.5: Tata Letak Keranjang Belanja dengan Kontrol Kuantitas Interaktif</div>
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

{{-- WIREFRAME MOCKUP 5.6 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; PILIHAN TIPE IDENTITAS PEMBELI DI MEJA KASIR
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #4A5568; margin-bottom: 3px;">👤 PELANGGAN UMUM (DEFAULT)</div>
                        <div style="font-size: 6.2pt; color: #718096; line-height: 1.5;">
                            • Terisi otomatis tanpa perlu ketikan kasir.<br>
                            • Mengakomodasi antrean transaksi cepat.<br>
                            • Struk dicetak untuk pembeli umum.<br>
                            <span class="ui-badge badge-green">⚡ Mode Cepat Kasir</span>
                        </div>
                    </div>
                </td>
                <td style="width: 50%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #F0FFF4; border: 1.5px solid #68D391; border-radius: 6px; padding: 6px;">
                        <div style="font-weight: bold; font-size: 7pt; color: #00880F; margin-bottom: 3px;">👑 MEMBER / NAMA KHUSUS</div>
                        <div style="font-size: 6.2pt; color: #276749; line-height: 1.5;">
                            • Masukkan nama pelanggan (cth: Ibu Dewi).<br>
                            • Masukkan nomor WhatsApp untuk kirim e-struk.<br>
                            • Nama tertera di sertifikat verifikasi TTE.<br>
                            <span class="ui-badge badge-blue">📦 Terintegrasi Modul Resi A6</span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.6: Perbandingan Mode Pembeli Umum vs Pelanggan Khusus / Member</div>
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

{{-- WIREFRAME MOCKUP 5.7 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; MODAL DIALOG PEMBAYARAN TUNAI & KALKULASI KEMBALIAN
    </div>
    <div class="ui-window-body" style="text-align: center; padding: 10px;">
        <div style="display: inline-block; width: 320px; background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 10px; text-align: left;">
            <div style="font-size: 7.5pt; font-weight: 900; color: #1A202C; border-bottom: 1px solid #E2E8F0; padding-bottom: 4px; margin-bottom: 6px;">
                💵 FORM PEMBAYARAN TUNAI
            </div>

            <table style="width: 100%; border-collapse: collapse; font-size: 7pt; margin-bottom: 6px;">
                <tr>
                    <td style="color: #718096;">Total Tagihan:</td>
                    <td style="text-align: right; font-weight: bold; color: #1A202C;">Rp 51.000</td>
                </tr>
            </table>

            <span class="ui-label">UANG DITERIMA DARI PELANGGAN</span>
            <div class="ui-input-box" style="border: 1.5px solid #00AA13; font-size: 9pt; font-weight: bold; color: #00880F;">
                Rp 100.000
            </div>

            <!-- Quick Cash Buttons -->
            <div style="margin: 6px 0;">
                <span class="ui-btn ui-btn-light" style="font-size: 6pt;">Uang Pas</span>
                <span class="ui-btn ui-btn-light" style="font-size: 6pt;">Rp 60.000</span>
                <span class="ui-btn ui-btn-light" style="font-size: 6pt; background-color: #E6F4EA; color: #00880F; font-weight: bold;">Rp 100.000</span>
                <span class="ui-btn ui-btn-light" style="font-size: 6pt;">Rp 200.000</span>
            </div>

            <div style="background-color: #F0FFF4; border: 1px solid #A8DAB5; border-radius: 4px; padding: 6px; margin: 6px 0;">
                <div style="font-size: 6pt; color: #276749; font-weight: bold;">UANG KEMBALIAN PELANGGAN:</div>
                <div style="font-size: 12pt; font-weight: 900; color: #00AA13;">Rp 49.000</div>
            </div>

            <div style="background-color: #00AA13; color: white; text-align: center; padding: 5px; border-radius: 4px; font-weight: bold; font-size: 7.5pt;">
                ✔ SELESAIKAN & CETAK STRUK (ENTER)
            </div>
        </div>
    </div>
    <div class="ui-caption">Gambar 5.7: Antarmuka Dialog Pembayaran Tunai & Kalkulasi Uang Kembalian Instan</div>
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

{{-- WIREFRAME MOCKUP 5.8 --}}
<div class="ui-mockup">
    <div class="ui-window-bar" style="background-color: #00360D;">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; MODAL DIALOG PEMBAYARAN DYNAMIC QRIS DOKU MERCHANT
    </div>
    <div class="ui-window-body" style="text-align: center; padding: 10px;">
        <div style="display: inline-block; width: 260px; background-color: #FFFFFF; border: 1px solid #CBD5E0; border-radius: 6px; padding: 10px;">
            <div style="font-size: 7.5pt; font-weight: 900; color: #00661A;">DYNAMIC QRIS DOKU</div>
            <div style="font-size: 6pt; color: #718096; margin-bottom: 4px;">Pindai QRIS menggunakan GoPay, OVO, Dana, BCA, Mandiri</div>
            
            <div style="font-size: 12pt; font-weight: 900; color: #00AA13; margin: 4px 0;">Rp 51.000</div>

            <!-- QR Simulation Box -->
            <div style="width: 100px; height: 100px; margin: 6px auto; background-color: #F7FAFC; border: 2px solid #00AA13; border-radius: 6px; line-height: 100px; font-size: 8pt; font-family: monospace; font-weight: bold; color: #1A202C;">
                [ KODE QRIS ]
            </div>

            <div style="background-color: #FFF5F5; border: 1px solid #FEB2B2; border-radius: 4px; padding: 3px; font-size: 6pt; font-weight: bold; color: #E53E3E;">
                ⏱️ Batas Waktu Bayar: 04:52 Menit
            </div>

            <div style="font-size: 5.5pt; color: #718096; margin-top: 4px;">
                Sistem otomatis memverifikasi webhook DOKU tanpa tekan tombol
            </div>
        </div>
    </div>
    <div class="ui-caption">Gambar 5.8: Modal Pembayaran Dynamic QRIS DOKU Real-Time dengan Countdown Timer</div>
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

{{-- WIREFRAME MOCKUP 5.9 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ALUR KERJA ASISTEN SUARA BEL NOTIFIKASI KASIR
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 25%; text-align: center; vertical-align: middle;">
                    <div style="display: inline-block; width: 50px; height: 50px; background-color: #E6F4EA; border: 2px solid #00AA13; border-radius: 50%; line-height: 50px; font-size: 20pt;">
                        🔔
                    </div>
                </td>
                <td style="width: 75%; padding-left: 10px; vertical-align: top;">
                    <div style="font-weight: bold; font-size: 7.5pt; color: #00661A; margin-bottom: 3px;">
                        FITUR ASISTEN SUARA BEL KASIR (SOUND CHIME):
                    </div>
                    <div style="font-size: 6.2pt; color: #2D3748; line-height: 1.5;">
                        • Bunyi bel konfirmasi otomatis saat pembayaran tunai / QRIS tuntas.<br>
                        • Kasir tidak perlu selalu memandangi monitor saat toko ramai.<br>
                        • Mencegah kecurangan screenshot struk palsu dari pembeli.<br>
                        • Berkas audio dapat diunggah (.mp3/.wav) di Pengaturan Toko.
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.9: Alur Notifikasi Asisten Suara Bel Kasir Otomatis Saat Transaksi Berhasil</div>
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

{{-- WIREFRAME MOCKUP 5.10 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; TIGA TOMBOL PINTASAN KEYBOARD UTAMA MEJA KASIR
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #CBD5E0; border-radius: 6px; padding: 8px;">
                        <div style="display: inline-block; background-color: #1A202C; color: white; border-radius: 4px; width: 30px; height: 26px; line-height: 26px; font-weight: 900; font-size: 11pt; margin-bottom: 4px;">B</div>
                        <div style="font-size: 6.8pt; font-weight: bold; color: #00880F;">PROSES BAYAR</div>
                        <div style="font-size: 5.8pt; color: #718096;">Membuka dialog popup pembayaran kasir</div>
                    </div>
                </td>
                <td style="width: 33%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #CBD5E0; border-radius: 6px; padding: 8px;">
                        <div style="display: inline-block; background-color: #1A202C; color: white; border-radius: 4px; width: 35px; height: 26px; line-height: 26px; font-weight: 900; font-size: 9pt; margin-bottom: 4px;">ESC</div>
                        <div style="font-size: 6.8pt; font-weight: bold; color: #E53E3E;">BATAL / TUTUP</div>
                        <div style="font-size: 5.8pt; color: #718096;">Menutup modal popup atau reset keranjang</div>
                    </div>
                </td>
                <td style="width: 34%; padding: 4px; vertical-align: top;">
                    <div style="background-color: #FFFFFF; border: 1.5px solid #CBD5E0; border-radius: 6px; padding: 8px;">
                        <div style="display: inline-block; background-color: #1A202C; color: white; border-radius: 4px; width: 45px; height: 26px; line-height: 26px; font-weight: 900; font-size: 8pt; margin-bottom: 4px;">ENTER</div>
                        <div style="font-size: 6.8pt; font-weight: bold; color: #2B6CB0;">KONFIRMASI</div>
                        <div style="font-size: 5.8pt; color: #718096;">Finalisasi transaksi & cetak struk langsung</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.10: Tiga Tombol Pintasan Keyboard Utama untuk Mempercepat Transaksi Kasir</div>
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

{{-- WIREFRAME MOCKUP 5.11 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; SIMULASI CETAK STRUK THERMAL BLUETOOTH 58MM / 80MM
    </div>
    <div class="ui-window-body" style="text-align: center; padding: 10px;">
        <div class="receipt-box">
            <div style="font-weight: bold; font-size: 7.5pt; text-align: center;">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</div>
            <div style="font-size: 5.5pt; text-align: center; color: #718096;">{{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77' }}</div>
            <div style="font-size: 5.5pt; text-align: center; color: #718096;">Telp: {{ $shop['shop_phone'] ?? '081234567890' }}</div>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            
            <table style="width: 100%; border-collapse: collapse; font-size: 6pt;">
                <tr><td>No: INV-20260826-0001</td><td style="text-align: right;">TUNAI</td></tr>
                <tr><td>Kasir: Siti Rahma</td><td style="text-align: right;">{{ date('d/m/Y') }}</td></tr>
            </table>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            
            <table style="width: 100%; border-collapse: collapse; font-size: 6pt;">
                <tr>
                    <td colspan="2">Minyak Goreng Bimoli 2L</td>
                </tr>
                <tr>
                    <td>2 x 38.000</td>
                    <td style="text-align: right; font-weight: bold;">76.000</td>
                </tr>
            </table>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            
            <table style="width: 100%; border-collapse: collapse; font-size: 6.2pt;">
                <tr><td><b>TOTAL :</b></td><td style="text-align: right; font-weight: bold;">Rp 76.000</td></tr>
                <tr><td>BAYAR :</td><td style="text-align: right;">Rp 100.000</td></tr>
                <tr><td>KEMBALIAN :</td><td style="text-align: right;">Rp 24.000</td></tr>
            </table>
            <div style="text-align: center; margin: 3px 0;">--------------------------------</div>
            <div style="font-size: 5.5pt; text-align: center; color: #718096;">Terima Kasih Atas Kunjungan Anda</div>
        </div>
    </div>
    <div class="ui-caption">Gambar 5.11: Format Layout Cetak Struk Kasir Thermal Bluetooth 58mm / 80mm</div>
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

{{-- WIREFRAME MOCKUP 5.12 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMAT NOTA FAKTUR PENJUALAN PDF RESMI
    </div>
    <div class="ui-window-body">
        <div style="background-color: #FFFFFF; border: 1px solid #1A202C; border-radius: 4px; padding: 8px;">
            <table style="width: 100%; border-collapse: collapse; border-bottom: 1px solid #1A202C; padding-bottom: 4px; margin-bottom: 4px;">
                <tr>
                    <td>
                        <b style="font-size: 8pt; color: #1A202C;">{{ strtoupper($shop['shop_name'] ?? 'TOKO BERKAH') }}</b><br>
                        <span style="font-size: 5.8pt; color: #4A5568;">{{ $shop['shop_address'] ?? 'Jalan Raya Utama No. 77' }}</span>
                    </td>
                    <td style="text-align: right;">
                        <b style="font-size: 7.5pt; color: #1A202C;">FAKTUR PENJUALAN</b><br>
                        <span style="font-size: 5.8pt; color: #4A5568;">No: INV-20260826-0001</span>
                    </td>
                </tr>
            </table>

            <table class="doc-table" style="margin: 4px 0;">
                <tr>
                    <th>PRODUK</th>
                    <th>HARGA</th>
                    <th>QTY</th>
                    <th style="text-align: right;">TOTAL</th>
                </tr>
                <tr>
                    <td>Minyak Goreng Bimoli 2L</td>
                    <td>38.000</td>
                    <td>2</td>
                    <td style="text-align: right; font-weight: bold;">76.000</td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse; margin-top: 4px;">
                <tr>
                    <td style="width: 50%; vertical-align: top;">
                        <div style="border: 0.5px solid #718096; border-radius: 3px; padding: 3px; width: 140px; font-size: 5pt;">
                            <b>TERTANDA DIGITAL (TTE)</b><br>
                            Kasir: Siti Rahma<br>
                            Hash: SHA256-VALID-2026
                        </div>
                    </td>
                    <td style="width: 50%; text-align: right; vertical-align: top;">
                        <b style="font-size: 7.5pt; color: #1A202C;">TOTAL: Rp 76.000</b><br>
                        <span style="font-size: 6pt; color: #4A5568;">Status: Lunas Tunai</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ui-caption">Gambar 5.12: Tata Letak Dokumen Nota Struk PDF Monokrom Resmi dengan Tanda Tangan Digital</div>
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

{{-- WIREFRAME MOCKUP 5.13 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; ALUR PENGIRIMAN STRUK DIGITAL VIA WHATSAPP
    </div>
    <div class="ui-window-body">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 40%; padding-right: 6px; vertical-align: top;">
                    <div style="background-color: #00360D; border-radius: 6px; padding: 8px; color: white;">
                        <div style="font-size: 7pt; font-weight: bold; color: #A8DAB5;">KASIR POS</div>
                        <span class="ui-label" style="color: #E2E8F0; margin-top: 4px;">NO. WA PEMBELI:</span>
                        <div style="background: white; border-radius: 4px; padding: 2px 4px; color: #1A202C; font-size: 6.5pt; margin-top: 2px;">
                            081298765432
                        </div>
                        <div class="ui-btn ui-btn-primary" style="margin-top: 6px; width: 90%;">
                            KIRIM STRUK (WA)
                        </div>
                    </div>
                </td>
                <td style="width: 60%; vertical-align: top;">
                    <div style="background-color: #E6F4EA; border: 1px solid #68D391; border-radius: 6px; padding: 6px;">
                        <div style="background-color: #FFFFFF; border-radius: 4px; padding: 6px; font-size: 6.2pt; color: #2D3748; line-height: 1.4;">
                            <b style="color: #00661A;">💬 BUKTI TRANSAKSI ELEKTRONIK</b><br>
                            Halo Kak, Terima kasih telah berbelanja di <b>{{ $shop['shop_name'] ?? 'Toko Berkah' }}</b>.<br><br>
                            Berikut tautan e-faktur resmi Anda:<br>
                            <span style="color: #2B6CB0; font-weight: bold;">https://kasir.site/receipt/verify/INV001</span><br>
                            <span style="font-size: 5.5pt; color: #718096;">(Berlaku 24 jam bertanda tangan digital TTE)</span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="ui-caption">Gambar 5.13: Alur Pengiriman Bukti Pembayaran Digital Otomatis ke WhatsApp Pembeli</div>
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

{{-- WIREFRAME MOCKUP 5.14 --}}
<div class="ui-mockup">
    <div class="ui-window-bar">
        <span class="ui-window-dot dot-red"></span>
        <span class="ui-window-dot dot-yellow"></span>
        <span class="ui-window-dot dot-green"></span>
        &nbsp; FORMAT LABEL RESI EKSPEDISI PENGIRIMAN STANDAR A6
    </div>
    <div class="ui-window-body">
        <div style="background-color: #FFFFFF; border: 1.5px solid #1A202C; border-radius: 4px; padding: 6px;">
            <table style="width: 100%; border-collapse: collapse; background-color: #1A202C; color: white; padding: 3px 6px; margin-bottom: 4px;">
                <tr>
                    <td style="font-size: 7pt; font-weight: bold; padding: 3px;">LABEL PENGIRIMAN PAKET (A6)</td>
                    <td style="text-align: right; padding: 3px;"><span style="background-color: #EE2737; padding: 1px 6px; border-radius: 2px; font-size: 6pt; font-weight: bold;">J&T / JNE</span></td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse; font-size: 6.2pt; margin-bottom: 4px;">
                <tr>
                    <td style="width: 60%; border: 0.5px solid #CBD5E0; padding: 4px; vertical-align: top;">
                        <span class="ui-label">PENERIMA (TO):</span>
                        <b style="font-size: 7pt; color: #00661A;">Bapak Ahmad Santoso</b><br>
                        Jl. Pemuda No. 45, RT 02/05, Surabaya<br>
                        <b>Telp: 081234567890</b>
                    </td>
                    <td style="width: 40%; border: 0.5px solid #CBD5E0; padding: 4px; vertical-align: top;">
                        <span class="ui-label">PENGIRIM (FROM):</span>
                        <b>{{ $shop['shop_name'] ?? 'Toko Berkah' }}</b><br>
                        {{ $shop['shop_address'] ?? 'Jember' }}<br>
                        Telp: {{ $shop['shop_phone'] ?? '081234567890' }}
                    </td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 60%; border: 0.5px solid #CBD5E0; padding: 4px;">
                        <span style="font-size: 5.5pt; color: #718096; font-weight: bold;">NO RESI: JP8928374928</span><br>
                        <div style="font-family: monospace; font-size: 9pt; font-weight: bold; letter-spacing: 2px; text-align: center; margin-top: 2px;">
                            ||| | |||| || |||| |||
                        </div>
                    </td>
                    <td style="width: 40%; border: 0.5px solid #FEB2B2; background-color: #FFF5F5; padding: 4px; text-align: center;">
                        <b style="font-size: 6.8pt; color: #E53E3E;">⚠️ FRAGILE / PECAH BELAH</b><br>
                        <span style="font-size: 5.5pt; color: #C53030;">JANGAN DIBANTING</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="ui-caption">Gambar 5.14: Tata Letak Format Cetak Label Resi Pengiriman Paket Standar Ukuran A6</div>
</div>

{{-- ========================================================================= --}}
{{-- HALAMAN 42 s/d 78: Bab 6 hingga Bab 10 Lanjutan Lengkap --}}
{{-- ========================================================================= --}}
@include('admin.manual.pdf_chapters_final')
