@props([
    'color' => 'gray',
])

@php
switch ($color ?? 'gray') {
    case 'red':
        $textColor = 'text-red-800';
        $bgColor = 'bg-red-100';
        break;

    case 'yellow':
        $textColor = 'text-yellow-800';
        $bgColor = 'bg-yellow-100';
        break;

    case 'green':
        $textColor = 'text-green-800';
        $bgColor = 'bg-green-100';
        break;

    case 'dark-green':
        $textColor = 'text-white';
        $bgColor = 'bg-green-400';
        break;

    case 'blue':
        $textColor = 'text-blue-800';
        $bgColor = 'bg-blue-100';
        break;

    case 'indigo':
        $textColor = 'text-indigo-800';
        $bgColor = 'bg-indigo-100';
        break;

    case 'purple':
        $textColor = 'text-purple-800';
        $bgColor = 'bg-purple-100';
        break;

    case 'pink':
        $textColor = 'text-pink-800';
        $bgColor = 'bg-pink-100';
        break;

    default:
        $textColor = 'text-gray-800';
        $bgColor = 'bg-gray-100';
        break;
}
@endphp

<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {{ $bgColor }} {{ $textColor }}">
    {{ $slot }}
</span>