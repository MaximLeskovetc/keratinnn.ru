@extends('layout.app')
@section ('title', 'Добавление фото')
@section('content')
	<!-- Создание  фото-->
	<section>
		<header class="main">
			<h1>Добавить фото</h1>
		</header>

		<hr class="major" />

		<form method="POST" enctype="multipart/form-data" action="{{action('PortfolioController@store')}}"/>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>

		<p>Фото</p>
		<p><input type="file" name="photo" accept="image/*,image/jpeg"></p>
		<p><label>Подпись к фото</label></p>
		<p><input type="text" name="title" value="" placeholder="Подпись к фото"></p>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		<p><input type="submit" value="Добавить фото"></p>
		</form>
	</section>
@endsection