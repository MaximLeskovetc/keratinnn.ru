@extends('layouts.app')
@section ('title')
    {{$service->title}}
@endsection
@section ('description')
    {{$service->title}} .в Нижнем Новгороде
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
                        {{--<img class="img-fluid" src="{{asset('/images/upload/')}}/{{$service->image}}" alt=""/>--}}
                        {!!$service->description!!}
                        <a href="{{url('/')}}" class="btn btn-outline-primary mt-3">Вернуться к списку</a>
                        <a href="javascript:;" id="addModal" class="btn btn-outline-success mt-3">Записаться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection