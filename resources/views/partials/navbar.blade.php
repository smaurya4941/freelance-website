<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)" 
     :class="{ 'shadow-sm bg-white/80 backdrop-blur-lg': scrolled, 'bg-white/50 backdrop-blur-md': !scrolled }" 
     class="sticky top-0 z-50 transition-all duration-300 border-b border-white/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Left: Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex flex-col justify-center gap-0 group">
                    <span class="font-manrope font-bold text-xl text-dark tracking-tight leading-tight group-hover:text-primary transition-colors">Sachin Maurya</span>
                    <span class="text-[11px] font-medium text-slate-500 tracking-widest uppercase leading-tight">Web Solutions</span>
                </a>
            </div>

            <!-- Center: Desktop Menu -->
            <div class="hidden md:flex md:items-center md:justify-center flex-1 space-x-1 lg:space-x-4 px-8">
                <a href="{{ url('/') }}#services" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-dark hover:bg-slate-50 rounded-md transition-all duration-200">Services</a>
                <a href="{{ route('portfolio') }}" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-dark hover:bg-slate-50 rounded-md transition-all duration-200">Portfolio</a>
                <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-dark hover:bg-slate-50 rounded-md transition-all duration-200">About</a>
                <a href="{{ url('/') }}#blog" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-dark hover:bg-slate-50 rounded-md transition-all duration-200">Blog</a>
                <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-dark hover:bg-slate-50 rounded-md transition-all duration-200">Contact</a>
            </div>

            <!-- Right: CTA -->
            <div class="hidden md:flex md:items-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg shadow-primary/20 shadow-lg hover:shadow-primary/40 hover:-translate-y-0.5 transition-all">Get Consultation</a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary transition-colors" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg x-show="open" style="display: none;" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         style="display: none;" 
         class="md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-xl border-b border-slate-200 shadow-xl">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="{{ url('/') }}#services" class="block px-3 py-2.5 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-primary/5 transition-colors">Services</a>
            <a href="{{ route('portfolio') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-primary/5 transition-colors">Portfolio</a>
            <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-primary/5 transition-colors">About</a>
            <a href="{{ url('/') }}#blog" class="block px-3 py-2.5 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-primary/5 transition-colors">Blog</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-md text-base font-medium text-slate-700 hover:text-primary hover:bg-primary/5 transition-colors">Contact</a>
            <div class="pt-4">
                <a href="{{ route('contact') }}" class="flex w-full justify-center px-4 py-2 bg-primary text-white text-base font-medium rounded-lg shadow-primary/20 shadow-lg hover:shadow-primary/40 transition-all">Get Consultation</a>
            </div>
        </div>
    </div>
</nav>
