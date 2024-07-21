@extends('admin.layouts.layout')

@section('header-title')
    <h1 class="text-3xl font-bold">News</h1>
@endsection

@section('content')
    <div class="flex items-center justify-between mt-8 pb-4 border-b border-gray-200">
        <h2 class="text-xl">List Articles</h2>
        <button>
            <span class="material-symbols-outlined text-4xl hover:text-blue-800">
                add
            </span>
        </button>
    </div>
    <div class="mt-4">
        <table class="min-w-full">
            <thead class="text-left text-zinc-500 ">
                <tr>
                    <th class="font-normal text-base pb-8">Author</th>
                    <th class="font-normal text-base pb-8">Title</th>
                    <th class="font-normal text-base pb-8">Category</th>
                    <th class="font-normal text-base pb-8">Summary</th>
                    <th class="font-normal text-base pb-8">Published Date</th>
                    <th class="font-normal text-base pb-8 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dummyData as $item)
                    <tr>
                        <td class="pb-2">
                            <div class="flex items-center">
                                <div class="bg-gray-300 w-6 h-6 rounded-full"></div>
                                <span class="ml-3">{{ $item['author'] }}</span>
                            </div>
                        </td>
                        <td class="pb-2">{{ $item['title'] }}</td>
                        <td class="pb-2">{{ $item['category'] }}</td>
                        <td class="pb-2">{{ $item['content'] }}</td>
                        <td class="pb-2">21 Juli 2024</td>
                        <td class="pb-2 text-center">
                            <button class="btn-detail">
                                <span class="material-symbols-outlined text-3xl text-zinc-400 hover:text-yellow-400">
                                    visibility
                                </span>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
