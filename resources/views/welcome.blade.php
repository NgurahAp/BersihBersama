<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body style=" font-family: 'Inter', sans-serif;">
    <header class="flex  w-screen items-center"
        style="background-image: url('{{ asset('images/welcome3.jpg') }}'); background-size: cover; background-position: center; height: 80vh">
        <nav
            class="bg-white  dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold dark:text-white">Flowbite</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="{{ route('login') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
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

    <div class="w-screen h-screen py-14 px-16">
        <div>
            <h1 class="text-black text-5xl font-bold ">Selamat datang di Gerakan BersihBersama!</h1>
            <h1 class="text-black text-2xl font-normal pb-7">Kami hadir untuk mengajak dan memotivasi masyarakat untuk
                berpartisipasi dalam menjaga kebersihan
                lingkungan sekitar kita.</h1>
            <div>
                <div class="flex items-center justify-center" data-aos="zoom-out" data-aos-duration="1000">
                    <div
                        class="w-full bg-white border m-5 border-white rounded-xl dark:bg-gray-800 dark:border-gray-700">
                        <div
                            class="w-12 h-12 p-2 border-2 border-green-600 rounded-full flex items-center justify-center">
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
                            class="w-12 h-12 p-2 border-2 border-green-600 rounded-full flex items-center justify-center">
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
            </div>
        </div>

</body>

</html>
