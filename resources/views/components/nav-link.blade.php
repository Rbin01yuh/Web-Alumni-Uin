@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 pt-1 border-b-2 border-primary text-sm font-medium leading-5 text-neutral-900 focus:outline-none focus:border-primary transition duration-150 ease-in-out'
            : 'inline-flex items-center px-3 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-neutral-600 hover:text-neutral-900 hover:border-neutral-300 focus:outline-none focus:text-neutral-900 focus:border-neutral-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
