@extends('layouts.app')
@section ('title', 'Создание услуги')
@section('content')
    <!-- Создание услуги -->
    <section>
        <header class="main">
            <h1>Создание услуги</h1>
        </header>
        <hr class="major"/>
        <form method="POST" enctype="multipart/form-data" action="{{action('ServiceController@store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <p><label>Название услуги</label></p>
            <p><input type="text" name="title" value="" placeholder="Название услуги"></p>
            <p>Титульная картинка</p>
            <p><input type="file" name="photo" accept="image/*,image/jpeg"></p>
            <p><label>Услуги</label></p>
            <p><textarea rows="8" cols="45" name="description" placeholder="Описание услуги"></textarea></p>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <p><input type="submit" value="Создать услугу"></p>
        </form>
    </section>
@endsection