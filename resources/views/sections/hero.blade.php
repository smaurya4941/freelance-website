<section class="relative bg-slate-50 dark:bg-slate-900 overflow-hidden py-20 lg:py-32 transition-colors duration-200">
    <!-- Abstract Backgrounds for Premium Effect (Vercel/Stripe style) -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute -top-[30%] -right-[10%] w-[70%] h-[70%] rounded-full bg-gradient-to-br from-primary/20 to-accent/10 blur-3xl"></div>
        <div class="absolute bottom-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-gradient-to-tr from-secondary/20 to-primary/10 blur-3xl"></div>
        <!-- Grid Pattern overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMCwwLDAsMC4wNSkiLz48L3N2Zz4=')] bg-[length:24px_24px] opacity-50" style="mask-image: linear-gradient(to bottom, white, transparent); -webkit-mask-image: linear-gradient(to bottom, white, transparent);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Side: Content -->
            <div class="max-w-2xl">
                <!-- Trust Badges -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-600 text-xs font-semibold border border-emerald-100">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Fast Delivery
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold border border-blue-100">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> SEO Optimized
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-50 text-purple-600 text-xs font-semibold border border-purple-100">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg> Responsive Design
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-orange-50 text-orange-600 text-xs font-semibold border border-orange-100">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Ongoing Support
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-manrope text-dark tracking-tight mb-6 leading-[1.1]">
                    Build Modern <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-accent">Websites &amp; Web Applications</span> That Grow Your Business
                </h1>
                
                <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-xl">
                    Helping startups, educational institutes, businesses and entrepreneurs build scalable digital solutions with premium design and clean code.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 mb-14">
                    <a href="{{ route('estimator') }}" class="inline-flex items-center justify-center bg-blue-600 text-white rounded-md text-base px-8 py-3.5 shadow-blue-500/20 shadow-xl hover:-translate-y-1 transition-transform font-bold">Estimate Project Cost</a>
                    <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center bg-white shadow-sm hover:shadow-md hover:-translate-y-1 transition-all border border-slate-200 text-slate-800 hover:border-blue-600 hover:text-blue-600 rounded-md text-base px-8 py-3.5 font-bold">View My Work</a>
                </div>

                <!-- Statistics with Animated Counters -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 pt-8 border-t border-slate-200/60" id="stats-container">
                    <div>
                        <div class="text-3xl font-bold font-manrope text-dark flex items-baseline">
                            <span class="counter" data-target="20">0</span><span class="text-primary">+</span>
                        </div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Projects</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold font-manrope text-dark flex items-baseline">
                            <span class="counter" data-target="10">0</span><span class="text-secondary">+</span>
                        </div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Technologies</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold font-manrope text-dark flex items-baseline">
                            <span class="counter" data-target="100">0</span><span class="text-accent">%</span>
                        </div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Commitment</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold font-manrope text-dark flex items-baseline">
                            <span class="counter" data-target="3">0</span><span class="text-primary">+</span>
                        </div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Years Learning</div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Visual Mockup (Glassmorphism Dashboard) -->
            <div class="relative lg:h-[600px] flex items-center justify-center mt-12 lg:mt-0">
                <!-- Main Glass Container -->
                <div class="relative w-full max-w-md mx-auto aspect-square md:aspect-auto md:h-[500px] bg-white/40 backdrop-blur-xl border border-white/60 rounded-3xl shadow-2xl shadow-slate-200/50 p-6 overflow-hidden transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    
                    <!-- App Header fake -->
                    <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-200/50">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center shadow-lg shadow-primary/20">
                                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <div class="h-4 w-24 bg-slate-800/80 rounded-md"></div>
                                <div class="h-3 w-16 bg-slate-400/60 rounded-md mt-2"></div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="w-8 h-8 rounded-full bg-white/60"></div>
                        </div>
                    </div>

                    <!-- Grid of smaller glass cards -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Revenue Card -->
                        <div class="bg-white/60 backdrop-blur-md rounded-2xl p-5 border border-white/80 shadow-sm hover:-translate-y-1 transition-transform">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center mb-4">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="text-xs text-slate-500 font-medium mb-1">Revenue</div>
                            <div class="text-xl font-bold text-slate-800">$12,450</div>
                        </div>

                        <!-- Users Card -->
                        <div class="bg-white/60 backdrop-blur-md rounded-2xl p-5 border border-white/80 shadow-sm hover:-translate-y-1 transition-transform">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center mb-4">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <div class="text-xs text-slate-500 font-medium mb-1">Users</div>
                            <div class="text-xl font-bold text-slate-800">8,234</div>
                        </div>

                        <!-- Projects Card -->
                        <div class="col-span-2 bg-gradient-to-r from-primary to-secondary rounded-2xl p-6 shadow-lg shadow-primary/20 text-white relative overflow-hidden group hover:shadow-primary/30 transition-shadow">
                            <!-- Decorative bg inside card -->
                            <div class="absolute -right-4 -top-4 w-24 h-24 bg-white/10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500"></div>
                            
                            <div class="relative z-10 flex justify-between items-center">
                                <div>
                                    <div class="text-white/80 text-sm font-medium mb-1">Active Projects</div>
                                    <div class="text-3xl font-bold">24</div>
                                </div>
                                <div class="w-12 h-12 rounded-full border-4 border-white/20 border-t-white animate-spin" style="animation-duration: 3s;"></div>
                            </div>
                        </div>
                        
                        <!-- Analytics Chart Mockup -->
                        <div class="col-span-2 bg-white/60 backdrop-blur-md rounded-2xl p-5 border border-white/80 shadow-sm mt-1">
                            <div class="flex justify-between items-center mb-4">
                                <div class="text-xs text-slate-500 font-medium">Analytics</div>
                                <div class="text-xs font-bold text-emerald-500 flex items-center gap-1"><svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg> +14%</div>
                            </div>
                            <div class="flex items-end gap-2 h-16 w-full">
                                <div class="w-full bg-slate-200/50 rounded-t-sm h-[40%] hover:bg-primary/40 transition-colors"></div>
                                <div class="w-full bg-slate-200/50 rounded-t-sm h-[60%] hover:bg-primary/40 transition-colors"></div>
                                <div class="w-full bg-slate-200/50 rounded-t-sm h-[30%] hover:bg-primary/40 transition-colors"></div>
                                <div class="w-full bg-slate-200/50 rounded-t-sm h-[80%] hover:bg-primary/40 transition-colors"></div>
                                <div class="w-full bg-slate-200/50 rounded-t-sm h-[50%] hover:bg-primary/40 transition-colors"></div>
                                <div class="w-full bg-primary/80 rounded-t-sm h-[100%] shadow-[0_0_10px_rgba(37,99,235,0.5)]"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Abstract Element -->
                <div class="absolute -right-4 md:-right-8 top-1/4 w-20 h-20 md:w-24 md:h-24 bg-white/30 backdrop-blur-xl border border-white/50 rounded-2xl shadow-xl animate-[bounce_3s_infinite]">
                    <div class="w-full h-full bg-gradient-to-br from-accent/20 to-primary/20 rounded-2xl"></div>
                </div>
                <div class="absolute -left-4 md:-left-12 bottom-1/4 w-14 h-14 md:w-16 md:h-16 bg-white/30 backdrop-blur-xl border border-white/50 rounded-full shadow-xl animate-[bounce_4s_infinite] shadow-secondary/10" style="animation-delay: 1s;">
                     <div class="w-full h-full bg-gradient-to-tr from-secondary/20 to-accent/20 rounded-full"></div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Animated Counters Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; 

        const animateCounters = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const inc = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 15);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                    observer.unobserve(counter); // Only animate once
                }
            });
        };

        const observer = new IntersectionObserver(animateCounters, {
            threshold: 0.5
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
