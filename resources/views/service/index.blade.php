@extends('layout.app')
@section ('title', 'Услуги')
@section ('description', 'Страница с моими услугами')
@section('content')
<!-- Просмотр фото-->
<section>

	<header class="main">
			<h1>Мои услуги</h1>
	</header>
		<div class="posts">

			@foreach($services as $service)
			<article>
    			<a href="/service/{{$service->alias}}" class="image">
    				<img src="{{asset('/images/upload/')}}/{{$service->image}}" alt="" />
    			</a>
    			<p>{{$service->title}}</p>
    			<a href="/service/{{$service->alias}}" class="button red">Подробнее</a>
    			<a href="{{url('application/create')}}?id={{$service->title}}" class="button">Записаться</a>
			</article>
			@endforeach
		</div>
			<a href="{{url('/')}}" class="button center">На главную</a>
			<hr/>
		</section>
		
</section>
@endsection

