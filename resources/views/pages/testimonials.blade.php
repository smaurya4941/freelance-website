@extends('layouts.app')

@section('title', 'Client Success Stories & Testimonials | Bizwoke')
@section('meta_description', 'Read what our clients have to say about working with Bizwoke on their custom websites, web applications, and software systems.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-slate-900 min-h-screen transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 font-semibold text-sm mb-4 uppercase tracking-wider">
                Client Success Stories
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4">
                Don't just take our word for it
            </h1>
            <p class="text-xl text-gray-500 dark:text-gray-400 max-w-3xl mx-auto">
                Discover how we've helped businesses across various industries transform their digital presence and streamline their operations.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all border border-gray-100 dark:border-slate-700 flex flex-col h-full relative group">
                
                <!-- Quote Icon Background -->
                <div class="absolute top-6 right-6 text-gray-100 dark:text-slate-700 opacity-50 group-hover:text-blue-50 dark:group-hover:text-blue-900/20 transition-colors">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                </div>

                <!-- Rating -->
                <div class="flex text-yellow-400 mb-6 relative z-10">
                    @for($i = 0; $i < $testimonial->rating; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                    @endfor
                </div>

                <!-- Feedback -->
                <p class="text-gray-600 dark:text-gray-300 italic mb-8 flex-grow relative z-10 text-lg leading-relaxed">
                    "{{ $testimonial->feedback }}"
                </p>

                <!-- Client Info -->
                <div class="flex items-center mt-auto border-t border-gray-100 dark:border-slate-700 pt-6 relative z-10">
                    <div class="flex-shrink-0">
                        @if($testimonial->photo)
                            @if(Str::startsWith($testimonial->photo, 'http'))
                                <img class="h-12 w-12 rounded-full object-cover" src="{{ $testimonial->photo }}" alt="{{ $testimonial->client_name }}">
                            @else
                                <img class="h-12 w-12 rounded-full object-cover" src="{{ Storage::url($testimonial->photo) }}" alt="{{ $testimonial->client_name }}">
                            @endif
                        @else
                            <div class="h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 font-bold text-lg">
                                {{ substr($testimonial->client_name, 0, 1) }}
                            </div>
                        @endif
                    </div>
                    <div class="ml-4">
                        <h4 class="text-base font-bold text-gray-900 dark:text-white">{{ $testimonial->client_name }}</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            {{ $testimonial->designation }}@if($testimonial->company_name && $testimonial->designation), @endif{{ $testimonial->company_name }}
                        </p>
                        @if($testimonial->project_type)
                            <p class="text-xs text-blue-600 dark:text-blue-400 mt-1 font-medium">{{ $testimonial->project_type }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $testimonials->links() }}
        </div>

        <!-- CTA -->
        <div class="mt-20 bg-blue-600 dark:bg-blue-900 rounded-3xl p-10 md:p-16 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
            
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6 relative z-10">Ready to become our next success story?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto relative z-10">Let's discuss how we can build a scalable digital solution that drives real business growth.</p>
            <a href="{{ route('estimator') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 hover:bg-gray-50 rounded-full font-bold text-lg shadow-xl hover:-translate-y-1 transition-all relative z-10">
                Get a Free Estimate
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

    </div>
</div>
@endsection
