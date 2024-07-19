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
            <a href="#" class="absolute inset-0 z-10"></a>
            <img src="{{ asset('images/maxresdefault.jpg') }}" alt="headline image"
                class="w-full h-72 lg:h-80 xl:h-96 rounded-lg object-cover object-center ">
            <div class="flex flex-col gap-3 lg:gap-4 xl:gap-6">
                <header class="flex items-center gap-2">
                    <img src="{{ asset('images/netflix.jpg') }}" alt="avatar editor" class="w-7 h-7 rounded-full">
                    <h3 class="text-gray-700 font-medium font-sans">Netflix</h3>
                    <span class="text-gray-500">|</span>
                    <p class="text-gray-700 font-medium font-sans">12 minutes ago</p>
                </header>
                <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">Where To Watch 'John Wick: Chapter 4'
                </h2>
                <p class="text-gray-700 text-sm md:text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Ipsum minima at
                    ex, asperiores ratione dignissimos. Tenetur consectetur assumenda quo impedit ut dolores voluptate illum
                    voluptas...</p>
                <footer>
                    <p class="text-red-500 text-sm md:text-base font-medium font-sans">Movies</p>
                </footer>
            </div>
        </article>
    </section>
@endsection
