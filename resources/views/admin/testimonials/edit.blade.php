@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Edit Testimonial</h1>
</div>

<div class="py-6">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm border border-gray-100 sm:rounded-xl">
            <div class="p-6">
                
                <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-1">Client Name *</label>
                            <input type="text" name="client_name" required class="w-full rounded border-gray-300" value="{{ old('client_name', $testimonial->client_name) }}">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Company Name</label>
                            <input type="text" name="company_name" class="w-full rounded border-gray-300" value="{{ old('company_name', $testimonial->company_name) }}">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-1">Designation</label>
                            <input type="text" name="designation" class="w-full rounded border-gray-300" value="{{ old('designation', $testimonial->designation) }}">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Project Type</label>
                            <input type="text" name="project_type" class="w-full rounded border-gray-300" value="{{ old('project_type', $testimonial->project_type) }}">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-1">Feedback *</label>
                        <textarea name="feedback" rows="4" required class="w-full rounded border-gray-300">{{ old('feedback', $testimonial->feedback) }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium mb-1">Rating (1-5) *</label>
                            <input type="number" name="rating" min="1" max="5" value="{{ old('rating', $testimonial->rating) }}" required class="w-full rounded border-gray-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Date</label>
                            <input type="date" name="date" class="w-full rounded border-gray-300" value="{{ old('date', $testimonial->date) }}">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-1">Photo / Avatar</label>
                        @if($testimonial->photo)
                            <div class="mb-2">
                                @if(Str::startsWith($testimonial->photo, 'http'))
                                    <img class="w-16 h-16 rounded object-cover" src="{{ $testimonial->photo }}">
                                @else
                                    <img class="w-16 h-16 rounded object-cover" src="{{ Storage::url($testimonial->photo) }}">
                                @endif
                            </div>
                        @endif
                        <input type="file" name="photo" accept="image/*" class="w-full">
                        <p class="text-xs text-gray-500 mt-1">Leave empty to keep existing photo.</p>
                    </div>

                    <div class="mb-6 flex space-x-6">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_featured" value="1" {{ $testimonial->is_featured ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <span class="ml-2">Feature on Homepage</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_hidden" value="1" {{ $testimonial->is_hidden ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <span class="ml-2">Hidden</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update Testimonial</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
