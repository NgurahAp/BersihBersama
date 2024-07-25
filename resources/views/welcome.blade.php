<!doctype html>
<html class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body style=" font-family: 'Inter', sans-serif;">

    <header id="home" class="flex  h-screen items-center"
        style="background-image: url('{{ asset('images/welcome3.jpg') }}'); background-size: cover; background-position: center; height: 80vh">
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

        <div class="h-full  flex items-center bg-black bg-opacity-70  " style="width:42%">
            <div class="pl-10">
                <h1 class="text-green-300 text-7xl font-extrabold ">BersihBersama</h1>
                <h2 class="text-white font-medium text-2xl pt-3 pb-8 pr-10">Laporkan keluhan Anda terkait pencemaran
                    lingkungan melalui
                    platform
                    Bersih Bersama.<h2>
                        <a href="https://forms.gle/KwDTPWR9pQYnebBm7"
                            class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm md:text-m py-4 px-8 bg-green-600 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                            target="_blank">
                            Masuk
                        </a>
            </div>

        </div>
    </header>

    {{-- About Us --}}

    <div id="about" class=" h-[80vh] py-14 px-16">
        <div>
            <h1 class="text-black text-5xl font-bold ">Selamat datang di Gerakan BersihBersama!</h1>
            <h1 class="text-black text-2xl font-normal pb-10">Kami hadir untuk mengajak dan memotivasi masyarakat untuk
                berpartisipasi dalam menjaga kebersihan
                lingkungan sekitar kita.</h1>
            <div>
                <div class="flex items-center justify-center" data-aos="zoom-out" data-aos-duration="100">
                    <div
                        class="w-full bg-white border m-5 border-white rounded-xl dark:bg-gray-800 dark:border-gray-700">
                        <div
                            class="w-12 h-12 p-2 border-2 bg-slate-200 border-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600 mb-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 53 53" id="announcement">
                                <path fill="currentColor"
                                    d="M7.47 44.6a1 1 0 0 0 1 .84h3.36a1 1 0 0 0 .76-.36 1 1 0 0 0 .23-.8l-2.09-12.72H11.95c15.2 1.39 21.82 10.3 21.88 10.38a1 1 0 0 0 .82.42.79.79 0 0 0 .3-.05 1 1 0 0 0 .7-.95V30.21h2.09a1 1 0 0 0 1-1V22a1 1 0 0 0-1-1h-2.09V9.91A1 1 0 0 0 35 9a1 1 0 0 0-1.12.35c-.07.1-7.33 9.6-22.06 10.43h-6.2a3.12 3.12 0 0 0-3.12 3.08v5.58a3.11 3.11 0 0 0 2.84 3.09zm3.18-1.16H9.31L7.37 31.56h1.34zM36.74 23v5.17h-1.09V23zm-3.09-10.49v26.21c-2.94-2.88-9.56-7.91-20.83-9.11v-7.94a33.34 33.34 0 0 0 20.83-9.16zM4.5 28.44v-5.58a1.12 1.12 0 0 1 1.12-1.12h5.2v7.82h-5.2a1.12 1.12 0 0 1-1.12-1.12zm37.1-8.86a1 1 0 0 0 .91.58 1.06 1.06 0 0 0 .42-.09L49 17.33a1 1 0 0 0 .5-1.33 1 1 0 0 0-1.32-.49l-6.08 2.74a1 1 0 0 0-.5 1.33zM44 7.89l-4.5 4.91a1 1 0 0 0 .73 1.68 1 1 0 0 0 .74-.32l4.5-4.92A1 1 0 0 0 44 7.89zm5 24.51-6.07-2.75a1 1 0 1 0-.83 1.82l6.08 2.75a1 1 0 0 0 .41.09A1 1 0 0 0 49 32.4zm-9.47 4.52L44 41.84a1 1 0 0 0 .74.32 1 1 0 0 0 .67-.26 1 1 0 0 0 .06-1.41L41 35.57a1 1 0 1 0-1.47 1.35zm9.97-13.06h-6.32a1 1 0 1 0 0 2h6.32a1 1 0 0 0 0-2z">
                                </path>
                            </svg>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight pt-4 text-gray-900 dark:text-white">
                                Pengaduan
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-xl text-gray-700 dark:text-gray-400">
                            Laporkan area atau lokasi yang perlu diperhatikan kebersihannya. Ambil foto dan berikan
                            keterangan detail agar tim kebersihan dapat segera menanggapi laporan Anda.
                        </p>
                    </div>
                    <div
                        class="w-full bg-white border m-5 border-white rounded-xl dark:bg-gray-800 dark:border-gray-700">
                        <div
                            class="w-12 h-12 p-2 border-2 bg-slate-200 border-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600 mb-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" id="information">
                                <path fill="currentColor"
                                    d="M288 448V192h-96v16h32v240h-32v16h128v-16zM255.8 144.5c26.6 0 48.2-21.6 48.2-48.2s-21.6-48.2-48.2-48.2-48.2 21.6-48.2 48.2 21.6 48.2 48.2 48.2z">
                                </path>
                            </svg>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight pt-4 text-gray-900 dark:text-white">
                                Informasi
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-xl text-gray-700 dark:text-gray-400">
                            Temukan informasi terbaru tentang kegiatan yang berlangsung di komunitas ini, seperti event
                            membersihkan lingkungan atau pemberian edukasi tentang pentingnya menjaga kebersihan.
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center" data-aos="zoom-out" data-aos-duration="1000">
                    <div
                        class="w-full bg-white border m-5 border-white rounded-xl dark:bg-gray-800 dark:border-gray-700">
                        <div
                            class="w-12 h-12 p-2 border-2 bg-slate-200 border-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600 mb-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                            </svg>

                            </svg>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight pt-4 text-gray-900 dark:text-white">
                                Tips dan kampanye
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-xl text-gray-700 dark:text-gray-400">
                            Pelajari tips-tips praktis dan mudah untuk menjaga kebersihan di sekitar Anda, serta ikuti
                            kampanye kebersihan untuk mendukung gerakan BersihBersama.
                        </p>
                    </div>
                    <div
                        class="w-full bg-white border m-5 border-white rounded-xl dark:bg-gray-800 dark:border-gray-700">
                        <div
                            class="w-12 h-12 p-2 border-2 bg-slate-200 border-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600 mb-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                            </svg>

                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight pt-4 text-gray-900 dark:text-white">
                                Informasi
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-xl text-gray-700 dark:text-gray-400">
                            Temukan informasi terbaru tentang kegiatan yang berlangsung di komunitas ini, seperti event
                            membersihkan lingkungan atau pemberian edukasi tentang pentingnya menjaga kebersihan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Event --}}

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
                        <div
                            class="flex flex-col w-2/5 m-5 items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full h-80 rounded-t-lg md:rounded-none md:rounded-b-lg"
                                src="images/welcome3.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal w-full">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Judul
                                </h5>
                                <p class=" font-bold text-gray-700 dark:text-gray-400">
                                    Alamat
                                </p>
                                <p class=" font-normal text-gray-700 dark:text-gray-400">
                                    Deskripsi
                                </p>
                                <a href="{{ route('login') }}"
                                    class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                    Lihat detail
                                </a>

                            </div>
                        </div>
                        <div
                            class="flex flex-col w-2/5 m-5 items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full h-80 rounded-t-lg md:rounded-none md:rounded-b-lg"
                                src="images/welcome.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal w-full">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Judul
                                </h5>
                                <p class=" font-bold text-gray-700 dark:text-gray-400">
                                    Alamat
                                </p>
                                <p class=" font-normal text-gray-700 dark:text-gray-400">
                                    Deskripsi
                                </p>
                                <a href="{{ route('login') }}"
                                    class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                    Lihat detail
                                </a>

                            </div>
                        </div>
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

    {{-- blog --}}

    <div id="blog" class="h-[60vh] py-14 px-16">
        <div class="flex flex-col h-full">
            <div class="items-center justify-center">
                <h1 class="text-black text-5xl pb-2 font-bold text-center">Blog</h1>
                <h1 class="text-black text-2xl font-light pb-8 text-center">Temukan beragam informasi dan tips menarik
                    seputar menjaga lingkungan dan kegiatan BersihBersama.!</h1>
                <div>
                    <div class="flex items-center justify-center flex-wrap" data-aos="zoom-out"
                        data-aos-duration="1000">
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
                                <span class="text-sm text-gray-500 dark:text-gray-400">July 24, 2024</span>
                            </div>
                            <a href="{{ route('login') }}">
                                <h5 class="mb-2 pt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <div class="flex justify-between">
                                <div class="flex items-center">
                                    <img src="https://via.placeholder.com/40" alt="Profile Image"
                                        class="w-10 h-10 rounded-full mr-2">
                                    <h1 class="text-lg font-medium text-gray-900 dark:text-white">Admin</h1>
                                </div>
                                <a href="{{ route('login') }}"
                                    class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                    Selengkapnya ->
                                </a>
                            </div>
                        </div>
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
                                <span class="text-sm text-gray-500 dark:text-gray-400">July 24, 2024</span>
                            </div>
                            <a href="{{ route('login') }}">
                                <h5 class="mb-2 pt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                chronological order.
                            </p>
                            <div class="flex justify-between">
                                <div class="flex items-center">
                                    <img src="https://via.placeholder.com/40" alt="Profile Image"
                                        class="w-10 h-10 rounded-full mr-2">
                                    <h1 class="text-lg font-medium text-gray-900 dark:text-white">Admin</h1>
                                </div>
                                <a href="{{ route('login') }}"
                                    class="font-normal text-green-500 dark:text-gray-400 hover:underline">
                                    Selengkapnya ->
                                </a>
                            </div>
                        </div>
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

    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Column 1: Logo -->
            <div>
                <h2 class="text-2xl font-bold mb-4">BersihBersama</h2>
                <h2 class="pt-20 font-thin">© 2023 BersihBersama. All Rights Reserved.</h2>
            </div>
            <!-- Column 2: Sumber Daya -->
            <div>
                <h2 class="text-lg font-bold mb-4">Sumber Daya</h2>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:underline">UBSI</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Sistem Informasi</a></li>
                </ul>
            </div>

            <!-- Column 3: Sosial Media -->
            <div>
                <h2 class="text-lg font-bold mb-4">Sosial Media</h2>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:underline">Twitter</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Instagram</a></li>
                </ul>
            </div>

            <!-- Column 4: Privacy -->
            <div>
                <h2 class="text-lg font-bold mb-4">Privacy</h2>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/ba315d3bcc.js" crossorigin="anonymous" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
