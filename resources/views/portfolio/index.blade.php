@extends('layouts.app')
@section ('title', 'Портфолио')
@section ('description', 'Страница со списком моих работ')
@section('content')
    <section>
        <div class="container">
            <div class="portfolio">
                <h2 class="mt-3 mb-5">Примеры моих работ</h2>
                <div class="row">
                    @foreach($portfolios as $portfolio)
                        <div class="col-6">
                            <div class="mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid mb-3" src="{{asset('images/upload/')}}/{{$portfolio->image}}"
                                     alt=""/>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{url('/')}}" class="mb-5 btn btn-info">На главную</a>
                </div>
            </div>
        </div>
    </section>
@endsection

