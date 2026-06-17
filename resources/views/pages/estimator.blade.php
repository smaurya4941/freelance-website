@extends('layouts.app')

@section('title', 'Get an Instant Project Estimate | Bizwoke')
@section('meta_description', 'Answer a few simple questions to instantly calculate a rough cost and timeline for your custom website, software, or web application project.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50 dark:bg-slate-900 min-h-screen transition-colors duration-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4 transition-colors">
                Get an Instant <span class="text-blue-600 dark:text-blue-400">Project Estimate</span>
            </h1>
            <p class="text-xl text-gray-500 dark:text-gray-400 transition-colors">
                Answer a few questions and receive a rough project cost estimate instantly.
            </p>
        </div>

        <div x-data="estimatorData()" class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl border border-gray-100 dark:border-slate-700 overflow-hidden transition-colors">
            
            <!-- Progress Bar -->
            <div class="bg-gray-100 dark:bg-slate-700 h-2 w-full relative" x-show="!showResult">
                <div class="bg-blue-600 h-2 transition-all duration-300" :style="'width: ' + ((step / 7) * 100) + '%'"></div>
            </div>
            
            <div class="px-8 pt-8 md:px-12 md:pt-12 flex justify-between items-center" x-show="!showResult">
                <span class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider bg-gray-100 dark:bg-slate-700 px-3 py-1 rounded-full" x-text="'Step ' + step + ' of 7'"></span>
            </div>

            <div class="px-8 pb-8 md:px-12 md:pb-12 pt-4">
                
                <!-- Questionnaire Area -->
                <div x-show="!showResult">
                    
                    <!-- Step 1 -->
                    <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">1. What type of project are you building?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <template x-for="option in projectTypes" :key="option.value">
                                <label class="relative flex cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.projectType === option.value ? 'border-blue-500 ring-1 ring-blue-500 dark:border-blue-400 dark:ring-blue-400' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300 dark:hover:border-slate-500'">
                                    <input type="radio" name="projectType" :value="option.value" x-model="form.projectType" class="sr-only">
                                    <span class="flex flex-1">
                                        <span class="flex flex-col">
                                            <span class="block text-sm font-medium text-gray-900 dark:text-white" x-text="option.label"></span>
                                        </span>
                                    </span>
                                    <svg x-show="form.projectType === option.value" class="h-5 w-5 text-blue-600 dark:text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div x-show="step === 2" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">2. Roughly how many pages/screens?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <template x-for="option in pageCount" :key="option.value">
                                <label class="relative flex cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.pages === option.value ? 'border-blue-500 ring-1 ring-blue-500' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300'">
                                    <input type="radio" name="pages" :value="option.value" x-model="form.pages" class="sr-only">
                                    <span class="block text-sm font-medium text-gray-900 dark:text-white" x-text="option.label"></span>
                                    <svg x-show="form.pages === option.value" class="absolute right-4 h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div x-show="step === 3" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">3. Do users need to log in / register?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <template x-for="option in booleanOptions" :key="option.value">
                                <label class="relative flex cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.auth === option.value ? 'border-blue-500 ring-1 ring-blue-500' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300'">
                                    <input type="radio" name="auth" :value="option.value" x-model="form.auth" class="sr-only">
                                    <span class="block text-sm font-medium text-gray-900 dark:text-white" x-text="option.label"></span>
                                    <svg x-show="form.auth === option.value" class="absolute right-4 h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div x-show="step === 4" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">4. Do you need a custom Admin Dashboard to manage data?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <template x-for="option in booleanOptions" :key="option.value">
                                <label class="relative flex cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.admin === option.value ? 'border-blue-500 ring-1 ring-blue-500' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300'">
                                    <input type="radio" name="admin" :value="option.value" x-model="form.admin" class="sr-only">
                                    <span class="block text-sm font-medium text-gray-900 dark:text-white" x-text="option.label"></span>
                                    <svg x-show="form.admin === option.value" class="absolute right-4 h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div x-show="step === 5" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">5. Will you be accepting payments online?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <template x-for="option in booleanOptions" :key="option.value">
                                <label class="relative flex cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.payments === option.value ? 'border-blue-500 ring-1 ring-blue-500' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300'">
                                    <input type="radio" name="payments" :value="option.value" x-model="form.payments" class="sr-only">
                                    <span class="block text-sm font-medium text-gray-900 dark:text-white" x-text="option.label"></span>
                                    <svg x-show="form.payments === option.value" class="absolute right-4 h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div x-show="step === 6" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">6. What is the overall complexity of logic/data needed?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <template x-for="option in complexityOptions" :key="option.value">
                                <label class="relative flex flex-col cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.complexity === option.value ? 'border-blue-500 ring-1 ring-blue-500' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300'">
                                    <input type="radio" name="complexity" :value="option.value" x-model="form.complexity" class="sr-only">
                                    <span class="block text-sm font-bold text-gray-900 dark:text-white mb-1" x-text="option.label"></span>
                                    <span class="block text-xs text-gray-500 dark:text-gray-400" x-text="option.desc"></span>
                                    <svg x-show="form.complexity === option.value" class="absolute top-4 right-4 h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div x-show="step === 7" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">7. What is your desired timeline?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <template x-for="option in timelineOptions" :key="option.value">
                                <label class="relative flex cursor-pointer rounded-lg border bg-white dark:bg-slate-700 p-4 shadow-sm focus:outline-none transition-colors" 
                                       :class="form.timeline === option.value ? 'border-blue-500 ring-1 ring-blue-500' : 'border-gray-200 dark:border-slate-600 hover:border-gray-300'">
                                    <input type="radio" name="timeline" :value="option.value" x-model="form.timeline" class="sr-only">
                                    <span class="block text-sm font-medium text-gray-900 dark:text-white" x-text="option.label"></span>
                                    <svg x-show="form.timeline === option.value" class="absolute right-4 h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="mt-8 flex justify-between items-center border-t border-gray-100 dark:border-slate-700 pt-6">
                        <button type="button" @click="prevStep()" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" :class="step === 1 ? 'invisible' : ''">
                            &larr; Back
                        </button>
                        <button type="button" @click="nextStep()" class="px-6 py-2 rounded-full bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition-colors shadow-sm disabled:opacity-50" :disabled="!canProceed()">
                            <span x-text="step === 7 ? 'Calculate Estimate' : 'Next Step'"></span>
                        </button>
                    </div>

                </div>

                <!-- Results Area -->
                <div x-show="showResult" style="display: none;" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                    <div class="text-center mb-10">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-2">Your Estimate is Ready</h2>
                        <p class="text-gray-500 dark:text-gray-400">Based on your selections, here is a rough estimate for your project.</p>
                    </div>

                    <div class="bg-gray-50 dark:bg-slate-700 rounded-xl p-8 mb-4 text-center border border-gray-200 dark:border-slate-600">
                        <p class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-2">Estimated Investment</p>
                        <div class="text-4xl md:text-5xl font-extrabold text-blue-600 dark:text-blue-400 mb-4" x-text="formatCurrency(estimateRange.min) + ' - ' + formatCurrency(estimateRange.max)"></div>
                        <p class="text-gray-600 dark:text-gray-300 font-medium">Estimated Timeline: <span class="font-bold text-gray-900 dark:text-white" x-text="estimateTimeline"></span></p>
                    </div>
                    
                    <p class="text-xs text-gray-400 dark:text-gray-500 text-center mb-10 italic max-w-md mx-auto">
                        * This estimate is based on common project requirements. Final pricing may vary after a detailed discovery discussion.
                    </p>

                    <div class="border-t border-gray-100 dark:border-slate-700 pt-10">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">Let's Discuss Your Project</h3>
                        
                        <form action="{{ route('contact.submit') }}" method="POST" class="max-w-xl mx-auto space-y-6">
                            @csrf
                            <input type="hidden" name="project_type" :value="form.projectType">
                            <input type="hidden" name="budget" :value="'₹' + estimateRange.min + ' - ₹' + estimateRange.max">
                            <input type="hidden" name="timeline" :value="estimateTimeline">
                            <input type="hidden" name="message" :value="generateLeadMessage()">
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name *</label>
                                    <input type="text" name="name" id="name" required class="w-full rounded-md border-gray-300 dark:border-slate-600 dark:bg-slate-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address *</label>
                                    <input type="email" name="email" id="email" required class="w-full rounded-md border-gray-300 dark:border-slate-600 dark:bg-slate-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="w-full rounded-md border-gray-300 dark:border-slate-600 dark:bg-slate-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="company" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Company Name</label>
                                    <input type="text" name="company" id="company" class="w-full rounded-md border-gray-300 dark:border-slate-600 dark:bg-slate-700 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>
                            
                            <div class="text-center pt-4">
                                <button type="submit" class="w-full md:w-auto px-10 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full shadow-lg transition-colors">
                                    Send Inquiry
                                </button>
                                <button type="button" @click="resetEstimator()" class="block w-full text-center mt-4 text-sm text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                    Recalculate Estimate
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
function estimatorData() {
    return {
        step: 1,
        showResult: false,
        estimateRange: { min: 0, max: 0 },
        estimateTimeline: '',
        form: {
            projectType: null,
            pages: null,
            auth: null,
            admin: null,
            payments: null,
            complexity: null,
            timeline: null
        },
        
        projectTypes: [
            { value: 'landing-page', label: 'Landing Page', basePrice: 15000, weeks: 1 },
            { value: 'business-website', label: 'Business Website', basePrice: 30000, weeks: 2 },
            { value: 'portfolio', label: 'Portfolio Website', basePrice: 20000, weeks: 2 },
            { value: 'e-commerce', label: 'E-Commerce Website', basePrice: 60000, weeks: 4 },
            { value: 'school-management', label: 'School Management System', basePrice: 80000, weeks: 6 },
            { value: 'crm', label: 'CRM System', basePrice: 75000, weeks: 5 },
            { value: 'erp', label: 'ERP Solution', basePrice: 150000, weeks: 10 },
            { value: 'saas', label: 'SaaS Product', basePrice: 120000, weeks: 8 },
            { value: 'custom-app', label: 'Custom Web Application', basePrice: 60000, weeks: 4 }
        ],
        
        pageCount: [
            { value: '1-5', label: '1 - 5 Pages', add: 0, weeksAdd: 0 },
            { value: '5-10', label: '5 - 10 Pages', add: 10000, weeksAdd: 1 },
            { value: '10-20', label: '10 - 20 Pages', add: 25000, weeksAdd: 2 },
            { value: '20+', label: '20+ Pages', add: 50000, weeksAdd: 4 }
        ],
        
        booleanOptions: [
            { value: 'yes', label: 'Yes' },
            { value: 'no', label: 'No' }
        ],
        
        complexityOptions: [
            { value: 'basic', label: 'Basic', desc: 'Standard features, simple data', mult: 1.0, weeksMult: 1.0 },
            { value: 'medium', label: 'Medium', desc: 'Some custom logic, 3rd party APIs', mult: 1.3, weeksMult: 1.2 },
            { value: 'advanced', label: 'Advanced', desc: 'Complex algorithms, heavy data', mult: 1.8, weeksMult: 1.5 }
        ],
        
        timelineOptions: [
            { value: 'flexible', label: 'Flexible (Cheaper)', mult: 0.9 },
            { value: 'normal', label: 'Normal', mult: 1.0 },
            { value: 'urgent', label: 'Urgent (More Expensive)', mult: 1.5 }
        ],
        
        canProceed() {
            if(this.step === 1 && !this.form.projectType) return false;
            if(this.step === 2 && !this.form.pages) return false;
            if(this.step === 3 && !this.form.auth) return false;
            if(this.step === 4 && !this.form.admin) return false;
            if(this.step === 5 && !this.form.payments) return false;
            if(this.step === 6 && !this.form.complexity) return false;
            if(this.step === 7 && !this.form.timeline) return false;
            return true;
        },
        
        nextStep() {
            if (this.step < 7) {
                this.step++;
            } else {
                this.calculateEstimate();
            }
        },
        
        prevStep() {
            if (this.step > 1) {
                this.step--;
            }
        },
        
        calculateEstimate() {
            let total = 0;
            let weeks = 0;
            
            // 1. Project Type
            const pt = this.projectTypes.find(p => p.value === this.form.projectType);
            total += pt.basePrice;
            weeks += pt.weeks;
            
            // 2. Pages
            const pg = this.pageCount.find(p => p.value === this.form.pages);
            total += pg.add;
            weeks += pg.weeksAdd;
            
            // 3. Auth
            if(this.form.auth === 'yes') { total += 15000; weeks += 1; }
            
            // 4. Admin
            if(this.form.admin === 'yes') { total += 20000; weeks += 1; }
            
            // 5. Payments
            if(this.form.payments === 'yes') { total += 15000; weeks += 1; }
            
            // 6. Complexity
            const cx = this.complexityOptions.find(c => c.value === this.form.complexity);
            total = total * cx.mult;
            weeks = weeks * cx.weeksMult;
            
            // 7. Timeline
            const tl = this.timelineOptions.find(t => t.value === this.form.timeline);
            total = total * tl.mult;
            
            // Create Range (+/- 15%)
            let minTotal = Math.round((total * 0.85) / 1000) * 1000;
            let maxTotal = Math.round((total * 1.15) / 1000) * 1000;
            
            this.estimateRange.min = minTotal;
            this.estimateRange.max = maxTotal;
            
            // Format weeks
            let minWeeks = Math.max(1, Math.floor(weeks * 0.8));
            let maxWeeks = Math.ceil(weeks * 1.2);
            this.estimateTimeline = minWeeks + ' - ' + maxWeeks + ' Weeks';
            
            this.showResult = true;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
        
        formatCurrency(value) {
            return new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', maximumFractionDigits: 0 }).format(value);
        },
        
        resetEstimator() {
            this.showResult = false;
            this.step = 1;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
        
        generateLeadMessage() {
            return `--- ESTIMATOR RESULTS ---
Project Type: ${this.projectTypes.find(p => p.value === this.form.projectType)?.label || 'N/A'}
Pages Needed: ${this.pageCount.find(p => p.value === this.form.pages)?.label || 'N/A'}
User Auth Needed: ${this.form.auth === 'yes' ? 'Yes' : 'No'}
Admin Dashboard: ${this.form.admin === 'yes' ? 'Yes' : 'No'}
Payment Gateway: ${this.form.payments === 'yes' ? 'Yes' : 'No'}
Complexity: ${this.complexityOptions.find(p => p.value === this.form.complexity)?.label || 'N/A'}
Timeline: ${this.timelineOptions.find(p => p.value === this.form.timeline)?.label || 'N/A'}

I would like to discuss my project in more detail.`;
        }
    }
}
</script>
@endsection
