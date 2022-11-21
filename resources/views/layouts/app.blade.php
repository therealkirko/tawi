<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tawi Village</title>

        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("ico/apple-touch-icon-144-precomposed.png") }}">
        <link rel="shortcut icon" href="{{ asset('ico/favicon.ico') }}">

        <!-- Font Icon -->
        <link href="{{ asset('css/plugin/font-awesome.min.css') }}" rel="stylesheet" type="text/css">  

        <!-- CSS Global -->
        <link href="{{ asset('css/plugin/bootstrap.min.css') }}" rel="stylesheet" type="text/css">  
        <link href="{{ asset('css/plugin/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">           
        <link href="{{ asset('css/plugin/animate.css') }}" rel="stylesheet" type="text/css"> 
        <link href="{{ asset('css/plugin/subscribe-better.css') }}" rel="stylesheet" type="text/css"> 
        <link href="{{ asset('css/plugin/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="{{ asset("css/theme.css") }}" rel="stylesheet" type="text/css">

    </head>
    <body id="home" class="wide">

        {{-- <div id="loading">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div> --}}

        <main class="wrapper home-wrap">
            @include('includes.header')
            @include('includes.slider')
            {{$slot}}
            @include('includes.footer')
            <div id="to-top-mb" class="to-top mb"> <i class="fa fa-arrow-circle-o-up"></i> </div>
        </main>

        <script src="{{ asset("js/plugin/jquery-2.2.4.min.js") }}"></script>   
        <script src="{{ asset("js/plugin/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/plugin/bootstrap-select.min.js") }}"></script>
        <script src="{{ asset("js/plugin/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("js/plugin/jquery.plugin.min.js") }}"></script>
        <script src="{{ asset("js/plugin/jquery.countdown.js") }}"></script>
        <script src="{{ asset("js/plugin/jquery.subscribe-better.min.js") }}"></script>

        <!-- Custom JS -->   
        <script src="{{ asset("js/theme.js") }}"></script>
    </body>
</html>