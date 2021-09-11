<a
    {{ $attributes->merge([
        'class' => '
            font-medium
            text-indigo-600
            hover:text-indigo-500
        ' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
    ]) }}
>
    {{ $slot }}
</a>