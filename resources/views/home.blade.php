@extends('layouts.app')

@section('title', 'Portofolio | Asep Jamaludin')
@section('meta_description', 'Portofolio profesional Asep Jamaludin, Software Developer.')

@section('content')
<div class="flex flex-col items-start max-w-5xl w-full">
    <img src="{{ asset('images/asep.jpg') }}" alt="Asep Jamaludin" class="w-64 h-80 md:w-80 md:h-96 object-cover rounded-xl mb-10 shadow-sm">
    <h1 class="max-w-4xl text-3xl md:text-4xl lg:text-[2.75rem] font-light text-gray-900 leading-[1.15] tracking-tight mb-10">
        Hi, I'm Asep, a Software Developer and Telecommunication Engineering student based in Bandung. I'm passionate about full-stack web development.
    </h1>
</div> 

<div class="w-full mt-16 md:mt-24 relative">
    <div class="flex items-start mb-6 md:mb-10">
        <h2 class="text-7xl md:text-[9rem] lg:text-[11.5rem] font-light tracking-tighter text-gray-900 leading-none -ml-1 md:-ml-2">Works</h2>
    </div>

    <div class="flex flex-col w-full">
        @foreach($works as $index => $work)
            <x-project-row :work="$work" :index="$index + 1" />
        @endforeach
    </div>

    @if($totalWorks > 5)
    <div class="flex justify-center mt-12 md:mt-16">
        <x-button href="{{ route('work') }}" variant="outline" icon="arrow-right">
            View All Works
        </x-button>
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
                const imgWidth = img.offsetWidth || 320;
                const imgHeight = img.offsetHeight || 220;
                img.style.left = `${e.clientX - (imgWidth / 2)}px`;
                img.style.top = `${e.clientY - (imgHeight / 2)}px`;
            });
        });
    });
</script>
@endpush