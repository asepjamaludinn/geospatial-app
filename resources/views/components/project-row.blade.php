@props(['work', 'index'])

@php
    $hasLink = !empty($work['link']);
    $wrapperTag = $hasLink ? 'a' : 'div';
@endphp

<{{ $wrapperTag }} 
    @if($hasLink) href="{{ $work['link'] }}" target="_blank" rel="noopener noreferrer" @else role="button" tabindex="0" @endif 
    class="project-row group relative z-10 flex flex-col md:grid md:grid-cols-12 md:items-end pt-8 md:pt-14 pb-8 md:pb-3 border-b border-gray-200 outline-none px-0 md:px-4 -mx-0 md:-mx-4 gap-2 md:gap-0 transition-colors {{ $hasLink ? 'hover:bg-gray-50/50 hover:z-50 cursor-pointer' : 'cursor-default' }}"
>
    
    <img 
        src="{{ asset($work['image']) }}" 
        alt="{{ $work['title'] }}"
        width="400"
        height="300"
        loading="lazy" 
        decoding="async"
        class="block md:hidden w-full aspect-[4/3] object-cover rounded-sm mb-4 shadow-sm"
    >

    <div class="md:col-span-3 text-sm text-gray-400 font-medium leading-none mb-1 md:mb-0 transition-colors {{ $hasLink ? 'group-hover:text-gray-900' : '' }}">
        {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}
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
        width="320"
        height="220"
        loading="lazy" 
        decoding="async"
        class="hover-image fixed top-0 left-0 hidden md:block w-72 h-48 md:w-[320px] md:h-[220px] object-cover rounded-xl shadow-2xl pointer-events-none opacity-0 scale-95 rotate-0 transition-[opacity,transform] duration-500 ease-out {{ $hasLink ? 'group-hover:opacity-100 group-hover:scale-105 group-hover:-rotate-2' : '' }} z-50"
    >
</{{ $wrapperTag }}>