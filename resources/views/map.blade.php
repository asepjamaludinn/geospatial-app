@extends('layouts.app')

@section('title', 'Live Map Data | Web GIS')
@section('meta_description', 'Peta interaktif menampilkan data spasial titik dan garis menggunakan MapLibre GL JS dan OpenStreetMap.')

@section('content')
<div class="flex flex-col items-start w-full max-w-5xl mx-auto">
    
    <div class="w-full mb-8 md:mb-12">
        <h1 class="text-4xl md:text-6xl font-light text-gray-900 tracking-tighter leading-tight mb-4">
            Spatial Data <br> Perspectives.
        </h1>
        <p class="text-lg text-gray-500 font-light tracking-tight max-w-2xl">
            Interactive map implementation featuring custom markers, route tracing, and polygon zoning. Now with multiple basemap layers and 3D camera controls.
        </p>
    </div>
    
    <div class="flex flex-col md:flex-row gap-6 mb-6 w-full bg-gray-50 p-5 rounded-xl border border-gray-200">
        
        <div class="flex flex-col gap-3">
            <div class="flex items-center gap-1.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 12 12 17 22 12"/><polyline points="2 17 12 22 22 17"/></svg>
                <span class="text-xs font-bold tracking-widest uppercase">Map Style</span>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="btn-layer-street" class="px-4 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-black hover:text-white hover:border-black transition-all">Street</button>
                <button id="btn-layer-satellite" class="px-4 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-black hover:text-white hover:border-black transition-all">Satellite</button>
                <button id="btn-layer-dark" class="px-4 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-black hover:text-white hover:border-black transition-all">Dark Mode</button>
            </div>
        </div>

        <div class="hidden md:block w-px bg-gray-300 mt-2 mb-2"></div>

        <div class="flex flex-col gap-3">
            <div class="flex items-center gap-1.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                <span class="text-xs font-bold tracking-widest uppercase">Camera</span>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="btn-2d" class="px-4 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-black hover:text-white hover:border-black transition-all">2D Top-Down</button>
                <button id="btn-3d" class="px-4 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-black hover:text-white hover:border-black transition-all">3D Perspective</button>
            </div>
        </div>

        <div class="hidden md:block w-px bg-gray-300 mt-2 mb-2"></div>

        <div class="flex flex-col gap-3">
            <div class="flex items-center gap-1.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span class="text-xs font-bold tracking-widest uppercase">Locations</span>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="btn-campus" class="px-4 py-1.5 border border-gray-900 rounded-md text-sm font-medium text-white bg-gray-900 hover:bg-black hover:border-black transition-all shadow-sm">Zoom Campus</button>
                <button id="btn-route" class="px-4 py-1.5 border border-gray-300 rounded-md text-sm font-medium text-gray-900 bg-white hover:bg-gray-100 transition-all shadow-sm">View Route</button>
            </div>
        </div>

    </div>

    <div class="w-full relative">
        <div id="map" class="w-full h-[500px] md:h-[600px] rounded-xl border border-gray-200 shadow-lg overflow-hidden z-10"></div>
    </div>

</div>
@endsection