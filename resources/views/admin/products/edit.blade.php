@extends('layouts.admin')

@section('title', 'Edit Produk')
@section('header_title', 'Perbarui Data Produk')

@section('content')
<div class="max-w-4xl mx-auto pb-10 space-y-6" x-data="productForm()">

    {{-- HEADER BAR --}}
    <div class="flex items-center justify-between bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
        <div>
            <h3 class="text-base font-black text-gray-900 uppercase tracking-tight">Edit Data Produk: {{ $product->name }}</h3>
            <p class="text-xs text-gray-400 font-medium">Perbarui informasi harga, barcode, atau jumlah stok fisik.</p>
        </div>
        <a href="{{ route('admin.products.index') }}" 
           class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-black text-xs uppercase tracking-wider transition">
            &larr; Kembali
        </a>
    </div>

    {{-- ALERT ERROR --}}
    @if ($errors->any())
        <div class="p-5 bg-rose-50 border border-rose-200 rounded-2xl text-xs text-rose-700 font-bold space-y-1">
            <p class="font-black uppercase">Mohon perbaiki data input:</p>
            <ul class="list-disc list-inside font-medium">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM CARD GOJEK STYLE --}}
    <div class="bg-white p-8 sm:p-10 rounded-[3rem] shadow-sm border border-gray-100">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- NAMA BARANG --}}
                <div class="md:col-span-2">
                    <label for="name" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Nama Produk / Barang <span class="text-rose-500">*</span></label>
                    <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required 
                           class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-black text-gray-800 text-sm transition-all" placeholder="Contoh: Kopi Susu Aren 250ml">
                </div>

                {{-- KODE BARCODE --}}
                <div>
                    <label for="barcode" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Kode Barcode / SKU</label>
                    <div class="relative">
                        <input type="text" name="barcode" id="barcode" value="{{ old('barcode', $product->barcode) }}" 
                               class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-mono font-bold text-gray-800 text-xs transition-all uppercase" placeholder="899...">
                        <button type="button" @click="generateRandomBarcode()" class="absolute right-3 top-3 px-3 py-1.5 bg-emerald-100 text-[#00880F] rounded-xl text-[10px] font-black uppercase hover:bg-[#00AA13] hover:text-white transition">
                            Auto
                        </button>
                    </div>
                </div>

                {{-- KATEGORI --}}
                <div>
                    <label for="category_id" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Kategori Produk</label>
                    <select name="category_id" id="category_id" 
                            class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-bold text-gray-700 text-xs transition-all">
                        <option value="">Pilih Kategori...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- HARGA BELI --}}
                <div>
                    <label for="cost_price" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Harga Pokok / Modal (Rp)</label>
                    <input type="number" name="cost_price" id="cost_price" value="{{ old('cost_price', $product->cost_price) }}" min="0" 
                           class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-black text-gray-800 text-xs transition-all" placeholder="0">
                </div>

                {{-- HARGA JUAL --}}
                <div>
                    <label for="price" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Harga Jual Kasir (Rp) <span class="text-rose-500">*</span></label>
                    <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required min="0" 
                           class="w-full p-4 bg-emerald-50/50 border-2 border-emerald-200 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-black text-[#00880F] text-base transition-all" placeholder="10000">
                </div>

                {{-- STOK FISIK --}}
                <div>
                    <label for="stock" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Stok Fisik Barang <span class="text-rose-500">*</span></label>
                    <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" required min="0" 
                           class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-black text-gray-800 text-xs transition-all" placeholder="10">
                </div>

                {{-- DESKRIPSI --}}
                <div>
                    <label for="description" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5 ml-1">Keterangan / Satuan</label>
                    <input type="text" name="description" id="description" value="{{ old('description', $product->description) }}" 
                           class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-[#00AA13] focus:bg-white font-medium text-gray-700 text-xs transition-all" placeholder="Contoh: Pcs / Botol / Pack">
                </div>
            </div>

            <div class="pt-6 border-t border-gray-100 flex items-center justify-end space-x-3">
                <a href="{{ route('admin.products.index') }}" class="px-6 py-4 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-2xl font-black text-xs uppercase tracking-wider transition">
                    Batal
                </a>
                <button type="submit" class="px-8 py-4 bg-[#00AA13] hover:bg-[#00880F] active:scale-95 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25 transition">
                    Perbarui Data Produk
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function productForm() {
    return {
        generateRandomBarcode() {
            const rand = '899' + Math.floor(100000000 + Math.random() * 900000000);
            document.getElementById('barcode').value = rand;
        }
    }
}
</script>
@endsection
