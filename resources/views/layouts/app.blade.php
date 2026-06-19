<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Aplikasi Peta Interaktif dan Portofolio Web Developer')">
    <title>@yield('title', 'Aplikasi Web')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased flex flex-col min-h-screen">
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex space-x-4 items-center">
                    <a href="{{ route('home') }}" class="font-bold text-xl text-blue-600">Portofolio</a>
                    <a href="{{ route('map') }}" class="text-gray-600 hover:text-blue-600 transition">Live Map</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p class="text-sm">&copy; {{ date('Y') }} Aplikasi Web Responsif.</p>
    </footer>

    @stack('scripts')
</body>
</html>