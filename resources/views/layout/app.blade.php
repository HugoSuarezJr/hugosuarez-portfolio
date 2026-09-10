<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hugo Suárez — Software Developer</title>
    <meta name="description" content="Portfolio of Hugo Suárez, a full-stack software developer specializing in Laravel, PHP, JavaScript, Vue, React, and MySQL.">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <meta name="csrf-token" content="{{csrf_token()}}">
    <x-favicon></x-favicon>

    {{-- Alpine & Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>

        {{ $slot }}

        <x-layout.footer></x-layout.footer>
    </div>
</body>

</html>
