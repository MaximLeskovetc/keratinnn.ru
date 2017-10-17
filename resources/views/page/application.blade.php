@extends('layout.app')
@section ('title', 'Оставить заявку на процедуру')
@section ('description', 'Оставить заявку на процедуры кератиновое выпрямление в Нинжем Новгороде, ботокс в нижнем новгороде, флисинг в Нижнем, полировка волос.')
@section('content')

	<!-- Создание -->
	<section>
		<header class="main">
			<center><h1>Оставить заявку{{$name}}</h1></center>
		</header>

		<hr class="major" />
		<form method="POST" enctype="multipart/form-data" action="{{action('ApplicationController@store')}}"/>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<input type="hidden" name="work" value="{{$work}}"/>
		<label>Ваше имя</label>
		<p><input type="text" name="name" value="" placeholder="Ваше имя"></p>
		<label>Ваш номер телефона</label>
		<p><input type="text" name="phone" id="phone" value="" placeholder="Ваш номер"></p>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		<center><input type="submit" value="Оставить заявку"></center>
		</form>
	</section>

	<script>

	$(function(){
	  $("#phone").mask('8(999)999-9999');
	});
	</script>


@endsection