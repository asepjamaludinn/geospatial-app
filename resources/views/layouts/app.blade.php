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
<body class="bg-white text-gray-900 font-sans antialiased flex flex-col min-h-screen">
    
    @include('partials.navbar')

    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-16">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p class="text-sm">&copy; {{ date('Y') }} Aplikasi Web Responsif.</p>
    </footer>

    @stack('scripts')
</body>
</html>