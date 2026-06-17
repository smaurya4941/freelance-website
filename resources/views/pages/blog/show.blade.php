@extends('layouts.app')

@section('title', $post->title . ' | Bizwoke')
@section('meta_description', $post->meta_description ?? $post->excerpt ?? Str::limit(strip_tags($post->content), 150))
@section('og_image', $post->featured_image ? Storage::url($post->featured_image) : null)

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "BlogPosting",
  "mainEntityOfPage": {
    "@@type": "WebPage",
    "@@id": "{{ route('blog.show', $post->slug) }}"
  },
  "headline": "{{ $post->title }}",
  "description": "{{ $post->meta_description ?? $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}",
  "image": "{{ $post->featured_image ? url(Storage::url($post->featured_image)) : url('/logo.png') }}",  
  "author": {
    "@@type": "Person",
    "name": "{{ $post->author->name ?? 'Admin' }}"
  },  
  "publisher": {
    "@@type": "Organization",
    "name": "Bizwoke",
    "logo": {
      "@@type": "ImageObject",
      "url": "{{ url('/logo.png') }}"
    }
  },
  "datePublished": "{{ $post->published_at ? $post->published_at->toIso8601String() : $post->created_at->toIso8601String() }}",
  "dateModified": "{{ $post->updated_at->toIso8601String() }}"
}
</script>
@endpush

@section('content')
<div class="bg-white dark:bg-slate-900 min-h-screen pt-24 pb-12 transition-colors duration-200">
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <header class="text-center mb-10">
            @if($post->category)
                <a href="{{ route('blog.category', $post->category->slug) }}" class="inline-block text-sm font-semibold text-blue-600 dark:text-blue-400 mb-4 uppercase tracking-wider hover:underline">
                    {{ $post->category->name }}
                </a>
            @endif
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-6 transition-colors leading-tight">
                {{ $post->title }}
            </h1>
            <div class="flex items-center justify-center text-gray-500 dark:text-gray-400 space-x-4">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    {{ $post->author->name ?? 'Admin' }}
                </span>
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <time datetime="{{ $post->published_at }}">{{ $post->published_at->format('F d, Y') }}</time>
                </span>
            </div>
        </header>

        <!-- Featured Image -->
        @if($post->featured_image)
            <div class="mb-12 rounded-2xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-800">
                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto max-h-[600px] object-cover">
            </div>
        @endif

        <!-- Content -->
        <div class="prose prose-lg prose-blue dark:prose-invert max-w-none mb-16">
            {!! $post->content !!}
        </div>

    </article>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
    <div class="bg-gray-50 dark:bg-slate-900 py-16 border-t border-gray-200 dark:border-gray-800 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-10 text-center">Read Next</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @foreach($relatedPosts as $related)
                <a href="{{ route('blog.show', $related->slug) }}" class="group block">
                    <div class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100 dark:border-gray-800 h-full flex flex-col">
                        <div class="h-40 bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
                            @if($related->featured_image)
                                <img src="{{ Storage::url($related->featured_image) }}" alt="{{ $related->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @endif
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors line-clamp-2">
                                {{ $related->title }}
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-auto">
                                {{ $related->published_at->format('M d, Y') }}
                            </p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
