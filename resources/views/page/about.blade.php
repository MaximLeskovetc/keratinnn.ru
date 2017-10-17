@extends('layout.app')
@section ('title', 'О нас')
@section ('description', 'Страница информации о нас')
@section('content')
	<!-- Банер -->
		<section id="banner">
			<div class="content">
				<header>
					<h1>О нас</h1>
					<span>Меня зовут Лина. Я являюсь сертифицированным мастером по процедурам восстановления волос и с радостью отвечу на все ваши вопросы,а так же помогу подобрать процедуру именно под ваш тип волос.</span>
				</header>
			</div>
			<a href="{{url('/about')}}" class="image">
				<img src="{{url('/images/avatar/avatar.jpg')}}" alt="Фото" />
			</a>
		</section>

		<!--Информация обо мне-->
		<section id="banner">
			<div class="content">
				<header class="main">
						<a href="{{url('/portfolio')}}"><h1>Примеры работ</h1></a>
				</header>
		</section>
		<section id="banner">
			<div class="content">
				<header class="main">
					<h4>Мои сертификаты</h4>
				</header>
				<div class="posts">
					<article>
						<img src="{{url('/images/upload/sertificate-1.jpg')}}" alt="" class="image"/>
					</article>
					<article>
						<img src="{{url('/images/upload/sertificate-2.jpg')}}" alt="" class="image"/>
					</article>
					<article>
						<img src="{{url('/images/upload/sertificate-3.jpg')}}" alt="" class="image"/>
					</article>
					<article>
						<img src="{{url('/images/upload/sertificate-4.jpg')}}" alt="" class="image"/>
					</article>
				</div>
				<hr />
		</section>

@endsection