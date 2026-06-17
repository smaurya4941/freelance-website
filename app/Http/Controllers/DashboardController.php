<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalLeads = Lead::count();
        $newLeads = Lead::where('status', 'New')->count();
        $activeDiscussions = Lead::whereIn('status', ['Contacted', 'Discovery Scheduled', 'Proposal Sent', 'Negotiation'])->count();
        $wonProjects = Lead::where('status', 'Won')->count();
        $lostOpportunities = Lead::where('status', 'Lost')->count();
        $monthlyLeads = Lead::whereMonth('created_at', Carbon::now()->month)
                            ->whereYear('created_at', Carbon::now()->year)
                            ->count();
                            
        $recentLeads = Lead::latest()->take(5)->get();
        $recentActivities = \App\Models\LeadTimeline::with('lead')->latest()->take(5)->get();
        
        $leadSources = Lead::select('source', DB::raw('count(*) as total'))
                           ->groupBy('source')
                           ->get();

        // Business Intelligence Analytics
        $mostRequestedService = Lead::select('project_type')->selectRaw('COUNT(*) as count')->whereNotNull('project_type')->groupBy('project_type')->orderByDesc('count')->first();
        $mostCommonBudget = Lead::select('budget')->selectRaw('COUNT(*) as count')->whereNotNull('budget')->groupBy('budget')->orderByDesc('count')->first();
        $mostCommonIndustry = Lead::select('industry')->selectRaw('COUNT(*) as count')->whereNotNull('industry')->groupBy('industry')->orderByDesc('count')->first();
        $highestConvertingSource = Lead::select('source')->selectRaw('COUNT(*) as count')->where('status', 'Won')->groupBy('source')->orderByDesc('count')->first();

        return view('admin.dashboard', compact(
            'totalLeads',
            'newLeads',
            'activeDiscussions',
            'wonProjects',
            'lostOpportunities',
            'monthlyLeads',
            'recentLeads',
            'recentActivities',
            'leadSources',
            'mostRequestedService',
            'mostCommonBudget',
            'mostCommonIndustry',
            'highestConvertingSource'
        ));
    }
}
