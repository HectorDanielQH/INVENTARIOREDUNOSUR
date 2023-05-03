@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-2 border-orange-600 bg-orange-600 text-sm font-medium leading-5 text-gray-700 focus:outline-none focus:border-indigo-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-2 border-orange-600 bg-orange-600 text-sm font-medium leading-5 text-gray-700 hover:text-white hover:border-gray-300 focus:outline-none focus:text-white focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
