@props([
    'title',
    'description',
    'icon' => null,
])

<div class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md border border-slate-100 transition-all duration-300 group">
    @if($icon)
        <div class="w-14 h-14 bg-blue-50 text-primary rounded-lg flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
            {!! $icon !!}
        </div>
    @endif
    <h3 class="text-xl font-bold font-manrope text-dark mb-3">{{ $title }}</h3>
    <p class="text-slate-600 leading-relaxed">{{ $description }}</p>
</div>
