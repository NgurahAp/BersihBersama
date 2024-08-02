@php
    use Carbon\Carbon;
@endphp
<x-layout.app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-layout.navbar>
        <x-slot:home>{{ route('dashboard') }}</x-slot:home>
        <x-slot:about>{{ route('dashboard') }}</x-slot:about>
    </x-layout.navbar>
    <div id="event" class="h-min-[90vh] py-20 px-16">
        <div class="flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl font-bold text-center pb-2">Aksi</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Gabung dan eksplor lebih jauh lagi tentang
                    kegiatan
                    BersihBersama kami!</h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap" data-aos="zoom-out" data-aos-duration="1000">
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
                                    <a href="detailEventUser/{{ $data->id }}"
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
    </div>
    <x-layout.footer></x-layout.footer>
</x-layout.app>
