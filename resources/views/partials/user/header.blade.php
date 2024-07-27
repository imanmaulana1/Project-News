<header class="py-4 lg:py-8">
    <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
        <nav class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-red-600 text-3xl font-semibold text-center">FOCUS</a>
            {{-- Nav Mobile --}}
            <div class="lg:hidden">
                <button id="btn-hamburger">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
                <ul class="nav bg-white absolute top-16 md:top-14 left-0 z-10 py-4 px-4 sm:px-6 md:px-8 flex flex-col gap-y-4 shadow-md w-full md:mt-4"
                    id="navbar">
                    @foreach ($categories->take(5) as $category)
                        <li
                            class="{{ request()->is('category/' . strtolower($category->name)) ? 'text-red-800 font-semibold' : '' }}">
                            <a
                                href="{{  route('category', ['category' => Str::slug($category->name)]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                    @if ($categories->count() > 5)
                        <li class="relative">
                            <button class="text-gray-900 hover:text-gray-500 flex items-center"
                                id="more-categories-toggle-mobile">
                                Lainnya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div class="hidden mt-2 space-y-2" id="more-categories-mobile">
                                @foreach ($categories->skip(5) as $category)
                                    <a href="{{ route('category', ['category' => Str::slug($category->name)]) }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </li>
                    @endif
                    @if (Auth::check())
                        <a href="{{ route('login') }}"
                            class="hidden bg-gray-200 hover:bg-gray-100 rounded-md px-4 py-2 text-center text-red-700">Login</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="bg-gray-200 hover:bg-gray-100 rounded-md px-4 py-2 text-center text-red-700">Login</a>
                    @endif

                </ul>
            </div>

            {{-- Nav Desktop --}}
            <ul class="hidden lg:flex lg:flex-row lg:items-center lg:gap-x-6">
                @foreach ($categories->take(5) as $category)
                    <li
                        class="{{ request()->is('category/' . strtolower($category->name)) ? 'text-red-800 font-semibold' : '' }}">
                        <a
                            href="{{ route('category', ['category' => Str::slug($category->name)]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
                @if ($categories->count() > 5)
                    <li class="relative">
                        <button class="  text-gray-900 hover:text-gray-500 flex items-center"
                            id="more-categories-toggle">
                            Lainnya
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="absolute hidden" id="more-categories">
                            @foreach ($categories->skip(5) as $category)
                                <a href="{{ route('category', ['category' => ucwords(strtolower($category->name))]) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </li>
                @endif
                @if (Auth::check())
                    <a href="{{ route('login') }}"
                        class="hidden bg-gray-200 hover:bg-gray-100 rounded-md px-4 py-2 text-center text-red-700">Login</a>
                @else
                    <a href="{{ route('login') }}"
                        class="bg-gray-200 hover:bg-gray-100 rounded-md px-4 py-2 text-center text-red-700">Login</a>
                @endif
            </ul>
        </nav>
    </div>
</header>

<script>
    const navbar = document.getElementById("navbar");
    const hamburgerBtn = document.getElementById("btn-hamburger");

    const moreCategoriesToggleMobile = document.getElementById('more-categories-toggle-mobile');
    const moreCategoriesMobile = document.getElementById('more-categories-mobile');

    const moreCategoriesToggle = document.getElementById('more-categories-toggle');
    const moreCategories = document.getElementById('more-categories');


    moreCategoriesToggle.addEventListener('click', function(event) {
        moreCategories.classList.toggle('hidden');
    });


    moreCategoriesToggleMobile.addEventListener('click', function(event) {
        moreCategoriesMobile.classList.toggle('hidden');
    });

    const toggleNavbar = () => {
        navbar.classList.toggle("active");
    };

    hamburgerBtn.addEventListener("click", toggleNavbar);

    document.addEventListener('click', function(event) {
        if (!event.target.closest('#more-categories-toggle') && !event.target.closest(
                '#more-categories')) {
            moreCategories.classList.add('hidden');
        }

        if (!event.target.closest('#more-categories-toggle-mobile') && !event.target.closest(
                '#more-categories-mobile')) {
            moreCategoriesMobile.classList.add('hidden');
        }

    });
</script>
