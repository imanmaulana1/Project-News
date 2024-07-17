<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Pengaturan Karakter dan Responsif -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Font -->
    <!-- Memuat font Nunito dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Gaya -->
    <!-- Memuat Tailwind CSS dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tailwind CSS adalah framework CSS berbasis utility-first untuk pengembangan UI cepat.
         Baris di atas menyertakan Tailwind CSS dari CDN (Content Delivery Network),
         yang memungkinkan Anda untuk segera menggunakan kelas-kelas utility dari Tailwind untuk styling elemen HTML Anda. -->
</head>

<body class="antialiased bg-gray-900 text-gray-900 dark:text-gray-200">
    <!-- Kelas 'antialiased' menerapkan font smoothing. -->
    <!-- 'bg-gray-100' mengatur latar belakang menjadi abu-abu terang untuk mode terang dan 'dark:bg-gray-900' mengatur latar belakang menjadi abu-abu gelap untuk mode gelap. -->
    <!-- 'text-gray-900' mengatur warna teks menjadi abu-abu gelap untuk mode terang dan 'dark:text-gray-200' mengatur warna teks menjadi abu-abu terang untuk mode gelap. -->

    <!-- Kontainer utama untuk menengahakan konten dan mencakup tinggi layar minimal -->
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 border-2 border-red-400">
        <!-- 'relative' mengatur posisi div ini sebagai relatif untuk memposisikan elemen anak. -->
        <!-- 'flex' menjadikan div ini sebagai kontainer fleksibel untuk layout yang fleksibel. -->
        <!-- 'items-top' menyelaraskan item ke atas. -->
        <!-- 'justify-center' menengahakan item secara horizontal. -->
        <!-- 'min-h-screen' memastikan kontainer mencakup setidaknya tinggi penuh layar. -->
        <!-- 'sm:items-center' menengahakan item secara vertikal pada layar kecil dan lebih besar. -->

        <!-- Tautan Otentikasi -->
        <!-- Memeriksa apakah rute untuk login ada -->
        @if (Route::has('login'))
            <!-- Tautan posisi tetap di sudut kanan atas -->
            <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                <!-- Memeriksa apakah pengguna sudah terotentikasi -->
                @auth
                    <!-- Tautan ke home jika sudah terotentikasi -->
                    <a href="{{ url('/home') }}"
                        class="text-sm font-semibold text-gray-700 dark:text-gray-200 underline">Home</a>
                @else
                    <!-- Tautan ke login jika belum terotentikasi -->
                    <a href="{{ route('login') }}"
                        class="text-sm font-semibold text-gray-700 dark:text-gray-200 underline">Log in</a>
                    <!-- Memeriksa apakah pendaftaran diizinkan -->
                    @if (Route::has('register'))
                        <!-- Tautan ke pendaftaran -->
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm font-semibold text-gray-700 dark:text-gray-200 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Kontainer untuk konten -->
        <div class="max-w-6xl mx-auto sm:px-6 lg:p-8 border-2 border-green-300">
            <!-- Kontainer grid responsif -->
            <h1 class="text-center text-white text-5xl">Done</h1>
            <!-- Footer dengan informasi versi -->
            <footer class="mt-8 p-4 rounded-lg bg-white dark:bg-gray-800 text-center w-full py-4">
                Testing setup installasi laravel dan tailwindcss
            </footer>
        </div>
    </div>
</body>

</html>
