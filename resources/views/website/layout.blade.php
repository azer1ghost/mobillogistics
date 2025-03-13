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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5LX5ZDTB');</script>
    <!-- End Google Tag Manager -->

</head>
<body>
    @include('website.components.header')

    @yield('content')

    <x-footer/>
    <!-- Scripts -->
    <script src="{{ mix('assets/js/app.js') }}" ></script>

    @yield('scripts')
    @stack('scripts')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LX5ZDTB"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>
</html>
