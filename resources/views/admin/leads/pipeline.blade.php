@extends('layouts.admin')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
    <div>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Lead Pipeline</h1>
        <p class="text-gray-500 mt-1">Visualize your sales process and identify bottlenecks.</p>
    </div>
    <div class="flex items-center gap-3">
        <a href="{{ route('admin.leads.index') }}" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
            List View
        </a>
    </div>
</div>

@php
    $stages = [
        'New' => 'bg-indigo-50 border-indigo-200',
        'Contacted' => 'bg-blue-50 border-blue-200',
        'Discovery Scheduled' => 'bg-amber-50 border-amber-200',
        'Proposal Sent' => 'bg-purple-50 border-purple-200',
        'Negotiation' => 'bg-orange-50 border-orange-200',
        'Won' => 'bg-green-50 border-green-200',
        'Lost' => 'bg-red-50 border-red-200',
    ];
@endphp

<!-- Kanban Board -->
<div class="flex gap-6 overflow-x-auto pb-8 h-[calc(100vh-200px)]">
    @foreach($stages as $stage => $colorClass)
        @php
            $stageLeads = isset($leads[$stage]) ? $leads[$stage] : collect([]);
        @endphp
        <div class="w-80 flex-shrink-0 flex flex-col rounded-xl bg-gray-100 border border-gray-200">
            <div class="p-3 border-b border-gray-200 flex justify-between items-center bg-gray-50 rounded-t-xl">
                <h3 class="font-semibold text-gray-700 text-sm uppercase tracking-wide">{{ $stage }}</h3>
                <span class="bg-white text-gray-600 text-xs font-bold px-2 py-1 rounded-full shadow-sm">{{ $stageLeads->count() }}</span>
            </div>
            
            <div class="p-3 flex-1 overflow-y-auto space-y-3">
                @forelse($stageLeads as $lead)
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow cursor-pointer" onclick="window.location='{{ route('admin.leads.show', $lead) }}'">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-gray-900 truncate pr-2">{{ $lead->name }}</h4>
                            @php
                                $priorityClasses = [
                                    'High' => 'bg-red-50 text-red-700 ring-red-600/20',
                                    'Medium' => 'bg-yellow-50 text-yellow-800 ring-yellow-600/20',
                                    'Low' => 'bg-green-50 text-green-700 ring-green-600/20',
                                ];
                                $pClass = $priorityClasses[$lead->priority] ?? 'bg-gray-50 text-gray-600 ring-gray-500/10';
                            @endphp
                            <span class="inline-flex items-center rounded-md px-2 py-0.5 text-xs font-medium ring-1 ring-inset {{ $pClass }}">
                                {{ $lead->priority }}
                            </span>
                        </div>
                        <p class="text-sm text-gray-500 mb-3 truncate">{{ $lead->company ?? $lead->project_type ?? 'No Details' }}</p>
                        
                        <div class="flex items-center justify-between mt-auto pt-3 border-t border-gray-100">
                            <div class="text-xs text-gray-500 flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ $lead->created_at->diffForHumans() }}
                            </div>
                            @if($lead->budget && $lead->budget !== 'All')
                                <span class="text-xs font-medium text-gray-700 bg-gray-100 px-2 py-1 rounded">{{ $lead->budget }}</span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 flex items-center justify-center h-24">
                        <span class="text-sm text-gray-400">No leads</span>
                    </div>
                @endforelse
            </div>
        </div>
    @endforeach
</div>
@endsection
