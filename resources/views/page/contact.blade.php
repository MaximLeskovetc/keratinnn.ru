@extends('layouts.app')
@section ('title', 'Контакты')
@section ('description', 'Страница с контактной информацией')
@section('content')
    <div class="container text-center">
        <h2 class="mb-5 mt-3">Контакты</h2>
        <div class="row">
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Телефон</h5>
                    <i class="fa fa-phone"></i>
                    <a href="tel:8(908)157-49-97" class="logo"> 8(908)157-49-97</a>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Вконтакте</h5>
                    <p>
                        <i class="fa fa-vk"></i>
                        <a href="https://vk.com/lina_leskovets">vk.com/lina_leskovets</a>
                    </p>
                    <p>
                        <i class="fa fa-vk"></i>
                        <a href="https://vk.com/keratin_botox_nn">vk.com/keratin_botox_nn</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5>Instagram</h5>
                    <a href="https://www.instagram.com/lina_keratin_nn/">
                        <i class="fa fa-instagram"></i>
                    lina_keratin_nn</a>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <h5><i class="fa fa-home">Адрес:</i></h5>
                    <p>г. Нижний Новгород, ул. Исполкома, д.3</p>
                </div>
            </div>
        </div>
    </div>
@endsection