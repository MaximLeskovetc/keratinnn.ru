@extends('layouts.app')
@section ('title')
    {{$post->title}}
@endsection
@section ('description')
    Обзор статьи {{$post->title}}
@endsection
@section('content')
    <div class="container">
        <div class="row post">
            <img style="max-height: 400px" class="img-fluid" src="{{asset('/images/upload/post')}}/{{$post->image}}"
                 alt="{{$post->title}}">
            <h1>{{$post->title}}</h1>
            <p class="lead mb-3">{!!$post->description!!}</p>
            <a href="{{url('/')}}" class="btn btn-info m-b-30">На главную</a>
        </div>
    </div>
@endsection