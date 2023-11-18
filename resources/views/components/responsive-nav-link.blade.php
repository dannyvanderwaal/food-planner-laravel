@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-background-400 dark:border-background-600 text-start text-base font-medium text-text-950 dark:text-text-950 bg-background-50 dark:bg-background-900/50 focus:outline-none focus:text-text-950 dark:focus:text-text-950 focus:bg-background-100 dark:focus:bg-background-900 focus:border-background-700 dark:focus:border-background-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-text-950 dark:text-text-950 hover:text-text-950 dark:hover:text-text-950 hover:bg-background-50 dark:hover:bg-background-700 hover:border-background-300 dark:hover:border-background-600 focus:outline-none focus:text-text-950 dark:focus:text-text-950 focus:bg-background-50 dark:focus:bg-background-700 focus:border-background-300 dark:focus:border-background-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
