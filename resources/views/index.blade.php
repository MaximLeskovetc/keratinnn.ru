@extends('layouts.app')
@section('description')
    Главная страница KeratinNN.ru
@endsection
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <section class="showcase mt-1">
        <div class="services">
            <div class="title">
                <h1>Услуги</h1>
            </div>
            <div class="service">
                <div class="title">
                    <h2>
                        <a href="{{url('/service/keratinovoe_vipryamlenie')}}">Кератиновое выпрямление</a>
                    </h2>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/keratin.jpg')}}"/>
                    <div class="text">
                        <p> Кератиновое выпрямление и восстановление - одна из самых популярных процедур для
                            волос. Блестящие,идеально прямые и здоровые волосы - вот результат,который не заставит себя
                            ждать. Устали от вечно спутанных прядей? Надоело каждый день тратить по часу на выпрямление
                            утюжком? А сколько перепробовали масок,бальзамов для восстановления? Все эти проблемы можно
                            решить всего за одну процедуру! А результат вас будет радовать до 6-ти месяцев.</p>
                        <a href="{{url('/service/keratinovoe_vipryamlenie')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-success mt-3">Записаться</button>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h2>
                        <a href="{{url('/service/nanoplastika')}}">Нанопластика</a>
                    </h2>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/nanoplastika.jpg')}}">
                    <div class="text">
                        <p> Формула нанопластики Acid Power содержит мощный комплекс натуральных кислот и аминокислот,
                            что позволяет на 100% выпрямить волосы любой сложности. Имеет приятный аромат свежести, и
                            подходит для работы с подростками и женщинами в положении.<br/>
                            Может применяться на осветленных и мелированных волосах средней и низкой степени
                            повреждения. Состав максимально комфортен, безопасен и эффективен, придает волосам
                            зеркальную гладкость и блеск.</p>
                        <a href="{{url('/service/nanoplastika')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-success mt-3">Записаться</button>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h2>
                        <a href="{{url('/service/botoks_volos')}}">Ботокс волос</a>
                    </h2>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/botox.jpg')}}">
                    <div class="text">
                        <p> Ботокс для волос - новинка в сфере ухода за волосами. Несмотря на название,данная процедура
                            не связана с уколами,ампулами и т.д. <br/>
                            В данном случае ботокс - это состав,который наносится на волосы,полностью их
                            восстанавливает,не изменяя при этом структуру. Это отличный вариант для
                            тех,кто не хочет выпрямлять естественные локоны или терять объем,что выгодно отличается от
                            кератинового выпрямления.</p>
                        <a href="{{url('/service/cold_botoks')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-success mt-3">Записаться</button>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h2>
                        <a href="{{url('/service/botoks_volos')}}">Холодный ботокс</a>
                    </h2>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/cold_botox.jpg')}}">
                    <div class="text">
                        <p> Холодный ботокс - это процедура, направленная на усиленное питание и восстановление волос
                            изнутри, которую не обязательно делать курсом.<br/>
                            Все необходимые полезные компоненты работают не на поверхности, а внутри структуры волоса,
                            что позволяет быстро и эффективно восстановить даже самые поврежденные волосы.
                            В технике не используются высокие температуры утюжка, не нужно "запаивать" кутикулу и носить
                            состав несколько дней.<br/>
                            Холодный ботокс именно поэтому и называется "холодным".<br/>
                            Некоторые задают вопрос "это то же самое, что и сос восстановление?"<br/>
                            Сос восстановление делается курсом, результат можно увидеть только после нескольких
                            процедур. После холодного ботокса результат видно сразу!</p>
                        <a href="{{url('/service/cold_botoks')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-success mt-3">Записаться</button>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h2>
                        <a href="{{url('/service/polirovka_volos')}}">Полировка волос</a>
                    </h2>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/polir.jpg')}}">
                    <div class="text">
                        <p> Полировка волос - замечательная альтернатива "горячим ножницам". Наверно,каждая девушка уже
                            сталкивалась с такой проблемой,как секущиеся кончики. Они не дают полноценно расти волосам и
                            портят внешний вид любой прически.<br/>
                            Полировка волос - избавляет от секущихся концов по всей длине,при этом не убирая лишнего (
                            насадка удаляет не более 5 мм. ). Процедура совершается при помощи машинки для стрижки и
                            специальной насадки для полировки.</p>
                        <a href="{{url('/service/polirovka_volos')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-success mt-3">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showcase mt-1 text-center">
        <div class="posts">
            <div class="title">
                <h1>Блог</h1>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="post">
                        <img src="{{url('images/upload/post')}}/{{$post->image}}" alt="{{$post->title}}">
                        <div class="content">
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->description}}</p>
                            <a href="{{url('/post')}}/{{$post->alias}}" class="btn btn-outline-success">Читать далее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--<section class="text-center">--}}
    {{--<div class="title">Примеры работ</div>--}}
    {{--<div class="row">--}}
    {{--@foreach($portfolios as $portfolio)--}}
    {{--<div class="col-lg-6">--}}
    {{--<img class="img-fluid" src="{{url('images/upload')}}/{{$portfolio->image}}"/>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--<a href="{{url('/portfolio')}}" class="btn btn-outline-primary">Посмотреть другие работы</a>--}}
    {{--</div>--}}
    {{--</section>--}}
@endsection
