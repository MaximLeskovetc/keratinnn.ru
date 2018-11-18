@extends('layouts.app')
@section ('title', 'Контакты')
@section ('description', 'Страница с контактной информацией')
@section('content')
    <div class="contacts text-center">
        <h2 class="mb-5 mt-3">Контакты</h2>
        <div class="data">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                <h5>Телефон</h5>
                <i class="fa fa-phone"></i>
                <a href="tel:8(908)157-49-97" class="logo"> 8(908)157-49-97</a>
            </div>
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
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                <h5>Instagram</h5>
                <a href="https://www.instagram.com/lina_keratin_nn/">
                    <i class="fa fa-instagram"></i>
                    lina_keratin_nn</a>
            </div>
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                <h5><i class="fa fa-home">Адрес:</i></h5>
                <p>г. Нижний Новгород, ул. Чаадаева, д.16 Салон "Арт-стайлинг"</p>
            </div>
        </div>
        <div class="map">
            <div id="map"></div>
        </div>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>
    <script type="text/javascript">
        ymaps.ready(init);
        let myMap, myPlacemark;

        function init() {
            myMap = new ymaps.Map("map", {
                center: [56.354931, 43.860675],
                zoom: 16
            });
            myPlacemark = new ymaps.Placemark(
                [56.354931, 43.860675],
                {hintContent: 'keratinnn.ru'}
            );
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
@endsection