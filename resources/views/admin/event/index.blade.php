@php
    use Carbon\Carbon;
@endphp
@extends('admin.components.layout')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class=" p-12 flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl font-bold text-center pb-2">Event</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Berikut adalah event yang sudah disetujui oleh
                    admin</h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap">
                        @foreach ($event as $data)
                            <div
                                class="flex flex-col w-2/5 m-5 items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full h-80 rounded-t-lg md:rounded-none md:rounded-b-lg"
                                    src="{{ url('images/' . $data->image) }}" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal w-full">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $data->judul }}
                                    </h5>
                                    <p class=" font-bold text-gray-700 dark:text-gray-400">
                                        {{ $data->kota }}
                                    </p>
                                    <p class="text-gray-600">
                                        {{ Carbon::parse($data->event_date)->format('d F Y') }}</p>

                                    <p class=" font-normal text-gray-700 dark:text-gray-400">
                                        {{ $data->deskripsi = Str::limit($data->deskripsi, 90) }}
                                    </p>
                                    <a href="detailEvent/{{ $data->id }}"
                                        class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                        Lihat detail
                                    </a>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <div class="fixed bottom-10 right-10">
            <a href="{{ route('event.add') }}"
                class="flex bg-blue-500 justify-center items-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                <h1 class="pr-2">Crate Event</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

            </a>
        </div>
    </section>
@endsection
