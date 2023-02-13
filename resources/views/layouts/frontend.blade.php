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
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
</head>
<body class="bg-gray-200 text-black">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>