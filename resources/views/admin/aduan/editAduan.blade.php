@extends('admin.components.layout')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit event</h2>
            {{-- Jika ada error akan menampilkan errornya --}}
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('aduan.update', $aduan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                            Event</label>
                        <input type="text" value="{{ $aduan->status }}" name="status" id="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tulis status">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                            Event</label>
                        <input type="text" value="{{ $aduan->judul }}" name="judul" id="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tulis judul" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tulis deskripsi event">{{ $aduan->deskripsi }}</textarea>
                    </div>
                    <div class="w-full">
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" value="{{ $aduan->alamat }}" name="alamat" id="alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Alamat event" required>
                    </div>
                    <div class="w-full">
                        <label for="kota"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                        <input type="text" value="{{ $aduan->kota }}" name="kota" id="kota"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Kota Event" required>
                    </div>
                    <div class="w-full">
                        <label for="gmaps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Google
                            Maps</label>
                        <input type="text" value="{{ $aduan->gmaps }}" name="gmaps" id="gmaps"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Link" required>
                    </div>
                    <div class="w-full">
                        <label for="wagrup" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grup
                            WhatsApp</label>
                        <input type="text" value="{{ $aduan->wagrup }}" name="wagrup" id="wagrup"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Link" required>
                    </div>
                    <div class="w-full">
                        <label for="volunteer"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Volunteer</label>
                        <input type="number" value="{{ $aduan->volunteer }}" name="volunteer" id="volunteer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Jumlah Volunteer">
                    </div>
                    <div class="w-full">
                        <label for="partisipan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Partisipan</label>
                        <input type="number" value="{{ $aduan->partisipan }}" name="partisipan" id="partisipan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Jumlah partisipan">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Event</label>
                        <input type="date" value="{{ $aduan->event_date }}" class="form-control" id="date"
                            name="date">
                        @error('date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label>Image:</label>
                        <input type="file" name="image" id="image" onchange="previewImage(event)">
                        <div id="image-preview" class="mt-4">
                            @if ($aduan->image)
                                <img id="image-preview-img" src="{{ url('images/' . $aduan->image) }}"
                                    alt="Preview Gambar" style="width: 100px;">
                            @else
                                <img id="current-image" src="" style="display: none;" width="100">
                                Tidak ada gambar
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add Event
                </button>
            </form>
        </div>
    </section>

    <script>
        function previewImage(event) {
            const image = document.getElementById('image').files[0];
            const preview = document.getElementById('image-preview-img');

            if (image) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(image);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const preview = document.getElementById('image-preview-img');
            if (preview.src) {
                preview.style.display = 'block';
            }
        });
    </script>
@endsection
