<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus News Talenthub</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex">
        <aside class="w-72 h-screen">
            <nav class="h-full border-r shadow-sm flex flex-col justify-between">
                <div class="p-4 flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
                    <span class="text-red-600 text-2xl font-semibold font-playfair">FOCUS</span>
                </div>
                <ul class="flex-1 px-3 text-lg">
                    <li
                        class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin') ? 'bg-gray-100 text-gray-700' : '' }} hover:bg-gray-100  text-gray-500">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                            <span class="material-symbols-outlined">
                                dashboard
                            </span>
                            <span class="w-52 ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li
                        class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin/news') ? 'bg-gray-100 text-gray-700' : '' }} hover:bg-gray-100 text-gray-500">
                        <a href="{{ route('admin.news') }}" class="flex items-center">
                            <span class="material-symbols-outlined">
                                data_table
                            </span>
                            <span class="w-52 ml-3">Manage News</span>
                        </a>
                    </li>
                    <li
                        class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin/categories') ? 'bg-gray-100 text-gray-700' : '' }} hover:bg-gray-100 text-gray-500">
                        <a href="{{ route('admin.categories') }}" class="flex items-center">
                            <span class="material-symbols-outlined">
                                menu
                            </span>
                            <span class="w-52 ml-3">Manage Categories</span>
                        </a>
                    </li>
                    <li
                        class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin/settings') ? 'bg-gray-100 text-gray-700' : '' }} hover:bg-gray-100 text-gray-500">
                        <a href="{{ route('admin.settings') }}" class="flex items-center">
                            <span class="material-symbols-outlined">
                                settings
                            </span>
                            <span class="w-52 ml-3">Settings</span>
                        </a>
                    </li>
                </ul>

                <div class="border-t flex py-5 px-4">
                    <div class="bg-gray-200 w-10 h-10 rounded-full"></div>
                    <div class="flex items-center justify-between w-52 ml-3">
                        <div class="leading-4">
                            <h4 class="font-semibold">John Doe</h4>
                            <span class="text-xs text-gray-600">john@gmail.com</span>
                        </div>
                        <button class="py-1 px-2 rounded-lg bg-gray-50 hover:bg-gray-100">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </button>
                    </div>

                </div>
            </nav>

        </aside>
        <div class="relative container mx-auto px-4 h-screen">
            <header class="py-8">
                @yield('header-title')
            </header>
            @yield('content')
            <footer class="absolute bottom-0 right-0 left-0 py-8">
                <p class="text-sm text-center text-gray-400">&copy; {{ date('Y') }} Focus News. All
                    rights
                    reserved.
                </p>
            </footer>
        </div>

    </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
