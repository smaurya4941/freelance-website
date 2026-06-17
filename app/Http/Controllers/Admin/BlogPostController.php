<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('category', 'author')->latest()->paginate(10);
        return view('admin.blog.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blog.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug',
            'blog_category_id' => 'required|exists:blog_categories,id',
            'featured_image' => 'nullable|image|max:2048',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:160',
            'status' => 'required|in:Draft,Published,Scheduled',
            'published_at' => 'nullable|date'
        ]);

        $featured_image = null;
        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image')->store('blog/images', 'public');
        }

        BlogPost::create([
            'title' => $request->title,
            'slug' => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'blog_category_id' => $request->blog_category_id,
            'author_id' => Auth::id(),
            'featured_image' => $featured_image,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
            'published_at' => $request->status === 'Published' && !$request->published_at ? now() : $request->published_at
        ]);

        return redirect()->route('admin.blog.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(BlogPost $post)
    {
        $categories = BlogCategory::all();
        return view('admin.blog.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug,' . $post->id,
            'blog_category_id' => 'required|exists:blog_categories,id',
            'featured_image' => 'nullable|image|max:2048',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'meta_description' => 'nullable|string|max:160',
            'status' => 'required|in:Draft,Published,Scheduled',
            'published_at' => 'nullable|date'
        ]);

        $featured_image = $post->featured_image;
        if ($request->hasFile('featured_image')) {
            if ($featured_image) {
                Storage::disk('public')->delete($featured_image);
            }
            $featured_image = $request->file('featured_image')->store('blog/images', 'public');
        }

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'blog_category_id' => $request->blog_category_id,
            'featured_image' => $featured_image,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
            'published_at' => $request->status === 'Published' && !$post->published_at ? now() : $request->published_at
        ]);

        return redirect()->route('admin.blog.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(BlogPost $post)
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();
        return redirect()->route('admin.blog.posts.index')->with('success', 'Post deleted successfully.');
    }
}
