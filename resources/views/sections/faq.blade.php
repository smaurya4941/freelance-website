<section class="py-24 bg-white dark:bg-slate-900 transition-colors duration-200" id="faq">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <span class="text-blue-600 dark:text-blue-400 font-bold tracking-wider uppercase text-sm mb-2 block">Common Questions</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-500 dark:text-gray-400">
                Everything you need to know about our services, pricing, and development process.
            </p>
        </div>

        <div x-data="{ active: null }" class="space-y-4">
            
            @php
                $faqs = [
                    [
                        'q' => 'How much does a custom website cost?',
                        'a' => 'Project costs vary significantly depending on complexity, features, and scale. A simple landing page starts around ₹15,000, while a custom business website ranges from ₹30,000 to ₹60,000. Complex enterprise systems (ERPs/SaaS) can exceed ₹150,000. You can use our <a href="'.route('estimator').'" class="text-blue-600 hover:underline">Project Estimator</a> to get a rough idea.'
                    ],
                    [
                        'q' => 'How long does development typically take?',
                        'a' => 'A standard business website takes 2-4 weeks. An e-commerce platform takes 4-6 weeks, and custom software or SaaS products typically take 8-12 weeks from planning to launch.'
                    ],
                    [
                        'q' => 'Do you provide ongoing support and maintenance?',
                        'a' => 'Yes! Launching the project is just the beginning. I offer ongoing support, maintenance, security updates, and performance monitoring to ensure your digital asset runs flawlessly.'
                    ],
                    [
                        'q' => 'Do you redesign existing websites?',
                        'a' => 'Absolutely. If your current website is outdated, slow, or not converting visitors into leads, we can completely overhaul the design and underlying technology while preserving your SEO rankings.'
                    ],
                    [
                        'q' => 'Can you build custom software or CRM/ERP systems?',
                        'a' => 'Yes, custom business applications are my specialty. Using robust frameworks like Laravel and React/Vue, I build tailored systems to manage inventory, sales, students, or entire business operations.'
                    ],
                    [
                        'q' => 'Do you offer SEO optimization?',
                        'a' => 'Yes, every website I build is Technical-SEO optimized from day one. This includes semantic HTML, extremely fast load times (Core Web Vitals), dynamic sitemaps, robots.txt, and advanced Schema.org markup.'
                    ],
                    [
                        'q' => 'What technologies do you use?',
                        'a' => 'For the backend, I primarily use Laravel (PHP) and Node.js. For the frontend, I specialize in Vue.js, React, Alpine.js, and Tailwind CSS. Databases include MySQL and PostgreSQL.'
                    ],
                    [
                        'q' => 'Will my website work on mobile devices?',
                        'a' => '100%. Every project is built with a mobile-first approach. Your application will look and function perfectly across smartphones, tablets, and desktop computers.'
                    ],
                    [
                        'q' => 'Do I own the code after the project is completed?',
                        'a' => 'Yes. Once the final invoice is paid, you retain 100% intellectual property rights and full ownership of the source code.'
                    ],
                    [
                        'q' => 'How do we communicate during the project?',
                        'a' => 'We maintain transparent communication via email, WhatsApp, and weekly Google Meet/Zoom calls. You will always know exactly what is being worked on and the current status of your project.'
                    ],
                    [
                        'q' => 'Can you integrate third-party APIs?',
                        'a' => 'Yes. I regularly integrate payment gateways (Stripe, Razorpay, PayPal), CRMs (Salesforce, HubSpot), email services (Mailchimp, SendGrid), and custom APIs into client applications.'
                    ],
                    [
                        'q' => 'Do you write the content for the website?',
                        'a' => 'I do not provide copywriting services by default, but I can structure the website and provide placeholders. If you need professional copywriting, I can recommend trusted partners.'
                    ],
                    [
                        'q' => 'Will I be able to update the website myself?',
                        'a' => 'Yes, I build custom Admin Dashboards tailored specifically to your needs. You will be able to easily update text, images, blogs, and products without any coding knowledge.'
                    ],
                    [
                        'q' => 'What happens if I want to add new features later?',
                        'a' => 'Because I use clean, scalable architecture (unlike drag-and-drop builders), adding new features later is straightforward. We simply scope the new requirements and build them on top of your existing foundation.'
                    ],
                    [
                        'q' => 'What are your payment terms?',
                        'a' => 'Typically, projects are split into three milestones: 40% upfront deposit to secure the schedule, 30% after design approval and primary development, and 30% upon final delivery and launch.'
                    ]
                ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700 overflow-hidden transition-colors">
                <button @click="active === {{ $index }} ? active = null : active = {{ $index }}" 
                        class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset">
                    <span class="text-lg font-bold text-gray-900 dark:text-white pr-8">{{ $faq['q'] }}</span>
                    <span class="text-blue-600 dark:text-blue-400 transform transition-transform duration-300" 
                          :class="active === {{ $index }} ? 'rotate-180' : ''">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="active === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="px-6 pb-6 text-gray-600 dark:text-gray-300 leading-relaxed">
                    {!! $faq['a'] !!}
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-16 text-center">
            <p class="text-gray-500 dark:text-gray-400 mb-4">Still have questions?</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 dark:bg-blue-900/50 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-900 transition-colors">
                Contact Me Directly
            </a>
        </div>

    </div>
</section>
