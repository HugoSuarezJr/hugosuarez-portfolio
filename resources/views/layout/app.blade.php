<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- Alpine & Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- ====== Navbar Section Start -->
    <x-layout.navbar></x-layout.navbar>
    <!-- ====== Navbar Section End -->

    {{ $slot }}

    <footer>Footer</footer>
</body>

</html>
