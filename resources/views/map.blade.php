@extends('layouts.app')

@section('title', 'Live Map Data | Web GIS')
@section('meta_description', 'Peta interaktif menampilkan data spasial titik dan garis menggunakan MapLibre GL JS dan OpenStreetMap.')

@push('styles')
    <link href="https://unpkg.com/maplibre-gl@3.6.2/dist/maplibre-gl.css" rel="stylesheet" />
@endpush

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-col items-center">
    <div class="w-full mb-6 text-center">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Visualisasi Data Spasial</h1>
        <p class="text-gray-500 mt-2">Menampilkan marker dan rute polylines berbasis OpenStreetMap.</p>
    </div>
    
    <div class="w-full bg-white p-2 shadow-lg rounded-xl">
        <div id="map" class="w-full h-[400px] md:h-[600px] rounded-lg"></div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/maplibre-gl@3.6.2/dist/maplibre-gl.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Inisialisasi Peta
        const map = new maplibregl.Map({
            container: 'map',
            style: {
                'version': 8,
                'sources': {
                    'osm-tiles': {
                        'type': 'raster',
                        'tiles': [
                            'https://a.tile.openstreetmap.org/{z}/{x}/{y}.png',
                            'https://b.tile.openstreetmap.org/{z}/{x}/{y}.png',
                            'https://c.tile.openstreetmap.org/{z}/{x}/{y}.png'
                        ],
                        'tileSize': 256,
                        'attribution': '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }
                },
                'layers': [
                    {
                        'id': 'osm-layer',
                        'type': 'raster',
                        'source': 'osm-tiles',
                        'minzoom': 0,
                        'maxzoom': 19
                    }
                ]
            },
            center: [107.6335, -6.9733], // Koordinat Area Bandung
            zoom: 14
        });

        // Menambahkan Kontrol Navigasi
        map.addControl(new maplibregl.NavigationControl(), 'top-right');

        map.on('load', () => {
            // 1. Menambahkan Dummy Data: Marker (Point)
            new maplibregl.Marker({ color: "#FF0000" })
                .setLngLat([107.6335, -6.9733])
                .setPopup(new maplibregl.Popup().setHTML("<b>Titik Pusat</b><br>Universitas Telkom"))
                .addTo(map);

            new maplibregl.Marker({ color: "#0000FF" })
                .setLngLat([107.6250, -6.9700])
                .setPopup(new maplibregl.Popup().setHTML("<b>Titik Kedua</b>"))
                .addTo(map);

            // 2. Menambahkan Dummy Data: Garis (LineString)
            map.addSource('route-dummy', {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'properties': {},
                    'geometry': {
                        'type': 'LineString',
                        'coordinates': [
                            [107.6250, -6.9700],
                            [107.6280, -6.9720],
                            [107.6335, -6.9733]
                        ]
                    }
                }
            });

            map.addLayer({
                'id': 'route-line',
                'type': 'line',
                'source': 'route-dummy',
                'layout': {
                    'line-join': 'round',
                    'line-cap': 'round'
                },
                'paint': {
                    'line-color': '#10B981', // Emerald 500 Tailwind
                    'line-width': 6
                }
            });
        });
    });
</script>
@endpush