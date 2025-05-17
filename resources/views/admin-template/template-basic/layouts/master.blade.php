<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? public_path() }}</title>

    @include(admin_template_basic_theme('layouts.header-admin'))
    @stack('css')
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/style.scss', 'resources/js/app.js'])
    @endif
</head>
<body>
<header>
    @include('layouts.partials.header')
</header>
<main>
    <div class="container-scroller">
        @include(admin_template_basic_theme('partials.sidebar'))
        <div class="container-fluid page-body-wrapper">
            @include(admin_template_basic_theme('partials.navbar'))
            <div class="main-panel">
                @yield('content')
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</main>
<footer>
    @include(admin_template_basic_theme('layouts.footer-admin'))
    @stack('footer')
</footer>
@include('layouts.footer')
</html>
