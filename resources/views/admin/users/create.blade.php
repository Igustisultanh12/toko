@extends('layouts.admin')

@section('title', 'Tambah Akun Pengguna')
@section('header_title', 'Tambah Akun Pengguna Baru')

@section('content')
<div class="max-w-3xl mx-auto space-y-6 pb-20">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.users.index') }}" class="inline-flex items-center text-xs font-bold text-gray-500 hover:text-indigo-600 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-width="2"/></svg>
            Kembali ke Daftar Akun
        </a>
    </div>

    <div class="bg-white p-8 sm:p-10 rounded-[2.5rem] border border-gray-100 shadow-sm">
        <div class="mb-8">
            <h3 class="text-xl font-black text-gray-900 uppercase tracking-tight">Form Akun Baru</h3>
            <p class="text-xs text-gray-400 font-medium mt-1">Daftarkan akun kasir atau administrator baru untuk mengakses sistem SIKANDA POS.</p>
        </div>

        <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- NAMA PENGGUNA --}}
            <div>
                <label class="block text-xs font-black text-gray-700 uppercase tracking-wider mb-2">Nama Lengkap Petugas / Pengguna <span class="text-rose-500">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Kasir Shift Pagi / Siti Aminah" required
                       class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3.5 text-xs font-bold text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all @error('name') border-rose-500 @enderror">
                @error('name')
                    <p class="text-rose-500 text-[11px] font-bold mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- EMAIL LOGIN --}}
            <div>
                <label class="block text-xs font-black text-gray-700 uppercase tracking-wider mb-2">Alamat Email (Untuk Login) <span class="text-rose-500">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="kasir2@ananda.site" required
                       class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3.5 text-xs font-bold text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all @error('email') border-rose-500 @enderror">
                @error('email')
                    <p class="text-rose-500 text-[11px] font-bold mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- PERAN / ROLE --}}
            <div>
                <label class="block text-xs font-black text-gray-700 uppercase tracking-wider mb-2">Peran Akun (Role Hak Akses) <span class="text-rose-500">*</span></label>
                <select name="role" required
                        class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3.5 text-xs font-bold text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all @error('role') border-rose-500 @enderror">
                    <option value="cashier" {{ old('role') === 'cashier' ? 'selected' : '' }}>🛒 Kasir (POS) - Hanya Transaksi Kasir</option>
                    <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>👑 Administrator - Akses Penuh Laporan, Produk, & Pengaturan</option>
                </select>
                @error('role')
                    <p class="text-rose-500 text-[11px] font-bold mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- PASSWORD --}}
            <div>
                <label class="block text-xs font-black text-gray-700 uppercase tracking-wider mb-2">Kata Sandi / Password (Min. 6 Karakter) <span class="text-rose-500">*</span></label>
                <input type="password" name="password" placeholder="••••••••" required
                       class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3.5 text-xs font-bold text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all @error('password') border-rose-500 @enderror">
                @error('password')
                    <p class="text-rose-500 text-[11px] font-bold mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- TOMBOL SUBMIT --}}
            <div class="flex items-center justify-end gap-3 pt-6 border-t border-gray-100">
                <a href="{{ route('admin.users.index') }}" class="px-6 py-3.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold text-xs rounded-2xl transition">
                    Batal
                </a>
                <button type="submit" class="px-8 py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-black text-xs uppercase tracking-wider rounded-2xl shadow-lg shadow-indigo-100 transition flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-width="2.5"/></svg>
                    Simpan Akun Baru
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
