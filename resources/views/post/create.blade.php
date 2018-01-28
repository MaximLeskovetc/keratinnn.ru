@extends('layouts.app')
@section ('title', 'Создание статьи')
@section('content')
    <!-- Создание статьи -->
    <section>
        <header class="main">
            <h1>Создание статьи</h1>
        </header>
        <hr class="major"/>
        <form method="POST" enctype="multipart/form-data" action="{{action('PostController@store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <p><label>Название статьи</label></p>
            <p><input type="text" name="title" value="" placeholder="Название статьи"></p>
            <p>Титульная картинка</p>
            <p><input type="file" name="image" accept="image/*,image/jpeg"></p>
            <p><label>Статья</label></p>
            <p><textarea rows="8" cols="45" name="description" placeholder="Сама статья"></textarea></p>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <p><input type="submit" value="Написать статью"></p>
        </form>
    </section>
@endsection