@extends('layout.app')
@section ('title', 'Главная')
@section ('description', 'Главная страница сайта с услугами по Кератиновому выпрямлению и восстановлению волос, Полировке волос, Ботоксу волос, Флисингу в Нижнем Новгороде.')
@section('content')

	<!--Шапка-->
		<section id="banner">
			<div class="content">
				<header>
					<h1><a href="{{url('/about')}}">Мастер по восстановлению волос</a></h1>
					<p>Записаться на любую процедуру можно уже сейчас</p>
					<a href="{{url('application/create')}}?id" class="button big">Записаться сейчас</a>
				</header>
			</div>
			<a href="{{url('/about')}}" class="image">
				<img src="{{url('/images/avatar/avatar.jpg')}}" alt="Фото мастера" />
			</a>
		</section>
		
	<!-- Услуги -->
		<section>
			<header class="major">
				<a href="{{url('/service')}}"><h1>Услуги</h1></a>
			</header>
		<div class="posts">
			@foreach($service as $services)
			<article>
				<a href="{{url('service')}}/{{$services->alias}}" class="image">
					<img src="{{asset('/images/upload/')}}/{{$services->image}}" alt="{{$services->title}}" />
				</a>
				<h2>{{$services->title}}</h2>
				<p>{!!$services->description!!}</p>
				<ul class="actions">
					<li><a href="{{url('service')}}/{{$services->alias}}" class="button red">Подробнее о услуге</a></li>
					<li><a href="{{url('application/create')}}?id={{$services->title}}" class="button">Записаться</a></li>	
				</ul>
			</article>
			@endforeach
		</div>
		</section>
		<!-- Статьи-->
		<section>
			<header class="major">
				<a href="{{url('/post')}}"><h1>Статьи</h1></a>
			</header>
		<div class="posts">
			@foreach($posts as $post)
			<article>
				<a href="{{url('/post/')}}/{{$post->alias}}" class="image">
					<img src="{{asset('/images/upload/')}}/{{$post->image}}" alt="{{$post->title}}" />
				</a>
				<h2>{{$post->title}}</h2>
				<p>{!!$post->description!!}</p>
				<ul class="actions">
					<li><a href="{{url('/post/')}}/{{$post->alias}}" class="button">Читать статью</a></li>
				</ul>
			</article>
			@endforeach
		</div>
		</section>

		<!-- Примеры работ -->
		<section>
			<header class="main">
				<a href="{{url('/portfolio')}}"><h1>Примеры работ</h1></a>
			</header>
				<div class="posts">
					@foreach($portfolios as $portfolio)
						<article>					
							<a href="{{url('/portfolio')}}/{{$portfolio->id}}"class="image">
								<img src="{{asset('images/upload/')}}/{{$portfolio->image}}" alt="{{$portfolio->title}}" />
							</a>
							<p>{{$portfolio->title}}</p>
						</article>
					@endforeach
		   		</div>
		</section>
@endsection