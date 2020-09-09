@extends('layouts.app')
@section ('title')
    {{$service->title}}
@endsection
@section ('description')
    {{$service->title}}
@endsection
@section('content')
    <section class="showcase mt-5">
        <div class="container-fluid p-0">
            <div class="service">
                <div class="title">
                    <h1>{{$service->title}}</h1>
                </div>
                <div class="content">
                    <div class="text">
                        {!!$service->description!!}
                        <a href="{{url('/')}}" class="btn btn-outline-primary mt-3">Вернуться к списку</a>
                        <a href="http://api.whatsapp.com/send?phone=79081574997" class="btn btn-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection