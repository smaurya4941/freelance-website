@props([
    'title',
    'description',
])

<div class="flex items-start gap-4">
    <div class="flex-shrink-0 w-12 h-12 bg-accent/10 text-accent rounded-full flex items-center justify-center mt-1">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
    </div>
    <div>
        <h4 class="text-lg font-bold font-manrope text-dark mb-2">{{ $title }}</h4>
        <p class="text-slate-600 text-sm">{{ $description }}</p>
    </div>
</div>
