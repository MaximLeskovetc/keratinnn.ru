@extends('layout.app')
@section ('title')
	{{$post->title}}
@endsection
@section ('description')
	Обзор статьи {{$post->title}}
@endsection
@section('content')
<!-- Просмотр статьи-->
	<section id="banner">
		<div class="content">
			<header>
				<h1>{{$post->title}}</h1>

			</header>
		</div>
		<a href="{{url('/post')}}/{{$post->alias}}" class="image">
			<img src="{{asset('/images/upload/')}}/{{$post->image}}" alt="{{$post->title}}">
		</a>
	</section>
	<div class="main">							
		<p>{!!$post->description!!}</p>
	</div>
	<h3>Комментарии</h3>
	<div class="box">
		@foreach($comments as $comment)
			<p>
				<b>{{$comment->created_at}}</b><br/>
				<b>{{$comment->name}}</b>
			</p>
			<p>{{$comment->conntent}}</p>
					<hr/>
		@endforeach
	</div>
		<noindex>
			@guest
				<div class="box">
					Только <a href="{{ route('login') }}" class="logo">авторизованные</a> пользователи могут добавлять комментарии.
				</div>
			@else
			<div class="box">
				<form method="POST" enctype="multipart/form-data" action="{{action('CommentsController@store')}}"/>
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<input type="hidden" name="id" value="{{$post->id}}">

					<p><label>Добавить свой комментарий</label></p>
					<p><textarea rows="4" cols="30" name="content" placeholder="Комментарий"></textarea></p>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					<p><input type="submit" value="Написать комментарий" class="pull-right" ></p>
				</form>
			</div>
			@endguest

		</noindex>
	<a href="{{url('/post/')}}" class="button">Другие статьи</a>
	<hr/>
@endsection