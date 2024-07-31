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
        <div class="mb-6">
            <h1 class="text-4xl font-bold mb-2">{{ $event->judul }}</h1>

            <p class="">{{ $event->deskripsi }}</p>
        </div>
        <div class="mb-6">
            <h1 class="text-2xl font-semibold mb-2">Alamat</h1>
            <p class=""> {{ $event->alamat }}</p>
            <p class="">{{ $event->kota }}</p>
            <p class="">Link Maps : <a href="{{ $event->gmaps }}" target="_blank"
                    class="text-blue-500 underline">Lihat di Google Maps</a></p>
            </p>
        </div>
        <div class="mb-6">
            <h1 class="text-2xl font-semibold mb-2">Pelaksanaan Kegiatan</h1>
            <p class="">Tanggal : {{ Carbon::parse($event->event_date)->format('d F Y') }}
            <p>
            <p class="">Partisipan yang dibutuhkan : {{ $event->volunteer }}</p>
            <p class="">Partisipan saat ini :{{ $event->partisipan }}</p>

        </div>
        <div class="flex justify-center space-x-2 mt-6">
            <div class="flex items-center justify-center mt-auto">
                @if ($event->users->contains(auth()->user()->id))
                    <p>Anda sudah terdaftar dalam kegiatan ini.</p>
                @else
                    <form action="{{ route('user.event.join', $event->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm md:text-m py-4 px-8 bg-green-400 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full">
                            Ikuti Kegiatan
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <x-layout.footer></x-layout.footer>
</x-layout.app>
