@extends('layouts.app')
@section ('title', 'Статьи')
@section ('description', 'Список публикаций')
@section('content')
    <section class="showcase mt-5 text-center">
        <div class="posts">
            <div class="title">
                <h1>Блог</h1>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="post">
                        <img src="{{url('images/upload/post')}}/{{$post->image}}" alt="{{$post->title}}">
                        <div class="content">
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->description}}</p>
                            <a href="{{url('/post')}}/{{$post->alias}}" class="btn btn-outline-success">Читать далее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="showcase">
        <a href="{{url('/')}}" class="btn mb-3 btn-success">На главную</a>
    </div>
@endsection