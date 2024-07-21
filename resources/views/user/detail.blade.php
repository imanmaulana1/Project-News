@extends('user.layouts.layout')

@section('title', $news['title'])

@section('content')

    <article>
        <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
            <div class="bg-gray-200 rounded-lg w-full h-72 md:h-96 lg:h-128 grid place-items-center">
                <i class="fa-regular fa-image text-5xl md:text-6xl text-gray-500" alt="Image placeholder"></i>
            </div>
            <header class="mt-6 lg:px-14">
                <nav class="mb-2">
                    <a href="{{ route('news.index') }}">Home</a>
                    <span> > </span>
                    <a href="{{ route('news.category', $news['category']) }}" class="text-red-700">{{ $news['category'] }}</a>
                </nav>
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">{{ $news['title'] }}</h1>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-x-2 mt-4">
                        <span class="bg-gray-200 w-7 h-7 rounded-full"></span>
                        <h3>{{ $news['author'] }}</h3>
                        <span>|</span>
                        <p>{{ $news['created_at'] }}</p>
                        <p class="text-red-500 text-sm md:text-base font-medium font-sans ml-4">{{ $news['category'] }}</p>
                    </div>
                    <div class="flex items-center gap-x-2 mt-4">
                        <h3 class="font-sans">Share: </h3>
                        <a href="#"><i class="fa-brands fa-facebook text-blue-900"></i></a>
                        <a href="#"> <i class="fa-brands fa-twitter text-blue-400"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp text-green-600"></i></a>
                    </div>
                </div>

            </header>
            <div class="mt-6 flex">
                <section class="lg:px-14 w-full md:w-9/12 xl:w-10/12">
                    <p>{{ $news['content'] }}</p>
                </section>
                <aside class="hidden md:block md:w-3/12 xl:w-2/12">
                    <h2 class="text-3xl font-bold mb-6 text-red-800">Latest News</h2>
                    @foreach ($latestNews as $news)
                        <a href="{{ route('news.show', $news['id']) }}">
                            <div class="flex flex-col gap-2 mb-8">
                                <div class="bg-gray-200 rounded-lg w-full h-40 lg:h-44 grid place-items-center">
                                    <i class="fa-regular fa-image text-5xl md:text-6xl text-gray-500"
                                        alt="Image placeholder"></i>
                                </div>
                                <div class="flex items-center gap-2 text-sm md:text-base text-gray-500 font-sans">
                                    <span class="bg-gray-200 w-7 h-7 rounded-full"></span>
                                    <h3 class="text-sm">{{ $news['author'] }}</h3>
                                    <span class="text-sm">|</span>
                                    <p class="text-sm">{{ $news['created_at'] }}</p>
                                </div>
                                <h2 class="text-xl font-semibold">{{ $news['title'] }}</h2>
                            </div>
                        </a>
                    @endforeach
                </aside>
            </div>
        </div>
    </article>


@endsection
