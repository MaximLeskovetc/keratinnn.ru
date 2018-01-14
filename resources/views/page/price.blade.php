@extends('layouts.app')
@section ('title', 'Цены')
@section ('description', 'Страница с ценами на услуги Кератинового выпрямления, ботокса для волос, флисинга прикорневого объема, и полировки в Нижнем Новгороде')
@section('content')
    <div class="container text-center">
        <h1>Цены</h1>
        <h2 class="mb-5">Сколько стоят улуги?</h2>
        <div class="row">
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Кератиновое выпрямление</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">челка - 500 руб</li>
                        <li class="list-group-item">длина выше плеч - 1700 руб. + полировка в подарок</li>
                        <li class="list-group-item">длина до лопаток - 2500 руб. + полировка в подарок</li>
                        <li class="list-group-item">длина до поясницы - 3000 руб. + полировка в подарок</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Флисинг</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">любая длина 1200 руб. + полировка в подарок</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Ботокс для волос</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">челка - 500 руб</li>
                        <li class="list-group-item">длина выше плеч - 1700 руб. + полировка в подарок</li>
                        <li class="list-group-item">длина до лопаток - 2500 руб. + полировка в подарок</li>
                        <li class="list-group-item">длина до поясницы - 3000 руб. + полировка в подарок</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Полировка волос</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">любая длина 400 рублей</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection