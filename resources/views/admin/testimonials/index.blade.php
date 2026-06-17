@extends('layouts.admin')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Manage Testimonials</h1>
        <p class="text-gray-500 mt-1">Add, edit, or feature client success stories.</p>
    </div>
    <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
        Add New
    </a>
</div>

<div class="py-6">
    <div class="max-w-7xl mx-auto">
        
        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white overflow-hidden shadow-sm border border-gray-100 sm:rounded-xl">
            <div class="p-6">
                
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">Client</th>
                                <th scope="col" class="px-6 py-3">Company/Project</th>
                                <th scope="col" class="px-6 py-3">Rating</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <div class="flex items-center">
                                        @if($testimonial->photo)
                                            @if(Str::startsWith($testimonial->photo, 'http'))
                                                <img class="w-8 h-8 rounded-full mr-3 object-cover" src="{{ $testimonial->photo }}" alt="avatar">
                                            @else
                                                <img class="w-8 h-8 rounded-full mr-3 object-cover" src="{{ Storage::url($testimonial->photo) }}" alt="avatar">
                                            @endif
                                        @else
                                            <div class="w-8 h-8 rounded-full mr-3 bg-blue-100 text-blue-600 flex items-center justify-center font-bold">
                                                {{ substr($testimonial->client_name, 0, 1) }}
                                            </div>
                                        @endif
                                        {{ $testimonial->client_name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $testimonial->company_name ?? 'N/A' }}<br>
                                    <span class="text-xs text-gray-400">{{ $testimonial->project_type }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $testimonial->rating }} / 5
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('admin.testimonials.toggle', $testimonial) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="is_featured" value="1">
                                        <button type="submit" class="text-xs font-bold px-2 py-1 rounded {{ $testimonial->is_featured ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800' }}">
                                            {{ $testimonial->is_featured ? 'Featured' : 'Not Featured' }}
                                        </button>
                                    </form>
                                    
                                    <form action="{{ route('admin.testimonials.toggle', $testimonial) }}" method="POST" class="inline ml-2">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="is_hidden" value="1">
                                        <button type="submit" class="text-xs font-bold px-2 py-1 rounded {{ $testimonial->is_hidden ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                            {{ $testimonial->is_hidden ? 'Hidden' : 'Visible' }}
                                        </button>
                                    </form>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4">
                    {{ $testimonials->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
