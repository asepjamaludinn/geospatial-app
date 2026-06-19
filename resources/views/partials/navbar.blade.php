<nav class="bg-white border-b border-gray-100 font-sans z-40 sticky top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-medium tracking-tighter text-gray-900 hover:text-gray-500 transition-colors">
                    Asep Jamaludin.<sup class="text-[0.6rem] font-medium ml-0.5">TM</sup>
                </a>
            </div>

            <div class="hidden md:flex space-x-8 items-center mt-1">
                <a href="{{ route('home') }}" class="text-sm font-medium tracking-wide uppercase {{ request()->routeIs('home') ? 'text-gray-900 border-b-2 border-gray-900 pb-1' : 'text-gray-400 hover:text-gray-900 transition-colors pb-1' }}">
                    Home
                </a>
                <a href="{{ route('work') }}" class="text-sm font-medium tracking-wide uppercase {{ request()->routeIs('work') ? 'text-gray-900 border-b-2 border-gray-900 pb-1' : 'text-gray-400 hover:text-gray-900 transition-colors pb-1' }}">
                    Work
                </a>
                <a href="{{ route('map') }}" class="text-sm font-medium tracking-wide uppercase {{ request()->routeIs('map') ? 'text-gray-900 border-b-2 border-gray-900 pb-1' : 'text-gray-400 hover:text-gray-900 transition-colors pb-1' }}">
                    Live Map
                </a>
            </div>

            <div class="flex md:hidden items-center">
                <button id="mobile-menu-btn" class="text-gray-900 hover:text-gray-500 focus:outline-none transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>
            
        </div>
    </div>
</nav>

<div id="mobile-menu" class="premium-menu flex flex-col p-8 justify-between">
    <div class="flex flex-col">
        
        <div class="flex justify-end mb-10">
            <button id="mobile-menu-close" class="text-white hover:text-gray-400 focus:outline-none p-1 rounded-full hover:bg-white/10 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <div class="text-gray-500 border-b border-gray-800 uppercase text-xs mb-8 pb-3 tracking-widest font-semibold">
            Navigation
        </div>
        
        <div class="flex flex-col gap-6 text-4xl font-light tracking-tight mt-2">

            <div class="menu-item flex items-center group relative">
                <div class="w-2 h-2 bg-white rounded-full absolute -left-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 {{ request()->routeIs('home') ? 'opacity-100' : '' }}"></div>
                <a href="{{ route('home') }}" class="text-white hover:text-gray-300 transition-colors">
                    Home
                </a>
            </div>
            
            <div class="menu-item flex items-center group relative">
                <div class="w-2 h-2 bg-white rounded-full absolute -left-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 {{ request()->routeIs('work') ? 'opacity-100' : '' }}"></div>
                <a href="{{ route('work') }}" class="text-white hover:text-gray-300 transition-colors">
                    Work
                </a>
            </div>
            
            <div class="menu-item flex items-center group relative">
                <div class="w-2 h-2 bg-white rounded-full absolute -left-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 {{ request()->routeIs('map') ? 'opacity-100' : '' }}"></div>
                <a href="{{ route('map') }}" class="text-white hover:text-gray-300 transition-colors">
                    Live Map
                </a>
            </div>

        </div>
    </div>
</div>

<div id="menu-backdrop" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-50 hidden transition-opacity duration-500 opacity-0"></div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const btnOpen = document.getElementById('mobile-menu-btn');
        const btnClose = document.getElementById('mobile-menu-close');
        const menu = document.getElementById('mobile-menu');
        const backdrop = document.getElementById('menu-backdrop');

        function openToggle() {
            backdrop.classList.remove('hidden');
            setTimeout(() => backdrop.classList.remove('opacity-0'), 10);
            menu.classList.add('is-open');
            document.body.style.overflow = 'hidden'; 
        }

        function closeToggle() {
            backdrop.classList.add('opacity-0');
            menu.classList.remove('is-open');
            document.body.style.overflow = ''; 
            setTimeout(() => backdrop.classList.add('hidden'), 800);
        }

        btnOpen.addEventListener('click', openToggle);
        btnClose.addEventListener('click', closeToggle);
        backdrop.addEventListener('click', closeToggle);
    });
</script>
@endpush