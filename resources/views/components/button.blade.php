<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => '
            flex
            justify-center
            py-2
            px-4
            border
            border-transparent
            rounded-md
            shadow-sm
            text-sm
            font-medium
            text-white
            bg-indigo-600
            hover:bg-indigo-700
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-indigo-500
        ' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
    ]) }}

    {{!! $attributes->get('disable-loading') ? '' : ' wire:loading.class="opacity-75 cursor-not-allowed"' !!}}
>
    {{ $slot }}
</button>