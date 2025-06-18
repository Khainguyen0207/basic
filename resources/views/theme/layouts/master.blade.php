<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? public_path() }}</title>
     @if (file_exists(public_path('build/admin-template/manifest.json')) || file_exists(public_path('hot')))
        @vite('resources/views/admin-template/template-basic/assets/js/app.js', 'build/admin-template')
    @endif

    @include('theme.layouts.partials.styles')
</head>
<body>
<header>
    @include('theme.layouts.partials.header')
</header>
<main>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</main>
<footer>
    @include('theme.layouts.partials.footer')
    @stack('footer')
    @include('theme.layouts.toasts')
</footer>
@include('theme.layouts.footer')
@stack('footer-libs')
</html>
