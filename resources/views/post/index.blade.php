@extends('layouts.app')
@section ('title', 'Статьи')
@section ('description', 'Список публикаций')
@section('content')
    <section class="mt-5">
        <header class="major">
            <h1>Блог</h1>
        </header>
    </section>
    <div class="row">
        <div class="posts">
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
        <a href="{{url('/')}}" class="btn ml-3 mb-3 btn-success">На главную</a>
    </div>
@endsection