
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('dist/css/PCbase.css') }}">
  <title>@yield('title')</title>

</head>

<body>
<div class="footerFixed">
  <!--header-->
  <header>
    <div class="header">

      <!--全画面表示-->
      <div class="pc-dsp">
        <li class="active">デジタルメニュー表</li>


            @if(Auth::guard('admin')->check())
            <li class="right">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('admin.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-dropdown-link>
                </form>
            </li>
            @else
            <li class="right"><a href="/admin/login">ログイン</a></li>
            @endif
        <li class="pc-child"><a href="#">設定</a>
          <ul>
            <li><a href="/admin/MailChange">メールアドレス変更</a></li>
            <li><a href="/admin/forgot-password">パスワード変更</a></li>
            <li><a href="/admin/PointSetting">ポイント設定</a></li>
            <li><a href="/admin/StoreInfoDetail">　店舗情報</a></li>
          </ul>
        </li>
        <li class="right"><a href="/admin/OrderCheck">受注商品</a></li>
        <li class="right"><a href="/admin/StoreCouponList">クーポン</a></li>
        <li class="right"><a href="/admin/MenuCreate">メニュー一覧</a></li>
      </div>
    </div>


    <!--小画面表示-->
    <div class="sp-dsp">
      <div class="type">
        <li>デジタルメニュー表</li>
      </div>

      <div class="menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span ></span></label>

        <nav>
          <ul>
            <li><a href="/admin/MenuCreate">メニュー一覧</a></li>
            <li><a href="/admin/StoreCouponList">クーポン</a></li>
            <li><a href="/admin/OrderCheck">受注商品</a></li>
            <li class="has-child"><a href="#">　設定</a>
              <ul>
                <li><a href="/admin/MailChange">　メールアドレス変更</a></li>
                <li><a href="/admin/auth/forgot-password">　パスワード変更</a></li>
                <li><a href="/admin/PointSetting">　ポイント設定</a></li>
                <li><a href="/admin/StoreInfoDetail">　店舗情報</a></li>
              </ul>
            </li>
            @if(Auth::guard('admin')->check())
            <li>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('admin.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-dropdown-link>
                </form>
            </li>
            @else
            <li><a href="/admin/login">ログイン</a></li>
            @endif
          </ul>
        </nav>

      </div>
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
      <p>© menu</p>
    </div>
  </footer>
  <!--/footer-->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/js/PCbase.js') }}"></script>

</div>    
</body>

</html>



