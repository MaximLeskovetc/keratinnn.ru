@extends('layouts.app')
@section ('title', 'Портфолио')
@section ('description', 'Страница со списком моих работ')
@section('content')
    <section>
        <div class="container">
            <h2 class="mb-5">Примеры работ</h2>
            <div class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-12">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid mb-3" src="{{asset('images/upload/')}}/{{$portfolio->image}}"
                                 alt="{{$portfolio->title}}"/>
                        </div>
                    </div>
                @endforeach
            </div>
            <h5 class="mb-5"><a href="{{url('/')}}" class="btm btn-default">На главную</a></h5>
        </div>
    </section>
@endsection

