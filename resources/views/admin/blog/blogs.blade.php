@extends('admin.components.layout')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class=" p-12 flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl font-bold text-center pb-2">Blog</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Berikut ini adalah blog yang dibuat para admin
                </h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap">
                        @foreach ($blog as $data)
                            <div
                                class="relative flex flex-col w-2/5 m-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="absolute top-2 left-5  flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-green-400 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h8m-8 6h16" />
                                    </svg>
                                    <span class="text-sm font-medium text-green-400 dark:text-gray-400">Article</span>
                                </div>
                                <div class="absolute top-2 right-3">
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400">{{ $data->created_at->format('d F Y') }}
                                    </span>
                                </div>
                                <a href="{{ route('login') }}">
                                    <h5 class="mb-2 pt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $data->judul }}
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ $data->deskripsi = Str::limit($data->deskripsi, 90) }}
                                </p>
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                    @if ($data->author->profile_picture)
                                        <img src="{{ asset('storage/' . $data->author->profile_picture) }}"
                                            class="w-12 h-12 rounded-full mt-2" />
                                    @else
                                        <img src="{{ asset('images/profil.png') }}"
                                            class="w-12 h-12 rounded-full mt-2" />
                                    @endif
                                    <h1 class="text-lg font-medium text-gray-900 dark:text-white ml-3">
                                        {{ $data->author->name }}
                                    </h1>
                                </div>
                                    <a href="{{ route('admin.blog.detail', $data->id) }}"
                                        class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                        Selengkapnya ->
                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>

        </div>
        <div class="fixed bottom-10 right-10">
            <a href="{{ route('admin.blog.add') }}"
                class="flex bg-blue-500 justify-center items-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                <h1 class="pr-2">Create Blog</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
        </div>
    </section>
@endsection
