@php
    $featuredTestimonials = \Illuminate\Support\Facades\Cache::remember('featured_testimonials', 3600, function () {
        return \App\Models\Testimonial::where('is_hidden', false)
                            ->where('is_featured', true)
                            ->latest()
                            ->take(5)
                            ->get();
    });
@endphp

@if($featuredTestimonials->count() > 0)
<section class="py-20 bg-gray-50 dark:bg-slate-900 transition-colors duration-200 overflow-hidden" id="testimonials">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <span class="text-blue-600 dark:text-blue-400 font-bold tracking-wider uppercase text-sm mb-2 block">Social Proof</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4">
                Success Stories From Clients
            </h2>
            <p class="text-xl text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                See what business owners and technical leaders are saying about our collaboration and the digital products we've built together.
            </p>
        </div>

        <!-- Alpine.js Carousel -->
        <div x-data="{ 
                activeSlide: 0, 
                slides: {{ $featuredTestimonials->count() }}, 
                next() { this.activeSlide = this.activeSlide === this.slides - 1 ? 0 : this.activeSlide + 1 },
                prev() { this.activeSlide = this.activeSlide === 0 ? this.slides - 1 : this.activeSlide - 1 } 
            }" 
            class="relative max-w-5xl mx-auto">
            
            <!-- Slides Container -->
            <div class="relative overflow-hidden rounded-2xl shadow-xl bg-white dark:bg-slate-800 border border-gray-100 dark:border-slate-700">
                <div class="flex transition-transform duration-500 ease-in-out" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    @foreach($featuredTestimonials as $testimonial)
                    <div class="w-full flex-shrink-0">
                        <div class="p-8 md:p-16 flex flex-col md:flex-row items-center gap-10">
                            <!-- Image -->
                            <div class="w-32 h-32 md:w-48 md:h-48 flex-shrink-0 relative">
                                <div class="absolute inset-0 bg-blue-600 rounded-full blur-xl opacity-20 dark:opacity-40"></div>
                                @if($testimonial->photo)
                                    @if(Str::startsWith($testimonial->photo, 'http'))
                                        <img class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-800 relative z-10 shadow-lg" src="{{ $testimonial->photo }}" alt="{{ $testimonial->client_name }}">
                                    @else
                                        <img class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-800 relative z-10 shadow-lg" src="{{ Storage::url($testimonial->photo) }}" alt="{{ $testimonial->client_name }}">
                                    @endif
                                @else
                                    <div class="w-full h-full rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 font-bold text-4xl border-4 border-white dark:border-slate-800 relative z-10 shadow-lg">
                                        {{ substr($testimonial->client_name, 0, 1) }}
                                    </div>
                                @endif
                                <!-- Quote Badge -->
                                <div class="absolute bottom-0 right-0 bg-yellow-400 text-white p-3 rounded-full shadow-lg z-20 transform translate-x-1/4 translate-y-1/4">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 text-center md:text-left">
                                <div class="flex justify-center md:justify-start text-yellow-400 mb-4">
                                    @for($i = 0; $i < $testimonial->rating; $i++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                    @endfor
                                </div>
                                <p class="text-xl md:text-2xl text-gray-700 dark:text-gray-300 font-medium italic mb-6 leading-relaxed">
                                    "{{ $testimonial->feedback }}"
                                </p>
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">{{ $testimonial->client_name }}</h4>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium">
                                        {{ $testimonial->designation }}@if($testimonial->company_name && $testimonial->designation), @endif{{ $testimonial->company_name }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Controls -->
            <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-6 w-12 h-12 bg-white dark:bg-slate-800 rounded-full shadow-lg border border-gray-100 dark:border-slate-700 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors z-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-6 w-12 h-12 bg-white dark:bg-slate-800 rounded-full shadow-lg border border-gray-100 dark:border-slate-700 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors z-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>

            <!-- Dots -->
            <div class="flex justify-center mt-8 space-x-2">
                <template x-for="i in slides" :key="i">
                    <button @click="activeSlide = i - 1" 
                            class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                            :class="activeSlide === i - 1 ? 'bg-blue-600 w-8' : 'bg-gray-300 dark:bg-slate-600 hover:bg-gray-400 dark:hover:bg-slate-500'"></button>
                </template>
            </div>
            
            <div class="text-center mt-10">
                @php
                    $totalTestimonialsCount = \Illuminate\Support\Facades\Cache::remember('total_testimonials_count', 3600, function() {
                        return \App\Models\Testimonial::where('is_hidden', false)->count();
                    });
                @endphp
                <a href="{{ route('testimonials.index') }}" class="inline-flex items-center text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                    View all {{ $totalTestimonialsCount }} client reviews
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>
    </div>
</section>
@endif
