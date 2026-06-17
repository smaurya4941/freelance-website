@extends('layouts.app')

@section('title', 'Custom ERP Development | Enterprise Software Solutions')
@section('meta_description', 'Streamline your operations with custom Enterprise Resource Planning (ERP) software. Build scalable systems to manage your entire business.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-block px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 font-semibold text-sm mb-6 uppercase tracking-wider">
                Enterprise Solutions
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                Custom <span class="text-indigo-600">ERP</span> Systems
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                Connect your inventory, HR, finance, and operations into one seamless custom application designed specifically for your enterprise.
            </p>
            <a href="{{ route('home') }}#contact" class="px-8 py-3 rounded-full bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-colors shadow-lg">
                Consult with an Expert
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 dark:border-gray-700 max-w-5xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-gray-900 dark:text-white text-center">Modules We Build</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 rounded-lg flex items-center justify-center font-bold">1</div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white">Inventory & Supply Chain</h4>
                        <p class="mt-1 text-gray-600 dark:text-gray-400 text-sm">Real-time tracking, automated reordering, and warehouse management.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 rounded-lg flex items-center justify-center font-bold">2</div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white">Human Resources (HRMS)</h4>
                        <p class="mt-1 text-gray-600 dark:text-gray-400 text-sm">Payroll, attendance, performance tracking, and employee portals.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 rounded-lg flex items-center justify-center font-bold">3</div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white">Finance & Accounting</h4>
                        <p class="mt-1 text-gray-600 dark:text-gray-400 text-sm">Invoicing, expense tracking, and custom financial reporting.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 rounded-lg flex items-center justify-center font-bold">4</div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white">Business Intelligence</h4>
                        <p class="mt-1 text-gray-600 dark:text-gray-400 text-sm">Custom dashboards, predictive analytics, and KPI tracking.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
