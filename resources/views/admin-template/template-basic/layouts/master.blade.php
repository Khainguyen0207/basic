<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? public_path() }}</title>

    @include(admin_template_basic_theme('layouts.header-admin'))
    @stack('css')
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/views/admin-template/template-basic/assets/scss/style.scss', 'resources/views/admin-template/template-basic/assets/js/app.js'])
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
                @include(admin_template_basic_theme('partials.copyright'))
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
