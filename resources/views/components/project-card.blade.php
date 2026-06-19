@props(['work', 'index'])

<div class="flex flex-col group cursor-pointer {{ $index % 2 !== 0 ? 'md:mt-48' : '' }}">
    <a href="#" class="overflow-hidden rounded-xl bg-gray-100 mb-6 block relative">
        <img src="{{ asset($work['image']) }}" alt="{{ $work['title'] }}" class="w-full object-cover aspect-[4/3] group-hover:scale-105 transition-transform duration-700 ease-out">
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