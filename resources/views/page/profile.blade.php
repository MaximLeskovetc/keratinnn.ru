@extends('layout.app')
@section ('title', 'Профиль')
@section ('description', 'Страница профиля')
@section('content')
    <section id="banner">
        <div class="content">
            <header class="main">
                <h1>Профиль</h1>
            </header>
            <div class="post">
                <article>
                    Добрый день, {{$name}}.
                </article>
                <hr/>
                <article>
                    <h3>Мои заказы</h3>
                    <p>Пока нет заказов</p>
                </article>
                <hr/>
                <a href="{{url('/logout')}}" class="pull-right button">Выйти</a>
            </div>
        </div>
    </section>
@endsection