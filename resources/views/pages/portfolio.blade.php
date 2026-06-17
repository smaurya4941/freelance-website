@extends('layouts.app')

@section('title', 'Portfolio | Bizwoke')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-manrope leading-tight mb-6">
            Real Projects. Real Solutions.
        </h1>
        <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto">
            A collection of websites, platforms, and systems designed to solve real business problems.
        </p>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-20 bg-slate-50 dark:bg-slate-900 transition-colors duration-200" x-data="{ filter: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-3 mb-16">
            @php
                $filters = [
                    'all' => 'All Projects',
                    'education' => 'School Systems',
                    'retail' => 'Business Websites',
                    'saas' => 'SaaS Products',
                    'corporate' => 'Automation Tools',
                    'healthcare' => 'Web Applications',
                    'ecommerce' => 'Dashboards'
                ];
            @endphp
            @foreach($filters as $key => $label)
            <button @click="filter = '{{ $key }}'" 
                    :class="filter === '{{ $key }}' ? 'bg-primary text-white' : 'bg-white text-slate-600 hover:bg-slate-100 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700'"
                    class="px-6 py-2 rounded-full font-medium transition-colors border border-slate-200 dark:border-slate-700 shadow-sm">
                {{ $label }}
            </button>
            @endforeach
        </div>

        <!-- Case Study Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-slate-100 dark:border-slate-700 flex flex-col"
                 x-show="filter === 'all' || filter === '{{ strtolower($project['industry']) }}'"
                 x-transition>
                <div class="h-64 overflow-hidden relative group">
                    <img src="{{ $project['image'] }}" loading="lazy" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-primary bg-primary/10 px-3 py-1 rounded-full">
                            {{ $project['industry'] }}
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold font-manrope text-slate-800 dark:text-white mb-3">{{ $project['title'] }}</h3>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 flex-grow">{{ $project['description'] }}</p>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex gap-2">
                            <svg class="w-5 h-5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            <span class="text-sm text-slate-600 dark:text-slate-300"><strong>Tech:</strong> {{ $project['technology'] }}</span>
                        </div>
                        <div class="flex gap-2">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-sm text-slate-600 dark:text-slate-300"><strong>Result:</strong> {{ $project['result'] }}</span>
                        </div>
                    </div>

                    <a href="{{ route('portfolio.details', $project['slug']) }}" class="mt-auto block w-full text-center bg-slate-50 dark:bg-slate-700/50 hover:bg-primary dark:hover:bg-primary hover:text-white text-primary font-bold py-3 rounded-lg transition-colors border border-slate-100 dark:border-slate-700">
                        View Case Study
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-white dark:bg-slate-950 transition-colors duration-200 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="text-3xl font-bold font-manrope mb-6 text-dark dark:text-white">Have a similar project in mind?</h2>
        <p class="text-xl text-slate-600 dark:text-slate-400 mb-8">Let's build a solution tailored to your specific business requirements.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-slate-800 dark:hover:bg-primary/80 transition-colors shadow-lg">
            Start a Conversation
        </a>
    </div>
</section>
@endsection
