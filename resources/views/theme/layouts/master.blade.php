<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? public_path() }}</title>

    @if (file_exists(public_path('assets/theme/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/views/theme/assets/scss/style.scss', 'resources/views/theme/assets/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
        <script src="{{ asset('assets/theme/js/app.js') }}" defer></script>
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
</footer>
@include('theme.layouts.footer')
@stack('footer-libs')
</html>
