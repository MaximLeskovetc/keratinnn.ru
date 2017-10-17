@extends('layout.app')
@section ('title', 'Портфолио')
@section ('description', 'Страница со списком моих работ')
@section('content')
<!-- Просмотр фото-->
<section>

	<header class="main">
			<h1>Портфолио</h1>
	</header>
		<div class="posts">

			@foreach($portfolios as $portfolio)
			<article>
    			<a href="#" class="image">
    				<img src="{{asset('/images/upload/')}}/{{$portfolio->image}}" alt="{{$portfolio->title}}">
    			</a>
    			<p>{{$portfolio->title}}</p>
			</article>
			@endforeach
		</div>
					<a href="{{url('/')}}" class="button center">На главную</a>
					<hr/>
		</section>
		
</section>
@endsection

