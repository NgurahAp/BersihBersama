 <header id="home" class="flex  h-screen items-center"
     style="background-image: url('{{ asset('images/welcome3.jpg') }}'); background-size: cover; background-position: center; height: 80vh">
     {{ $slot }}
     <div class="h-full  flex items-center bg-black bg-opacity-70  " style="width:42%">
         <div class="pl-10">
             <h1 class="text-green-300 text-7xl font-extrabold ">BersihBersama</h1>
             <h2 class="text-white font-medium text-2xl pt-3 pb-8 pr-10">Laporkan keluhan Anda terkait pencemaran
                 lingkungan melalui
                 platform
                 Bersih Bersama.<h2>
                     <a href="#event"
                         class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm md:text-m py-4 px-8 bg-green-600 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full">
                         Ikuti Kegiatan
                     </a>
         </div>
     </div>
 </header>
