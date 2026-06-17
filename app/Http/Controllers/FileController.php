<?php

namespace App\Http\Controllers;

use App\Models\LeadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(Request $request)
    {
        $query = LeadFile::with('lead');

        if ($request->has('category') && $request->category !== 'All' && !empty($request->category)) {
            $query->where('category', $request->category);
        }
        
        if ($request->has('search') && !empty($request->search)) {
            $query->where('original_name', 'like', '%' . $request->search . '%')
                  ->orWhereHas('lead', function($q) use ($request) {
                      $q->where('name', 'like', '%' . $request->search . '%');
                  });
        }

        $files = $query->latest()->paginate(15);
        
        return view('admin.files.index', compact('files'));
    }

    public function download(LeadFile $file)
    {
        if (Storage::disk('public')->exists($file->file_path)) {
            return Storage::disk('public')->download($file->file_path, $file->original_name);
        }
        
        return redirect()->back()->with('error', 'File not found on server.');
    }

    public function updateCategory(Request $request, LeadFile $file)
    {
        $validated = $request->validate([
            'category' => 'required|string|in:Requirements,Design Files,References,Contracts,Screenshots,Other'
        ]);

        $file->update(['category' => $validated['category']]);

        return redirect()->back()->with('success', 'File category updated successfully.');
    }
}
