@extends('layout.app')
@section ('title') 
	{{$service->title}}
@endsection
@section ('description', 'Страница с услугами в Нижнем Новгороде')
@section('content')
<!-- Просмотр услуги-->
<section id="my">
	<header class="main">
		<span class="image main"><img src="{{asset('/images/upload/')}}/{{$service->image}}" alt="" /></span>
	</header>

	<hr class="major" />

	<h1>{{$service->title}}</h1>
	<p>{!!$service->description!!}</p>

	<a href="{{url('/service')}}" class="button">Вернуться к списку</a>
	<a href="{{url('application/create')}}?id={{$service->title}}" class="button">Записаться</a>
</section>
@endsection