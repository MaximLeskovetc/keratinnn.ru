@extends('layout.app')
@section ('title')
    {{$portfolio->title}}
@endsection
@section ('description', 'Страница с моей работой')
@section('content')
@section ('canonical')
    <link rel="canonical" href="http://keratinnn.ru/portfolio"/>
@endsection
<!-- Просмотр фото-->
<section>
    <header class="main">
        <h1>Портфолио</h1>
        <p style="text-align:center;">{{$portfolio->title}}</p>
        <span class="image main" style="margin: 0 auto;">
            <img src="{{asset('/images/upload/')}}/{{$portfolio->image}}" alt="{{$portfolio->title}}"/></span>
    </header>
    <hr class="major"/>
    <a href="{{url('/')}}" class="button">Вернуться к списку</a>
</section>
@endsection