@extends('admin.layouts.layout')

@section('header-title')
    <div class="leading-8">
        <h1 class="text-3xl font-bold">Hello, Admin</h1>
        <p class="text-gray-500">Let's start the day by managing the latest news.</p>
    </div>
@endsection

@section('content')
    <div class="flex items-center gap-4 mt-4">
        <div class="bg-gray-100 w-64 py-6 px-4 rounded-lg shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-4xl font-medium mb-1">100</h2>
                    <p class="text-sm text-gray-600">Total Articles Published</p>
                </div>
                <span class="material-symbols-outlined text-5xl text-gray-400">
                    article
                </span>
            </div>
        </div>
        <div class="bg-gray-100 w-64 py-6 px-4 rounded-lg shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-4xl font-medium mb-1">8</h2>
                    <p class="text-sm text-gray-600">Active Categories</p>
                </div>
                <span class="material-symbols-outlined text-5xl text-gray-400">
                    category
                </span>
            </div>
        </div>
        <div class="bg-gray-100 w-64 py-6 px-4 rounded-lg shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-4xl font-medium mb-1">5</h2>
                    <p class="text-sm text-gray-600">Registered Users</p>
                </div>
                <span class="material-symbols-outlined text-5xl text-gray-400">
                    person
                </span>
            </div>
        </div>
    </div>
@endsection
