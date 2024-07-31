@php
    use Carbon\Carbon;
@endphp
<x-layout.app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-layout.navbar>
        <x-slot:home>{{ route('dashboard') }}</x-slot:home>
        <x-slot:about>{{ route('dashboard') }}</x-slot:about>
    </x-layout.navbar>
    <div class="max-w-4xl py-20 mx-auto p-6 bg-white rounded-lg shadow-md">
        <img src="{{ asset('images/' . $event->image) }}" alt="Post Image"
            class="w-full h-64 object-cover rounded-lg mb-6">
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-2">{{ $event->judul }}</h1>
            <p class="text-gray-600"><strong>Tanggal:</strong> {{ Carbon::parse($event->event_date)->format('d F Y') }}
            </p>
        </div>
        <div class="mb-4">
            <p class="text-lg">{{ $event->deskripsi }}</p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Alamat:</strong> {{ $event->alamat }}</p>
            <p class="text-lg"><strong>Kota:</strong> {{ $event->kota }}</p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Google Maps:</strong> <a href="{{ $event->gmaps }}" target="_blank"
                    class="text-blue-500 underline">Lihat di Google Maps</a></p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Volunteer:</strong> {{ $event->volunteer }}</p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Partisipan:</strong> {{ $event->partisipan }}</p>
        </div>
        <div class="flex justify-center space-x-2 mt-6">
            <div class="flex items-center justify-center mt-auto">
                <a href=""
                    class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm md:text-m py-4 px-8 bg-green-400 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full">
                    Ikuti Kegiatan
                </a>
            </div>
        </div>
    </div>
    <x-layout.footer></x-layout.footer>
</x-layout.app>