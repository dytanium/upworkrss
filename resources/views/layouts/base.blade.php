<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>UpworkRSS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
    @stack('styles')
</head>
<body class="antialiased font-sans bg-gray-200">
    {{ $slot }}

    @livewireScripts
    @stack('scripts')
</body>
</html>