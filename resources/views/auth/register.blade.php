@extends('layout.headder')

@section('mains')
    <section class="">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style = "margin-bottom: 30px;">新規会員登録</h2>
                    <form action="{{ route('register') }}" method="post">
                    @csrf
                        <div class="name2">
                            <p>お名前</p>

                            <input type="text" name="name"  style="width:300px;" class="form-control @error('name') is-invalid @enderror" id="simeii">
                        </div>

                        @error('name')<br><span>{{ $message }}</span> @enderror

                        <div class="email2">
                            <p>Eメール</p>
                            <input type="text" name="email" style="width:300px;" class="form-control @error('email') is-invalid @enderror" id="emailll">
                        </div>

                        @error('email')<br><span>{{ $message }}</span> @enderror

                        <div class="pass2">
                            <p>パスワード</p>
                            <input type="text" name="password" style="width:300px;" class="form-control @error('password') is-invalid @enderror" id="pass1">
                        </div>

                        @error('password')<br><span>{{ $message }}</span> @enderror
                        
                        <div class="pass3">
                            <p>確認用パスワード</p>
                            <input type="text" name="password_confirmation" style="width:300px;" id="password-confirm" class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">新規登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
