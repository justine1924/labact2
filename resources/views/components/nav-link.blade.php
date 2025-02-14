@props(['active'])

@php
$classes = ($active ?? false)
            ? 'py-2 text-sm text-white dark:text-gray-200 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out block px-4 py-2 hover:text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'
            : 'py-2 text-sm text-white dark:text-gray-200 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white';
@endphp

<a {{ $attributes->merge(['style'=>'justify-content: space-between;','class' => $classes]) }}>
    {{ $slot }}
</a>

