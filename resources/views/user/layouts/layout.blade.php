<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Focus News')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-playfair">
    {{-- Header --}}
    <header class="py-4 lg:py-8">
        <div class="container mx-auto px-4 relative">
            <nav class="flex items-center justify-between">
                <a href="#" class="text-red-600 text-3xl font-semibold text-center">FOCUS</a>
                {{-- Nav Mobile --}}
                <div class="lg:hidden">
                    <button id="btn-hamburger">
                        <i class="fa-solid fa-bars text-2xl hover:text-red-800"></i>
                    </button>
                    <ul class="nav bg-white absolute top-9 left-0 z-10 py-4 px-4 flex flex-col gap-y-4 shadow-md w-full md:mt-4"
                        id="navbar">
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Movie</a></li>
                        <li><a href="#">Health</a></li>
                    </ul>
                </div>
                <ul class="hidden lg:flex lg:flex-row lg:gap-x-6">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Movie</a></li>
                    <li><a href="#">Health</a></li>
                </ul>
            </nav>
        </div>
    </header>
    {{-- Content --}}
    <main class="mt-2">
        @yield('content')
    </main>
    {{-- Footer --}}
    <footer></footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
