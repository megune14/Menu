<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('dist/css/PCbase.css') }}">
  <title>受注商品一覧</title>

</head>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function(){
      $("#submit_select").change(function(){
        $("#submit_form").submit();
      });
    });
    $(function(){
  $("#js-tab li").click(function(){
    $("#js-tab li").removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();

    $(".tab-content").removeClass("active");
    $(".tab-content").eq(index).addClass("active");
  });
});
    </script>


<header>
    <div class="header-check">

      <!--全画面表示-->
      <div class="pc-dsp">
        <li class="active">デジタルメニュー表</li>


        <li class="right-Product">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <x-dropdown-link :href="route('admin.logout')"
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('ログアウト') }}
                </x-dropdown-link>
            </form>
        </li>
        <li class="pc-child-Product"><a href="#">設定</a>
          <ul>
            <li><a href="/admin/MailChange">メールアドレス変更</a></li>
            <li><a href="/admin/PassChangeCheck">パスワード変更</a></li>
            <li><a href="/admin/PointSetting">ポイント設定</a></li>
            <li><a href="/admin/StoreInfoDetail">　店舗情報</a></li>
          </ul>
        </li>
        <li class="right"><a href="/admin/OrderCheck">受注商品</a></li>
        <li class="right"><a href="/admin/StoreCouponLis">クーポン</a></li>
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
        <label for="menu-btn-check" class="menu-btn-Product"><span></span></label>

        <nav>
          <ul>
            <li><a href="/admin/MenuCreate">メニュー一覧</a></li>
            <li><a href="/admin/StoreCouponList">クーポン</a></li>
            <li><a href="/admin/OrderCheck">受注商品</a></li>
            <li class="has-child"><a href="#">　設定</a>
              <ul>
                <li><a href="/admin/MailChange">　メールアドレス変更</a></li>
                <li><a href="/admin/PassChangeCheck">　パスワード変更</a></li>
                <li><a href="/admin/PointSetting">　ポイント設定</a></li>
                <li><a href="/admin/StoreInfoDetail">　店舗情報</a></li>
              </ul>
            </li>
            <li><form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <x-dropdown-link :href="route('admin.logout')"
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('ログアウト') }}
                </x-dropdown-link>
            </form></li>
          </ul>
        </nav>

      </div>
    </div>
  </header>








  <!--テキストサンプル-->
<div class = "contents">

  <div class="OrderCheck">

    <div class="wrap-tab">

        <ul id="js-tab" class="list-tab">
          <li class="active">未提供</li>
          <li>提供済み</li>
        </ul>

        <div class="wrap-tab-content">
          
          <div class="tab-content active">
              @if(isset($detail0))
            <table>
                <tr>
                    <th>状況</th>
                    <th>商品名</th>
                    <th>個数</th>
                    <th>卓番</th>
                </tr>
                @foreach ($detail0 as $order)


                <tr>
                  <td><form method='post' action='/admin/OrderCheck/chenge' id='submit_form'>
                      @csrf
                      <select name="flag" onchange="submit(this.form)">
                          <option value="0" selected>未提供</option>
                          <option value="1">提供済み</option>
                      </select>
                      <input type="hidden" value="{{$order->OrderDetailID}}" name="id">
                  </form>

              </td>
                  <td>{{$order->CommodityName}}</td>
                  <td>{{$order->Quantity}}個</td>
                  <td>{{$order->TableNumber}}番</td>

              </tr>
              @endforeach
            </table>
              @else
              <p>空</p>
              @endif
          </div>

          <div class="tab-content">
              @if(isset($detail1))
            <table>
                <tr>
                    <th>状況</th>
                    <th>商品名</th>
                    <th>個数</th>
                    <th>卓番</th>
                </tr>
                @foreach ($detail1 as $order)

                <tr>
                  <td><form method='post' action='/admin/OrderCheck/chenge' id='submit_form'>
                      @csrf
                      <select name="flag" onchange="submit(this.form)">
                          <option value="0">未提供</option>
                          <option value="1" selected  >提供済み</option>
                      </select>
                      <input type="hidden" value="{{$order->OrderDetailID}}" name="id">
                  </form>

              </td>
                  <td>{{$order->CommodityName}}</td>
                  <td>{{$order->Quantity}}個</td>
                  <td>{{$order->TableNumber}}番</td>

              </tr>
              @endforeach
            </table>
                @else
                <p>空</p>
                @endif
          </div>

        </div>
      </div>
  </div>
      <!--/テキストサンプル-->
</div>
  
<!--footer-->
<footer>
    <div class="footer">
      <p>© menu</p>
    </div>
  </footer>
  <!--/footer-->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/js/PCbase.js') }}"></script>

</body>

</html>