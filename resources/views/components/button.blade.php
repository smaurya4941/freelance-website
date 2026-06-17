@props([
    'variant' => 'primary', // primary, secondary, outline
    'type' => 'button'
])

@php
    $baseClasses = 'inline-flex items-center justify-center px-6 py-2.5 font-medium rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $variantClasses = match($variant) {
        'primary' => 'bg-primary text-white hover:bg-blue-700 focus:ring-primary shadow-sm hover:shadow',
        'secondary' => 'bg-secondary text-white hover:bg-indigo-700 focus:ring-secondary shadow-sm hover:shadow',
        'outline' => 'border-2 border-primary text-primary hover:bg-primary hover:text-white focus:ring-primary',
        default => 'bg-primary text-white hover:bg-blue-700 focus:ring-primary',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClasses $variantClasses"]) }}>
    {{ $slot }}
</button>
