@extends('admin.layout')

@section('content')
    <h1 class="text-2xl mb-4">Account Settings</h1>
    <div class="container px-4 py-8 rounded-lg bg-gray-100 shadow-md max-w-2xl">
        <div class="w-full flex justify-between">
            <h2 class="text-xl">Profile Details</h2>
            <span>Role: <b>{{ ucfirst($user->role->name) }}</b></span>

        </div>
        <div class="flex gap-12 mt-8">
            <div>
                <img src="{{ Storage::url($user->profile_photo) }}" alt="avatar" class="w-52 h-52 rounded-full">
            </div>
            <div class="w-96">
                <div class="grid grid-col-1 gap-4">
                    <div class="input-group">
                        <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Name</label>
                        <div class="relative">
                            <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                                class="bg-slate-200 py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 cursor-not-allowed placeholder:text-zinc-600"
                                readonly placeholder="{{ $user->name }}">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                <span class="material-symbols-outlined text-gray-400">
                                    person
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Email address</label>
                        <div class="relative">
                            <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                                class="bg-slate-200 py-3 px-8 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 cursor-not-allowed placeholder:text-zinc-600"
                                readonly placeholder="{{ $user->email }}">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                <span class="material-symbols-outlined text-gray-400">
                                    mail
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Phone Number</label>
                        <div class="relative">
                            <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                                class="bg-slate-200 py-3 px-8 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 cursor-not-allowed placeholder:text-zinc-600"
                                readonly placeholder="{{ $user->phone_number }}">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                <span class="material-symbols-outlined text-gray-400">
                                    call
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Address</label>
                        <div class="relative">
                            <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                                class="bg-slate-200 py-3 px-8 ps-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 cursor-not-allowed placeholder:text-zinc-600"
                                readonly placeholder="{{ $user->address }}">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                <span class="material-symbols-outlined text-gray-400">
                                    home
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
