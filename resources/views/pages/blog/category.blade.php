@extends('layouts.app')

@section('title', $category->name . ' | Bizwoke Blog')
@section('meta_description', $category->description ?? 'Read our latest posts about ' . $category->name)

@section('content')
<div class="bg-gray-50 dark:bg-slate-900 min-h-screen pt-24 pb-12 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 mb-6 transition-colors">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to all posts
            </a>
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4 transition-colors">
                {{ $category->name }}
            </h1>
            @if($category->description)
                <p class="text-xl text-gray-500 dark:text-gray-400 transition-colors">
                    {{ $category->description }}
                </p>
            @endif
        </div>

        <!-- Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
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
            @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white dark:bg-slate-800 rounded-2xl border border-gray-100 dark:border-gray-700">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No posts</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">We are currently writing more posts for this category. Check back soon!</p>
            </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
