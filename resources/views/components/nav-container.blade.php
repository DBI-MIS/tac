@props(['active'])

@php
$classes = ($active ?? false)
            ? 'relative inline-flex items-center px-1 border-b-4 border-red-400 dark:border-red-600 text-base font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-red-700 transition duration-150 ease-in-out'
            : 'relative inline-flex items-center px-1 border-b-4 border-transparent text-base font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
