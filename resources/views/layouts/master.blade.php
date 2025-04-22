<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ Arr::get($title, 'title')  }}</title>

    @include('layouts.partials.styles')

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/style.scss', 'resources/js/app.js'])
    @endif
</head>
<body>
<header>
    @include('layouts.partials.header')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('layouts.partials.footer')
</footer>
@include('layouts.footer')
</html>
