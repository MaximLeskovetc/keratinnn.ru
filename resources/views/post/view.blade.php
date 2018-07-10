@extends('layouts.app')
@section ('title')
    {{$post->title}}
@endsection
@section ('description')
    Обзор статьи {{$post->title}}
@endsection
@section('content')
    {{--<div class="container">--}}
        {{--<div class="row mt-5">--}}
            {{--<img style="max-height: 400px" class="img-fluid" src="{{asset('/images/upload/post')}}/{{$post->image}}"--}}
                 {{--alt="{{$post->title}}">--}}
            {{--<h1>{{$post->title}}</h1>--}}
            {{--<p class="lead mb-3">{!!$post->description!!}</p>--}}
            {{--<a href="{{url('/')}}" class="btn btn-info mb-3">На главную</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container">
        <div class="row mt-5">
            <div class="post-img" style="background-image: url({{asset('/images/upload/post')}}/{{$post->image}})">
                <h1>{{$post->title}}</h1>
            </div>
            <p class="lead mb-3">{!!$post->description!!}</p>
            <a href="{{url('/')}}" class="btn btn-info mb-3">На главную</a>
        </div>
    </div>
@endsection

