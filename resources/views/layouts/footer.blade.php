<div class="call-action">
    <div class="container">
        <h2>KeratinNN.ru</h2>
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <ul id="write" class="mb-4">
                    <li>Хочешь волосы как из рекламы за одну процедуру</li>
                    <li>тогда запишись прямо сейчас!</li>
                </ul>
            </div>
            <div class="col-md-10 col-md-8 col-xl-7 mx-auto">
                <form method="POST" enctype="multipart/form-data"
                      action="{{action('ApplicationController@store')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input id="phone" name="phone" type="text" class="form-control form-control-md"
                                   placeholder="Ваш номер телефона">
                        </div>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-md btn-success">Оставить заявку!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <ul class="pull-left list-inline">
            <li class="list-inline-item">
                <a href="{{url('/about')}}">Обо мне</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="{{url('/contact')}}">Контакты</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="{{url('price')}}">Цены</a>
            </li>

        </ul>
        <ul class="pull-right">
            <li class="list-inline-item m-l-15">
                <a href="#">
                    <i class="fa fa-map-marker"></i> Нижний Новгород
                </a>
            </li>
            <li class="list-inline-item m-l-15">
                <a href="tel:8(908)157-49-97">
                    <i class="fa fa-phone"></i> 8(908)157-49-97
                </a>
            </li>
            <li class="list-inline-item m-l-15">
                <a href="https://vk.com/keratin_botox_nn">
                    <i class="fa fa-vk"></i>
                </a>
            </li>
            <li class="list-inline-item m-l-15">
                <a href="https://www.instagram.com/lina_hair52/">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <p class="text-white text-center">&copy; KeratinNN.ru 2017. Все права защищены.</p>
    </div>
</footer>