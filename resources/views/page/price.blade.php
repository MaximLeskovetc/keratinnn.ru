@extends('layouts.app')
@section ('title', 'Цены')
@section ('description', 'Цены на услуги Кератинового выпрямления, ботокса для волос, нанопластики, и полировки в Нижнем Новгороде')
@section('content')
    <div class="container price text-center">
        <h2 class="mt-3">Цены</h2>
        <h5 class="mb-5">Сколько стоят улуги?</h5>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Кератиновое выпрямление</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item price-item"><span>до плеч </span><span>2 000</span></li>
                        <li class="list-group-item price-item"><span>ниже плеч </span><span>2 500</span></li>
                        <li class="list-group-item price-item"><span>до лопаток / ниже талии </span><span>4 000</span></li>
                        <li class="list-group-item price-item"><span>до талии </span><span>3 000</span></li>
                        <li class="list-group-item price-item"><span>поясница </span><span>3 500</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Нанопластика</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item price-item"><span>до плеч </span><span>3 000</span></li>
                        <li class="list-group-item price-item"><span>ниже плеч </span><span>3 500</span></li>
                        <li class="list-group-item price-item"><span>до лопаток / ниже талии </span><span>4 000</span></li>
                        <li class="list-group-item price-item"><span>до талии </span><span>4 500</span></li>
                        <li class="list-group-item price-item"><span>поясница </span><span>5 500</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Ботокс для волос</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item price-item"><span>до плеч </span><span>1 800</span></li>
                        <li class="list-group-item price-item"><span>ниже плеч </span><span>2 300</span></li>
                        <li class="list-group-item price-item"><span>до лопаток / ниже талии </span><span>2 800</span></li>
                        <li class="list-group-item price-item"><span>до талии </span><span>3 300</span></li>
                        <li class="list-group-item price-item"><span>поясница </span><span>4 000</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Полировка волос</h5>
                    <ul class="list-group">Стоимость процедуры:
                        <li class="list-group-item price-item"><span>любая длина </span><span>400</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection