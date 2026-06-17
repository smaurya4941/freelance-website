<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadNote;
use App\Models\LeadTimeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:50',
            'timeline' => 'nullable|string|max:50',
            'message' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,docx,doc,png,jpg,jpeg|max:10240', // 10MB Max
        ]);

        $lead = Lead::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'industry' => $validated['industry'] ?? null,
            'project_type' => $validated['project_type'] ?? null,
            'budget' => $validated['budget'] ?? null,
            'timeline' => $validated['timeline'] ?? null,
            'message' => $validated['message'],
            'status' => 'New',
            'priority' => 'Medium',
            'source' => 'Contact Form',
        ]);

        LeadTimeline::create([
            'lead_id' => $lead->id,
            'action' => 'Lead Created',
            'description' => 'Lead submitted inquiry via Contact Form.'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalFileName = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            
            $year = date('Y');
            $month = date('m');
            $filePath = $file->store("leads/{$year}/{$month}/lead_{$lead->id}", 'public');

            $lead->files()->create([
                'original_name' => $originalFileName,
                'file_path' => $filePath,
                'file_type' => $fileType,
                'file_size' => $fileSize,
                'category' => 'Other'
            ]);
            
            LeadTimeline::create([
                'lead_id' => $lead->id,
                'action' => 'File Uploaded',
                'description' => "Uploaded: {$originalFileName}"
            ]);
        }

        return redirect()->back()->with('success', 'Your message has been received. We will contact you shortly.');
    }

    public function pipeline()
    {
        $leads = Lead::all()->groupBy('status');
        return view('admin.leads.pipeline', compact('leads'));
    }

    public function index(Request $request)
    {
        $query = Lead::query();

        if ($request->has('status') && $request->status !== 'All' && !empty($request->status)) {
            $query->where('status', $request->status);
        }

        if ($request->has('project_type') && $request->project_type !== 'All' && !empty($request->project_type)) {
            $query->where('project_type', $request->project_type);
        }

        if ($request->has('budget') && $request->budget !== 'All' && !empty($request->budget)) {
            $query->where('budget', $request->budget);
        }
        
        if ($request->has('search') && !empty($request->search)) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('company', 'like', '%' . $request->search . '%')
                  ->orWhere('phone', 'like', '%' . $request->search . '%');
            });
        }

        $leads = $query->latest()->paginate(10);
        
        return view('admin.leads.index', compact('leads'));
    }

    public function show(Lead $lead)
    {
        $lead->load(['notes', 'timelines', 'files']);
        return view('admin.leads.show', compact('lead'));
    }

    public function updateStatus(Request $request, Lead $lead)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:New,Contacted,Discovery Scheduled,Proposal Sent,Negotiation,Won,Lost',
        ]);

        $oldStatus = $lead->status;
        if ($oldStatus !== $validated['status']) {
            $lead->update(['status' => $validated['status']]);

            LeadTimeline::create([
                'lead_id' => $lead->id,
                'action' => 'Status Updated',
                'description' => "Status changed from {$oldStatus} to {$validated['status']}."
            ]);
        }

        return redirect()->back()->with('success', 'Lead status updated successfully.');
    }

    public function storeNote(Request $request, Lead $lead)
    {
        $validated = $request->validate([
            'note' => 'required|string',
        ]);

        $lead->notes()->create(['note' => $validated['note']]);

        LeadTimeline::create([
            'lead_id' => $lead->id,
            'action' => 'Note Added',
            'description' => 'A new internal note was added.'
        ]);

        return redirect()->back()->with('success', 'Note added successfully.');
    }
}
