@extends('layouts.app')
@section ('title', 'Портфолио')
@section ('description', 'Страница со списком моих работ')
@section('content')
    <section>
        <div class="container">
            <h2 class="mb-5">Примеры работ</h2>
            <div class="row portfolio">
                @foreach($portfolios as $portfolio)
                    <div class="col-12">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid mb-3" src="{{asset('images/upload/')}}/{{$portfolio->image}}"
                                 alt="{{$portfolio->title}}"/>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{url('/')}}" class="btn btn-info">На главную</a>
        </div>
    </section>
@endsection

