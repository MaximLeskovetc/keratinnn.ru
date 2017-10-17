<html lang="ru">
    <head>

        <title>KeratinNN @yield('title') Нижний Новгород</title>
        <meta name="description" content="@yield('description')">
        <meta charset="utf-8" />
        <meta property="og:locale" content="ru_RU">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="yandex-verification" content="413dd3b6137de8e6" />
        <meta name='wmail-verification' content='0f0a4578e0b365ff2c19f89853231b4d' />
        <link rel="shortcut icon" href="http://keratinnn.ru/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/slide.css')}}"/>


        @yield('canonical')

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->  
        <!--[if lte IE 8]><script src="{{asset('assets/js/ie/html5shiv.js')}}"></script><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="{{asset('assets/css/ie9.css')}}" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="{{asset('assets/css/ie8.css')}}" /><![endif]-->

    </head>        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/skel.min.js')}}"></script>
        <script src="{{asset('assets/js/util.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slide.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.maskedinput.min.js') }}"></script>
        <!--[if lte IE 8]><script src="{{asset('assets/js/ie/respond.min.js')}}"></script><![endif]-->
        <script src="{{asset('assets/js/main.js')}}"></script>

    <body>
            @include('layout.header')
            @yield('content')
            @include('layout.footer')
    </body>
</html>