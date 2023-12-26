<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting Center</title>

    <script src="https://kit.fontawesome.com/16a06030b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    @auth
    @include('layouts.navbar')
    @else
        <div id="particles-js"></div> <!-- stats - count particles -->
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    @endauth

    @yield('content')


    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
