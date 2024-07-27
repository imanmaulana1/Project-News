@extends('user.layout')

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
        @if ($news)
            <article class="relative grid grid-cols-1  md:grid-cols-2 gap-4 md:gap-x-8 xl:gap-x-12">
                <a href="{{ route('news.detail', $news->id) }}" class="absolute inset-0 z-10"></a>
                <img src="{{ asset('storage/' . $news->image_url) }}" alt="{{ $news['title'] }}"
                    class="bg-gray-200 w-full h-72 lg:h-96 rounded-lg">
                </img>
                <div class="flex flex-col justify-between py-4 gap-8 lg:gap-0">
                    <div class="flex flex-col gap-3 lg:gap-4 xl:gap-6">
                        <header class="flex items-center gap-2">
                            <img src="{{ Storage::url($news->user->profile_photo) }}" class="w-5 h-5 rounded-full"></img>
                            <h3 class="text-gray-600 text-sm font-medium">{{ $news->user->name }}</h3>
                            <span class="text-gray-500 text-sm">|</span>
                            <p class="text-gray-600 text-sm font-medium">
                                {{ \Carbon\Carbon::parse($news['date'])->format('F j, Y') }}</p>
                        </header>
                        <h2 class="text-2xl lg:text-4xl xl:text-5xl font-bold">{{ strlen($news->title) > 60 ? substr($news->title, 0, 60) . '...' : $news->title }}</h2>
                        <p class="text-gray-700 text-sm md:text-base">
                            {{ strlen($news->body) > 200 ? substr($news->body, 0, 200) . '...' : $news->body }}</p>
                    </div>
                    <footer>
                        <p class="text-red-500 text-sm lg:text-base font-medium font-sans">{{ $news->category->name }}</p>
                    </footer>
                </div>

            </article>
        @else
            <article class="relative grid grid-cols-1  md:grid-cols-2 gap-4 md:gap-x-8 xl:gap-x-12 lg:items-center">
                <div class="bg-gray-200 w-full h-72 lg:h-80 rounded-lg grid place-items-center">
                    <span class="material-symbols-outlined text-5xl md:text-6xl text-gray-500">
                        visibility
                    </span>
                </div>
                <div class="flex flex-col gap-3 lg:gap-4 xl:gap-6">
                    <header class="flex items-center gap-2">
                    </header>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">Headline News</h2>
                </div>
            </article>
        @endif

    </section>

    {{-- Latest News --}}
    <section class="container mx-auto mt-10 px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Latest News</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4  gap-8 pb-5">
            @foreach ($popularNews as $news)
                <a href="{{ route('news.detail', $news->id) }}">
                    <div class="flex flex-col gap-3">
                        <img src="{{ asset('storage/' . $news->image_url) }}" alt="{{ $news['title'] }}"
                            class="bg-gray-200 w-full h-60 rounded-lg object-cover object-center">
                        </img>
                        <div class="flex items-center gap-2 text-sm md:text-base text-gray-500 font-sans">
                            <img src="{{ Storage::url($news->user->profile_photo) }}" class="w-5 h-5 rounded-full"></img>
                            <h3 class="text-gray-600 text-sm font-playfair">{{ $news->user->name }}</h3>
                            <span class="text-gray-500 text-sm font-playfair">|</span>
                            <p class="text-gray-600 text-sm font-playfair">
                                {{ \Carbon\Carbon::parse($news['date'])->format('F j, Y') }}</p>
                        </div>
                        <h2 class="text-xl font-bold"> {{ strlen($news->title) > 50 ? substr($news->title, 0, 50) . '...' : $news->title }}</h2>
                        <p class="text-gray-700 text-sm md:text-base">
                            {{ strlen($news->body) > 60 ? substr($news->body, 0, 60) . '...' : $news->body }}
                        </p>
                        <p class="text-red-500 text-sm md:text-base font-medium font-sans">{{ $news->category->name }}</p>
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
