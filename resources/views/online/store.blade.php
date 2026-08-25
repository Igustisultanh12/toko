@extends('online.layout')

@section('title', 'Katalog Belanja Online')

@section('content')
<div x-data="onlineStore()" class="max-w-6xl mx-auto px-4 sm:px-6 py-8 space-y-8">

    {{-- HERO BANNER --}}
    <div class="bg-gradient-to-r from-[#00360D] via-[#004D13] to-[#00661A] rounded-[2.5rem] p-6 sm:p-10 text-white shadow-xl relative overflow-hidden">
        <div class="relative z-10 max-w-2xl space-y-3">
            <span class="px-3.5 py-1.5 bg-white/10 backdrop-blur-md rounded-full text-[10px] font-black uppercase tracking-wider text-emerald-200 border border-white/10 inline-block">
                ⚡ Belanja Mudah & Cepat Tanpa Login
            </span>
            <h2 class="text-2xl sm:text-4xl font-black uppercase tracking-tight leading-tight">
                {{ $shop['shop_name'] ?? 'Selamat Datang di Toko Kami' }}
            </h2>
            <p class="text-xs sm:text-sm text-emerald-100/90 font-medium leading-relaxed">
                Pilih barang kebutuhan Anda, bayar instan dengan QRIS (GoPay, OVO, Dana, ShopeePay, BCA), dan lacak pengiriman pesanan Anda secara realtime hingga sampai di rumah.
            </p>
        </div>
        <div class="absolute right-0 bottom-0 opacity-10 pointer-events-none transform translate-x-10 translate-y-10">
            <svg class="w-80 h-80 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
        </div>
    </div>

    {{-- SEARCH BAR & FILTER --}}
    <div class="bg-white p-4 sm:p-6 rounded-[2rem] border border-gray-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-4">
        <form method="GET" action="{{ route('order.index') }}" class="w-full sm:w-96 relative">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama barang atau barcode..."
                   class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-2xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13] focus:bg-white transition">
            <div class="absolute left-4 top-3.5 text-gray-400">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2.5"/></svg>
            </div>
        </form>

        {{-- BUTTON FLOATING CART TRIGGER --}}
        <button @click="isCartOpen = true" 
                class="w-full sm:w-auto px-6 py-3.5 bg-[#00AA13] hover:bg-[#00880F] active:scale-95 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25 transition flex items-center justify-center space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2.5"/></svg>
            <span>Keranjang Belanja</span>
            <span class="bg-white text-[#00880F] px-2 py-0.5 rounded-full text-[10px] font-black" x-text="totalItems"></span>
        </button>
    </div>

    {{-- GRID KATALOG PRODUK --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
        @forelse($products as $product)
            @php
                $finalPrice = $product->price;
                if (!empty($product->discount_percent) && $product->discount_percent > 0) {
                    $finalPrice = $product->price - ($product->price * ($product->discount_percent / 100));
                }
            @endphp
            <div class="bg-white rounded-[2rem] border border-gray-100 p-4 sm:p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                <div class="space-y-2.5">
                    {{-- FOTO PRODUK --}}
                    <div class="relative w-full h-36 bg-gray-50 rounded-2xl overflow-hidden mb-3 flex items-center justify-center border border-gray-100 group-hover:border-emerald-200 transition">
                        @if($product->image_url)
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        @else
                            <div class="text-4xl text-gray-300">🛍️</div>
                        @endif

                        @if(!empty($product->discount_percent) && $product->discount_percent > 0)
                            <span class="absolute top-2 right-2 text-[9px] font-black uppercase px-2 py-0.5 rounded-full bg-rose-500 text-white shadow-md">
                                -{{ $product->discount_percent }}%
                            </span>
                        @endif

                        <span class="absolute bottom-2 left-2 text-[9px] font-black uppercase px-2 py-0.5 rounded-md bg-black/60 backdrop-blur-sm text-white">
                            Stok: {{ $product->stock }}
                        </span>
                    </div>

                    {{-- NAMA PRODUK --}}
                    <div>
                        <h3 class="font-black text-gray-900 text-xs sm:text-sm uppercase tracking-tight line-clamp-2 group-hover:text-[#00AA13] transition">
                            {{ $product->name }}
                        </h3>
                        @if($product->barcode)
                            <p class="font-mono text-[9px] text-gray-400 font-bold mt-0.5">{{ $product->barcode }}</p>
                        @endif
                    </div>
                </div>

                {{-- HARGA & TOMBOL TAMBAH --}}
                <div class="mt-4 pt-3 border-t border-gray-50 space-y-2">
                    <div>
                        @if(!empty($product->discount_percent) && $product->discount_percent > 0)
                            <span class="text-[10px] text-gray-400 line-through font-bold block">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                        @endif
                        <span class="text-sm sm:text-base font-black text-[#00880F]">
                            Rp {{ number_format($finalPrice, 0, ',', '.') }}
                        </span>
                    </div>

                    <button @click="addToCart({{ json_encode([
                        'id'               => $product->id,
                        'name'             => $product->name,
                        'price'            => $finalPrice,
                        'original_price'   => $product->price,
                        'discount_percent' => $product->discount_percent ?? 0,
                        'max_stock'        => $product->stock,
                        'image_url'        => $product->image_url,
                    ]) }})"
                            class="w-full py-2.5 bg-emerald-50 hover:bg-[#00AA13] text-[#00880F] hover:text-white rounded-xl font-black text-xs uppercase tracking-wider transition-all flex items-center justify-center space-x-1">
                        <span>+ Keranjang</span>
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-full py-16 text-center text-gray-400 font-bold uppercase text-xs italic bg-white rounded-[2rem] border border-gray-100">
                Tidak ada produk yang cocok dengan pencarian.
            </div>
        @endforelse
    </div>

    {{-- PAGINATION --}}
    @if($products->hasPages())
        <div class="p-6 bg-white rounded-[2rem] border border-gray-100">
            {{ $products->links() }}
        </div>
    @endif

    {{-- FLOATING CART & CHECKOUT DRAWER (MODAL) --}}
    <div x-show="isCartOpen" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex justify-end" x-cloak x-transition>
        {{-- Backdrop klik luar --}}
        <div class="fixed inset-0" @click="isCartOpen = false"></div>

        <div class="relative bg-white w-full max-w-md h-full shadow-2xl flex flex-col z-10">
            
            {{-- DRAWER HEADER (STICKY) --}}
            <div class="flex justify-between items-center p-5 sm:p-6 border-b border-gray-100 bg-white shrink-0">
                <div class="flex items-center space-x-2">
                    <span class="text-xl">🛒</span>
                    <div>
                        <h3 class="font-black text-gray-900 uppercase text-sm leading-none">Keranjang Belanja</h3>
                        <p class="text-[10px] text-gray-400 font-bold mt-0.5" x-text="totalItems + ' Produk Dipilih'"></p>
                    </div>
                </div>
                <button type="button" @click="isCartOpen = false" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-700 rounded-full hover:bg-gray-100 text-sm font-black transition">
                    ✕
                </button>
            </div>

            {{-- SCROLLABLE CONTENT BODY --}}
            <div class="flex-1 overflow-y-auto p-5 sm:p-6 space-y-6">
                
                {{-- DAFTAR ITEM DI KERANJANG --}}
                <div class="space-y-3">
                    <template x-for="(item, index) in cart" :key="item.id">
                        <div class="bg-gray-50 p-3.5 rounded-2xl border border-gray-100 flex justify-between items-center">
                            <div class="flex items-center space-x-2.5 flex-1 pr-2">
                                <template x-if="item.image_url">
                                    <img :src="item.image_url" class="w-10 h-10 rounded-xl object-cover border border-gray-200 shrink-0">
                                </template>
                                <div>
                                    <h4 class="font-black text-gray-800 text-xs leading-tight" x-text="item.name"></h4>
                                    <span class="text-[11px] font-bold text-[#00880F]" x-text="formatRupiah(item.price)"></span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button @click="decreaseQty(index)" class="w-6 h-6 bg-white border border-gray-200 rounded-lg font-bold text-xs hover:bg-gray-100">-</button>
                                <span class="font-black text-xs text-gray-800 w-4 text-center" x-text="item.quantity"></span>
                                <button @click="increaseQty(index)" class="w-6 h-6 bg-white border border-gray-200 rounded-lg font-bold text-xs hover:bg-gray-100">+</button>
                                <button @click="removeItem(index)" class="text-rose-500 hover:text-rose-700 p-1 text-xs font-bold">🗑️</button>
                            </div>
                        </div>
                    </template>

                    <div x-show="cart.length === 0" class="text-center py-12 text-gray-400 font-bold text-xs italic">
                        Keranjang masih kosong. Pilih produk di katalog.
                    </div>
                </div>

                {{-- FORM CHECKOUT PENGIRIMAN --}}
                <div x-show="cart.length > 0" class="pt-4 border-t border-gray-100 space-y-4">
                    <form id="checkoutForm" method="POST" action="{{ route('order.checkout') }}" @submit="prepareCheckout($event)">
                        @csrf
                        
                        {{-- Hidden items input --}}
                        <template x-for="(item, idx) in cart" :key="idx">
                            <div>
                                <input type="hidden" :name="'items[' + idx + '][id]'" :value="item.id">
                                <input type="hidden" :name="'items[' + idx + '][quantity]'" :value="item.quantity">
                            </div>
                        </template>

                        <div class="space-y-3">
                            <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Informasi Pengiriman Pembeli</h4>
                            
                            <div>
                                <label class="block text-[10px] font-bold text-gray-600 mb-1">Nama Lengkap Penerima <span class="text-rose-500">*</span></label>
                                <input type="text" name="customer_name" required placeholder="Contoh: Ibu Rina Hartati"
                                       class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13]">
                            </div>

                            <div>
                                <label class="block text-[10px] font-bold text-gray-600 mb-1">No. WhatsApp / HP <span class="text-rose-500">*</span></label>
                                <input type="tel" name="customer_phone" required placeholder="08xxxxxxxxxx"
                                       class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13]">
                            </div>

                            <div>
                                <label class="block text-[10px] font-bold text-gray-600 mb-1">Alamat Lengkap Pengiriman <span class="text-rose-500">*</span></label>
                                <textarea name="customer_address" required rows="2" placeholder="Jl. Raya No..., RT/RW, Kelurahan, Kecamatan, Kota"
                                          class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13]"></textarea>
                            </div>

                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-600 mb-1">Pilihan Ekspedisi <span class="text-rose-500">*</span></label>
                                    <select name="courier" required class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13]">
                                        <option value="J&T Express">J&T Express</option>
                                        <option value="JNE Reguler">JNE Reguler</option>
                                        <option value="SiCepat Express">SiCepat Express</option>
                                        <option value="Kurir Toko / Ambil Sendiri">Kurir Toko / Ambil di Toko</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-bold text-gray-600 mb-1">Catatan (Opsional)</label>
                                    <input type="text" name="customer_notes" placeholder="Titip di pos security..."
                                           class="w-full px-3.5 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13]">
                                </div>
                            </div>
                        </div>

                        {{-- WIDGET CLOUDFLARE TURNSTILE (JIKA AKTIF DI SETTING ADMIN) --}}
                        @if(\App\Services\TurnstileService::isEnabled())
                            <div class="pt-3 flex justify-center">
                                <div class="cf-turnstile" data-sitekey="{{ \App\Services\TurnstileService::getSiteKey() }}" data-theme="light"></div>
                            </div>
                        @endif

                    </form>
                </div>

            </div>

            {{-- DRAWER FOOTER (STICKY BOTTOM - ALWAYS VISIBLE) --}}
            <div x-show="cart.length > 0" class="p-5 sm:p-6 border-t border-gray-100 bg-white shrink-0 shadow-lg space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-gray-500 uppercase">Total Pembayaran:</span>
                    <span class="text-lg font-black text-[#00AA13]" x-text="formatRupiah(totalPrice)"></span>
                </div>

                <button type="submit" form="checkoutForm"
                        class="w-full py-4 bg-[#00AA13] hover:bg-[#00880F] active:scale-95 text-white font-black text-xs uppercase tracking-widest rounded-2xl shadow-xl shadow-emerald-500/25 transition flex items-center justify-center space-x-2">
                    <span>💳 Buat Pesanan & Bayar QRIS</span>
                </button>
            </div>

        </div>
    </div>

