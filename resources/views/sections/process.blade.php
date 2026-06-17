<section class="py-24 bg-slate-50 dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="text-secondary font-semibold tracking-wider uppercase text-sm">How We Work</span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold font-manrope text-dark dark:text-white">Proven Development Process</h2>
            <p class="mt-4 text-slate-600 dark:text-slate-400 text-lg">A systematic approach to guarantee quality and transparency from start to finish.</p>
        </div>

        @php
            $steps = [
                ['01', 'Discovery Call', 'Understanding your vision and goals.'],
                ['02', 'Requirement Analysis', 'Mapping features and architecture.'],
                ['03', 'UI Planning', 'Wireframing and visual design.'],
                ['04', 'Development', 'Agile coding and implementation.'],
                ['05', 'Testing', 'QA and performance optimization.'],
                ['06', 'Deployment', 'Secure launch to production.'],
                ['07', 'Maintenance', 'Ongoing support and updates.'],
            ];
        @endphp

        <!-- Timeline Container -->
        <div class="relative">
            <!-- Mobile Vertical Line -->
            <div class="lg:hidden absolute left-[27px] top-0 bottom-0 w-0.5 bg-slate-200 dark:bg-slate-700"></div>
            
            <!-- Desktop Horizontal Line -->
            <div class="hidden lg:block absolute top-[27px] left-[5%] right-[5%] h-0.5 bg-slate-200 dark:bg-slate-700"></div>

            <div class="flex flex-col lg:flex-row justify-between gap-8 lg:gap-4 relative z-10">
                @foreach($steps as $index => $step)
                <div class="relative flex lg:flex-col items-start lg:items-center group w-full lg:w-1/7">
                    <!-- Node -->
                    <div class="flex-shrink-0 w-14 h-14 rounded-full bg-white dark:bg-slate-800 border-4 border-slate-100 dark:border-slate-700 flex items-center justify-center font-bold font-manrope text-slate-400 dark:text-slate-500 group-hover:border-secondary group-hover:text-secondary group-hover:bg-secondary/5 transition-all duration-300 z-10 shadow-sm">
                        {{ $step[0] }}
                    </div>
                    
                    <!-- Content -->
                    <div class="ml-6 lg:ml-0 lg:mt-6 lg:text-center pt-2 lg:pt-0">
                        <h3 class="text-base font-bold text-dark dark:text-gray-100 group-hover:text-secondary transition-colors">{{ $step[1] }}</h3>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2 max-w-[200px] lg:mx-auto">{{ $step[2] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
