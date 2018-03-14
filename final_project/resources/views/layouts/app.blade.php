<!DOCTYPE html>
<html data-whatinput="initial" data-whatintent="mouse" class=" whatinput-types-initial">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Landon Hotel App</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta class="foundation-mq">
    @yield ('meta')

    @section('css')
    <link rel="stylesheet" href="{{asset ('css/foundation.css')}}">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <link rel="stylesheet" href="{{asset ('pickadate/lib/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset ('pickadate/lib/themes/default.date.css')}}">
    @show

@yield('social-meta')
</head>
<body>
@section('header')
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu="49qhhm-dropdown-menu" role="menubar">
                <li role="menuitem"><a href="{{ route('home') }}">Home</a></li>
                <li role="menuitem"><a href="{{ route('client') }}">Clients</a></li>
                <li role="menuitem"><a href="{{ route('reservations') }}">Reservations</a></li>
            </ul>
        </div>
    </div>
</div>
@show
<br>
@yield('content')

@section('footer')
    <div class="row column">
        <hr>
        <ul class="menu">
            <li class="float-right">Copyright 2017</li>
        </ul>
    </div>
@show

@section('scripts')
    <script>
        $(document).foundation();
    </script>

    <script src=" {{asset ('js/vendor/jquery.js')}}"></script>
    <script src="{{asset ('js/vendor/what-input.js')}}"></script>
    <script src="{{asset ('js/vendor/foundation.js')}}"></script>
    <script src="{{asset ('js/app.js"')}}"></script>
    <script src="{{asset ('pickadate/lib/picker.js')}}"></script>
    <script src="{{asset ('pickadate/lib/picker.date.js')}}"></script>
    <script>
        $('.datepicker').pickadate(
            {
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd'
            }
        );
    </script>
@show
</body>
</html>