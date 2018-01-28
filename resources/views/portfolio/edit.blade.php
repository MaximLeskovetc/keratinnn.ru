@extends('layouts.app')
@section ('title')
    Редактирование фото {{$portfolio->title}}
@endsection
@section('content')
    <!-- Редактирование фото-->
    <section>
        <header class="main">
            <h1>Редактировать фото</h1>
        </header>
        <hr class="major"/>
        <form method="POST" enctype="multipart/form-data"
              action="{{ action('PortfolioController@update', $portfolio->id) }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            {{method_field('PUT')}}
            <p><label>Редактировать фото</label></p>
            <p><input type="file" name="photo" accept="image/*,image/jpeg"></p>
            <img src="{{asset('/images/upload/')}}/{{$portfolio->image}}" alt="" style=" height: 256px; width: 340px;"/>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <p><input type="submit" value="Сохранить"></p>
            <input type="hidden" name="_method" value="put"/>
        </form>
    </section>
@endsection