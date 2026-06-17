@extends('layouts.app')

@section('title', $project['title'] . ' | Case Study | Bizwoke')

@section('content')
<!-- Hero Section -->
<section class="relative bg-slate-900 text-white pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-20">
        <img src="{{ $project['image'] }}" alt="Background" class="w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/90 to-slate-900/80 z-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="max-w-4xl">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center text-primary-400 hover:text-white transition-colors mb-8 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Portfolio
            </a>
            
            <div class="flex items-center gap-3 mb-6">
                <span class="bg-primary/20 text-primary-300 border border-primary/30 px-3 py-1 rounded-full text-sm font-bold uppercase tracking-wider">
                    {{ $project['industry'] }}
                </span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-manrope leading-tight mb-6">
                {{ $project['title'] }}
            </h1>
            
            <div class="flex flex-wrap gap-6 text-slate-300 mt-8">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span><strong>Duration:</strong> {{ $project['duration'] }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    <span><strong>Tech:</strong> {{ implode(', ', array_keys($project['technologies'])) }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Story -->
            <div class="lg:col-span-8">
                
                <!-- Business Problem -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-6 flex items-center gap-3">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        The Business Problem
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                        {{ $project['overview'] }}
                    </p>
                </div>

                <!-- Proposed Solution -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-6 flex items-center gap-3">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        Proposed Solution
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        {{ $project['solution'] }}
                    </p>
                    
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                        <div class="bg-slate-800 px-8 py-4">
                            <h3 class="text-white font-bold text-lg">Features Implemented</h3>
                        </div>
                        <div class="p-8">
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach($project['features'] as $feature => $desc)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <div>
                                        <strong class="block text-slate-800">{{ $feature }}</strong>
                                        <span class="text-sm text-slate-600">{{ $desc }}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Screenshots -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-8">System Interface</h2>
                    <div class="space-y-8">
                        <div class="rounded-xl overflow-hidden shadow-lg border border-slate-200">
                            <div class="bg-slate-800 px-4 py-2 flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                <span class="text-xs text-slate-400 ml-2">Desktop View</span>
                            </div>
                            <img src="{{ $project['screenshots']['desktop'] }}" alt="Desktop View" class="w-full">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="rounded-xl overflow-hidden shadow-lg border border-slate-200">
                                <div class="bg-slate-800 px-4 py-2 text-center">
                                    <span class="text-xs text-slate-400">Tablet View</span>
                                </div>
                                <img src="{{ $project['screenshots']['tablet'] }}" alt="Tablet View" class="w-full">
                            </div>
                            <div class="rounded-xl overflow-hidden shadow-lg border border-slate-200 mx-auto max-w-[250px]">
                                <div class="bg-slate-800 px-4 py-2 text-center rounded-t-xl">
                                    <span class="text-xs text-slate-400">Mobile View</span>
                                </div>
                                <img src="{{ $project['screenshots']['mobile'] }}" alt="Mobile View" class="w-full">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sidebar -->
            <div class="lg:col-span-4 space-y-8">
                
                <!-- Technology Stack -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    <h3 class="text-2xl font-bold font-manrope text-slate-800 mb-6 flex items-center gap-3">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        Technology Stack
                    </h3>
                    <div class="space-y-6">
                        @foreach($project['technologies'] as $tech => $reason)
                        <div>
                            <span class="inline-block bg-slate-100 text-slate-800 font-bold px-3 py-1 rounded-md text-sm mb-2">
                                {{ $tech }}
                            </span>
                            <p class="text-sm text-slate-600">{{ $reason }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Outcomes -->
                <div class="bg-primary text-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-2xl font-bold font-manrope mb-6 flex items-center gap-3">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        Outcome
                    </h3>
                    <ul class="space-y-4 text-base">
                        @foreach($project['results'] as $result)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>{{ $result }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="py-20 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-12">Related Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedProjects as $related)
            <a href="{{ route('portfolio.details', $related['slug']) }}" class="group block bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all duration-300">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-bold text-primary uppercase tracking-wider block mb-2">{{ $related['industry'] }}</span>
                    <h3 class="text-xl font-bold text-slate-800 group-hover:text-primary transition-colors">{{ $related['title'] }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-primary text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold font-manrope mb-6">Interested in a similar solution?</h2>
        <p class="text-xl text-primary-100 mb-10">Let's discuss how we can engineer a custom system for your operations.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-primary font-bold py-4 px-10 rounded-full hover:bg-slate-100 transition-colors shadow-lg text-lg">
            Get Free Consultation
        </a>
    </div>
</section>

@endsection
