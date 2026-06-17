<section class="py-20 bg-blue-600 dark:bg-blue-900 relative overflow-hidden">
    <!-- Abstract Background -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <svg class="absolute left-0 top-0 h-full w-full" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,100 100,0 100,100"></polygon>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="text-white">
                <span class="inline-block px-4 py-1.5 rounded-full bg-white/20 font-semibold text-sm mb-6 uppercase tracking-wider backdrop-blur-sm">
                    Interactive Pricing
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold mb-6 leading-tight">
                    How much will your project cost?
                </h2>
                <p class="text-blue-100 text-lg mb-8 max-w-xl">
                    Skip the back-and-forth emails. Use our interactive project estimator to get an instant, rough calculation of your project cost and timeline.
                </p>
                
                <ul class="space-y-3 mb-10">
                    <li class="flex items-center text-blue-50 font-medium">
                        <svg class="w-5 h-5 mr-3 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        No email required to see price
                    </li>
                    <li class="flex items-center text-blue-50 font-medium">
                        <svg class="w-5 h-5 mr-3 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Takes less than 2 minutes
                    </li>
                    <li class="flex items-center text-blue-50 font-medium">
                        <svg class="w-5 h-5 mr-3 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Instant rough estimate provided
                    </li>
                </ul>

                <a href="{{ route('estimator') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 hover:bg-gray-50 rounded-full font-bold text-lg shadow-xl hover:-translate-y-1 transition-all">
                    Launch Estimator
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <!-- Estimator Preview visual -->
            <div class="relative">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-3xl blur-lg opacity-50"></div>
                <div class="relative bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-8 border border-white/20">
                    <div class="flex items-center space-x-2 mb-6 border-b border-gray-100 dark:border-slate-700 pb-4">
                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        <span class="ml-4 text-xs font-medium text-gray-500 dark:text-gray-400">Project Estimator v2.0</span>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <div class="h-4 w-3/4 bg-gray-200 dark:bg-slate-700 rounded mb-3"></div>
                            <div class="flex gap-2">
                                <div class="h-10 w-full bg-blue-50 dark:bg-slate-600 rounded-lg border border-blue-200 dark:border-slate-500"></div>
                                <div class="h-10 w-full bg-gray-50 dark:bg-slate-700 rounded-lg border border-gray-100 dark:border-slate-600"></div>
                            </div>
                        </div>
                        <div>
                            <div class="h-4 w-1/2 bg-gray-200 dark:bg-slate-700 rounded mb-3"></div>
                            <div class="flex gap-2">
                                <div class="h-10 w-full bg-gray-50 dark:bg-slate-700 rounded-lg border border-gray-100 dark:border-slate-600"></div>
                                <div class="h-10 w-full bg-blue-50 dark:bg-slate-600 rounded-lg border border-blue-200 dark:border-slate-500"></div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100 dark:border-slate-700 flex justify-between items-center">
                            <div class="h-4 w-20 bg-gray-200 dark:bg-slate-700 rounded"></div>
                            <div class="h-10 w-32 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>

                    <!-- Overlay to prevent clicks and drive traffic to the real page -->
                    <a href="{{ route('estimator') }}" class="absolute inset-0 z-20 flex items-center justify-center bg-white/10 backdrop-blur-[2px] rounded-2xl group cursor-pointer">
                        <span class="bg-blue-600 text-white font-bold py-3 px-6 rounded-full shadow-lg group-hover:scale-105 transition-transform">
                            Try It Now
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
