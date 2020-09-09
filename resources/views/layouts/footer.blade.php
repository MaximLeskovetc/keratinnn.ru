<div class="call-action">
    <div class="img">
        <div class="container">
            <div class="action">
                <!-- <h2><a href="{{url('/')}}"> -->
                        <img class="logo" src="{{asset('/images/header/logo.png')}}" alt="logo">
                    <!-- </a></h2> -->
                <ul id="write" class="mb-4">
                    <li>Волосы как из рекламы</li>
                    <li class="green m-b-30">за 1 процедуру!</li>
                </ul>
                <!-- <form method="POST" enctype="multipart/form-data"
                      action="{{action('ApplicationController@store')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input id="phone" name="phone" type="text" class="form-control form-control-md"
                           placeholder="Ваш номер телефона" required> -->
                    <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-md btn-success">Записаться сейчас!</button>
                <!-- </form> -->
            </div>
            <div class="action hidden" id="modal">
                <button class="close">x</button>
                <!-- <h2><a href="{{url('/')}}"> -->
                        <img class="logo" src="{{asset('/images/header/logo.png')}}" alt="logo">
                    <!-- </a></h2> -->
                <ul id="write" class="mb-4">
                    <li>Волосы как из рекламы</li>
                    <li class="green"> за 1 процедуру</li>
                </ul>
                <!-- <form method="POST" enctype="multipart/form-data"
                      action="{{action('ApplicationController@store')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input id="phone_1" name="phone" type="text" class="form-control form-control-md"
                           placeholder="Ваш номер телефона" required> -->
                           <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-md btn-success">Записаться сейчас!</button>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <ul>
                <li class="list-inline-item">
                    <a href="{{url('/')}}">Главная</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
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
            <ul>
                <li class="list-inline-item m-l-15">
                    <i class="fa fa-map-marker"></i> Нижний Новгород
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
                    <a href="https://www.instagram.com/lina.keratin/">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <p class="text-white">&copy; KeratinNN.ru 2017-2018</p>
        </div>
    </div>
</footer>