<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="@yield('meta_description', 'Aplikasi Peta Interaktif dan Portofolio')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Asep Jamaludin">
    <title>@yield('title', 'Aplikasi Web')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ url('/sitemap.xml') }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Portofolio | Asep Jamaludin')">
    <meta property="og:description" content="@yield('meta_description', 'Aplikasi Peta Interaktif dan Portofolio')">
    <meta property="og:image" content="{{ asset('images/asep.webp') }}"> 
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Portofolio | Asep Jamaludin')">
    <meta name="twitter:description" content="@yield('meta_description', 'Aplikasi Peta Interaktif dan Portofolio')">
    <meta name="twitter:image" content="{{ asset('images/asep.webp') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white text-gray-900 font-sans antialiased flex flex-col min-h-screen">
    
    @include('partials.navbar')

    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-16">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>