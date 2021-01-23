@extends('basic.structure')

@section('content')
    <section class="jumbotron-fluid p-5 text-center text-white"
             style="background: url('{{ asset('img/home_cover.jpeg') }}')">
        <h1>{{ lang('home.title') }}</h1>

        <div class="row justify-content-center mt-5">
            @foreach(lang('home.cards') as $card)
                <div class="col-sm-2 mt-3">
                    <div class="card text-dark">
                        <div class="card-header">
                            <i class="mdi mdi-36px {{ $card['icon'] }}"></i>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <footer class="mt-3">
            <a href="{{ route('docs') }}" class="btn btn-primary">{{ lang('home.btn_get_started') }}</a>
        </footer>
    </section>

    <div class="row container-fluid mt-3 justify-content-center">
        @foreach(lang('home.articles') as $article)
            <div class="col-sm-4 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $article['title'] }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img class="image" src="{{ $article['image'] }}" alt="Pic" width="128px" height="128px">
                        </div>
                        <p class="card-text">{{ $article['description'] }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">{{ lang('home.learn_more') }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
