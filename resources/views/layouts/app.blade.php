<!DOCTYPE html>
<html lang="en">
<head>
    <title>KeratinNN @yield('title') Нижний Новгород</title>
    <meta name="description" content="@yield('description')">
    <meta charset="utf-8"/>
    <meta property="og:locale" content="ru_RU">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta name="yandex-verification" content="413dd3b6137de8e6"/>
    <meta name='wmail-verification' content='0f0a4578e0b365ff2c19f89853231b4d'/>
    <link rel="shortcut icon" href="http://keratinnn.ru/favicon.ico" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
@include('layouts.nav')
@yield('header')
<div class="main-container">
    @yield('content')
</div>
@include('layouts.footer')
<script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/jquery/jquery.maskedinput.js')}}"></script>
<script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('script')
</body>
</html>