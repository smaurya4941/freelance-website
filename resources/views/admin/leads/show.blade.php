@extends('layouts.admin')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
    <div>
        <div class="flex items-center gap-2 mb-1">
            <a href="{{ route('admin.leads.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">← Back to Leads</a>
        </div>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Lead Details: {{ $lead->name }}</h1>
        <p class="text-gray-500 mt-1">Received {{ $lead->created_at->format('M d, Y \a\t h:i A') }}</p>
    </div>
    
    <div class="flex items-center gap-3">
        <form action="{{ route('admin.leads.update-status', $lead) }}" method="POST" class="flex items-center gap-2">
            @csrf
            @method('PATCH')
            <select name="status" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
                <option value="New" {{ $lead->status == 'New' ? 'selected' : '' }}>New</option>
                <option value="Contacted" {{ $lead->status == 'Contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="Discussion" {{ $lead->status == 'Discussion' ? 'selected' : '' }}>Discussion</option>
                <option value="Proposal Sent" {{ $lead->status == 'Proposal Sent' ? 'selected' : '' }}>Proposal Sent</option>
                <option value="Won" {{ $lead->status == 'Won' ? 'selected' : '' }}>Won</option>
                <option value="Lost" {{ $lead->status == 'Lost' ? 'selected' : '' }}>Lost</option>
            </select>
            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 shadow-sm transition-colors">
                Update Status
            </button>
        </form>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Info Column -->
    <div class="lg:col-span-2 space-y-6">
        
        <!-- Message Box -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50 flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Inquiry Message</h3>
            </div>
            <div class="p-6">
                <div class="prose max-w-none text-gray-700 whitespace-pre-wrap">{{ $lead->message }}</div>
            </div>
        </div>

        <!-- Project Requirements -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Project Requirements</h3>
            </div>
            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Project Type</h4>
                    <p class="text-gray-900 font-medium">{{ $lead->project_type ?? 'Not specified' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Estimated Budget</h4>
                    <p class="text-gray-900 font-medium">{{ $lead->budget ?? 'Not specified' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Timeline Expectation</h4>
                    <p class="text-gray-900 font-medium">{{ $lead->timeline ?? 'Not specified' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Lead Source</h4>
                    <p class="text-gray-900 font-medium">{{ $lead->source ?? 'Direct Website' }}</p>
                </div>
            </div>
        </div>

        <!-- Uploaded Files -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900">Attached Files</h3>
                <a href="{{ route('admin.files.index', ['search' => $lead->name]) }}" class="text-sm text-blue-600 hover:underline">View in File Center</a>
            </div>
            <div class="p-6">
                @if($lead->files->count() > 0)
                    <div class="space-y-3">
                        @foreach($lead->files as $file)
                        <div class="flex items-center p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <div class="flex-shrink-0 mr-4">
                                @php
                                    $ext = strtolower($file->file_type);
                                    $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif']);
                                @endphp
                                
                                @if($isImage)
                                    <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                @elseif($ext == 'pdf')
                                    <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                @else
                                    <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                @endif
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate">{{ $file->original_name }}</p>
                                <p class="text-xs text-gray-500 uppercase">{{ $file->file_type }} • {{ $file->category }}</p>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <a href="{{ route('admin.files.download', $file) }}" class="font-medium text-blue-600 hover:text-blue-500 text-sm">Download</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-4">No files were attached to this inquiry.</p>
                @endif
            </div>
        </div>

        <!-- Internal Notes -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Internal Notes</h3>
            </div>
            <div class="p-6">
                <!-- Add Note Form -->
                <form action="{{ route('admin.leads.notes.store', $lead) }}" method="POST" class="mb-6">
                    @csrf
                    <div>
                        <label for="note" class="sr-only">Add a note</label>
                        <textarea id="note" name="note" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3" placeholder="Add a private note about this lead..."></textarea>
                    </div>
                    <div class="mt-3 flex justify-end">
                        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 shadow-sm transition-colors">
                            Add Note
                        </button>
                    </div>
                </form>

                <!-- Notes List -->
                <div class="space-y-4">
                    @forelse($lead->notes as $note)
                        <div class="bg-yellow-50 border border-yellow-100 p-4 rounded-lg">
                            <p class="text-sm text-gray-800">{{ $note->note }}</p>
                            <p class="text-xs text-gray-500 mt-2 text-right">{{ $note->created_at->format('M d, Y h:i A') }}</p>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center py-4 text-sm">No internal notes added yet.</p>
                    @endforelse
                </div>
            </div>
        </div>

    </div>

    <!-- Sidebar Column -->
    <div class="space-y-6">
        
        <!-- Client Details -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Client Information</h3>
            </div>
            <div class="p-6">
                <div class="flex items-center mb-6">
                    <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xl">
                        {{ substr($lead->name, 0, 1) }}
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">{{ $lead->name }}</h4>
                        <p class="text-sm text-gray-500">{{ $lead->company ?? 'Individual Client' }}</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Email Address</div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:{{ $lead->email }}" class="text-blue-600 hover:underline font-medium">{{ $lead->email }}</a>
                        </div>
                    </div>
                    
                    @if($lead->phone)
                    <div>
                        <div class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Phone Number</div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="tel:{{ $lead->phone }}" class="text-gray-900 hover:text-blue-600 font-medium">{{ $lead->phone }}</a>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="mt-6 pt-6 border-t border-gray-100">
                    <a href="mailto:{{ $lead->email }}" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                        Reply via Email
                    </a>
                </div>
            </div>
        </div>

        <!-- Lead Timeline -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Lead Timeline</h3>
            </div>
            <div class="p-6">
                <ul class="space-y-6">
                    @forelse($lead->timelines as $timeline)
                        <li class="relative flex gap-x-4">
                            @if(!$loop->last)
                            <div class="absolute left-0 top-0 flex w-6 justify-center -bottom-6">
                                <div class="w-px bg-gray-200"></div>
                            </div>
                            @endif
                            <div class="relative flex h-6 w-6 flex-none items-center justify-center bg-white">
                                <div class="h-1.5 w-1.5 rounded-full bg-blue-600 ring-1 ring-blue-600"></div>
                            </div>
                            <div class="flex-auto py-0.5 text-sm leading-5">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="font-medium text-gray-900">{{ $timeline->action }}</span>
                                    <time datetime="{{ $timeline->created_at }}" class="flex-none text-xs text-gray-500">
                                        {{ $timeline->created_at->format('M d, H:i') }}
                                    </time>
                                </div>
                                @if($timeline->description)
                                    <p class="text-gray-600 text-xs">{{ $timeline->description }}</p>
                                @endif
                            </div>
                        </li>
                    @empty
                        <li class="text-sm text-gray-500 text-center">No timeline events recorded.</li>
                    @endforelse
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
