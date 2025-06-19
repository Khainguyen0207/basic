<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Administration Login' }}</title>

    @include(admin_template_basic_theme('layouts.header-admin'))

    @stack('css')
    @if (file_exists(public_path('build/admin-template/manifest.json')) || file_exists(public_path('hot')))
        @vite('resources/views/admin-template/template-basic/assets/js/app.js', 'build/admin-template')
    @endif

    @include('theme.layouts.partials.styles')
</head>
<body style="min-height: 100vh;">
<div id="validation" class="d-flex flex-column gap-2" style="position: absolute;
    right: 10px;
    top: 10px; z-index: 1031">
</div>
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
    @include(admin_template_basic_theme('layouts.footer-admin'))
    @stack('footer')
    @include(admin_template_basic_theme('layouts.toasts'))
</footer>
</body>
</html>
