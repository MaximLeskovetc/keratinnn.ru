@extends('layouts.app')
@section('content')
    <header class="masthead text-white text-center">
        <div class="container">
            <h1>KeratinNN</h1>
            <h3 class="mb-5">Мастер по восстановлению волос</h3>
            <div class="clearfix"></div>
            <a href="#write" type="submit" class="btn btn-lg btn-success">Записаться сейчас</a>
        </div>
    </header>
    <section class="showcase mt-5">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <img class="img-fluid col-lg-6" src="/images/upload/keratin.jpg" alt="">
                <div class="col-lg-6  my-auto showcase-text">
                    <h2>Кератиновое выпрямление</h2>
                    <p class="lead mb-3">
                        Кератиновое выпрямление и восстановление - одна из самых популярных процедур для
                        волос.
                        Блестящие,идеально прямые и здоровые волосы - вот результат,который не заставит себя ждать.
                        Устали
                        от вечно спутанных прядей? Надоело каждый день тратить по часу на выпрямление утюжком? А сколько
                        перепробовали масок,бальзамов для восстановления? Все эти проблемы можно решить всего за одну
                        процедуру! А результат вас будет радовать до 6-ти месяцев.</p>
                    <a href="{{url('/service/keratinovoe_vipryamlenie')}}" class="btn btn-info mt-3">Подробнее</a>
                    <a href="#write" class="btn btn-success mt-3">Записаться</a>
                </div>
            </div>
            <div class="row no-gutters">
                <img class="col-lg-6 order-lg-2 img-fluid" src="/images/upload/polir.jpg" alt="">
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Полировка волос</h2>
                    <p class="lead mb-0">
                        Полировка волос - замечательная альтернатива "горячим ножницам".
                        Наверно,каждая девушка уже сталкивалась с такой проблемой,как секущиеся кончики. Они не дают
                        полноценно
                        расти волосам и портят внешний вид любой прически. Полировка волос - избавляет от секущихся
                        концов
                        по
                        всей длине,при этом не убирая лишнего ( насадка удаляет не более 5 мм. ). Процедура совершается
                        при
                        помощи машинки для стрижки и специальной насадки для полировки.</p>
                    <a href="{{url('/service/polirovka_volos')}}" class="btn btn-info mt-3">Подробнее</a>
                    <a href="#write" class="btn btn-success mt-3">Записаться</a>
                </div>
            </div>
            <div class="row no-gutters">
                <img class="img-fluid col-lg-6" src="/images/upload/botox.jpg" alt="">
                <div class="col-lg-6  my-auto showcase-text">
                    <h2>Ботокс волос</h2>
                    <p class="lead mb-3">
                        Ботокс для волос - новинка в сфере ухода за волосами. Несмотря на название,данная процедура не
                        связана с уколами,ампулами и т.д. В данном случае ботокс - это состав,который наносится на
                        волосы,полностью их восстанавливает,не изменяя при этом структуру. Это отличный вариант для
                        тех,кто
                        не хочет выпрямлять естественные локоны или терять объем,что выгодно отличается от кератинового
                        выпрямления.</p>
                    <a href="{{url('/service/botoks_volos')}}" class="btn btn-info mt-3">Подробнее</a>
                    <a href="#write" class="btn btn-success mt-3">Записаться</a>
                </div>
            </div>
            <div class="row no-gutters">
                <img class="col-lg-6 order-lg-2 img-fluid" src="/images/upload/flising.jpg" alt="">
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Флисинг</h2>
                    <p class="lead mb-0">
                        Флисинг - это долговременный прикорневой объем. Часто его путают с процедурой "Буст Ап". Но
                        технология процедуры совершенно другая : объем создается при помощи "начеса" у
                        корней,фиксируется
                        специальным составом,спустя время выдержки "начес" мягко разбирается с помощью бальзама,после
                        волосы
                        укладываются как обычно.При этом волосы сохраняют форму и объем на длительный срок. Никаких
                        шпилек и
                        бигуди! Никаких заломов,"гофре" и кудряшек! Только естественный объем с сохранением структуры
                        волоса! </p>
                    <a href="{{url('/service/flising')}}" class="btn btn-info mt-3">Подробнее</a>
                    <a href="#write" class="btn btn-success mt-3">Записаться</a>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Инересные статьи</h2>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-3 ">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid mb-3" src="{{url('images/upload')}}/{{$post->image}}" alt="">
                            <h5>{{$post->title}}</h5>
                            <p class="font-weight-light mb-0 mt-3">
                                {!!$post->description!!}
                            </p>
                            <a href="{{url('/post/kuda_ischezaet_obem')}}" class="btn btn-info mt-3">Читать статью</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Примеры работ</h2>
            <div class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-3 ">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <a href="{{url('/portfolio')}}/{{$portfolio->id}}">
                                <img class="img-fluid mb-3" src="{{asset('images/upload/')}}/{{$portfolio->image}}"
                                     alt="{{$portfolio->title}}"/>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{url('/portfolio')}}">
            <h5 class="mt-3">Посмотреть все работы</h5>
        </a>
    </section>
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <h2>KeratinNN.ru</h2>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 id="write" class="mb-4">Запишись прямо сейчас и получи подарок!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{action('ApplicationController@store')}}"/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input name="phone" type="text" class="form-control form-control-lg"
                                   placeholder="Ваш номер телефона">
                        </div>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-lg btn-success">Оставить заявку!</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
