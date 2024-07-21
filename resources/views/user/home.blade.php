@extends('user.layouts.layout')

@section('title', 'Home')

@section('content')

    {{-- Hero Section --}}
    <section class="container mx-auto  px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl  text-center">
        <div class="bg-gray-100 py-8 rounded-lg px-8">
            <h1 class="text-base md:text-lg lg:text-xl uppercase tracking-wide text-neutral-500 ">Welcome to Focus</h1>
            <h2 class="text-xl md:text-2xl lg:text-3xl font-sans font-semibold mt-4 md:max-w-lg lg:max-w-3xl md:mx-auto ">
                Catch Up on the
                <span class="text-red-600">Trusted News</span>
                <span class="text-xl lg:text-3xl">✅</span>, Stay Ahead with <span class="text-red-600">Accurate</span> <span
                    class="text-xl lg:text-3xl">🎯</span> updates, and
                Your Daily Dose of <span class="text-red-600">Insight</span> <span class="text-xl lg:text-3xl">✨</span>
            </h2>
        </div>
    </section>

    {{-- Headline News --}}
    <section class="container mx-auto mt-8 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl ">
        <article class="relative grid grid-cols-1  md:grid-cols-2 gap-4 md:gap-x-8 xl:gap-x-12 lg:items-center">
            <a href="{{ route('news.show', $headline['id']) }}" class="absolute inset-0 z-10"></a>
            <div class="bg-gray-200 w-full h-72 lg:h-80 xl:h-96 rounded-lg grid place-items-center">
                <i class="fa-regular fa-image text-5xl md:text-6xl text-gray-500"></i>
            </div>
            <div class="flex flex-col gap-3 lg:gap-4 xl:gap-6">
                <header class="flex items-center gap-2">
                    <span class="bg-gray-200 w-7 h-7 rounded-full"> </span>
                    <h3 class="text-gray-700 font-medium font-sans">{{ $headline['author'] }}</h3>
                    <span class="text-gray-500">|</span>
                    <p class="text-gray-700 font-medium font-sans">{{ $headline['created_at'] }}</p>
                </header>
                <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">{{ $headline['title'] }}</h2>
                <p class="text-gray-700 text-sm md:text-base">{{ $headline['content'] }}</p>
                <footer>
                    <p class="text-red-500 text-sm md:text-base font-medium font-sans">{{ $headline['category'] }}</p>
                </footer>
            </div>
        </article>
    </section>

    {{-- Latest News --}}
    <section class="container mx-auto mt-10 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Latest News</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4  gap-8 pb-5">
            @foreach ($latestNews as $news)
                <a href="{{ route('news.show', $news['id']) }}">
                    <div class="flex flex-col gap-3">
                        <div class="bg-gray-200 rounded-lg w-full h-64 grid place-items-center">
                            <i class="fa-regular fa-image text-5xl md:text-6xl text-gray-500" alt="Image placeholder"></i>
                        </div>
                        <div class="flex items-center gap-2 text-sm md:text-base text-gray-500 font-sans">
                            <span class="bg-gray-200 w-7 h-7 rounded-full"></span>
                            <h3>{{ $news['author'] }}</h3>
                            <span>|</span>
                            <p>{{ $news['created_at'] }}</p>
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold">{{ $news['title'] }}</h2>
                        <p class="text-gray-700 text-sm md:text-base">{{ $news['content'] }}</p>
                        <p class="text-red-500 text-sm md:text-base font-medium font-sans">{{ $news['category'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>

    </section>

    {{-- Newsletter Section --}}
    <section
        class="container mx-auto my-8 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl  text-center lg:text-start">
        <div class="bg-gray-200 py-8 lg:py-20 rounded-lg px-8">
            <h1 class="text-base md:text-lg lg:text-xl uppercase tracking-wide text-neutral-500 ">Get First Update</h1>
            <h2 class="text-xl md:text-2xl lg:text-3xl font-sans font-semibold mt-4 md:max-w-lg lg:max-w-full md:mx-auto ">
                Get the news in front line by <span class="text-red-600">subsrcribe</span> <span
                    class="text-xl lg:text-3xl">✍️</span> our latest updates
            </h2>
        </div>
    </section>
@endsection
