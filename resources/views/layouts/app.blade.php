<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="{{asset('storage/assets/ico/favicon.ico')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <x-blocks.headers.block-two/>
            <main>
                @yield('content')
            </main>
            <x-layouts.footers.footer/>

    </div>

    <!-- Scripts -->
    <!-- JS Global -->
    <script src="{{asset('design/assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/superfish/js/superfish.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('design/assets/plugins/owl-carousel2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/jquery.sticky.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/jquery.easing.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/jquery.smoothscroll.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/countdown/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/countdown/jquery.countdown.min.js')}}"></script>
    {{-- <script src="{{ asset('js/plugins.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
