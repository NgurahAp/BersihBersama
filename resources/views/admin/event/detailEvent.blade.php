@extends('admin.components.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <img src="{{ asset('images/' . $event->image) }}" alt="Post Image" class="w-full h-64 object-cover rounded-lg mb-6">
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-2">{{ $event->judul }}</h1>
            <p class="text-gray-600"><strong>Tanggal:</strong> {{ $event->created_at->format('d M Y') }}</p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Deskripsi:</strong> {{ $event->Deskripsi }}</p>
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
        <div class="flex justify-end space-x-2 mt-6">
            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Edit</a>
            <form action="" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Hapus</button>
            </form>
        </div>
    </div>
@endsection