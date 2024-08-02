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
        <div class="flex items-center space-x-4">
            <img class="w-16 h-16 rounded-full" src="https://via.placeholder.com/150" alt="Author photo">
            <div>
                <h4 class="text-xl font-bold">{{ $blog->author->name }}</h4>
                <p class="text-gray-600">{{ $blog->created_at->format('d M Y') }}</p>
            </div>
        </div>
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-2">{{ $blog->judul }}</h1>
        </div>
        <div class="mb-4">
            <p class="text-lg">{!! nl2br(e($blog->deskripsi)) !!}
            </p>
        </div>
    </div>
    <x-layout.footer></x-layout.footer>
</x-layout.app>
