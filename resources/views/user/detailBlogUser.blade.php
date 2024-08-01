@php
    use Carbon\Carbon;
@endphp
<x-layout.app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-layout.navbar>
        <x-slot:home>{{ route('dashboard') }}</x-slot:home>
        <x-slot:about>{{ route('dashboard') }}</x-slot:about>
    </x-layout.navbar>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <img src="{{ asset('images/' . $blog->image) }}" alt="Post Image" class="w-full h-64 object-cover rounded-lg mb-6">
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-2">{{ $blog->judul }}</h1>
            <p class="text-gray-600"><strong>Tanggal:</strong> {{ $blog->created_at->format('d M Y') }}</p>
            <p class="text-gray-600"><strong>Author:</strong> {{ $blog->author->name }}</p>
        </div>
        <div class="mb-4">
            <p class="text-lg"><strong>Deskripsi:</strong> {!! nl2br(e($blog->deskripsi)) !!}
            </p>
        </div>
    </div>
    <x-layout.footer></x-layout.footer>
</x-layout.app>
