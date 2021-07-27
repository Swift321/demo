@extends('layout.header2')

@section('mains')
<article>
        <section id="user">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h2 class="text-center">ログイン</h2>
                        <div class="text-center" style = "margin-bottom: 90px;">
                            <p>
                            ご登録のメールアドレスとパスワードを入力してください。
                            <br>
                            まだ登録されてない方は、新規会員登録をお願いいたします。
                            </p>
                        </div>
                    </div>
                </div>


                <div class="row text-center">
                    <div class="col-md-12">
                        <!-- 左辺 -->
                        <div class="row ">
                            <div class="col-md-6">
                                <h2>ログイン</h2>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="email">
                                        <p style="float: left;">メールアドレス</p>
                                        <input type="text"  style="width:250px;"  name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                                    </div>

                                    @error('email')<br><span>{{ $message }}</span> @enderror
            
                                    <div class="pass">
                                            <p style="float: left;">パスワード</p>
                                            <input type="password" style="width:250px;" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                                    </div>
                                    
                                    @error('password')<br><span>{{ $message }}</span> @enderror
                                    
                                    <div class="">                
                                        <button type="submit" class="btn btn-primary">ログイン</button>
                                    </div>
                                </form>
                            </div>

                            <!-- 右辺 -->
                            <div class="col-md-6">
                                <h2>会員登録</h2>
                                <div class="">
                                    <p><span>レビューをするには会員登録が必要です。</span></p>
                                </div>
                                <div>
                                    <a href="{{ route('register') }}">新規登録</a> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
