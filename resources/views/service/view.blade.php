@extends('layouts.app')
@section ('title')
    {{$service->title}}
@endsection
@section ('description', 'Страница с услугами в Нижнем Новгороде')
@section('content')
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
@endsection