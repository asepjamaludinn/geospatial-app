@extends('layouts.app')

@section('title', 'Portofolio | Asep Jamaludin')
@section('meta_description', 'Portofolio profesional Asep Jamaludin, seorang Software Developer dan mahasiswa Teknik Telekomunikasi.')

@section('content')
<header class="bg-blue-600 text-white py-16 px-4 text-center">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Asep Jamaludin</h1>
        <h2 class="text-lg md:text-2xl font-light opacity-90">Software Developer | Telecommunication Engineering</h2>
    </div>
</header>

<section class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg p-6 md:p-8">
        <h3 class="text-2xl font-semibold mb-4 border-b pb-2">Tentang Saya</h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            Saya adalah mahasiswa Teknik Telekomunikasi yang berdomisili di Bandung dengan fokus kuat pada pengembangan web Full-Stack dan integrasi IoT. Saya berdedikasi untuk menciptakan solusi teknologi yang berdampak, mengutamakan performa, keamanan, dan pengalaman pengguna yang optimal di berbagai perangkat.
        </p>
        <a href="{{ route('map') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-md font-medium hover:bg-blue-700 transition">
            Lihat Demo Peta
        </a>
    </div>
</section>
@endsection