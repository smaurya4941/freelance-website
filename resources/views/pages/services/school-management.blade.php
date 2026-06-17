@extends('layouts.app')

@section('title', 'School Management Software | Educational ERP')
@section('meta_description', 'Modernize your educational institution with our custom School Management Software. Track attendance, grades, fees, and communication in one portal.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-block px-4 py-1.5 rounded-full bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-500 font-semibold text-sm mb-6 uppercase tracking-wider">
                EdTech Solutions
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                Modern <span class="text-yellow-600">School Management</span> Systems
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                Bring administrators, teachers, students, and parents together in one secure, easy-to-use platform.
            </p>
            <a href="{{ route('home') }}#contact" class="px-8 py-3 rounded-full bg-yellow-600 text-white font-medium hover:bg-yellow-700 transition-colors shadow-lg">
                Request a Demo
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 dark:border-gray-700 max-w-5xl mx-auto overflow-hidden relative">
            <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20 blur-xl"></div>
            <div class="absolute bottom-0 left-0 -mb-4 -ml-4 w-32 h-32 bg-blue-400 rounded-full opacity-20 blur-xl"></div>
            
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Core Capabilities</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 dark:text-gray-300">Automated Attendance Tracking</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 dark:text-gray-300">Fee Management & Online Payments</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 dark:text-gray-300">Examination & Gradebooks</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 dark:text-gray-300">Parent-Teacher Communication Portal</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 dark:text-gray-300">Library & Transport Management</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl border border-gray-100 dark:border-gray-600">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Why Go Custom?</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                        Many schools struggle with legacy systems that charge per student. A custom solution means you own the platform. Add unlimited students, teachers, and parents without increasing your software licensing costs.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        Furthermore, we tailor the gradebook formulas and report card designs exactly to your regional educational board requirements.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
