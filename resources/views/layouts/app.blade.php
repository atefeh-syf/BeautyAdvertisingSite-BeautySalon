<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>beatysalon{{-- {{ config('app.name', 'Laravel') }} --}}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- main css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
   
    <!-- Fav icon-->
    <link rel="icon" href="{{ asset('pic/favicon.ico') }}">
    
    
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
        <!-- jQuery-2.2.4 js -->
        <script type="text/javascript" src="{{URL::asset('js/jquery-2.2.4.min.js') }}"></script>
        <!--<script type="text/javascript" src="{{URL::asset('js/jquery-3.0.0.min.js') }}"></script>-->
        <!-- Popper js -->
        <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap-4 js -->
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/active.js') }}"></script>
    </div>
    
</body>
</html>
