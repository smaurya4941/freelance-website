@props([
    'title',
    'category',
    'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
])

<div class="group relative overflow-hidden rounded-xl bg-slate-100 shadow-sm">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
    <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <div class="absolute bottom-0 left-0 right-0 p-6">
            <span class="text-accent text-sm font-semibold tracking-wider uppercase mb-1 block">{{ $category }}</span>
            <h3 class="text-xl font-bold text-white font-manrope">{{ $title }}</h3>
        </div>
    </div>
</div>
