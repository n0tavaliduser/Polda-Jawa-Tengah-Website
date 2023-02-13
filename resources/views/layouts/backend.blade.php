<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title')</title>

    {{-- Vite Configuration --}}
    @vite(['resources/js/app.js',
    'resources/sass/style.scss',
    'resources/css/app.css'])

    {{-- Style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>
<body>
    @include('includes.backends-header')
    @yield('content')
    

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>