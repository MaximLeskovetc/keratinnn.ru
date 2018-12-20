@extends('layouts.app')
@section ('title', 'Услуги')
@section ('description', 'Услуги реконструкции волос в Нижнем Новгороде')
@section('content')
    <div class="mt-5 services">
        <div class="title">
            <h1>Услуги</h1>
        </div>
        <div class="service showcase">
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
                    <button id="addModal" class="btn btn-success mt-3">Записаться</button>
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
                        подходит для работы с подростками и женщинами в положении. Может применяться на осветленных
                        и мелированных волосах средней и низкой степени повреждения. Состав максимально комфортен,
                        безопасен и эффективен, придает волосам зеркальную гладкость и блеск.</p>
                    <a href="{{url('/service/nanoplastika')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                    <button id="addModal" class="btn btn-success mt-3">Записаться</button>
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
                        не
                        связана с уколами,ампулами и т.д. В данном случае ботокс - это состав,который наносится на
                        волосы,полностью их восстанавливает,не изменяя при этом структуру. Это отличный вариант для
                        тех,кто
                        не хочет выпрямлять естественные локоны или терять объем,что выгодно отличается от
                        кератинового
                        выпрямления.</p>
                    <a href="{{url('/service/botoks_volos')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                    <button id="addModal" class="btn btn-success mt-3">Записаться</button>
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
                        портят
                        внешний вид любой прически. Полировка волос - избавляет от секущихся концов по всей
                        длине,при
                        этом
                        не убирая лишнего ( насадка удаляет не более 5 мм. ). Процедура совершается при помощи
                        машинки
                        для
                        стрижки и специальной насадки для полировки.</p>
                    <a href="{{url('/service/polirovka_volos')}}" class="btn btn-outline-primary mt-3">Подробнее</a>
                    <button id="addModal" class="btn btn-success mt-3">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <div class="showcase">
        <a href="{{url('/')}}" class="btn mb-3 btn-success">На главную</a>
    </div>
@endsection

