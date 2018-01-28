@extends('layouts.app')
@section ('title')
    Примеры моих работ
@endsection
@section ('description', 'Страница с моей работой')
@section ('canonical')
    <link rel="canonical" href="http://keratinnn.ru/portfolio"/>
@endsection
@section('content')
    <div class="row portfolio">
        <div class="col-lg-12">
            <h1 class="text-center">Примеры моих работ</h1>
            <div class="portfolio-image"
                 style="background-image: url({{url('images/upload')}}/{{$portfolio->image}})">
            </div>
            <a href="{{url('/')}}" class="button text-center">Вернуться к списку</a>
        </div>
    </div>
@endsection