@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-background-300 dark:border-background-700 dark:bg-background-900 dark:text-text-950 focus:border-background-500 dark:focus:border-background-600 focus:ring-background-500 dark:focus:ring-background-600 rounded-md shadow-sm']) !!}>
