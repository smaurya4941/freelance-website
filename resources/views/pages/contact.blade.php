@extends('layouts.app')

@section('title', 'Contact Us | Bizwoke')

@section('content')
<!-- Hero Section -->
<section class="bg-slate-900 text-white pt-24 pb-32 lg:pt-32 lg:pb-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-manrope leading-tight mb-6">
            Let's Discuss Your Project
        </h1>
        <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto">
            Available for consultations, custom software development, and digital transformation. Let's build something great together.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-slate-50 relative -mt-20 lg:-mt-32 z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Contact Info Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100 h-full flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold font-manrope text-slate-800 mb-8">Contact Information</h3>
                        
                        <div class="space-y-6">
                            <!-- Response Promise -->
                            <div class="flex items-start gap-4 p-4 bg-primary/5 rounded-xl border border-primary/10">
                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800">Fast Response</h4>
                                    <p class="text-sm text-slate-600">Usually responds within 24 hours.</p>
                                </div>
                            </div>

                            <a href="mailto:hello@bizwoke.com" class="flex items-center gap-4 group">
                                <div class="w-12 h-12 bg-slate-50 group-hover:bg-primary group-hover:text-white transition-colors rounded-full flex items-center justify-center text-slate-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm uppercase tracking-wider">Email</h4>
                                    <span class="text-slate-600 group-hover:text-primary transition-colors">hello@bizwoke.com</span>
                                </div>
                            </a>

                            <a href="https://wa.me/1234567890" target="_blank" class="flex items-center gap-4 group">
                                <div class="w-12 h-12 bg-slate-50 group-hover:bg-[#25D366] group-hover:text-white transition-colors rounded-full flex items-center justify-center text-slate-600 shrink-0">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm uppercase tracking-wider">WhatsApp</h4>
                                    <span class="text-slate-600 group-hover:text-[#25D366] transition-colors">+91 98765 43210</span>
                                </div>
                            </a>

                            <div class="flex items-center gap-4 group">
                                <div class="w-12 h-12 bg-slate-50 group-hover:bg-primary group-hover:text-white transition-colors rounded-full flex items-center justify-center text-slate-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm uppercase tracking-wider">Location</h4>
                                    <span class="text-slate-600">Mumbai, India</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 pt-8 border-t border-slate-100 flex gap-4">
                        <a href="#" class="w-10 h-10 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-[#0077b5] hover:text-white transition-colors" title="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-100 text-slate-600 rounded-full flex items-center justify-center hover:bg-[#333] hover:text-white transition-colors" title="GitHub">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-slate-100">
                    
                    @if(session('success'))
                    <div class="bg-green-50 text-green-700 p-6 rounded-xl mb-8 flex items-start gap-4 border border-green-100">
                        <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Success!</h4>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Full Name *</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required 
                                       class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow @error('name') border-red-500 @enderror" placeholder="John Doe">
                                @error('name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required 
                                       class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow @error('email') border-red-500 @enderror" placeholder="john@example.com">
                                @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" 
                                       class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow" placeholder="+91 98765 43210">
                                @error('phone') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>

                            <!-- Company -->
                            <div>
                                <label for="company" class="block text-sm font-semibold text-slate-700 mb-2">Business Name</label>
                                <input type="text" name="company" id="company" value="{{ old('company') }}" 
                                       class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow" placeholder="Acme Corp">
                                @error('company') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>

                            <!-- Project Type -->
                            <div>
                                <label for="project_type" class="block text-sm font-semibold text-slate-700 mb-2">Project Type</label>
                                <select name="project_type" id="project_type" class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow">
                                    <option value="">Select project type</option>
                                    <option value="Business Website" @if(old('project_type') == 'Business Website') selected @endif>Business Website</option>
                                    <option value="E-Commerce" @if(old('project_type') == 'E-Commerce') selected @endif>E-Commerce</option>
                                    <option value="CRM" @if(old('project_type') == 'CRM') selected @endif>CRM</option>
                                    <option value="ERP" @if(old('project_type') == 'ERP') selected @endif>ERP</option>
                                    <option value="School System" @if(old('project_type') == 'School System') selected @endif>School System</option>
                                    <option value="SaaS Product" @if(old('project_type') == 'SaaS Product') selected @endif>SaaS Product</option>
                                    <option value="Custom Application" @if(old('project_type') == 'Custom Application') selected @endif>Custom Application</option>
                                </select>
                                @error('project_type') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            
                            <!-- Budget -->
                            <div>
                                <label for="budget" class="block text-sm font-semibold text-slate-700 mb-2">Estimated Budget</label>
                                <select name="budget" id="budget" class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow">
                                    <option value="">Select a range</option>
                                    <option value="Under ₹25,000" @if(old('budget') == 'Under ₹25,000') selected @endif>Under ₹25,000</option>
                                    <option value="₹25k–₹50k" @if(old('budget') == '₹25k–₹50k') selected @endif>₹25k–₹50k</option>
                                    <option value="₹50k–₹1L" @if(old('budget') == '₹50k–₹1L') selected @endif>₹50k–₹1L</option>
                                    <option value="₹1L+" @if(old('budget') == '₹1L+') selected @endif>₹1L+</option>
                                </select>
                                @error('budget') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>

                            <!-- Timeline -->
                            <div class="md:col-span-2">
                                <label for="timeline" class="block text-sm font-semibold text-slate-700 mb-2">Timeline</label>
                                <select name="timeline" id="timeline" class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow">
                                    <option value="">Select a timeline</option>
                                    <option value="ASAP" @if(old('timeline') == 'ASAP') selected @endif>ASAP</option>
                                    <option value="1 Month" @if(old('timeline') == '1 Month') selected @endif>1 Month</option>
                                    <option value="2–3 Months" @if(old('timeline') == '2–3 Months') selected @endif>2–3 Months</option>
                                    <option value="Flexible" @if(old('timeline') == 'Flexible') selected @endif>Flexible</option>
                                </select>
                                @error('timeline') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Project Description *</label>
                            <textarea name="message" id="message" rows="6" required 
                                      class="w-full rounded-lg border-slate-300 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-shadow @error('message') border-red-500 @enderror" placeholder="Tell us about your project goals, current pain points, and what you hope to achieve...">{{ old('message') }}</textarea>
                            @error('message') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <!-- File Upload -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Attach Files (Optional)</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-xl hover:border-primary hover:bg-primary/5 transition-all bg-slate-50 group">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-slate-400 group-hover:text-primary transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex flex-col items-center justify-center text-sm text-slate-600 gap-1">
                                        <label for="file-upload" class="relative cursor-pointer bg-white px-3 py-1.5 rounded-md shadow-sm border border-slate-200 font-medium text-primary hover:bg-slate-50 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file" type="file" class="sr-only" accept=".pdf,.doc,.docx,.png,.jpg,.jpeg">
                                        </label>
                                        <p class="pl-1 mt-2">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-slate-500 mt-2">PDF, DOCX, PNG, JPG up to 10MB</p>
                                    <p id="file-name-display" class="text-sm font-medium text-primary mt-2 hidden"></p>
                                </div>
                            </div>
                            @error('file') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <!-- Submit -->
                        <div class="pt-6">
                            <button type="submit" class="w-full bg-primary text-white font-bold py-4 px-8 rounded-xl hover:bg-slate-800 transition-colors shadow-lg shadow-primary/30 text-lg flex justify-center items-center gap-2 group">
                                Get Free Consultation
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- Script to handle file input name display -->
<script>
    document.getElementById('file-upload').addEventListener('change', function(e) {
        var fileName = e.target.files[0] ? e.target.files[0].name : '';
        var display = document.getElementById('file-name-display');
        if(fileName) {
            display.innerText = 'Selected file: ' + fileName;
            display.classList.remove('hidden');
        } else {
            display.classList.add('hidden');
        }
    });
</script>
@endsection
