@extends('layout.app')
@section ('title', 'Администраторская')
@section ('description', 'Администраторская страница сайта')
@section('content')


<a href="{{url('/logout')}}" class="icon button" style="float:right; margin-top:10px;">Выйти</a>
	<!-- Создание -->
	<section>
		<header class="main">
			<center><h2>Администраторская</h2></center>
		</header>
			<hr class="major" />
			<h3>Заявки</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Дата</th>
							<th>Процедура</th>
							<th>Телефон</th>
							<th>Имя</th>
							<th>Статус</th>
							<th>Действие</th>
						</tr>
					</thead>
					<tbody>
						@foreach($applications as $application)
						<tr>
							<td>{{$application->created_at}}</td>
							<td>{{$application->works}}</td>
							<td>{{$application->phone}}</td>
							<td>{{$application->name}}</td>
							<td>{{$application->status}}</td>
							<td>

								<form method="POST"action="{{ action('ApplicationController@update', $application->id) }}"/>
						    	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						    	{{method_field('PUT')}}
								<p><input type="submit" class="fa fa-times" value="Принять"></p>
								</form>
								<form method="POST" action="{{action('ApplicationController@destroy', $application->id)}}"/>
								<input type="hidden" name="_token" value="{{csrf_token()}}"/>
								{{method_field('DELETE')}}	
								<p><input type="submit" class="fa fa-times" value="Удалить"></p>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<hr class="major" />
			<h3>Услуги</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Услуга</th>
							<th>Редактировать</th>
						</tr>
					</thead>
					<tbody>
						@foreach($services as $service)
						<tr>
							<td><a href="/service/{{$service->alias}}">{{$service->title}}</a></td>
							<td><a href="/service/{{$service->id}}/edit" class="button">Редактировать</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<a href="{{url('service/create')}}" class="button">Добавить услугу</a>
			<hr class="major" />
			<hr class="major" />
			<h3>Статьи</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Название статьи</th>
							<th>Содержание</th>
							<th>Редактировать</th>
							<th>Удалить</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td><a href="{{url('/post/')}}/{{$post->alias}}">{{$post->title}}</a></td>
							<td>{{$post->description}}</td>
							<td><a href="{{url('/post/')}}/{{$post->id}}/edit" class="button">Редактировать</a></td>
							<form method="POST" action="{{action('PostController@destroy', $post->id) }}"/>
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							{{method_field('DELETE')}}	
							<td><input type="submit" class="button" value="Удалить"></td>
							</form>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<a href="{{url('post/create')}}" class="button">Добавить статью</a>
			<hr class="major" />			<hr class="major" />
			<h3>Фото</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Фото</th>
							<th>Описание</th>
							<th>Редактировать</th>
							<th>Удалить</th>
						</tr>
					</thead>
					<tbody>
						@foreach($portfolios as $portfolio)
						<tr>
							<td>				
								<a href="/portfolio/{{$portfolio->id}}" class="image">
								<img src="{{asset('/images/upload/')}}/{{$portfolio->image}}" alt=""  style="width:100px; heigth 100px;"/>
								</a>
							</td>
							<td>{{$portfolio->title}}</td>
							<td><a href="/portfolio/{{$portfolio->id}}/edit" class="button">Редактировать</a></td>
							<form method="POST" action="{{action('PortfolioController@destroy', $portfolio->id) }}"/>
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
							{{method_field('DELETE')}}	
							<td><input type="submit" class="button" value="Удалить"></td>
							</form>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<a href="{{url('portfolio/create')}}" class="button">Добавить фото</a>
	</section>


@endsection