</div>

<script>
function onlineStore() {
    return {
        cart: [],
        isCartOpen: false,

        get totalItems() {
            return this.cart.reduce((sum, item) => sum + item.quantity, 0);
        },

        get totalPrice() {
            return this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },

        addToCart(product) {
            const existing = this.cart.find(item => item.id === product.id);
            if (existing) {
                if (existing.quantity >= product.max_stock) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Stok Terbatas',
                        text: `Maksimal kuantitas produk ini adalah ${product.max_stock} pcs.`,
                        confirmButtonColor: '#00AA13'
                    });
                    return;
                }
                existing.quantity++;
            } else {
                this.cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    max_stock: product.max_stock,
                    quantity: 1
                });
            }

            Swal.fire({
                icon: 'success',
                title: 'Masuk Keranjang',
                text: `${product.name} berhasil ditambahkan!`,
                toast: true,
                position: 'top-end',
                timer: 1800,
                showConfirmButton: false
            });
        },

        increaseQty(idx) {
            if (this.cart[idx].quantity < this.cart[idx].max_stock) {
                this.cart[idx].quantity++;
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Stok Terbatas',
                    text: `Maksimal kuantitas adalah ${this.cart[idx].max_stock} pcs.`,
                    confirmButtonColor: '#00AA13'
                });
            }
        },

        decreaseQty(idx) {
            if (this.cart[idx].quantity > 1) {
                this.cart[idx].quantity--;
            } else {
                this.removeItem(idx);
            }
        },

        removeItem(idx) {
            this.cart.splice(idx, 1);
        },

        formatRupiah(val) {
            return 'Rp ' + new Intl.NumberFormat('id-ID').format(val || 0);
        },

        prepareCheckout(event) {
            if (this.cart.length === 0) {
                event.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Keranjang Kosong',
                    text: 'Pilih minimal satu barang untuk checkout.',
                    confirmButtonColor: '#00AA13'
                });
            }
        }
    }
}
</script>
@endsection
