<section class="py-24 bg-slate-50 dark:bg-slate-900 transition-colors duration-200 relative" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
            <div class="max-w-2xl">
                <span class="text-primary font-semibold tracking-wider uppercase text-sm flex items-center gap-2"><div class="w-8 h-0.5 bg-primary"></div> Our Expertise</span>
                <h2 class="mt-4 text-3xl sm:text-4xl font-bold font-manrope text-dark">High-Impact Digital Solutions</h2>
            </div>
            <div class="mt-6 md:mt-0">
                <x-button variant="outline" class="border-slate-200 text-slate-600 hover:border-primary hover:text-primary bg-white shadow-sm hover:shadow">View All Services</x-button>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card.service-premium 
                title="Business Websites" 
                :benefits="['Professional Online Presence', 'High Lead Generation', 'SEO Ready Architecture']"
                icon='<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>'
            />
            <x-card.service-premium 
                title="School Management System" 
                :benefits="['Automated Attendance Tracking', 'Integrated Fees Management', 'Secure Student Records']"
                icon='<path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>'
            />
            <x-card.service-premium 
                title="CRM Development" 
                :benefits="['Centralized Customer Data', 'Sales Pipeline Tracking', 'Automated Follow-ups']"
                icon='<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>'
            />
            <x-card.service-premium 
                title="ERP Development" 
                :benefits="['Resource Optimization', 'Real-time Analytics', 'Cross-department Sync']"
                icon='<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>'
            />
            <x-card.service-premium 
                title="SaaS Development" 
                :benefits="['Multi-tenant Architecture', 'Subscription Management', 'Scalable Infrastructure']"
                icon='<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>'
            />
            <x-card.service-premium 
                title="Website Optimization" 
                :benefits="['Lightning Fast Load Times', 'Core Web Vitals Fixes', 'Conversion Rate Boost']"
                icon='<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>'
            />
        </div>
    </div>
</section>
