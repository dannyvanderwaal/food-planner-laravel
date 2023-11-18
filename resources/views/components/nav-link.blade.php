@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-background-400 dark:border-background-600 text-sm font-medium leading-5 text-text-950 dark:text-text-950 focus:outline-none focus:border-background-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-text-950 dark:text-text-950 hover:text-text-950 dark:hover:text-text-950 hover:border-background-300 dark:hover:border-background-700 focus:outline-none focus:text-text-950 dark:focus:text-text-950 focus:border-background-300 dark:focus:border-background-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
