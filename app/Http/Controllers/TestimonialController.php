<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'project_type' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'is_featured' => 'boolean',
            'is_hidden' => 'boolean',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        $this->clearCache();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'project_type' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'is_featured' => 'boolean',
            'is_hidden' => 'boolean',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($testimonial->photo) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $validated['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        // Handle booleans from checkboxes
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_hidden'] = $request->has('is_hidden');

        $testimonial->update($validated);

        $this->clearCache();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }
        $testimonial->delete();
        $this->clearCache();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted.');
    }

    public function toggle(Request $request, Testimonial $testimonial)
    {
        if ($request->has('is_featured')) {
            $testimonial->update(['is_featured' => !$testimonial->is_featured]);
        }
        if ($request->has('is_hidden')) {
            $testimonial->update(['is_hidden' => !$testimonial->is_hidden]);
        }

        $this->clearCache();

        return redirect()->back()->with('success', 'Status updated.');
    }

    private function clearCache()
    {
        \Illuminate\Support\Facades\Cache::forget('featured_testimonials');
        \Illuminate\Support\Facades\Cache::forget('total_testimonials_count');
        
        // Clear paginated pages up to page 10 to be safe
        for ($i = 1; $i <= 10; $i++) {
            \Illuminate\Support\Facades\Cache::forget('testimonials_page_' . $i);
        }
    }
}
