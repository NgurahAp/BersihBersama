<!DOCTYPE html>

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

<body style="font-family: 'Inter', sans-serif;">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-500 text-white p-4 flex justify-between">
            <h1 class="text-2xl">Dashboard</h1>
            <div class="flex items-center space-x-3"> <!-- Adjusted this line -->
                @if (Auth::user()->profile_picture)
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                        class="w-8 h-8 rounded-full" /> <!-- Removed margin-top class -->
                @else
                    <img src="{{ asset('images/profil.png') }}" class="w-8 h-8 rounded-full" /> <!-- Removed margin-top class -->
                @endif
                <a href="{{ route('profile.edit') }}"
                    class="block text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">{{ Auth::user()->name }}</a>
            </div>
        </header>
        <div class="flex flex-1">
            @include('admin.components.aside')
            <!-- Konten lain di sini -->
            @yield('content')
        </div>
    </div>
</body>

</html>
