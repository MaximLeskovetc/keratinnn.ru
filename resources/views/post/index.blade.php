@extends('layouts.app')
@section ('title', 'Статьи')
@section ('description', 'Страница со списком публикаций')
@section('content')
    <!-- Статьи-->
    <section>
        <header class="major">
            <h1>Статьи</h1>
        </header>
    </section>
    @foreach($posts as $post)
        <section id="banner">
            <div class="content">
                <header>
                    <a href="{{url('/post/')}}/{{$post->alias}}">
                        <h2>{{$post->title}}</h2>
                        <p>{!!$post->description!!}</p>
                    </a>
                </header>
            </div>
            <a href="{{url('/post/')}}/{{$post->alias}}" class="image">
                <img src="{{asset('/images/upload/')}}/{{$post->image}}" alt="{{$post->title}}">
            </a>
        </section>
    @endforeach
    <hr/>
    <a href="{{url('/')}}" class="button">На главную</a>
@endsection