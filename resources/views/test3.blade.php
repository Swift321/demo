@extends('layout.headder')

@section('mains')

    <article>
            
    <!-- 商品 -->
        <section id="shouhin">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">

                        <h3>{{ $product->pro_name }}</h3>
                        <p>{{ $product->pro_coment }}</p>

                    </div>
                </div>
            </div>
        </section>

        <section id="review">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <h3 class="text-center">レビューを見る</h3>
                        <ul class="list-group">
                        @foreach ($reviews as $review)
                            <li class="list-group-item">
                                    <h4>{{ $review->rev_title }}</h4>
                                    <p>{{ $review->rev_coment }}</p>
                            </li>
                        @endforeach
                        </ul>
                        {{ $reviews->links() }}
                    </div>
                </div>
            </div>
        </section>

        <!-- 投稿 -->
        <section id="revup">
                <div class="container">
                    <div class="row text-center">
                        @auth
                            <div class="col-md-12">
                                <h3 style="margin-bottom: 30px;">レビューを投稿</h3>
                                <form action="{{ route('crreview', ['id' => $ids]) }}" method="POST" style="margin-bottom: 30px;">
                                    @csrf
                                    <div class="title">
                                        <p style="float: left;">タイトル</p>
                                        <input type="text" style="width:250px;" name="title" class="form-control @error('title') is-invalid @enderror">
                                    </div>
                                    @error('title')<br><span>{{ $message }}</span> @enderror
                                    <div class="comment">
                                        <p style="float: left;">コメント</p>
                                        <textarea name="coment" style="width:250px;" cols="40" class="form-control @error('coment') is-invalid @enderror"></textarea>
                                    </div>
                                    @error('coment')<br><span>{{ $message }}</span>@enderror
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">送信</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class="col-md-12" style="margin-bottom: 70px;">
                                <h4>ログインすることでレビューが描けます</h4>
                            </div>
                        @endauth
                    </div>
                </div>
            </section>
    </article>
@endsection