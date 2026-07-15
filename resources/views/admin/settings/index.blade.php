@extends('layouts.admin')

@section('title', 'Pusat Komando SIKANDA')
@section('header_title', 'Pengaturan Sistem')

@section('content')
<div class="max-w-5xl mx-auto pb-20">
    
    {{-- NOTIFIKASI SUKSES --}}
    @if(session('success'))
        <div class="mb-8 p-5 bg-green-50 border-l-8 border-green-500 text-green-700 font-black rounded-r-3xl shadow-sm flex items-center animate-pulse">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            {{ session('success') }}
        </div>
    @endif

    {{-- NOTIFIKASI ERROR --}}
    @if($errors->any())
        <div class="mb-8 p-5 bg-red-50 border-l-8 border-red-500 text-red-700 font-bold rounded-r-3xl shadow-sm">
            <p class="uppercase text-xs font-black mb-2">Terdeteksi Pelanggaran Input:</p>
            <ul class="list-disc ml-5 text-sm">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
        @csrf
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            
            {{-- SEKSI 1: IDENTITAS TOKO --}}
            <div class="bg-white rounded-[3.5rem] shadow-xl border border-gray-100 p-10 space-y-8">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="bg-indigo-600 p-3 rounded-2xl text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-800 uppercase tracking-tighter">Identitas Toko</h3>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Nama Bisnis</label>
                        <input type="text" name="shop_name" value="{{ $settings['shop_name'] ?? '' }}" 
                               class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition-all font-bold text-gray-700" placeholder="SIKANDA POS">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Nomor WhatsApp</label>
                        <input type="text" name="shop_phone" value="{{ $settings['shop_phone'] ?? '' }}" 
                               class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition-all font-bold text-gray-700" placeholder="0812xxxx">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Alamat Lengkap</label>
                        <textarea name="shop_address" rows="3" 
                                  class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition-all font-bold text-gray-700">{{ $settings['shop_address'] ?? '' }}</textarea>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Logo Toko</label>
                        <div class="border-2 border-dashed border-gray-200 rounded-3xl p-6 text-center bg-gray-50 group hover:border-indigo-400 transition-all">
                            @if(!empty($settings['shop_logo']))
                                <div class="relative inline-block mb-4">
                                    <img src="{{ asset('storage/' . $settings['shop_logo']) }}" class="h-24 mx-auto rounded-2xl shadow-lg border-4 border-white">
                                </div>
                            @endif
                            <input type="file" name="shop_logo" class="text-xs font-bold text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-indigo-600 file:text-white file:font-black file:text-[10px] file:uppercase">
                        </div>
                    </div>
                </div>
            </div>

            {{-- SEKSI 2: GATEWAY & SUARA --}}
            <div class="space-y-10">
                
                {{-- KONFIGURASI DOKU --}}
                <div class="bg-indigo-950 rounded-[3.5rem] shadow-2xl p-10 space-y-8 text-white">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="bg-indigo-500 p-3 rounded-2xl text-white shadow-lg shadow-indigo-500/50">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="text-xl font-black uppercase tracking-tighter">Gateway QRIS</h3>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-[10px] font-black text-indigo-300 uppercase tracking-widest mb-2 ml-1">DOKU Client ID</label>
                            <input type="text" name="doku_client_id" value="{{ $settings['doku_client_id'] ?? '' }}" 
                                   class="w-full p-4 bg-indigo-900/50 border-2 border-indigo-800 rounded-2xl outline-none focus:border-indigo-400 transition-all font-mono text-sm text-indigo-100" placeholder="CLID-XXXXX">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-indigo-300 uppercase tracking-widest mb-2 ml-1">Environment</label>
                            <select name="doku_base_url" class="w-full p-4 bg-indigo-900/50 border-2 border-indigo-800 rounded-2xl outline-none focus:border-indigo-400 transition-all font-black text-sm text-indigo-100 appearance-none">
                                <option value="https://api-sandbox.doku.com" {{ ($settings['doku_base_url'] ?? '') == 'https://api-sandbox.doku.com' ? 'selected' : '' }}>SANDBOX (Uji Coba)</option>
                                <option value="https://api.doku.com" {{ ($settings['doku_base_url'] ?? '') == 'https://api.doku.com' ? 'selected' : '' }}>PRODUCTION (Asli)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-indigo-300 uppercase tracking-widest mb-2 ml-1">Footer Struk</label>
                            <input type="text" name="receipt_footer" value="{{ $settings['receipt_footer'] ?? '' }}" 
                                   class="w-full p-4 bg-indigo-900/50 border-2 border-indigo-800 rounded-2xl outline-none focus:border-indigo-400 transition-all font-bold text-indigo-100" placeholder="Terima Kasih!">
                        </div>
                    </div>
                </div>

                {{-- SEKSI 3: FITUR NOTIFIKASI SUARA --}}
                <div class="bg-white rounded-[3.5rem] shadow-xl border border-gray-100 p-10 space-y-8">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <div class="bg-green-500 p-3 rounded-2xl text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h3 class="text-xl font-black text-gray-800 uppercase tracking-tighter">Notifikasi Suara</h3>
                        </div>
                        {{-- TOGGLE ON/OFF --}}
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_voice_enabled" value="1" class="sr-only peer" {{ ($settings['is_voice_enabled'] ?? '0') == '1' ? 'checked' : '' }}>
                            <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-indigo-600"></div>
                        </label>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Upload Suara Kustom (MP3)</label>
                            <div class="p-6 bg-green-50 rounded-3xl border-2 border-dashed border-green-200 text-center">
                                @if(!empty($settings['payment_success_sound']))
                                    <div class="mb-4">
                                        <p class="text-[10px] font-bold text-green-600 uppercase mb-2">Suara Saat Ini:</p>
                                        <audio controls class="mx-auto h-10 mb-2">
                                            <source src="{{ asset('storage/' . $settings['payment_success_sound']) }}" type="audio/mpeg">
                                            Browser Anda tidak mendukung elemen audio.
                                        </audio>
                                    </div>
                                @endif
                                <input type="file" name="payment_success_sound" accept="audio/mpeg,audio/wav" 
                                       class="text-xs font-bold text-green-700 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-green-600 file:text-white file:font-black file:text-[10px] file:uppercase">
                                <p class="text-[9px] text-green-600 mt-2 font-bold uppercase italic">Format: .MP3 atau .WAV (Maks 2MB)</p>
                            </div>
                        </div>
                        
                        <div class="p-4 bg-gray-50 rounded-2xl border border-gray-100">
                            <p class="text-[10px] text-gray-500 leading-relaxed italic">
                                <strong>Info:</strong> Fitur ini akan menggantikan suara robot (TTS) dengan file audio asli. Ini jauh lebih stabil untuk penggunaan di perangkat Android/APK.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-center pt-10">
            <button type="submit" class="w-full md:w-2/3 bg-indigo-600 text-white py-6 rounded-[2.5rem] font-black shadow-2xl shadow-indigo-300 hover:bg-indigo-700 active:scale-[0.97] transition-all uppercase tracking-[0.2em] text-sm">
                SIMPAN PUSAT KOMANDO SIKANDA
            </button>
        </div>
    </form>
</div>
@endsection