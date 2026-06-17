@extends('layouts.app')

@section('title', 'About Us | Bizwoke')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-manrope leading-tight mb-6">
            Helping Businesses Build Better Digital Systems
        </h1>
        <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto mb-10">
            We help businesses, startups, educational institutes, and entrepreneurs create websites and software that improve operations and customer experience.
        </p>
    </div>
</section>

<!-- Your Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" alt="Our Story" class="rounded-xl shadow-lg">
            </div>
            <div>
                <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-6">Our Journey</h2>
                <div class="space-y-4 text-lg text-slate-600">
                    <p>It started with building simple websites, but we quickly realized the true value of digital systems lies deeper.</p>
                    <p>Through working with various industries, we learned the core business challenges organizations face: inefficiencies, disconnected tools, and scaling bottlenecks.</p>
                    <p>This led to a pivot. We focused our efforts entirely on solving operational problems through technology.</p>
                    <p>Today, we specialize in moving beyond the brochure and delivering custom software solutions that serve as the backbone of our clients' operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-slate-100">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold font-manrope text-slate-800 mb-4">Our Mission</h3>
                <p class="text-slate-600 text-lg">Helping organizations digitize their operations through robust, modern software.</p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-slate-100">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold font-manrope text-slate-800 mb-4">Our Vision</h3>
                <p class="text-slate-600 text-lg">Building scalable digital solutions that create measurable business impact for our clients worldwide.</p>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-12">Our Expertise</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
            @php
                $expertises = [
                    'Business Websites', 'Custom Software', 'School Systems', 'CRM Systems',
                    'ERP Solutions', 'SaaS Platforms', 'Admin Dashboards', 'Database Architecture'
                ];
            @endphp
            @foreach($expertises as $expertise)
            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 font-semibold text-slate-700 hover:bg-primary hover:text-white transition-colors duration-300">
                {{ $expertise }}
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Working Principles Section -->
<section class="py-20 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-manrope mb-12 text-center">Our Working Principles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $principles = [
                    ['title' => 'Transparency', 'desc' => 'Clients always know project progress and exactly what they are paying for.'],
                    ['title' => 'Scalability', 'desc' => 'We engineer solutions built for future growth, not just current needs.'],
                    ['title' => 'Security', 'desc' => 'Employing secure development practices to protect your critical data.'],
                    ['title' => 'Performance', 'desc' => 'Fast-loading, highly optimized applications for maximum efficiency.'],
                    ['title' => 'Long-Term Support', 'desc' => 'We provide reliable support far beyond the initial project launch.'],
                ];
            @endphp
            @foreach($principles as $principle)
            <div class="bg-slate-800 p-8 rounded-2xl">
                <h3 class="text-xl font-bold mb-3">{{ $principle['title'] }}</h3>
                <p class="text-slate-400">{{ $principle['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-manrope text-slate-800 mb-12 text-center">Technology & Tools</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @php
                $techs = [
                    'Laravel Ecosystem' => 'Laravel, Livewire, Inertia, Forge, Vapor',
                    'Frontend Development' => 'Vue.js, React, Tailwind CSS, Alpine.js',
                    'MERN Stack' => 'MongoDB, Express, React, Node.js',
                    'Backend Systems' => 'PHP, Node.js, Python, RESTful APIs, GraphQL',
                    'Databases' => 'MySQL, PostgreSQL, Redis, MongoDB',
                    'Development Tools' => 'Git, Docker, CI/CD, AWS, DigitalOcean'
                ];
            @endphp
            @foreach($techs as $title => $stack)
            <div class="border border-slate-200 p-6 rounded-xl">
                <h3 class="text-lg font-bold text-slate-800 mb-2">{{ $title }}</h3>
                <p class="text-slate-600">{{ $stack }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-primary text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold font-manrope mb-6">Let's Discuss Your Project</h2>
        <p class="text-xl text-primary-100 mb-10">Ready to transform your operations with custom software?</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-primary font-bold py-4 px-10 rounded-full hover:bg-slate-100 transition-colors shadow-lg text-lg">
            Get Free Consultation
        </a>
    </div>
</section>

@endsection
