@extends('layout.headder')

@section('mains')
<!-- メニュー -->
    <article>
        <section id="sinsho">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class = "line1">新商品メニュー</h2>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('creatrev', ['id' => 1]) }}"><img class = "image1" src ="img/タコライス弁当.jpg"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('creatrev', ['id' => 2]) }}"><img class ="image1" src="img/おろし弁当.jpg"></a>
                    </div>
                    <div class="colmd-4">
                        <a href="{{ route('creatrev', ['id' => 3]) }}"><img class ="image1" src="img/豚しゃぶ弁当.jpg"></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="osusume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class ="line1">おすすめメニュー</h2>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('creatrev', ['id' => 4]) }}"><img class ="image1" src="img/チキン南蛮.jpg"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('creatrev', ['id' => 5]) }}"><img class ="image1" src="img/ハンバーグ弁当.jpg"></a>
                    </div class="col-md-4">
                    <div>
                        <a href="{{ route('creatrev', ['id' => 6]) }}"><img class ="image1" src="img/唐揚げ弁当.jpg"></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="side">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h2 class ="line1">サイドメニュー </h2>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('creatrev', ['id' => 7]) }}"><img class ="image1" src="img/サラダ.jpg"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('creatrev', ['id' => 8]) }}"><img class ="image1" src="img/フライドチキン.jpg"></a>
                    </div class="col-md-4">
                    <div>
                        <a href="{{ route('creatrev', ['id' => 9]) }}"><img class ="image1" src="img/ポテト.jpg"></a>
                    </div>
                </div>
            </div>
        </section>
    </article>

@endsection