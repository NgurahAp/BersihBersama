@php
    use Carbon\Carbon;
@endphp
<x-layout.app>
     <x-slot:title>{{ $title }}</x-slot:title>
    <x-layout.header>
        <nav
            class="bg-white  dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-green-500 text-2xl font-semibold dark:text-white">BersihBersama</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="{{ route('login') }}"
                        class="text-black  hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Login
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-grey-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-white bg-opacity-80 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 dark:bg-gray-800 md:dark:bg-gray-900">
                        <li>
                            <a href="#home"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#event"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kegiatan</a>
                        </li>
                        <li>
                            <a href="#blog"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </x-layout.header>
    <x-layout.about></x-layout.about>
    <div id="event" class="h-[90vh] py-14 px-16">
        <div class="flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl font-bold text-center pb-2">Aksi</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Gabung dan eksplor lebih jauh lagi tentang
                    kegiatan
                    BersihBersama kami!</h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap" data-aos="zoom-out"
                        data-aos-duration="1000">
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
                                    <a href="{{ route('login') }}"
                                        class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                        Lihat detail
                                    </a>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mt-auto">
                <a href="{{ route('login') }}"
                    class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm md:text-m py-4 px-8 bg-green-400 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full">
                    Kegiatan Lainnya ->
                </a>
            </div>
        </div>
    </div>
    <div id="blog" class="h-[60vh] py-14 px-16">
        <div class="flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl pb-2 font-bold text-center">Blog</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Temukan beragam informasi dan tips menarik
                    seputar menjaga lingkungan dan kegiatan BersihBersama.!</h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap" data-aos="zoom-out"
                        data-aos-duration="1000">
                        @foreach ($blog as $data)
                            <div
                                class="relative flex flex-col w-2/5 m-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="absolute top-2 left-5  flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-green-400 dark:text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
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
                                    <h5
                                        class="mb-2 pt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $data->judul }}
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ $data->deskripsi = Str::limit($data->deskripsi, 90) }}
                                </p>
                                <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <img src="{{ url('images/profil.png') }}" alt="Profile Image"
                                            class="w-10 h-10 rounded-full mr-2">
                                        <h1 class="text-lg font-medium text-gray-900 dark:text-white">
                                            {{ $data->author->name }}</h1>
                                    </div>
                                    <a href="{{ route('login') }}"
                                        class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                        Selengkapnya ->
                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
            <div class="flex items-center justify-center mt-auto">
                <a href="{{ route('login') }}"
                    class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm md:text-m py-4 px-8 bg-green-400 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full">
                    Artikel Lainnya ->
                </a>
            </div>
        </div>
    </div>
    <x-layout.footer></x-layout.footer>
</x-layout.app>
