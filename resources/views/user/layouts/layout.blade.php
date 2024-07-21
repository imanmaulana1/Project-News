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
        <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
            <nav class="flex items-center justify-between">
                <a href="{{ route('news.index') }}" class="text-red-600 text-3xl font-semibold text-center">FOCUS</a>
                {{-- Nav Mobile --}}
                <div class="lg:hidden">
                    <button id="btn-hamburger">
                        <i class="fa-solid fa-bars text-2xl hover:text-red-800"></i>
                    </button>
                    <ul class="nav bg-white absolute top-16 md:top-14 left-0 z-10 py-4 px-4 sm:px-6 md:px-8 flex flex-col gap-y-4 shadow-md w-full md:mt-4"
                        id="navbar">
                        @foreach ($categories as $category)
                            <li class="{{ request()->is('category/' . $category) ? 'text-red-800 font-semibold' : '' }}">
                                <a href="{{ route('news.category', $category) }}">{{ $category }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <ul class="hidden lg:flex lg:flex-row lg:gap-x-6">
                    @foreach ($categories as $category)
                        <li class="{{ request()->is('category/' . $category) ? 'text-red-800 font-semibold' : '' }}">
                            <a href="{{ route('news.category', $category) }}">{{ $category }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>
    {{-- Content --}}
    <main class="mt-2">
        @yield('content')
    </main>
    {{-- Footer --}}
    <footer>
        <div class="container mx-auto my-20 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
            <div class="flex flex-col md:flex-row md:items-start lg:items-baseline gap-4 py-8 xl:py-0 border-t border-gray-400">
                <div class="text-center md:text-start basis-full md:basis-1/2">
                    <a href="{{ route('news.index') }}" class="text-red-600 text-3xl font-semibold">FOCUS</a>
                    <p class="mt-2 text-sm text-gray-600">Catch Up on the trusted news and your daily dose of insight
                    </p>
                    <p class="pt-12 text-sm text-gray-400 hidden md:block">&copy; {{ date('Y') }} Focus News. All
                        rights
                        reserved.
                    </p>
                </div>
                <nav
                    class="text-center md:text-start pt-8 md:pt-0 border-b border-gray-400 md:border-none  basis-full md:basis-1/2">
                    <ul class="flex flex-col flex-wrap items-center h-32 lg:flex-row gap-8">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('news.category', $category) }}">{{ $category }}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <p class="pt-12 text-sm text-center text-gray-400 md:hidden">&copy; {{ date('Y') }} Focus News. All
                    rights
                    reserved.
                </p>
            </div>
        </div>
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
