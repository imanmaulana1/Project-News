<aside :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800 flex flex-col justify-between">
        <ul class="space-y-2 font-medium">
            <!-- Dashboard -->
            <li
                class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin') ? 'bg-gradient-to-t from-red-500 to-red-700  text-white' : '' }} hover:bg-gray-100  text-gray-500">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <span class="w-52 ml-3">Dashboard</span>
                </a>
            </li>

            <!-- News -->
            <li
                class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin/news') ? 'bg-gradient-to-t from-red-500 to-red-700  text-white' : '' }} hover:bg-gray-100 text-gray-500">
                <a href="{{ route('admin.news.index') }}" class="flex items-center">
                    <span class="material-symbols-outlined">
                        data_table
                    </span>
                    <span class="w-52 ml-3">Manage News</span>
                </a>
            </li>



            <!-- Categories Dropdown -->
            <li class="px-1" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center justify-between p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M4 4h3V1H4v3zM4 10h3V7H4v3zM4 16h3v-3H4v3zM10 4h3V1h-3v3zM10 10h3V7h-3v3zM10 16h3v-3h-3v3zM16 4h3V1h-3v3zM16 10h3V7h-3v3zM16 16h3v-3h-3v3z" />
                        </svg>
                        <span class="ms-4 whitespace-nowrap">Category</span>
                    </div>
                    <svg x-bind:class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="w-4 h-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul x-show="open" x-transition class="mt-2 space-y-2">
                    <li>
                        <a href="{{ route('admin.categories.index') }}"
                            class="flex items-center p-2 pl-11 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M4 4h3V1H4v3zM4 10h3V7H4v3zM4 16h3v-3H4v3zM10 4h3V1h-3v3zM10 10h3V7h-3v3zM10 16h3v-3h-3v3zM16 4h3V1h-3v3zM16 10h3V7h-3v3zM16 16h3v-3h-3v3z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.regions.index') }}"
                            class="flex items-center p-2 pl-11 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 11-7.07 2.93A10 10 0 0112 2zm0 18a8 8 0 100-16 8 8 0 000 16z" />
                                <path d="M12 6a6 6 0 11-4.24 1.76A6 6 0 0112 6zm0 10a4 4 0 100-8 4 4 0 000 8z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Region</span>
                        </a>
                    </li>
                </ul>
            </li>


            <!-- Users -->
            @php
                $user = auth()->user();
            @endphp

            @if ($user && $user->role->name === 'admin')
                <li
                    class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin/users') ? 'bg-gradient-to-t from-red-500 to-red-700  text-white' : '' }} hover:bg-gray-100 text-gray-500">
                    <a href="{{ route('admin.users.index') }}" class="flex items-center">
                        <span class="material-symbols-outlined">
                            group
                        </span>
                        <span class="w-52 ml-3">Manage Users</span>
                    </a>
                </li>
            @endif

            <!-- News -->
            <li
                class="py-2 px-3 my-1 rounded-md cursor-pointer {{ request()->is('admin/settings') ? 'bg-gradient-to-t from-red-500 to-red-700  text-white' : '' }} hover:bg-gray-100 text-gray-500">
                <a href="{{ route('admin.settings') }}" class="flex items-center">
                    <span class="material-symbols-outlined">
                        manage_accounts
                    </span>
                    <span class="w-52 ml-3">Settings</span>
                </a>
            </li>
        </ul>
        <!-- Logout -->
        <div class="border-t flex py-5 px-4">
            <img src="{{ Auth::user()->profile_photo ? Storage::url(Auth::user()->profile_photo) : 'https://via.placeholder.com/40' }}"
                class="w-9 h-9 rounded-full object-cover object-center"></img>
            <div class="flex items-center justify-between w-52 ml-3">
                <div class="leading-4">
                    <h4 class="font-semibold">{{ Auth::user()->name }}</h4>
                    <span class="text-xs text-gray-600">{{ Auth::user()->email }}</span>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="py-1 px-2 rounded-lg bg-gray-50 hover:bg-gray-100">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>
