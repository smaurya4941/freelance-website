@extends('layouts.app')

@section('title', 'Custom CRM Development Services | Bizwoke')
@section('meta_description', 'Boost your sales and manage leads effectively with our custom CRM development services. Tailored to your unique business workflow.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Hero Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div>
                <div class="inline-block px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-semibold text-sm mb-6 uppercase tracking-wider">
                    Custom CRM Solutions
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                    Manage Leads & <span class="text-blue-600">Close Deals</span> Faster
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                    Stop forcing your business into off-the-shelf CRMs. We build custom Customer Relationship Management systems tailored perfectly to your unique sales process.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('home') }}#contact" class="px-8 py-3 rounded-full bg-blue-600 text-white font-medium hover:bg-blue-700 transition-colors shadow-lg">
                        Discuss Your CRM
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-[2rem] blur-lg opacity-30 dark:opacity-20"></div>
                <div class="relative bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-100 dark:border-gray-700">
                            <span class="font-bold text-gray-900 dark:text-white">Recent Leads</span>
                            <span class="text-sm text-green-500 font-medium">+12% this week</span>
                        </div>
                        <div class="flex items-center space-x-4 p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-400 font-bold">A</div>
                            <div class="flex-1">
                                <h4 class="text-sm font-bold text-gray-900 dark:text-white">Acme Corp</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Enterprise Deal</p>
                            </div>
                            <div class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Won</div>
                        </div>
                        <div class="flex items-center space-x-4 p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                            <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center text-purple-600 dark:text-purple-400 font-bold">G</div>
                            <div class="flex-1">
                                <h4 class="text-sm font-bold text-gray-900 dark:text-white">Global Tech</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SaaS Implementation</p>
                            </div>
                            <div class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Negotiation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Why a Custom CRM?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">No Per-User Fees</h3>
                    <p class="text-gray-600 dark:text-gray-400">Stop paying expensive monthly subscriptions for every employee. You own the software, allowing unlimited users without recurring licensing costs.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Exact Workflow Match</h3>
                    <p class="text-gray-600 dark:text-gray-400">Off-the-shelf CRMs dictate how you work. A custom CRM is designed around how your team already operates, reducing training time and increasing adoption.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Seamless Integrations</h3>
                    <p class="text-gray-600 dark:text-gray-400">Connect your CRM directly to your website, ERP, accounting software, and marketing tools via custom APIs for a unified business ecosystem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
