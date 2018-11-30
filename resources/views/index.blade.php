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
                    <h1>
                        <a href="{{url('/service/keratinovoe_vipryamlenie')}}">Кератиновое выпрямление</a>
                    </h1>
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
                        <a href="javascript:;" id="addModal" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h1>
                        <a href="{{url('/service/nanoplastika')}}">Нанопластика</a>
                    </h1>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/nanoplastika.jpg')}}">
                    <div class="text">
                        <p> Формула нанопластики Acid Power содержит мощный комплекс натуральных кислот и аминокислот,
                            что позволяет на 100% выпрямить волосы любой сложности. Имеет приятный аромат свежести, и
                            подходит для работы с подростками и женщинами в положении. Может применяться на осветленных
                            и мелированных волосах средней и низкой степени повреждения. Состав максимально комфортен,
                            безопасен и эффективен, придает волосам зеркальную гладкость и блеск.</p>
                        <a href="{{url('/service/nanoplastika')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="javascript:;" id="addModal" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h1>
                        <a href="{{url('/service/botoks_volos')}}">Ботокс волос</a>
                    </h1>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/botox.jpg')}}">
                    <div class="text">
                        <p> Ботокс для волос - новинка в сфере ухода за волосами. Несмотря на название,данная процедура
                            не
                            связана с уколами,ампулами и т.д. В данном случае ботокс - это состав,который наносится на
                            волосы,полностью их восстанавливает,не изменяя при этом структуру. Это отличный вариант для
                            тех,кто
                            не хочет выпрямлять естественные локоны или терять объем,что выгодно отличается от
                            кератинового
                            выпрямления.</p>
                        <a href="{{url('/service/botoks_volos')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="javascript:;" id="addModal" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="title">
                    <h1>
                        <a href="{{url('/service/polirovka_volos')}}">Полировка волос</a>
                    </h1>
                </div>
                <div class="content">
                    <img src="{{url('/images/upload/polir.jpg')}}">
                    <div class="text">
                        <p> Полировка волос - замечательная альтернатива "горячим ножницам". Наверно,каждая девушка уже
                            сталкивалась с такой проблемой,как секущиеся кончики. Они не дают полноценно расти волосам и
                            портят
                            внешний вид любой прически. Полировка волос - избавляет от секущихся концов по всей
                            длине,при
                            этом
                            не убирая лишнего ( насадка удаляет не более 5 мм. ). Процедура совершается при помощи
                            машинки
                            для
                            стрижки и специальной насадки для полировки.</p>
                        <a href="{{url('/service/polirovka_volos')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                        <a href="javascript:;" id="addModal" class="btn btn-success mt-3">Записаться</a>
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
                        <a href="{{url('/post')}}/{{$post->alias}}">
                            {{$post->title}}
                        </a>
                        <img src="{{url('images/upload/post')}}/{{$post->image}}" alt="">
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
