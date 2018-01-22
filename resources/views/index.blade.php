@extends('layouts.app')
@section('content')
    <header class="text-white text-center">
        <h1>KeratinNN</h1>
        <h3>Мастер по восстановлению волос</h3>
        <a href="#write" type="submit" class="btn btn-md btn-success m-b-30">Записаться сейчас</a>
    </header>
    <section class="showcase mt-5">
        <div class="container-fluid">
            <div class="service">
                <div class="row service-image">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{url('/images/upload/keratin.jpg')}}"/>
                    </div>
                    <div class="col-md-6">
                        <h2>Кератиновое выпрямление</h2>
                        <p> Кератиновое выпрямление и восстановление - одна из самых популярных процедур для
                            волос.
                            Блестящие,идеально прямые и здоровые волосы - вот результат,который не заставит себя
                            ждать.
                            Устали
                            от вечно спутанных прядей? Надоело каждый день тратить по часу на выпрямление утюжком? А
                            сколько
                            перепробовали масок,бальзамов для восстановления? Все эти проблемы можно решить всего за
                            одну
                            процедуру! А результат вас будет радовать до 6-ти месяцев.</p>
                        <a href="{{url('/service/keratinovoe_vipryamlenie')}}" class="btn btn-info mt-3">Подробнее</a>
                        <a href="#write" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="row service-image">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{url('/images/upload/polir.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <h2>Полировка волос</h2>
                        <p> Полировка волос - замечательная альтернатива "горячим ножницам".
                            Наверно,каждая девушка уже сталкивалась с такой проблемой,как секущиеся кончики. Они не
                            дают
                            полноценно
                            расти волосам и портят внешний вид любой прически. Полировка волос - избавляет от
                            секущихся
                            концов
                            по
                            всей длине,при этом не убирая лишнего ( насадка удаляет не более 5 мм. ). Процедура
                            совершается
                            при
                            помощи машинки для стрижки и специальной насадки для полировки.</p>
                        <a href="{{url('/service/polirovka_volos')}}" class="btn btn-info mt-3">Подробнее</a>
                        <a href="#write" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="row service-image">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{url('/images/upload/botox.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <h2>Ботокс волос</h2>
                        <p> Ботокс для волос - новинка в сфере ухода за волосами. Несмотря на название,данная
                            процедура
                            не
                            связана с уколами,ампулами и т.д. В данном случае ботокс - это состав,который наносится
                            на
                            волосы,полностью их восстанавливает,не изменяя при этом структуру. Это отличный вариант
                            для
                            тех,кто
                            не хочет выпрямлять естественные локоны или терять объем,что выгодно отличается от
                            кератинового
                            выпрямления.</p>
                        <a href="{{url('/service/botoks_volos')}}" class="btn btn-info mt-3">Подробнее</a>
                        <a href="#write" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <div class="col-md-12">
                <div class="title">Интересные статьи</div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-6">
                            <div class="post-image"
                                 style="background-image: url({{url('images/upload/post')}}/{{$post->image}})">
                                <a href="{{url('/post')}}/{{$post->alias}}">
                                    {{$post->title}}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <div class="title">Примеры работ</div>
            <div class="row portfolio">
                @foreach($portfolios as $portfolio)
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{url('images/upload')}}/{{$portfolio->image}}"/>
                    </div>
                @endforeach
                <a href="{{url('/portfolio')}}" class="btn btn-info">Посмотреть все работы</a>
            </div>
        </div>
    </section>
    <div class="call-action">
        <div class="container">
            <h2>KeratinNN.ru</h2>
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 id="write" class="mb-4">Запишись прямо сейчас и получи подарок!</h2>
                </div>
                <div class="col-md-10 col-md-8 col-xl-7 mx-auto">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{action('ApplicationController@store')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input id="phone" name="phone" type="text" class="form-control form-control-md"
                                       placeholder="Ваш номер телефона">
                            </div>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-md btn-success">Оставить заявку!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
