<x-app-layout>
            <main class="flex-1 p-6">
            <div class="space-y-6">
                
                <!-- Kartu Sambutan -->
                <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Transaksi</h2>
                        <p class="text-gray-500">Ringkasan Penjualan & Pengeluaran Hari Ini</p>
                    </div>
                    {{-- Logo kecil di pojok kartu --}}
                    <img src="{{ asset('image/warungin_logo.png') }}" alt="Logo" class="w-12 h-12 opacity-50">
                </div>
            </x-app-layout>