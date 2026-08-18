<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Develeco Qatar')</title>
    <link rel="icon" href="{{ asset('images/branding/favicon-32.png') }}" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ asset('images/branding/favicon-16.png') }}" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="{{ asset('images/branding/apple-touch-icon.png') }}">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('description', 'Develeco Qatar — Home Renovation & Remodeling')" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://icofont.com/assets/icofont/icofont.min.css" rel="stylesheet" type="text/css">
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    @stack('styles')
    <style>
        header.header-light.transparent {
            background: transparent !important;
            box-shadow: none !important;
            position: absolute;
            width: 100%;
        }
        header.header-light.transparent #mainmenu > li > a,
        header.header-light.transparent #mainmenu li.has-child:after {
            color: #000 !important;
        }
        header.header-light.transparent #mainmenu > li > a:hover {
            color: var(--primary-color) !important;
        }
        header.header-light.transparent .btn-main {
            border-color: rgba(255,255,255,0.5);
        }
        header.header-light.transparent #menu-btn:before,
        header.header-light.transparent #menu-btn span:before {
            background: #fff;
        }
        header.header-light.smaller {
            position: fixed !important;
            background: rgba(255,255,255,0.98) !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important;
        }
        header.header-light.smaller #mainmenu > li > a,
        header.header-light.smaller #mainmenu li.has-child:after {
            color: var(--heading-font-color) !important;
        }
        #mainmenu > li > a {
            font-weight: 600 !important;
            font-size: 14px !important;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        #mainmenu > li > a:hover,
        #mainmenu li a.active {
            color: var(--primary-color) !important;
        }
        .btn-main {
            font-weight: 600;
            letter-spacing: 0.3px;
            text-transform: uppercase;
            font-size: 13px;
        }
        #logo img {
            max-height: 68px;
        }
    </style>
</head>

<body>

    @include('partials.header')

    <main>
        <a href="#" id="back-to-top"></a>

        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Javascript Files -->
    <script src="https://www.designesia.com/themes/renovast/js/vendors.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/designesia.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/swiper.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/custom-swiper-1.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/custom-marquee.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/jquery.twentytwenty.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/jquery.event.move.js"></script>
    <script src="https://www.designesia.com/themes/renovast/js/custom-twentytwenty.js"></script>
    @stack('scripts')

</body>

</html>
