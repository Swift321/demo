@extends('layout.header')

@section('mainss')
    <article>
        <section id="sinsho">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class = "line1">新商品メニュー</h2>
                    </div>
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '1']) }}">タコライス弁当</a></p>
                        <a href="{{ route('product', ['id' => '1']) }}"><img src="{{ asset('img/タコライス弁当.jpg') }}" width="300" height="200" alt=""></a>
                    </div>

                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '2']) }}">おろし弁当</a></p>
                        <a href="{{ route('product', ['id' => '2']) }}"><img src="{{ asset('img/おろし弁当.jpg') }}" width="300" height="200"></a>
                    </div>
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '3']) }}">豚しゃぶ弁当</a></p>
                        <a href="{{ route('product', ['id' => '3']) }}"><img src="{{ asset('img/豚しゃぶ弁当.jpg') }}" width="300" height="200"></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="osusume">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class ="line1">おすすめメニュー</h2>
                    </div>
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '4']) }}">チキン南蛮</a></p>
                        <a href="{{ route('product', ['id' => 4]) }}"><img class ="image1" src="{{ asset('img/チキン南蛮.jpg') }}" width="300" height="200"></a>
                    </div>
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '5']) }}">ハンバーグ弁当</a></p>
                        <a href="{{ route('product', ['id' => 5]) }}"><img class ="image1" src="{{ asset('img/ハンバーグ弁当.jpg') }}" width="300" height="200"></a>
                    </div >
                    <div class="col-md-4">
                        <p><a href="{{ route('product', ['id' => '6']) }}">唐揚げ弁当</a></p>
                        <a href="{{ route('product', ['id' => 6]) }}"><img class ="image1" src="{{ asset('img/唐揚げ弁当.jpg') }}" width="270" height="100"></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="side">
            <div class="container">
                <div class="row text-center" style="margin-bottom: 50px;">
                    <div class="col-md-12">
                        <h2 class ="line1">サイドメニュー </h2>
                    </div>
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '7']) }}">サラダ</a></p>
                        <a href="{{ route('product', ['id' => 7]) }}"><img class ="image1" src="{{ asset('img/サラダ.jpg') }}" width="300" height="200"></a>
                    </div>
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '8']) }}">フライドチキン</a></p>
                        <a href="{{ route('product', ['id' => 8]) }}"><img class ="image1" src="{{ asset('img/フライドチキン.jpg') }}" width="270" height="200"></a>
                    </div >
                    <div class="col-md-4 menu">
                        <p><a href="{{ route('product', ['id' => '9']) }}">ポテト</a></p>
                        <a href="{{ route('product', ['id' => 9]) }}"><img class ="image1" src="{{ asset('img/ポテト.jpg') }}" width="230" height="200"></a>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection