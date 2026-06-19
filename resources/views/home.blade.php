@extends('layouts.app')

@section('title', 'Portofolio | Asep Jamaludin')
@section('meta_description', 'Portofolio profesional Asep Jamaludin, Software Developer dan mahasiswa Teknik Telekomunikasi.')

@section('content')
<div class="flex flex-col items-start max-w-5xl w-full">
    
    <img 
        src="{{ asset('images/asep.jpg') }}" 
        alt="Asep Jamaludin" 
        class="w-64 h-80 md:w-80 md:h-96 object-cover rounded-xl mb-10 shadow-sm"
    >

    <h1 class="max-w-4xl text-3xl md:text-4xl lg:text-[2.75rem] font-light text-gray-900 leading-[1.15] tracking-tight mb-10">
        Hi, I'm Asep, a Software Developer and Telecommunication Engineering student based in Bandung. I'm passionate about full-stack web development.
    </h1>

</div> 

@php
    $allWorks = [
        [ 
            'title' => 'Econiq', 
            'tags' => ['FRONTEND DEVELOPMENT'], 
            'image' => 'images/econiq1.png' 
        ],
        [ 
            'title' => 'Cyber Academy', 
            'tags' => ['FULL-STACK DEVELOPMENT'], 
            'image' => 'images/caweb1.png' 
        ],
        [ 
            'title' => 'Gipsy Research', 
            'tags' => ['FRONTEND DEVELOPMENT'], 
            'image' => 'images/001.png' 
        ],
        [ 
            'title' => 'Navbar Improvement', 
            'tags' => ['FRONTEND DEVELOPMENT'], 
            'image' => 'images/navbarv2.png' 
        ],
        [ 
            'title' => 'Encryptly', 
            'tags' => ['FULL-STACK DEVELOPMENT'], 
            'image' => 'images/Encryptly.png' 
        ],
        [ 
            'title' => "D'mouv", 
            'tags' => ['BACKEND DEVELOPMENT'], 
            'image' => 'images/dmouv.jpg' 
        ],
        [ 
            'title' => 'GuruJR', 
            'tags' => ['FULL-STACK DEVELOPMENT'], 
            'image' => 'images/GuruJR - iPhone 16.svg' 
        ],
        [ 
            'title' => 'CBank', 
            'tags' => ['FULL-STACK DEVELOPMENT'], 
            'image' => 'images/cbank.svg' 
        ],
        [ 
            'title' => 'Dashboard IEEE', 
            'tags' => ['FRONTEND DEVELOPMENT'], 
            'image' => 'images/ieee_2.png' 
        ],
    ];

    $visibleWorks = array_slice($allWorks, 0, 5);
@endphp
    
<div class="w-full mt-16 md:mt-24 relative">
    
    <div class="flex items-start mb-6 md:mb-10">
        <h2 class="text-7xl md:text-[9rem] lg:text-[11.5rem] font-light tracking-tighter text-gray-900 leading-none -ml-1 md:-ml-2">Works</h2>
    </div>

    <div class="flex flex-col w-full">
        @foreach($visibleWorks as $work)
        <a href="#" class="project-row group relative z-10 hover:z-50 flex flex-col md:grid md:grid-cols-12 md:items-end pt-8 md:pt-14 pb-8 md:pb-3 border-b border-gray-200 hover:bg-gray-50/50 transition-colors px-0 md:px-4 -mx-0 md:-mx-4 cursor-pointer gap-2 md:gap-0">
            
            <img 
                src="{{ asset($work['image']) }}" 
                alt="{{ $work['title'] }}"
                class="block md:hidden w-full aspect-[4/3] object-cover rounded-sm mb-4 shadow-sm"
            >

            <div class="md:col-span-3 text-sm text-gray-400 font-medium leading-none mb-1 md:mb-0 transition-colors group-hover:text-gray-900">
                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
            </div>

            <div class="md:col-span-6 text-4xl md:text-[3.5rem] font-light text-gray-900 text-left md:text-center leading-none mb-1 md:mb-0">
                {{ $work['title'] }}
            </div>

            <div class="md:col-span-3 flex flex-row flex-wrap md:flex-col gap-x-3 gap-y-1 items-start md:items-end mt-2 md:mt-0 text-[0.65rem] md:text-sm font-normal tracking-[0.15em] text-gray-500 uppercase text-left md:text-right leading-tight md:mb-1">
                @foreach($work['tags'] as $tag)
                    <span class="whitespace-nowrap">{{ $tag }}</span>
                @endforeach
            </div>

            <img 
                src="{{ asset($work['image']) }}" 
                alt="{{ $work['title'] }}"
                class="hover-image fixed top-0 left-0 hidden md:block w-72 h-48 md:w-[320px] md:h-[220px] object-cover rounded-xl shadow-2xl pointer-events-none opacity-0 scale-95 rotate-0 transition-[opacity,transform] duration-500 ease-out group-hover:opacity-100 group-hover:scale-105 group-hover:-rotate-2 z-50"
            >
            
        </a>
        @endforeach
    </div>

    @if(count($allWorks) > 4)
    <div class="flex justify-center mt-12 md:mt-16">
        <a href="/work" class="inline-flex items-center gap-2 px-6 py-3 border border-gray-300 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all duration-300">
            View All Works
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>
    @endif

</div> 
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const projectRows = document.querySelectorAll('.project-row');

        projectRows.forEach(row => {
            const img = row.querySelector('.hover-image');

            row.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX;
                const mouseY = e.clientY;

                const imgWidth = img.offsetWidth || 320;
                const imgHeight = img.offsetHeight || 220;

                img.style.left = `${mouseX - (imgWidth / 2)}px`;
                img.style.top = `${mouseY - (imgHeight / 2)}px`;
            });
        });
    });
</script>
@endpush