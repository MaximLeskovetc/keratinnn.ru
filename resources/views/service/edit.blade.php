@extends('layouts.app')
@section ('title', 'Редактирование услуги')
@section('content')
    <!-- Редактирование услуги-->
    <section>
        <header class="main">
            <h1>Редактирование услуги</h1>
        </header>
        <hr class="major"/>
        <form method="POST" enctype="multipart/form-data"
              action="{{ action('ServiceController@update', $service->id) }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            {{method_field('PUT')}}
            <p><label>Название услуги</label></p>
            <p><input type="text" name="title" value="{{$service->title}}"></p>
            <p>Титульная картинка</p>
            <img src="{{asset('/images/upload/')}}/{{$service->image}}" alt="" style=" height: 256px; width: 340px;"/>
            <p><input type="file" name="photo" accept="image/*,image/jpeg"></p>
            <p><label>Описание услуги</label></p>
            <p><textarea rows="8" cols="45" name="description">{{$service->description}}</textarea></p>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <p><input type="submit" value="Сохранить"></p>
            <input type="hidden" name="_method" value="put"/>
        </form>
    </section>
@endsection