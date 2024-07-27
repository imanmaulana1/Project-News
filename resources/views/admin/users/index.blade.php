@extends('admin.layout')

@section('content')
    <div class="flex items-center justify-between pb-4 px-8 border-b border-gray-200">
        <h2 class="text-2xl">List Users</h2>
        <a href="{{ route('admin.users.create') }}">
            <span class="material-symbols-outlined text-4xl hover:text-blue-800">
                add
            </span>
        </a>
    </div>
    <div class="mt-4 px-8">
        <table class="min-w-full">
            <thead class="text-left text-zinc-700 ">
                <tr>
                    <th class="font-normal lg:text-sm xl:text-base pb-8">Name</th>
                    <th class="font-normal lg:text-sm xl:text-base pb-8">Email</th>
                    <th class="font-normal lg:text-sm xl:text-base pb-8">No. Phone</th>
                    <th class="font-normal lg:text-sm xl:text-base pb-8">Address</th>
                    <th class="font-normal lg:text-sm xl:text-base pb-8">Role</th>
                    <th class="font-normal lg:text-sm xl:text-base pb-8 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="pb-4">
                            <div class="flex items-center">
                                @if ($user->profile_photo)
                                    <img src="{{ Storage::url($user->profile_photo) }}" alt="avatar"
                                        class="bg-gray-300 w-6 h-6 rounded-full">
                                @else
                                    <img src="path/to/default/photo" alt="default photo" class="w-10 h-10 rounded-full">
                                @endif
                                <span class="ml-3">{{ $user->name }}</span>
                            </div>
                        </td>
                        <td class="pb-4 lg:text-sm xl:text-base">
                            {{ $user->email }}</td>
                        <td class="pb-4 lg:text-sm xl:text-base">{{ $user->phone_number }}</td>
                        <td class="pb-4 lg:text-sm xl:text-base">
                            {{ $user->address }}</td>
                        <td class="pb-4 lg:text-sm xl:text-base">{{ $user->role->name }}</td>

                        <td class="pb-4 lg:text-sm xl:text-base">
                            <div class="flex items-center justify-center space-x-4">
                                <a href="{{ route('admin.users.edit', $user->id) }}">
                                    <span
                                        class="material-symbols-outlined text-gray-500 hover:text-blue-600 hover:underline">
                                        edit
                                    </span>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
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
@endsection
