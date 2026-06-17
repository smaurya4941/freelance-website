@extends('layouts.app')

@section('title', 'Laravel Development Services | Expert Laravel Agency')
@section('meta_description', 'Hire expert Laravel developers for custom web applications, APIs, and complex business software. We build scalable and secure Laravel solutions.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Hero Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div>
                <div class="inline-block px-4 py-1.5 rounded-full bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 font-semibold text-sm mb-6 uppercase tracking-wider">
                    Expert Laravel Development
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                    Custom <span class="text-red-600">Laravel</span> Web Applications
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    We build high-performance, secure, and scalable web applications using the Laravel framework. From complex MVPs to enterprise-grade portals.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('home') }}#contact" class="px-8 py-3 rounded-full bg-blue-600 text-white font-medium hover:bg-blue-700 transition-colors shadow-lg">
                        Start Your Project
                    </a>
                    <a href="{{ route('portfolio') }}" class="px-8 py-3 rounded-full bg-white dark:bg-gray-800 text-gray-900 dark:text-white border border-gray-200 dark:border-gray-700 font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors shadow-sm">
                        View Our Work
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-red-500 to-blue-500 rounded-[2rem] blur-lg opacity-30 dark:opacity-20"></div>
                <div class="relative bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <pre class="text-sm text-gray-800 dark:text-gray-300 font-mono overflow-x-auto"><code><span class="text-purple-600 dark:text-purple-400">Route::</span><span class="text-blue-600 dark:text-blue-400">get</span>('/success', <span class="text-orange-600 dark:text-orange-400">function</span> () {
    <span class="text-purple-600 dark:text-purple-400">return</span> <span class="text-blue-600 dark:text-blue-400">response</span>()->json([
        'status' => 'Agency Hired',
        'result' => 'Scalable Application Built',
        'framework' => 'Laravel 11.x'
    ]);
});</code></pre>
                </div>
            </div>
        </div>

        <!-- Features / Why Laravel -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Why Choose Laravel for Your Business?</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Laravel is the PHP framework for web artisans. It provides a robust structure for creating complex applications quickly and securely.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Enterprise Security</h3>
                    <p class="text-gray-600 dark:text-gray-400">Built-in protection against SQL injection, cross-site request forgery, and cross-site scripting. Your data is safe with us.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">High Performance</h3>
                    <p class="text-gray-600 dark:text-gray-400">Integrated caching systems like Redis and Memcached ensure your application loads lightning fast, even under heavy traffic.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Highly Scalable</h3>
                    <p class="text-gray-600 dark:text-gray-400">As your business grows, your application grows with it. Laravel easily integrates with AWS, Forge, and horizontal scaling tools.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="bg-blue-600 rounded-3xl p-10 md:p-16 text-center text-white relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Build Your Custom Application?</h2>
                <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Let's discuss your project requirements and see how our Laravel expertise can help you achieve your business goals.</p>
                <a href="{{ route('home') }}#contact" class="inline-block px-8 py-3 rounded-full bg-white text-blue-600 font-bold hover:bg-gray-100 transition-colors shadow-lg">
                    Schedule a Free Consultation
                </a>
            </div>
            <svg class="absolute top-0 right-0 transform translate-x-1/3 -translate-y-1/4 w-96 h-96 text-blue-500 opacity-50" fill="currentColor" viewBox="0 0 100 100"><circle cx="50" cy="50" r="50"></circle></svg>
        </div>

    </div>
</div>
@endsection
