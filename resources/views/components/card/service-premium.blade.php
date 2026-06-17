@props([
    'title',
    'benefits' => [],
    'icon' => null
])

<div class="relative group rounded-3xl bg-white dark:bg-slate-800 p-[1px] hover:-translate-y-2 transition-transform duration-300 shadow-sm hover:shadow-xl">
    <!-- Gradient Border (visible on hover via pseudo/opacity) -->
    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-primary via-secondary to-accent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    
    <!-- Glow Effect -->
    <div class="absolute -inset-1 rounded-3xl bg-gradient-to-br from-primary via-secondary to-accent opacity-0 group-hover:opacity-30 blur-2xl transition-opacity duration-500 z-0"></div>
    
    <!-- Inner Card Content -->
    <div class="relative h-full bg-white dark:bg-slate-800 rounded-[23px] p-8 flex flex-col z-10 overflow-hidden transition-colors duration-200">
        <!-- Subtle background pattern -->
        <div class="absolute top-0 right-0 -translate-y-4 translate-x-4 opacity-5 dark:opacity-10 group-hover:opacity-10 transition-opacity duration-500">
            <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">{!! $icon ?? '<circle cx="12" cy="12" r="10"></circle>' !!}</svg>
        </div>

        <div class="w-14 h-14 bg-slate-50 dark:bg-slate-700/50 text-primary rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-primary/10 transition-all duration-300 shadow-sm">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $icon ?? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>' !!}</svg>
        </div>

        <h3 class="text-xl font-bold font-manrope text-dark dark:text-white mb-6 group-hover:text-primary transition-colors">{{ $title }}</h3>
        
        <div class="text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-4">Key Benefits</div>
        <ul class="space-y-3 flex-1 mb-8">
            @foreach($benefits as $benefit)
            <li class="flex items-start gap-2.5 text-sm text-slate-600 dark:text-slate-300 font-medium">
                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <span>{{ $benefit }}</span>
            </li>
            @endforeach
        </ul>
        
        <div class="mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 flex items-center justify-between">
            <a href="#" class="inline-flex items-center text-sm font-bold text-primary group-hover:text-secondary transition-colors">
                Explore Service
            </a>
            <div class="w-8 h-8 rounded-full bg-slate-50 dark:bg-slate-700/50 flex items-center justify-center text-slate-400 dark:text-slate-300 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </div>
        </div>
    </div>
</div>
