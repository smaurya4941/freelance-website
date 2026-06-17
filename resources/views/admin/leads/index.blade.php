@extends('layouts.admin')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
    <div>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Lead Management</h1>
        <p class="text-gray-500 mt-1">Manage, track, and update all incoming inquiries.</p>
    </div>
    <div class="flex items-center gap-3">
        <a href="{{ route('admin.leads.pipeline') }}" class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg>
            Pipeline View
        </a>
    </div>
</div>

<!-- Filters & Search -->
<div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
    <form action="{{ route('admin.leads.index') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
        <div class="flex-1">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, email, or company..." class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
            </div>
        </div>
        <div class="w-full sm:w-40">
            <select name="status" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
                <option value="All" {{ request('status') == 'All' ? 'selected' : '' }}>All Statuses</option>
                <option value="New" {{ request('status') == 'New' ? 'selected' : '' }}>New</option>
                <option value="Contacted" {{ request('status') == 'Contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="Discovery Scheduled" {{ request('status') == 'Discovery Scheduled' ? 'selected' : '' }}>Discovery Scheduled</option>
                <option value="Proposal Sent" {{ request('status') == 'Proposal Sent' ? 'selected' : '' }}>Proposal Sent</option>
                <option value="Negotiation" {{ request('status') == 'Negotiation' ? 'selected' : '' }}>Negotiation</option>
                <option value="Won" {{ request('status') == 'Won' ? 'selected' : '' }}>Won</option>
                <option value="Lost" {{ request('status') == 'Lost' ? 'selected' : '' }}>Lost</option>
            </select>
        </div>
        <div class="w-full sm:w-40">
            <select name="project_type" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
                <option value="All" {{ request('project_type') == 'All' ? 'selected' : '' }}>All Projects</option>
                <option value="Website" {{ request('project_type') == 'Website' ? 'selected' : '' }}>Website</option>
                <option value="CRM" {{ request('project_type') == 'CRM' ? 'selected' : '' }}>CRM</option>
                <option value="ERP" {{ request('project_type') == 'ERP' ? 'selected' : '' }}>ERP</option>
                <option value="School System" {{ request('project_type') == 'School System' ? 'selected' : '' }}>School System</option>
                <option value="SaaS" {{ request('project_type') == 'SaaS' ? 'selected' : '' }}>SaaS</option>
                <option value="Custom Software" {{ request('project_type') == 'Custom Software' ? 'selected' : '' }}>Custom Software</option>
            </select>
        </div>
        <div class="w-full sm:w-32">
            <select name="budget" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm border py-2 px-3">
                <option value="All" {{ request('budget') == 'All' ? 'selected' : '' }}>All Budgets</option>
                <option value="Low" {{ request('budget') == 'Low' ? 'selected' : '' }}>Low</option>
                <option value="Medium" {{ request('budget') == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="High" {{ request('budget') == 'High' ? 'selected' : '' }}>High</option>
            </select>
        </div>
        <div>
            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 shadow-sm transition-colors">
                Filter
            </button>
        </div>
    </form>
</div>

<!-- Leads Table -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Details</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project Info</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($leads as $lead)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">
                                        {{ substr($lead->name, 0, 1) }}
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $lead->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $lead->email }}</div>
                                    @if($lead->company)
                                        <div class="text-xs text-gray-400 mt-1">{{ $lead->company }}</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $lead->project_type ?? 'Unspecified' }}</div>
                            <div class="text-sm text-gray-500">{{ $lead->budget ?? 'Unknown Budget' }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                                $priorityClasses = [
                                    'High' => 'bg-red-50 text-red-700 ring-red-600/20',
                                    'Medium' => 'bg-yellow-50 text-yellow-800 ring-yellow-600/20',
                                    'Low' => 'bg-green-50 text-green-700 ring-green-600/20',
                                ];
                                $pClass = $priorityClasses[$lead->priority] ?? 'bg-gray-50 text-gray-600 ring-gray-500/10';
                            @endphp
                            <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset {{ $pClass }}">
                                {{ $lead->priority }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                                $statusClasses = [
                                    'New' => 'bg-indigo-100 text-indigo-800',
                                    'Contacted' => 'bg-blue-100 text-blue-800',
                                    'Discovery Scheduled' => 'bg-amber-100 text-amber-800',
                                    'Proposal Sent' => 'bg-purple-100 text-purple-800',
                                    'Negotiation' => 'bg-orange-100 text-orange-800',
                                    'Won' => 'bg-green-100 text-green-800',
                                    'Lost' => 'bg-red-100 text-red-800',
                                ];
                                $badgeClass = $statusClasses[$lead->status] ?? 'bg-gray-100 text-gray-800';
                            @endphp
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $badgeClass }}">
                                {{ $lead->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $lead->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.leads.show', $lead) }}" class="text-blue-600 hover:text-blue-900">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No leads found</h3>
                            <p class="mt-1 text-sm text-gray-500">Try adjusting your search or filters.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($leads->hasPages())
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $leads->links() }}
        </div>
    @endif
</div>
@endsection
