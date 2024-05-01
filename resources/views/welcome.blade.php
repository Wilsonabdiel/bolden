<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolden Resources</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="antialiased font-sans">
    @livewire('nav')
    @livewire('header')
    @livewire('Main')
    @livewire('Footer')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const navLinks = document.querySelector('.nav-links');

        hamburgerMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    });
</script>
{{--<script src="{{ asset('js/script.js') }}"></script>--}}

</body>
</html>
