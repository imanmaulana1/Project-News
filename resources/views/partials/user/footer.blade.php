<footer>
    <div class="container mx-auto mt-20 pb-10 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
        <div
            class="flex flex-col md:flex-row md:justify-between md:items-start lg:items-baseline gap-4 border-t pt-10 xl:pt-0 border-gray-400">
            <div class="text-center md:text-start basis-full md:basis-auto">
                <a href="{{ url('/') }}" class="text-red-600 text-3xl font-semibold">FOCUS</a>
                <p class="mt-2 text-sm text-gray-600">Catch Up on the trusted news and your daily dose of insight
                </p>
                <p class="pt-12 text-sm text-gray-400 hidden md:block">&copy; {{ date('Y') }} Focus News. All
                    rights
                    reserved.
                </p>
            </div>
            <nav
                class="text-center md:text-start pt-8 md:pt-0 border-b border-gray-400 md:border-none  basis-full md:basis-auto">
                <ul class="flex flex-col flex-wrap items-center h-32 lg:flex-row gap-8">
                    <li>
                        <a href="#" class="hover:underline">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </nav>
            <p class="pt-4 text-sm text-center text-gray-400 md:hidden">&copy; {{ date('Y') }} Focus News. All
                rights
                reserved.
            </p>
        </div>
    </div>
</footer>
