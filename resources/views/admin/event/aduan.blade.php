@extends('admin.components.layout')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="p-12 flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl font-bold text-center pb-2">Aduan</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Berikut aduan yang blom di approve</h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap">
                        @foreach ($aduan as $data)
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
                                    <p class=" font-normal text-gray-700 dark:text-gray-400">
                                        {{ $data->deskripsi = Str::limit($data->deskripsi, 90) }}
                                    </p>
                                    <a href="" class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                        Lihat detail
                                    </a>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
