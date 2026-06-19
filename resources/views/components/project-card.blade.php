@props(['work', 'index'])

@php
    $hasLink = !empty($work['link']);
    $wrapperTag = $hasLink ? 'a' : 'div';
@endphp

<div class="flex flex-col group {{ $hasLink ? 'cursor-pointer' : 'cursor-default' }} {{ $index % 2 !== 0 ? 'md:mt-48' : '' }}">
    
    <{{ $wrapperTag }} 
        @if($hasLink) href="{{ $work['link'] }}" target="_blank" rel="noopener noreferrer" @endif 
        class="overflow-hidden rounded-xl bg-gray-100 mb-6 block relative outline-none"
    >
        <img 
            src="{{ asset($work['image']) }}" 
            alt="{{ $work['title'] }}"
            width="400"
            height="300"
            loading="lazy" 
            decoding="async"
            class="w-full object-cover aspect-[4/3] transition-transform duration-700 ease-out {{ $hasLink ? 'group-hover:scale-105' : '' }}"
        >
    </{{ $wrapperTag }}>
    
    <div class="flex justify-between items-start">
        <{{ $wrapperTag }} 
            @if($hasLink) href="{{ $work['link'] }}" target="_blank" rel="noopener noreferrer" @endif 
            class="text-3xl md:text-4xl font-normal text-gray-900 flex items-center gap-2 outline-none {{ $hasLink ? 'group-hover:text-gray-600 transition-colors' : '' }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 md:w-8 md:h-8 transition-transform duration-300 {{ $hasLink ? 'group-hover:translate-x-1 group-hover:-translate-y-1' : '' }}">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
            {{ $work['title'] }}
        </{{ $wrapperTag }}>

        <div class="flex flex-col items-end text-[0.65rem] md:text-xs text-gray-500 font-normal tracking-[0.15em] uppercase text-right leading-relaxed pt-1">
            @foreach($work['tags'] as $tag)
                <span>{{ $tag }}</span>
            @endforeach
        </div>
    </div>

</div>