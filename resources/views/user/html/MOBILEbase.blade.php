<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('dist/css/MOBILEbase.css') }}">
  <title>@yield('title')</title>
</head>


<body>
  <div class="footerFixed">
    <!--header-->
    <header>
      <div class="header">
       <li><p>デジタルメニュー表</p><a href="{{route( users.cart.index )}}"><img src="../../images/カート.png"></a></img></li>
      </div>



      <div class="menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span ></span></label>

        <nav>
          <ul>
            <li><a href="/Category">メニュー表</a></li>
            <li><a href="/UserInfo">マイページ</a></li>
            <li><a href="/Inquiry">お問い合わせ</a></li>
            <li class="has-child"><a href="#">　設定</a>
             <ul>
              <li><a href="/MailChange">メールアドレス変更</a></li>
              <li><a href="/forgot-password">パスワード変更</a></li>
              <li><a href="/UserDelete">アカウント削除</a></li>
             </ul>
            </li>
            @if( Auth::check() )
            <li>
                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('user.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-dropdown-link>
                </form>
            </li>
            @else
            <li><a href="/">ログイン</a></li>
            @endif
          </ul>
        </nav>



      </div>
    </header>
    <!--/header-->


    <!--テキストサンプル-->
    <div class = "contents">
     @yield('contents')
    </div>
    <!--/テキストサンプル-->


    <!--footer-->
    <footer>
     <div class="footer">
      <p>@ menu</p>
     </div>
    </footer>
    <!--/footer-->

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('dist/js/MOBILEbase.js') }}"></script>

</body>

</html>
