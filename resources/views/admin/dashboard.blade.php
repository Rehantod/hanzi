<x-app-layout>
            <main class="flex-1 p-6">
            <div class="space-y-6">
                
                <!-- Kartu Sambutan -->
                <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Di Dashboard Warungin</h2>
                        <p class="text-gray-500">Ringkasan Penjualan & Pengeluaran Hari Ini</p>
                    </div>
                    {{-- Logo kecil di pojok kartu --}}
                    <img src="{{ asset('image/warungin_logo.png') }}" alt="Logo" class="w-12 h-12 opacity-50">
                </div>

                <!-- Bagian Ringkasan 4 Kolom -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $summaries = [
                            ['title' => 'Total Penjualan', 'icon' => 'fas fa-shopping-cart', 'value' => 'Rp 1.250.000'],
                            ['title' => 'Total Pengeluaran', 'icon' => 'fas fa-money-bill-alt', 'value' => 'Rp 500.000'],
                            ['title' => 'Transaksi Hari Ini', 'icon' => 'fas fa-receipt', 'value' => '15 Transaksi'],
                            ['title' => 'Keuntungan Bersih', 'icon' => 'fas fa-chart-line', 'value' => 'Rp 750.000'],
                        ];
                    @endphp

                    @foreach ($summaries as $item)
                        <div class="bg-white p-5 rounded-xl shadow-md border border-gray-100 flex flex-col justify-between">
                            <i class="{{ $item['icon'] }} text-3xl text-blue-500 mb-3"></i>
                            <p class="text-sm font-medium text-gray-500">{{ $item['title'] }}</p>
                            <h3 class="text-xl font-bold text-gray-800">{{ $item['value'] }}</h3>
                        </div>
                    @endforeach
                </div>
</x-app-layout>