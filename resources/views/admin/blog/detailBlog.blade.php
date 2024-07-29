@extends('admin.components.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <img src="{{ asset('images/' . $blog->image) }}" alt="Post Image" class="w-full h-64 object-cover rounded-lg mb-6">
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-2">{{ $blog->judul }}</h1>
            <p class="text-gray-600"><strong>Tanggal:</strong> {{ $blog->created_at->format('d M Y') }}</p>
            <p class="text-gray-600"><strong>Author:</strong> {{ $blog->author->name }}</p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Deskripsi:</strong> {{ $blog->deskripsi }}</p>
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
