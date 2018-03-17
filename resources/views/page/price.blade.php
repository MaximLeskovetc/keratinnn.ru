@extends('layouts.app')
@section ('title', 'Цены')
@section ('description', 'Цены на услуги Кератинового выпрямления, ботокса для волос, нанопластики, и полировки в Нижнем Новгороде')
@section('content')
    <div class="container price text-center">
        <h2 class="mt-3">Цены</h2>
        <h2 class="mb-5">Сколько стоят улуги?</h2>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Кератиновое выпрямление</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">челка - 500 руб</li>
                        <li class="list-group-item">длина выше плеч - 1700 руб.</li>
                        <li class="list-group-item">длина до лопаток - 2500 руб.</li>
                        <li class="list-group-item">длина до поясницы - 3000 руб.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Нанопластика</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">до плеч - 2000 руб.</li>
                        <li class="list-group-item">до лопаток - 2800 руб.</li>
                        <li class="list-group-item">до талии и ниже - от 3500 руб</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Ботокс для волос</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item">длина выше плеч - 1600 руб.</li>
                        <li class="list-group-item">длина до лопаток - 2400 руб.</li>
                        <li class="list-group-item">длина до поясницы - 2900 руб.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
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