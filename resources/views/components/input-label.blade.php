@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-text-950 dark:text-text-950']) }}>
    {{ $value ?? $slot }}
</label>
