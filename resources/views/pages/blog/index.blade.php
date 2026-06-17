@extends('layouts.app')

@section('title', 'Blog & Insights | Bizwoke')
@section('meta_description', 'Discover the latest insights on web development, Laravel, React, and business software solutions.')

@section('content')
<div class="bg-gray-50 dark:bg-slate-900 min-h-screen pt-24 pb-12 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4 transition-colors">
                Insights & <span class="text-blue-600 dark:text-blue-400">Expertise</span>
            </h1>
            <p class="text-xl text-gray-500 dark:text-gray-400 transition-colors">
                Discover the latest strategies, tutorials, and insights on web development, business automation, and digital growth.
            </p>
        </div>

        <!-- Categories -->
        @if($popularCategories->count() > 0)
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="{{ route('blog.index') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-blue-600 text-white shadow-sm">
                All Posts
            </a>
            @foreach($popularCategories as $cat)
                <a href="{{ route('blog.category', $cat->slug) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-white dark:bg-slate-800 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 shadow-sm">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>
        @endif

        <!-- Featured Post -->
        @if($featuredPost)
        <div class="mb-16">
            <a href="{{ route('blog.show', $featuredPost->slug) }}" class="group block bg-white dark:bg-slate-800 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative h-64 lg:h-full w-full bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        @if($featuredPost->featured_image)
                            <img src="{{ Storage::url($featuredPost->featured_image) }}" alt="{{ $featuredPost->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-600 text-white shadow-sm uppercase tracking-wider">
                                Featured
                            </span>
                        </div>
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        @if($featuredPost->category)
                            <span class="text-sm font-semibold text-blue-600 dark:text-blue-400 mb-2 uppercase tracking-wider">{{ $featuredPost->category->name }}</span>
                        @endif
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            {{ $featuredPost->title }}
                        </h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 line-clamp-3">
                            {{ $featuredPost->excerpt ?? Str::limit(strip_tags($featuredPost->content), 150) }}
                        </p>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mt-auto">
                            <span class="font-medium text-gray-900 dark:text-gray-200">{{ $featuredPost->author->name ?? 'Admin' }}</span>
                            <span class="mx-2">&bull;</span>
                            <time datetime="{{ $featuredPost->published_at }}">{{ $featuredPost->published_at->format('M d, Y') }}</time>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif

        <!-- Latest Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestPosts as $post)
            <article class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 dark:border-gray-700 flex flex-col overflow-hidden group">
                <a href="{{ route('blog.show', $post->slug) }}" class="relative h-48 w-full bg-gray-200 dark:bg-gray-700 overflow-hidden block">
                    @if($post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 dark:text-gray-500">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                </a>
                <div class="p-6 flex-1 flex flex-col">
                    @if($post->category)
                        <a href="{{ route('blog.category', $post->category->slug) }}" class="text-xs font-semibold text-blue-600 dark:text-blue-400 mb-2 uppercase tracking-wider hover:underline">
                            {{ $post->category->name }}
                        </a>
                    @endif
                    <a href="{{ route('blog.show', $post->slug) }}" class="block mt-2">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors line-clamp-2">
                            {{ $post->title }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm line-clamp-3 mb-4">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
                        </p>
                    </a>
                    <div class="mt-auto flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-medium text-gray-900 dark:text-gray-200">{{ $post->author->name ?? 'Admin' }}</span>
                        <span class="mx-2">&bull;</span>
                        <time datetime="{{ $post->published_at }}">{{ $post->published_at->format('M d, Y') }}</time>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div class="mt-12">
            {{ $latestPosts->links() }}
        </div>
    </div>
</div>
@endsection
