@extends('user.layouts.layout')

@section('title', 'Home')

@section('content')

    {{-- Hero Section --}}
    <section>
        <div class="container mx-auto bg-gray-100 px-4 py-9 rounded-lg text-center">
            <h1 class="text-sm uppercase tracking-wide text-neutral-500 lg:text-lg">Welcome to Focus</h1>
            <h2 class="text-xl font-serif font-medium mt-4 md:max-w-xl md:mx-auto lg:max-w-3xl lg:text-3xl">Catch Up on the
                <span class="text-red-600">Trusted News</span>
                <span class="text-xl">✅</span>, Stay Ahead with <span class="text-red-600">Accurate</span> <span
                    class="text-xl">🎯</span> updates, and
                Your Daily Dose of <span class="text-red-600">Insight</span> <span class="text-xl">✨</span>
            </h2>
        </div>
    </section>


@endsection
