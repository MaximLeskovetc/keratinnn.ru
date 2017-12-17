@extends('layouts.app')
@section ('title', 'Контакты')
@section ('description', 'Страница с контактной информацией')
@section('content')
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Контакты</h2>
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
                        <i class="fa fa-vk"></i>
                        <a href="https://vk.com/lina_leskovets"> vk.com/lina_leskovets</a>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <h5>Instagram</h5>
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/lina_hair52/"> lina_hair52</a>
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
    </section>
@endsection