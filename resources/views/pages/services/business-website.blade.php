@extends('layouts.app')

@section('title', 'Premium Business Website Development | Bizwoke')
@section('meta_description', 'High-conversion, custom business websites designed to generate leads and showcase your brand authority. Fast, secure, and mobile-optimized.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-block px-4 py-1.5 rounded-full bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 font-semibold text-sm mb-6 uppercase tracking-wider">
                Web Presence
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                Websites That <span class="text-teal-600">Convert</span> Visitors into Clients
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                Your website is your 24/7 salesperson. We build custom, lightning-fast business websites that establish authority and drive measurable results.
            </p>
            <a href="{{ route('home') }}#contact" class="px-8 py-3 rounded-full bg-teal-600 text-white font-medium hover:bg-teal-700 transition-colors shadow-lg">
                Get a Website Proposal
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center">
                <div class="w-16 h-16 bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Blazing Fast Speed</h3>
                <p class="text-gray-600 dark:text-gray-400">We optimize every asset so your site loads instantly, improving both user experience and Google rankings.</p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center">
                <div class="w-16 h-16 bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Mobile Optimized</h3>
                <p class="text-gray-600 dark:text-gray-400">Over 60% of web traffic is mobile. Your site will look stunning and function perfectly on every device size.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 text-center">
                <div class="w-16 h-16 bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">SEO Foundations</h3>
                <p class="text-gray-600 dark:text-gray-400">Built with correct semantic HTML, meta tags, and schema markup to ensure search engines understand your content.</p>
            </div>
        </div>

    </div>
</div>
@endsection
