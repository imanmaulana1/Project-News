@extends('user.layout')

@section('content')
    <article class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16 max-w-screen-xl">
        <img src="{{ asset('storage/' . $newsItem->image_url) }}" alt="{{ $newsItem['title'] }}"
            class="rounded-lg w-full h-72 md:h-96 lg:h-128 object-cover object-center"></img>
        <header class="mt-6">
            <nav class="mb-2 lg:px-14">
                <ol class="flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:outline-none focus:text-red-600"
                            href="{{ url('/') }}">
                            Home
                        </a>
                        <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:outline-none focus:text-red-600"
                            href="{{ route('category', $newsItem->category->name) }}">
                            {{ $newsItem->category->name }}
                            <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                        {{ strlen($newsItem->title) > 20 ? substr($newsItem->title, 0, 20) . '...' : $newsItem->title }}
                    </li>
                </ol>
            </nav>
            <h1 class="text-2xl md:text-3xl lg:text-4xl lg:px-14 font-bold">{{ $newsItem['title'] }}</h1>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 text-sm md:text-base mt-4 lg:px-14">
                    <img src="{{ Storage::url($newsItem->user->profile_photo) }}" class="w-5 h-5 rounded-full"></img>
                    <h3 class="text-gray-700 text-sm font-playfair">{{ $newsItem->user->name }}</h3>
                    <span class="text-gray-500 text-sm font-playfair">|</span>
                    <p class="text-gray-700 text-sm font-playfair">
                        {{ \Carbon\Carbon::parse($newsItem['date'])->format('F j, Y') }}</p>
                </div>
                <div class="flex items-center text-sm">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1">
                        <path
                            d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="text-gray-500 mr-2">View : </span>
                    <span>{{ $newsItem['views'] }} orang</span>
                </div>
            </div>
        </header>
        <div class="mt-6 flex items-baseline">
            <div class="lg:px-14 w-full lg:w-10/12">
                <section>
                    <p>
                        <span class="font-bold text-2xl text-red-800">FOCUS</span> -
                        {{ $newsItem['body'] }}
                    </p>
                </section>
                <section class="hidden md:block md:mt-20">
                    <h2 class="text-sm md:text-xl font-bold mb-6">Related News</h2>
                    <div class="hidden md:flex md:flex-row gap-4 pb-5">
                        @forelse ($relatedNews as $news)
                            <a href="{{ route('news.detail', $news->id) }}">
                                <div class="flex flex-col gap-3">
                                    <img src="{{ asset('storage/' . $news->image_url) }}" alt="{{ $news['title'] }}"
                                        class="w-40 h-40 rounded-lg object-cover object-center">
                                    </img>
                                    <div class="flex items-center gap-2 text-sm md:text-base text-gray-500 font-sans">
                                        <img src="{{ Storage::url($news->user->profile_photo) }}" class="w-5 h-5 rounded-full"></img>
                                        <h3 class="text-gray-600 text-sm font-playfair">{{ $news->user->name }}</h3>
                                    </div>
                                    <h2 class="text-lg font-bold">
                                        {{ strlen($news->title) > 20 ? substr($news->title, 0, 20) . '...' : $news->title }}
                                    </h2>
                                    <p class="text-gray-700 text-xs md:text-sm">
                                        {{ strlen($news->body) > 20 ? substr($news->body, 0, 20) . '...' : $news->body }}
                                    </p>
                                </div>
                            </a>
                        @empty
                            <div class="w-full text-center py-6">
                                <svg viewBox="0 0 24 24" fill="none" class="w-12 h-12 mx-auto mb-4"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 10.5C16 11.3284 15.5523 12 15 12C14.4477 12 14 11.3284 14 10.5C14 9.67157 14.4477 9 15 9C15.5523 9 16 9.67157 16 10.5Z"
                                        fill="#1C274C"></path>
                                    <path
                                        d="M10 10.5C10 11.3284 9.55229 12 9 12C8.44772 12 8 11.3284 8 10.5C8 9.67157 8.44772 9 9 9C9.55229 9 10 9.67157 10 10.5Z"
                                        fill="#1C274C"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.9426 1.25H12.0574C14.3658 1.24999 16.1748 1.24998 17.5863 1.43975C19.031 1.63399 20.1711 2.03933 21.0659 2.93414C21.9607 3.82895 22.366 4.96897 22.5603 6.41371C22.75 7.82519 22.75 9.63423 22.75 11.9426V12.0574C22.75 14.3658 22.75 16.1748 22.5603 17.5863C22.366 19.031 21.9607 20.1711 21.0659 21.0659C20.1711 21.9607 19.031 22.366 17.5863 22.5603C16.1748 22.75 14.3658 22.75 12.0574 22.75H11.9426C9.63423 22.75 7.82519 22.75 6.41371 22.5603C4.96897 22.366 3.82895 21.9607 2.93414 21.0659C2.03933 20.1711 1.63399 19.031 1.43975 17.5863C1.24998 16.1748 1.24999 14.3658 1.25 12.0574V11.9426C1.24999 9.63423 1.24998 7.82519 1.43975 6.41371C1.63399 4.96897 2.03933 3.82895 2.93414 2.93414C3.82895 2.03933 4.96897 1.63399 6.41371 1.43975C7.82519 1.24998 9.63423 1.24999 11.9426 1.25ZM6.61358 2.92637C5.33517 3.09825 4.56445 3.42514 3.9948 3.9948C3.42514 4.56445 3.09825 5.33517 2.92637 6.61358C2.75159 7.91356 2.75 9.62177 2.75 12C2.75 14.3782 2.75159 16.0864 2.92637 17.3864C3.09825 18.6648 3.42514 19.4355 3.9948 20.0052C4.56445 20.5749 5.33517 20.9018 6.61358 21.0736C7.91356 21.2484 9.62177 21.25 12 21.25C14.3782 21.25 16.0864 21.2484 17.3864 21.0736C18.6648 20.9018 19.4355 20.5749 20.0052 20.0052C20.5749 19.4355 20.9018 18.6648 21.0736 17.3864C21.2484 16.0864 21.25 14.3782 21.25 12C21.25 9.62177 21.2484 7.91356 21.0736 6.61358C20.9018 5.33517 20.5749 4.56445 20.0052 3.9948C19.4355 3.42514 18.6648 3.09825 17.3864 2.92637C16.0864 2.75159 14.3782 2.75 12 2.75C9.62177 2.75 7.91356 2.75159 6.61358 2.92637ZM8.55339 16.3975C9.5258 15.6767 10.715 15.25 12 15.25C13.285 15.25 14.4742 15.6767 15.4466 16.3975C15.7794 16.6441 15.8492 17.1138 15.6025 17.4466C15.3559 17.7794 14.8862 17.8492 14.5534 17.6025C13.825 17.0627 12.9459 16.75 12 16.75C11.0541 16.75 10.175 17.0627 9.44661 17.6025C9.11385 17.8492 8.64413 17.7794 8.39747 17.4466C8.15082 17.1138 8.22062 16.6441 8.55339 16.3975Z"
                                        fill="#1C274C"></path>
                                </svg>
                                <p class="text-lg text-gray-500 dark:text-gray-400">Belum ada berita lagi.</p>
                            </div>
                        @endforelse
                    </div>
                </section>
            </div>

            <aside class="hidden lg:block lg:w-2/12">
                <h2 class="text-3xl font-bold mb-6 text-red-800">Latest News</h2>
                @foreach ($popularNews as $news)
                    <a href="{{ route('news.detail', $news->id) }}">
                        <div class="flex flex-col gap-2 mb-8">
                            <img src="{{ asset('storage/' . $news->image_url) }}" alt="{{ $news['title'] }}"
                                class="rounded-lg w-full h-40"></img>
                            <h2 class="text-sm font-semibold">{{ $news->title }}</h2>
                        </div>
                    </a>
                @endforeach
            </aside>
        </div>
    </article>
@endsection
