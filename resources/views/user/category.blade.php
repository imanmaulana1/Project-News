@extends('user.layouts.layout')

@section('title', 'Home')

@section('content')

    {{-- Category News --}}
    <section class="container mx-auto mt-10 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Category {{ $category }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-8 pb-5">
            @foreach ($filteredCategory as $item)
                <a href="#">
                    <div class="flex flex-col gap-3">
                        <div class="bg-gray-200 rounded-lg w-full h-64 grid place-items-center">
                            <i class="fa-regular fa-image text-5xl md:text-6xl text-gray-500" alt="Image placeholder"></i>
                        </div>
                        <div class="flex items-center gap-2 text-sm md:text-base text-gray-500 font-sans">
                            <span class="bg-gray-200 w-7 h-7 rounded-full"></span>
                            <h3>{{ $item['author'] }}</h3>
                            <span>|</span>
                            <p>{{ $item['created_at'] }}</p>
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold">{{ $item['title'] }}</h2>
                        <p class="text-gray-700 text-sm md:text-base">{{ $item['content'] }}</p>
                        <p class="text-red-500 text-sm md:text-base font-medium font-sans">{{ $item['category'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>

    </section>

@endsection
