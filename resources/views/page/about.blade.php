@extends('layouts.app')
@section ('title', 'О нас')
@section ('description', 'Страница информации о нас')
@section('content')
    <section class="showcase mt-5">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <img class="img-fluid order-lg-2 col-lg-6" src="{{url('/images/avatar/avatar.jpg')}}" alt="Фото"/>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h1>Обо мне</h1>
                    <p class="lead mb-3">
                        Меня зовут Лина. Я являюсь сертифицированным мастером по процедурам восстановления волос и с
                        радостью отвечу на все ваши вопросы, а так же помогу подобрать процедуру именно под ваш тип
                        волос.</p>
                </div>
            </div>
        </div>
    </section>
@endsection