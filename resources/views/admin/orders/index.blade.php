@extends('layouts.admin')

@section('title', 'Manajemen Pesanan Online')
@section('header_title', 'Pesanan Online & Pengiriman')

@section('content')
<div x-data="adminOrderManager()" class="max-w-7xl mx-auto space-y-6 pb-20">

    {{-- HEADER BAR --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
        <div>
            <h3 class="text-lg font-black text-gray-900 uppercase tracking-tight">Manajemen Pesanan Online</h3>
            <p class="text-xs text-gray-400 font-medium">Konfirmasi pesanan masuk, input nomor resi, dan cetak label pengiriman paket.</p>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('order.index') }}" target="_blank"
               class="px-4 py-3 bg-emerald-50 text-[#00880F] hover:bg-emerald-100 rounded-2xl font-black text-xs uppercase tracking-wider transition border border-emerald-200/60 flex items-center space-x-1.5">
                <span>🌐 Buka Toko Online</span>
            </a>
            <a href="{{ route('order.track.index') }}" target="_blank"
               class="px-4 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-2xl font-black text-xs uppercase tracking-wider transition">
                📦 Portal Lacak
            </a>
        </div>
    </div>

    {{-- STATS CARDS TABS --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
        <a href="{{ route('admin.orders.index', ['status' => 'all']) }}" 
           class="p-5 rounded-[2rem] border transition-all text-center {{ $status === 'all' ? 'bg-gradient-to-r from-[#004D13] to-[#00880F] text-white shadow-lg' : 'bg-white text-gray-700 border-gray-100 hover:border-emerald-200' }}">
            <span class="text-[10px] font-black uppercase tracking-widest block opacity-80">Semua Pesanan</span>
            <h4 class="text-2xl font-black mt-1">{{ $counts['all'] }}</h4>
        </a>

        <a href="{{ route('admin.orders.index', ['status' => 'unconfirmed']) }}" 
           class="p-5 rounded-[2rem] border transition-all text-center {{ $status === 'unconfirmed' ? 'bg-blue-600 text-white shadow-lg' : 'bg-white text-blue-600 border-blue-100 hover:bg-blue-50/50' }}">
            <span class="text-[10px] font-black uppercase tracking-widest block opacity-80">Perlu Konfirmasi (Paid)</span>
            <h4 class="text-2xl font-black mt-1">{{ $counts['unconfirmed'] }}</h4>
        </a>

        <a href="{{ route('admin.orders.index', ['status' => 'processing']) }}" 
           class="p-5 rounded-[2rem] border transition-all text-center {{ $status === 'processing' ? 'bg-indigo-600 text-white shadow-lg' : 'bg-white text-indigo-600 border-indigo-100 hover:bg-indigo-50/50' }}">
            <span class="text-[10px] font-black uppercase tracking-widest block opacity-80">Sedang Disiapkan</span>
            <h4 class="text-2xl font-black mt-1">{{ $counts['processing'] }}</h4>
        </a>

        <a href="{{ route('admin.orders.index', ['status' => 'shipped']) }}" 
           class="p-5 rounded-[2rem] border transition-all text-center {{ $status === 'shipped' ? 'bg-emerald-600 text-white shadow-lg' : 'bg-white text-emerald-600 border-emerald-100 hover:bg-emerald-50/50' }}">
            <span class="text-[10px] font-black uppercase tracking-widest block opacity-80">Sedang Dikirim</span>
            <h4 class="text-2xl font-black mt-1">{{ $counts['shipped'] }}</h4>
        </a>

        <a href="{{ route('admin.orders.index', ['status' => 'completed']) }}" 
           class="p-5 rounded-[2rem] border transition-all text-center {{ $status === 'completed' ? 'bg-gray-800 text-white shadow-lg' : 'bg-white text-gray-700 border-gray-100 hover:bg-gray-50' }}">
            <span class="text-[10px] font-black uppercase tracking-widest block opacity-80">Selesai / Diterima</span>
            <h4 class="text-2xl font-black mt-1">{{ $counts['completed'] }}</h4>
        </a>
    </div>

    {{-- TABEL PESANAN ONLINE --}}
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        
        {{-- SEARCH FORM --}}
        <div class="p-6 border-b border-gray-100 bg-gray-50/50">
            <form method="GET" action="{{ route('admin.orders.index') }}" class="relative">
                <input type="hidden" name="status" value="{{ $status }}">
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nomor pesanan, nama pembeli, nomor HP, atau nomor resi..." 
                       class="w-full pl-12 pr-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-bold text-gray-800 outline-none focus:border-[#00AA13]">
                <div class="absolute left-4 top-3.5 text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2.5"/></svg>
                </div>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-gray-50/80 text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-100">
                        <th class="p-5">Pesanan & Waktu</th>
                        <th class="p-5">Pembeli & Alamat</th>
                        <th class="p-5">Barang Belanjaan</th>
                        <th class="p-5 text-right">Total Bayar</th>
                        <th class="p-5 text-center">Status & Resi</th>
                        <th class="p-5 text-center">Aksi Operasional</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($orders as $order)
                        <tr class="hover:bg-emerald-50/20 transition">
                            
                            {{-- PESANAN --}}
                            <td class="p-5">
                                <span class="font-mono font-black text-indigo-700 text-xs">{{ $order->order_number }}</span>
                                <p class="text-[10px] text-gray-400 font-bold mt-0.5">{{ $order->created_at->format('d/m/Y H:i') }} WIB</p>
                                <span class="text-[9px] font-bold text-gray-500 uppercase block mt-1">Metode: {{ strtoupper($order->payment_method) }}</span>
                            </td>

                            {{-- PEMBELI --}}
                            <td class="p-5 max-w-xs">
                                <p class="font-black text-gray-900 text-xs uppercase">{{ $order->customer_name }}</p>
                                <p class="text-[11px] text-gray-500 font-bold font-mono">{{ $order->customer_phone }}</p>
                                <p class="text-[10px] text-gray-400 font-medium line-clamp-2 mt-1 leading-tight">{{ $order->customer_address }}</p>
                                @if($order->customer_notes)
                                    <span class="inline-block mt-1 text-[9px] text-amber-700 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">
                                        Catatan: {{ $order->customer_notes }}
                                    </span>
                                @endif
                            </td>

                            {{-- BARANG --}}
                            <td class="p-5 min-w-[200px]">
                                <ul class="space-y-1">
                                    @foreach($order->items as $item)
                                        <li class="text-[11px] flex justify-between">
                                            <span class="font-bold text-gray-700">{{ $item->product_name }}</span>
                                            <span class="text-gray-400 font-medium ml-2">{{ $item->quantity }}x</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>

                            {{-- TOTAL --}}
                            <td class="p-5 text-right font-black text-[#00880F] text-sm whitespace-nowrap">
                                {{ $order->formatted_total }}
                            </td>

                            {{-- STATUS & RESI --}}
                            <td class="p-5 text-center space-y-1.5">
                                <div>{!! $order->status_badge !!}</div>
                                
                                @if($order->tracking_number)
                                    <div class="p-1.5 bg-emerald-50 border border-emerald-200 rounded-xl text-[10px] font-mono font-bold text-[#00661A]">
                                        Resi: <b>{{ $order->tracking_number }}</b><br>
                                        <span class="text-[9px] text-gray-500">({{ $order->courier }})</span>
                                    </div>
                                @endif
                            </td>

                            {{-- AKSI --}}
                            <td class="p-5 text-center whitespace-nowrap">
                                <div class="flex flex-col gap-1.5 items-center justify-center">
                                    
                                    {{-- AKSI 1: KONFIRMASI PESANAN (paid -> processing) --}}
                                    @if($order->status === 'paid')
                                        <form method="POST" action="{{ route('admin.orders.confirm', $order->id) }}">
                                            @csrf
                                            <button type="submit" 
                                                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl text-[11px] font-black uppercase tracking-wider shadow-sm transition">
                                                ✔ Konfirmasi & Siapkan
                                            </button>
                                        </form>
                                    @endif

                                    {{-- AKSI 2: INPUT RESI & KIRIM (processing -> shipped) --}}
                                    @if($order->status === 'processing')
                                        <button type="button" @click="openShipModal({{ json_encode($order) }})"
                                                class="px-4 py-2 bg-[#00AA13] hover:bg-[#00880F] text-white rounded-xl text-[11px] font-black uppercase tracking-wider shadow-sm transition">
                                            🚚 Input Resi & Kirim
                                        </button>
                                    @endif

                                    {{-- AKSI 3: SELESAIKAN (shipped -> completed) --}}
                                    @if($order->status === 'shipped')
                                        <form method="POST" action="{{ route('admin.orders.complete', $order->id) }}">
                                            @csrf
                                            <button type="submit" 
                                                    class="px-3.5 py-1.5 bg-green-700 hover:bg-green-800 text-white rounded-xl text-[10px] font-black uppercase tracking-wider transition">
                                                ✔ Tandai Selesai
                                            </button>
                                        </form>
                                    @endif

                                    <div class="flex items-center gap-1 mt-1">
                                        {{-- CETAK LABEL RESI A6 --}}
                                        <a href="{{ route('admin.orders.shipping-label', $order->id) }}" target="_blank"
                                           class="p-2 bg-amber-50 text-amber-600 hover:bg-amber-100 rounded-xl text-[10px] font-black uppercase transition" title="Cetak Label Resi A6">
                                            🏷️ Label A6
                                        </a>

                                        {{-- CHAT WA PEMBELI --}}
                                        <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $order->customer_phone) }}&text={{ urlencode('Halo ' . $order->customer_name . ', terima kasih telah berbelanja di ' . ($shop['shop_name'] ?? 'Toko') . '. Pesanan Anda ' . $order->order_number . ' saat ini ' . $order->status_label . '. Lacak pesanan: ' . route('order.track', $order->order_number)) }}" 
                                           target="_blank"
                                           class="p-2 bg-emerald-50 text-[#00880F] hover:bg-emerald-100 rounded-xl text-[10px] font-black uppercase transition" title="Kirim WA ke Pembeli">
                                            💬 WA
                                        </a>

                                        {{-- LINK LACAK --}}
                                        <a href="{{ route('order.track', $order->order_number) }}" target="_blank"
                                           class="p-2 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-xl text-[10px] font-black uppercase transition" title="Buka Halaman Lacak">
                                            🔗 Lacak
                                        </a>
                                    </div>

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-16 text-center text-gray-400 font-bold uppercase text-xs italic">
                                Belum ada data pesanan online pada kategori ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-6 border-t border-gray-100 bg-white">
            {{ $orders->links() }}
        </div>
    </div>

    {{-- MODAL INPUT RESI PENGIRIMAN --}}
    <div x-show="isShipModalOpen" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center p-4" x-cloak x-transition>
        <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 max-w-md w-full shadow-2xl space-y-6">
            <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                <h3 class="font-black text-gray-900 uppercase text-sm">Input Resi & Kirim Pesanan</h3>
                <button @click="isShipModalOpen = false" class="text-gray-400 hover:text-gray-600 font-bold">✕</button>
            </div>

            <form :action="'/admin/orders/' + selectedOrder.id + '/ship'" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase">Nomor Pesanan:</span>
                    <p class="font-mono font-black text-indigo-700 text-sm" x-text="selectedOrder.order_number"></p>
                    <p class="text-xs font-bold text-gray-700" x-text="selectedOrder.customer_name + ' (' + selectedOrder.customer_phone + ')'"></p>
                </div>

                <div>
                    <label class="block text-[10px] font-black text-gray-500 uppercase tracking-widest mb-1">Pilih Ekspedisi / Kurir <span class="text-rose-500">*</span></label>
                    <select name="courier" x-model="selectedOrder.courier" required 
                            class="w-full p-3.5 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold text-xs text-gray-800 outline-none focus:border-[#00AA13]">
                        <option value="J&T Express">J&T Express</option>
                        <option value="JNE Reguler">JNE Reguler</option>
                        <option value="SiCepat Express">SiCepat Express</option>
                        <option value="Anteraja">Anteraja</option>
                        <option value="Pos Indonesia">Pos Indonesia</option>
                        <option value="Kurir Toko">Kurir Toko Pribadi</option>
                    </select>
                </div>

                <div>
                    <label class="block text-[10px] font-black text-gray-500 uppercase tracking-widest mb-1">Nomor Resi Pengiriman <span class="text-rose-500">*</span></label>
                    <input type="text" name="tracking_number" required placeholder="Contoh: JP8928374928"
                           class="w-full p-3.5 bg-gray-50 border-2 border-gray-100 rounded-2xl font-mono font-black text-sm text-gray-900 outline-none focus:border-[#00AA13] uppercase">
                    <p class="text-[10px] text-gray-400 mt-1">Nomor resi ini akan langsung tampil di halaman lacak pesanan pembeli.</p>
                </div>

                <div class="pt-3 border-t border-gray-100 flex gap-3">
                    <button type="button" @click="isShipModalOpen = false" class="w-1/2 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-2xl font-bold text-xs uppercase">
                        Batal
                    </button>
                    <button type="submit" class="w-1/2 py-3 bg-[#00AA13] hover:bg-[#00880F] text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25">
                        Kirim Pesanan
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
function adminOrderManager() {
    return {
        isShipModalOpen: false,
        selectedOrder: {},
        lastOrderCount: {{ $counts['unconfirmed'] ?? 0 }},

        init() {
            // Polling realtime pesanan baru khusus di halaman orders setiap 4 detik
            setInterval(async () => {
                try {
                    const res = await fetch("{{ route('orders.realtime-check') }}");
                    if (res.ok) {
                        const data = await res.json();
                        if (data.count > this.lastOrderCount) {
                            this.lastOrderCount = data.count;
                            if (typeof window.playNotificationSound === 'function') {
                                window.playNotificationSound('order_new');
                            }
                            Swal.fire({
                                icon: 'info',
                                title: 'Pesanan Online Baru Masuk!',
                                text: 'Ada pesanan online baru yang baru saja dibayar via QRIS.',
                                confirmButtonText: 'Perbarui Halaman',
                                confirmButtonColor: '#00AA13',
                                showCancelButton: true,
                                cancelButtonText: 'Nanti'
                            }).then((res) => {
                                if (res.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        }
                    }
                } catch(e) {}
            }, 4000);
        },

        openShipModal(order) {
            this.selectedOrder = order;
            this.isShipModalOpen = true;
        }
    }
}
</script>
@endsection
