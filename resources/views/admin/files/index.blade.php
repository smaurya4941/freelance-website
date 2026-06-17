@extends('layouts.admin')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
    <div>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">File Center</h1>
        <p class="text-gray-500 mt-1">Manage and access all client documents securely.</p>
    </div>
</div>

<!-- Filters & Search -->
<div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
    <form action="{{ route('admin.files.index') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
        <div class="flex-1">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by file name or lead name..." class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
            </div>
        </div>
        <div class="w-full sm:w-48">
            <select name="category" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
                <option value="All" {{ request('category') == 'All' ? 'selected' : '' }}>All Categories</option>
                <option value="Requirements" {{ request('category') == 'Requirements' ? 'selected' : '' }}>Requirements</option>
                <option value="Design Files" {{ request('category') == 'Design Files' ? 'selected' : '' }}>Design Files</option>
                <option value="References" {{ request('category') == 'References' ? 'selected' : '' }}>References</option>
                <option value="Contracts" {{ request('category') == 'Contracts' ? 'selected' : '' }}>Contracts</option>
                <option value="Screenshots" {{ request('category') == 'Screenshots' ? 'selected' : '' }}>Screenshots</option>
                <option value="Other" {{ request('category') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div>
            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 shadow-sm transition-colors">
                Filter
            </button>
        </div>
    </form>
</div>

<!-- Files Table -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Related Lead</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Size</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Upload Date</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($files as $file)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 mr-3">
                                    @php
                                        $ext = strtolower($file->file_type);
                                        $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif']);
                                    @endphp
                                    
                                    @if($isImage)
                                        <div class="h-10 w-10 rounded bg-blue-50 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                    @elseif($ext == 'pdf')
                                        <div class="h-10 w-10 rounded bg-red-50 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                        </div>
                                    @else
                                        <div class="h-10 w-10 rounded bg-gray-100 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900 truncate max-w-xs">{{ $file->original_name }}</div>
                                    <div class="text-xs text-gray-500 uppercase">{{ $file->file_type }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('admin.leads.show', $file->lead_id) }}" class="text-sm font-medium text-blue-600 hover:underline">{{ $file->lead->name }}</a>
                            <div class="text-xs text-gray-500">{{ $file->lead->company ?? 'No Company' }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.files.update-category', $file) }}" method="POST" class="flex items-center">
                                @csrf
                                @method('PATCH')
                                <select name="category" onchange="this.form.submit()" class="text-xs rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-1 pl-2 pr-6">
                                    <option value="Requirements" {{ $file->category == 'Requirements' ? 'selected' : '' }}>Requirements</option>
                                    <option value="Design Files" {{ $file->category == 'Design Files' ? 'selected' : '' }}>Design Files</option>
                                    <option value="References" {{ $file->category == 'References' ? 'selected' : '' }}>References</option>
                                    <option value="Contracts" {{ $file->category == 'Contracts' ? 'selected' : '' }}>Contracts</option>
                                    <option value="Screenshots" {{ $file->category == 'Screenshots' ? 'selected' : '' }}>Screenshots</option>
                                    <option value="Other" {{ $file->category == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $file->file_size ? round($file->file_size / 1024, 2) . ' KB' : 'Unknown' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $file->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.files.download', $file) }}" class="text-blue-600 hover:text-blue-900 ml-4">Download</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No files found</h3>
                            <p class="mt-1 text-sm text-gray-500">Try adjusting your search or filters.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($files->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $files->links() }}
        </div>
    @endif
</div>
@endsection
