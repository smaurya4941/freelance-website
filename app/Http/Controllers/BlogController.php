<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $featuredPost = BlogPost::with('category', 'author')
            ->where('status', 'Published')
            ->latest('published_at')
            ->first();

        $latestPosts = BlogPost::with('category', 'author')
            ->where('status', 'Published')
            ->when($featuredPost, function ($query, $featuredPost) {
                return $query->where('id', '!=', $featuredPost->id);
            })
            ->latest('published_at')
            ->paginate(9);

        $popularCategories = BlogCategory::withCount(['posts' => function($query) {
            $query->where('status', 'Published');
        }])->orderByDesc('posts_count')->take(5)->get();

        return view('pages.blog.index', compact('featuredPost', 'latestPosts', 'popularCategories'));
    }

    public function category($slug)
    {
        $category = BlogCategory::where('slug', $slug)->firstOrFail();
        
        $posts = BlogPost::with('category', 'author')
            ->where('blog_category_id', $category->id)
            ->where('status', 'Published')
            ->latest('published_at')
            ->paginate(10);

        return view('pages.blog.category', compact('category', 'posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::with('category', 'author')
            ->where('slug', $slug)
            ->where('status', 'Published')
            ->firstOrFail();

        $relatedPosts = BlogPost::with('category', 'author')
            ->where('blog_category_id', $post->blog_category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'Published')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }
}
