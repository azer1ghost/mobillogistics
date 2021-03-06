<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <meta name="description" content="@yield('description')">
{{--    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/8e7d74ec64/UntitledProject/style.css">--}}
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.pro.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}" >
    @yield('style')
    <style>
        body {
            background-color: white;
        }
    </style>
</head>
<body>
    @include('website.components.header')

    @yield('content')

    <x-footer/>
    <!-- Scripts -->
    <script src="{{ mix('assets/js/app.js') }}" ></script>

    @yield('scripts')
    @stack('scripts')
</body>
</html>
