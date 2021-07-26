@extends('layout.headder')

@section('mains')

    <article>
        <!-- 商品 -->
        <section id="shouhin">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <h3>{{$shous->shou_name}}</h3>
                        <p>
                            {{$shous->shous_coment}}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- レビュー  -->
        <section id="review">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="text-center">レビューを見る</h3>
                            @foreach($shourevs as $shourev)
                            
                                <div class="text-center">
                                    <h4>{{$shourev->rev_title}}</h4>
                                    <p>{{$shourev->rev_coment}}</p>
                                </div>

                            @endforeach
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 投稿 -->
        <section id="revup">
            <div class="container">
                <div class="row">
                    @auth
                        <div class="col-md-8">
                            <h3>レビューを投稿</h3>
                            <form action="route{{ route('crrev') }}" method="post">
                                @csrf
                                <p>
                                    タイトル:<br>
                                    <input type="text" name="title" class="@error('title') is-invalid @enderror">
                                </p>
                                @error('title')<br><span>{{ $message }}</span> @enderror
                                
                                <p>コメント：<br>
                                    <textarea name="coment" cols="40" class="@error('coment') is-invalid @enderror"></textarea>
                                </p>
                                @error('title')<br><span>{{ $message }}</span>@enderror
                            </form>
                        </div>
                    @else
                        <div class="col-md-8">
                            <h3>ログインすることでレビューが描けます</h3>
                        </div>
                    @endauth
                </div>
            </div>
        </section>
    </article>

@endsection

