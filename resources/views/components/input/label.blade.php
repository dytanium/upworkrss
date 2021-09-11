@props([
    'for' => null,
    'label' => null,
])

<label
    for="{{ $for }}"
    {{ $attributes->merge(['class' => 'block text-sm font-medium leading-5 text-gray-700 cursor-pointer']) }}
>
    {{ $label ?? $slot }}
</label>
