<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <title>PORT</title>
  </head>
  <body>

    <!--ナビゲーションバー -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
          <a class="navbar-brand">PORT</a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navmenu2a" aria-controls="navmenu2a" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navmenu2a" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#sinsho">新商品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#osusume">おすすめ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#side">サイドメニュー</a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
                @if(Auth::check())
                <li class="nav-item">
                  <a class="nav-link">ようこそ, {{ Auth::user()->name }}さん</a>
              </li>
              <li class="nav-item">
                  <a href="#" id="logout" class="nav-link">ログアウト</a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">ログイン</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">会員登録</a>
              </li>
                @endif
            </ul>
          </div>
        </nav>
    </header>
    <main>

      @yield('mainss')
      
    </main>

      @if(Auth::check())
        <script>
          document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
          });
        </script>
      @endif
  </body>
</html>