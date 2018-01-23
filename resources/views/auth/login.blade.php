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
    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div class="login">
    <div class="content">
        <div class="row">
            <div class="login-register-form">
                <h1>Вход</h1>
                <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <label for="email">
                        <p class="label-hidden">Эл. почта</p>
                        <input type="text" name="email" placeholder="Эл. почта">
                    </label>
                    <label for="password">
                        <p class="label-hidden">Пароль</p>
                        <input type="password" name="password" placeholder="Пароль">
                    </label>
                    <button class="btn btn-success">Войти</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/jquery/jquery.maskedinput.js')}}"></script>
<script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/reg_log.js')}}"></script>
</body>
</html>


