<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('status', 'Published')->latest('published_at')->get();
        $categories = BlogCategory::all();

        return response()->view('sitemap', [
            'posts' => $posts,
            'categories' => $categories
        ])->header('Content-Type', 'text/xml');
    }
}
