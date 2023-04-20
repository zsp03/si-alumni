@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-800 text-white rounded-md px-3 py-2 text-sm font-medium focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
