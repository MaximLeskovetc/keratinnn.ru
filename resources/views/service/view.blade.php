@extends('layouts.app')
@section ('title')
    {{$service->title}}
@endsection
@section ('description', 'Страница с услугами в Нижнем Новгороде')
@section('content')
    <header class="masthead text-white text-center">
        <div class="container">
            <h1>KeratinNN</h1>
            <h3 class="mb-5">Мастер по восстановлению волос</h3>
            <div class="clearfix"></div>
            <a href="#write" type="submit" class="btn btn-lg btn-success">Записаться сейчас</a>
        </div>
    </header>
    <section class="showcase mt-5">
        <div class="container-fluid p-0">
            <div class="row service">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{asset('/images/upload/')}}/{{$service->image}}" alt=""/>
                </div>
                <div class="col-lg-6">
                    <h2>{{$service->title}}</h2>
                    <p class="lead mb-3">
                        {!!$service->description!!}
                        <a href="{{url('/')}}" class="btn btn-info mt-3">Вернуться к списку</a>
                        <a href="#write" class="btn btn-success mt-3">Записаться</a>
                </div>
            </div>
        </div>
    </section>
    <div class="call-action">
        <div class="container">
            <h2>KeratinNN.ru</h2>
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 id="write" class="mb-4">Запишись прямо сейчас и получи подарок!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form method="POST" enctype="multipart/form-data"
                          action="{{action('ApplicationController@store')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input id="phone" name="phone" type="text" class="form-control form-control-lg"
                                       placeholder="Ваш номер телефона">
                            </div>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-lg btn-success">Оставить заявку!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection