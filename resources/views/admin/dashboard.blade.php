@extends('layouts.admin')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Dashboard Overview</h1>
        <p class="text-gray-500 mt-1">Welcome back. Here is what's happening with your projects today.</p>
    </div>
    <div>
        <a href="{{ route('admin.leads.index') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 shadow-sm transition-colors">
            View All Leads
        </a>
    </div>
</div>

<!-- Overview Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <!-- Total Leads -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center">
        <div class="p-3 rounded-full bg-blue-50 text-blue-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Total Leads</p>
            <p class="text-2xl font-bold text-gray-900">{{ $totalLeads }}</p>
        </div>
    </div>
    
    <!-- New Leads -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center">
        <div class="p-3 rounded-full bg-indigo-50 text-indigo-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">New Leads</p>
            <p class="text-2xl font-bold text-gray-900">{{ $newLeads }}</p>
        </div>
    </div>

    <!-- Active Discussions -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center">
        <div class="p-3 rounded-full bg-amber-50 text-amber-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Active Discussions</p>
            <p class="text-2xl font-bold text-gray-900">{{ $activeDiscussions }}</p>
        </div>
    </div>

    <!-- Won Projects -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center">
        <div class="p-3 rounded-full bg-green-50 text-green-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Won Projects</p>
            <p class="text-2xl font-bold text-gray-900">{{ $wonProjects }}</p>
        </div>
    </div>

    <!-- Lost Opportunities -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center">
        <div class="p-3 rounded-full bg-red-50 text-red-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Lost Opportunities</p>
            <p class="text-2xl font-bold text-gray-900">{{ $lostOpportunities }}</p>
        </div>
    </div>

    <!-- Monthly Leads -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center">
        <div class="p-3 rounded-full bg-purple-50 text-purple-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Leads This Month</p>
            <p class="text-2xl font-bold text-gray-900">{{ $monthlyLeads }}</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Recent Activity Feed -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Recent Platform Activity</h3>
            <a href="{{ route('admin.leads.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View all leads</a>
        </div>
        <div class="p-6">
            @if(isset($recentActivities) && $recentActivities->count() > 0)
                <ul class="space-y-6">
                    @foreach($recentActivities as $activity)
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
                                <span class="font-medium text-gray-900">{{ $activity->lead->name ?? 'Unknown Lead' }}</span>: <span class="text-gray-700">{{ $activity->action }}</span>
                                <p class="text-gray-500 mt-1">{{ $activity->description }}</p>
                            </div>
                            <time datetime="{{ $activity->created_at }}" class="flex-none py-0.5 text-xs text-gray-500">
                                {{ $activity->created_at->diffForHumans() }}
                            </time>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 text-center py-4">No recent activity found.</p>
            @endif
        </div>
    </div>

    <!-- Business Intelligence Analytics -->
    <div class="space-y-6">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900">Business Intelligence</h3>
            </div>
            <div class="p-6 space-y-5">
                <div>
                    <h4 class="text-xs uppercase tracking-wider font-semibold text-gray-500 mb-1">Most Requested Service</h4>
                    <p class="text-lg font-medium text-gray-900">{{ $mostRequestedService->project_type ?? 'Not Enough Data' }}</p>
                </div>
                <div>
                    <h4 class="text-xs uppercase tracking-wider font-semibold text-gray-500 mb-1">Average Budget Tier</h4>
                    <p class="text-lg font-medium text-gray-900">{{ $mostCommonBudget->budget ?? 'Not Enough Data' }}</p>
                </div>
                <div>
                    <h4 class="text-xs uppercase tracking-wider font-semibold text-gray-500 mb-1">Top Converting Source</h4>
                    <p class="text-lg font-medium text-gray-900">{{ $highestConvertingSource->source ?? 'Not Enough Data' }}</p>
                </div>
                <div>
                    <h4 class="text-xs uppercase tracking-wider font-semibold text-gray-500 mb-1">Most Common Industry</h4>
                    <p class="text-lg font-medium text-gray-900">{{ $mostCommonIndustry->industry ?? 'Not Enough Data' }}</p>
                </div>
            </div>
        </div>

        <!-- Lead Sources Overview -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900">Lead Sources</h3>
            </div>
            <div class="p-6">
                @if($leadSources->count() > 0)
                    <div class="space-y-4">
                        @foreach($leadSources as $source)
                            <div class="flex items-center">
                                <div class="w-full">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-sm font-medium text-gray-700">{{ $source->source ?? 'Unknown' }}</span>
                                        <span class="text-sm font-semibold text-gray-900">{{ $source->total }}</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: {{ ($source->total / max(1, $totalLeads)) * 100 }}%"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-4">No data available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
