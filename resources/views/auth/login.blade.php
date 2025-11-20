<x-guest-layout>
<div class="flex items-center justify-center min-h-screen p-4 bg-gray-100">

    <!-- Container Utama -->
    <div class="flex bg-white rounded-xl shadow-2xl overflow-hidden max-w-6xl w-full">
        
        <!-- Kolom Kiri: Informasi WARUNGIN (Padding Vertikal Ditingkatkan) -->
        <div class="hidden md:flex md:w-1/2 bg-gradient-to-b from-blue-800 to-blue-600 text-white p-16 flex-col justify-center items-center text-center">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang</h1>
            
            <!-- Karena kami tidak bisa mengakses 'asset', ini adalah placeholder untuk logo Anda -->
            <div class="mb-6 h-28 w-28 flex items-center justify-center rounded-full overflow-hidden shadow-lg border-4 border-white">
                <!-- Ganti URL placeholder ini (96x96) dengan URL foto/logo Anda -->
                <img
                    src="image/warungin_logo.png"
                    alt="Logo atau Foto Profil"
                    class="h-full w-full object-cover"
                />
            </div>
            
            <h3 class="text-3xl font-semibold mb-3">WARUNGIN</h3>
            <p class="text-base leading-relaxed max-w-sm">
                Warungin menghidupkan kembali semangat warung dalam bentuk modern —
                menggabungkan nilai lokal dengan teknologi untuk memajukan usaha kecil di Indonesia.
            </p>
        </div>

        <!-- Kolom Kanan: Formulir Login (Padding Ditingkatkan) -->
        <div class="w-full md:w-1/2 p-10 bg-white flex flex-col justify-center relative overflow-hidden">
            
            <!-- Style untuk Wave Background -->
            <style>
                .wave-background {
                    /* Menggunakan warna yang lebih cerah (bg-blue-50) */
                    background-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg"><path fill="%23eff6ff" fill-opacity="1" d="M0,224L48,208C96,192,192,160,288,160C384,160,480,192,576,218.7C672,245,768,267,864,266.7C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
                    background-repeat: no-repeat;
                    background-position: bottom;
                    background-size: cover;
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 0;
                }
            </style>
            <div class="wave-background"></div>
            
            <!-- Konten Formulir -->
            <div class="relative z-10">
                <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-8">Masuk ke Kasir</h2>

                <!-- Display Errors -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline"> {{ $errors->first() }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">Gmail/Username</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="Masukkan email/Username"
                            class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-base transition duration-150">
                    </div>

                   <div class="flex flex-col">
                        <label for="password" class="text-sm font-semibold text-gray-700 mb-1">Password</label>
                        
                        <!-- Container relatif untuk menempatkan ikon secara absolut -->
                        <div class="relative">
                            <input 
                                type="password" 
                                name="password" 
                                id="password"
                                class="w-full border border-gray-300 rounded-lg pr-12 pl-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-150"
                                placeholder="Masukkan password"
                                required 
                                autocomplete="current-password"
                            >
                            
                            <!-- Tombol Ikon Mata -->
                            <button 
                                type="button" 
                                id="togglePassword" 
                                class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-500 hover:text-gray-700 transition duration-150"
                                aria-label="Tampilkan atau Sembunyikan Password"
                            >
                                <!-- Ikon Mata Terbuka (default) -->
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                <!-- Ikon Mata Tertutup (dengan garis miring) - Awalnya disembunyikan -->
                                <svg id="eyeSlashIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off hidden">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                                    <path d="M16.43 16.43A10.43 10.43 0 0 1 12 19c-7 0-10-7-10-7a13.15 13.15 0 0 1 2.82-3.81"/>
                                    <line x1="2" x2="22" y1="2" y2="22"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Ingat Saya
                        </label>
                    </div>

                    <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 transform hover:scale-[1.01]">
                        Log In
                    </button>
                </form>
                
                <div class="mt-6 text-center">
                    {{-- <p class="text-sm text-gray-600">Belum punya akun Kasir?</p> --}}
                    {{-- <a href="" 
                       class="text-blue-600 hover:text-blue-800 font-medium">
                        Daftar Sekarang
                    </a> --}}
                </div>
            </div> <!-- End relative z-10 -->
        </div> <!-- End Kolom Kanan -->
    </div> <!-- End Container Utama -->
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeSlashIcon = document.getElementById('eyeSlashIcon');

        // Pastikan elemen ditemukan sebelum menambahkan listener
        if (toggleButton && passwordInput && eyeIcon && eyeSlashIcon) {
            toggleButton.addEventListener('click', function() {
                // Toggle tipe input antara 'password' dan 'text'
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle ikon mata (tampilkan/sembunyikan)
                eyeIcon.classList.toggle('hidden');
                eyeSlashIcon.classList.toggle('hidden');
            });
        }
    });
</script>
</x-guest-layout>