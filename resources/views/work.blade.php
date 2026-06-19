@extends('layouts.app')

@section('title', 'Project | Asep Jamaludin')
@section('meta_description', 'Koleksi karya pengembangan web oleh Asep Jamaludin.')

@section('content')

@php
    $allWorks = [
        [ 'title' => 'Econiq', 'tags' => ['FRONTEND DEVELOPMENT'], 'image' => 'images/econiq1.png' ],
        [ 'title' => 'Cyber Academy', 'tags' => ['FULL-STACK DEVELOPMENT'], 'image' => 'images/caweb1.png' ],
        [ 'title' => 'Gipsy Research', 'tags' => ['FRONTEND DEVELOPMENT'], 'image' => 'images/001.png' ],
        [ 'title' => 'Navbar Improvement', 'tags' => ['FRONTEND DEVELOPMENT'], 'image' => 'images/navbarv2.png' ],
        [ 'title' => 'Encryptly', 'tags' => ['FULL-STACK DEVELOPMENT'], 'image' => 'images/Encryptly.png' ],
        [ 'title' => "D'mouv", 'tags' => ['BACKEND DEVELOPMENT'], 'image' => 'images/dmouv.jpg' ],
        [ 'title' => 'GuruJR', 'tags' => ['FULL-STACK DEVELOPMENT'], 'image' => 'images/GuruJR - iPhone 16.svg' ],
        [ 'title' => 'CBank', 'tags' => ['FULL-STACK DEVELOPMENT'], 'image' => 'images/cbank.svg' ],
        [ 'title' => 'Dashboard IEEE', 'tags' => ['FRONTEND DEVELOPMENT'], 'image' => 'images/ieee_2.png' ],
    ];
@endphp

<div class="w-full min-h-[70vh] flex flex-col items-center justify-center">
    <h1 class="text-7xl sm:text-9xl md:text-[12rem] lg:text-[15rem] font-light tracking-tighter text-gray-900 leading-none">
        Works
    </h1>
</div>

<div class="w-full max-w-7xl mx-auto pb-32 mt-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 lg:gap-x-24 gap-y-24 md:gap-y-16">
        
        @foreach($allWorks as $index => $work)
        <div class="flex flex-col group cursor-pointer {{ $index % 2 !== 0 ? 'md:mt-48' : '' }}">
            
            <a href="#" class="overflow-hidden rounded-xl bg-gray-100 mb-6 block relative">
                <img 
                    src="{{ asset($work['image']) }}" 
                    alt="{{ $work['title'] }}"
                    class="w-full object-cover aspect-[4/3] group-hover:scale-105 transition-transform duration-700 ease-out"
                >
            </a>
            
            <div class="flex justify-between items-start">
                
                <a href="#" class="text-3xl md:text-4xl font-normal text-gray-900 flex items-center gap-2 group-hover:text-gray-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 md:w-8 md:h-8 transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                    {{ $work['title'] }}
                </a>

                <div class="flex flex-col items-end text-[0.65rem] md:text-xs text-gray-500 font-normal tracking-[0.15em] uppercase text-right leading-relaxed pt-1">
                    @foreach($work['tags'] as $tag)
                        <span>{{ $tag }}</span>
                    @endforeach
                </div>

            </div>

        </div>
        @endforeach

    </div>
</div>

@endsection