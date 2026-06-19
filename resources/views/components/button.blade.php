@props(['href' => '#', 'variant' => 'primary', 'icon' => null])

@php
    $baseClass = "inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-medium transition-all duration-300";
    
    $variants = [
        'primary' => 'bg-gray-900 text-white border border-gray-900 hover:bg-gray-800 hover:border-gray-800',
        'outline' => 'bg-transparent text-gray-700 border border-gray-300 hover:bg-gray-900 hover:text-white hover:border-gray-900',
    ];

    $classes = $baseClass . ' ' . $variants[$variant];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if($icon == 'arrow-right')
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    @endif
</a>