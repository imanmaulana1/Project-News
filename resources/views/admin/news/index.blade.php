@extends('admin.layout')

@section('content')
    <div>
        <div class="flex items-center justify-between pb-4 px-8 border-b border-gray-200">
            <h2 class="text-2xl">List Articles</h2>
            <a href="{{ route('admin.news.create') }}">
                <span class="material-symbols-outlined text-4xl hover:text-blue-800">
                    add
                </span>
            </a>
        </div>
        <div class="mt-4 px-8">
            <table class="min-w-full">
                <thead class="text-left text-zinc-700 ">
                    <tr>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Image</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Title</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Category</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Region</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Published Date</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Author</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8">Viewed</th>
                        <th class="font-normal lg:text-sm xl:text-base pb-8 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $newsItem)
                        <tr>
                            <td class="pb-4">
                                <img src="{{ asset('storage/' . $newsItem->image_url) }}"
                                    alt="{{ $newsItem->image_caption }}" class="w-10 h-10 rounded-md object-cover mx-auto">
                            </td>
                            <td class="pb-4 lg:text-sm xl:text-base">
                                {{ strlen($newsItem->title) > 20 ? substr($newsItem->title, 0, 20) . '...' : $newsItem->title }}
                            </td>
                            <td class="pb-4 lg:text-sm xl:text-base">{{ $newsItem->category->name }}</td>
                            <td class="pb-4 lg:text-sm xl:text-base">
                                {{ $newsItem->region->name }}</td>
                            <td class="pb-4 lg:text-sm xl:text-base">
                                {{ \Carbon\Carbon::parse($newsItem['date'])->format('j F Y') }}</td>
                            <td class="pb-4">
                                <div class="flex items-center">
                                    @if ($newsItem->user->profile_photo)
                                        <img src="{{ Storage::url($newsItem->user->profile_photo) }}" alt="avatar"
                                            class="bg-gray-300 w-6 h-6 rounded-full">
                                    @else
                                        <img src="path/to/default/photo" alt="default photo" class="w-10 h-10 rounded-full">
                                    @endif
                                    <span class="ml-3">{{ $newsItem->user->name }}</span>
                                </div>
                            </td>
                            <td class="pb-4 lg:text-sm xl:text-base text-center">{{ $newsItem->views }}</td>
                            <td class="pb-4">
                                <div class="flex items-center justify-center space-x-4">
                                    <a href="{{ route('admin.news.edit', $newsItem->id) }}">
                                        <span
                                            class="material-symbols-outlined text-gray-500 hover:text-blue-600 hover:underline">
                                            edit
                                        </span>
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <span
                                                class="material-symbols-outlined text-gray-500 hover:text-red-600 hover:underline">
                                                delete
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">
        {{ $news->links() }}
    </div>
@endsection
