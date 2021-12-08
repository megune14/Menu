@extends('html/shop.PCbase')




  @section('title','クーポン一覧')

  <!--テキストサンプル-->
  @section('contents')
  <div class = CouponList>
  <h1>クーポン一覧</h1>
  
  <tr >
    <td><img src="/images/men1.jpg"></th><br>
    <td>商品名</th><br>
    <td>必要ポイント数：</td>
    <input type="checkbox" id="menu-btn-check">
    <label for="menu-btn-check" class="menu-btn"><span ></span></label>
    <div class="coupon">
        <input type="checkbox" id="coupon-btn-check">
        <label for="coupon-btn-check" class="coupon-btn"><span ></span></label>

        <nav>
          <ul>
            <li><a href="#">変更</a></li>
            <li><a href="#">削除</a></li>
            
            
            
          </ul>
        </nav>

      </div>

  </tr>

  <tr >
    <td><img src="/images/men1.jpg"></th><br>
    <td>商品名</th><br>
    <td>必要ポイント数：</td>
    <input type="checkbox" id="menu-btn-check">
    <label for="menu-btn-check" class="menu-btn"><span ></span></label>
    <div class="coupon">
        <input type="checkbox" id="coupon-btn-check">
        <label for="coupon-btn-check" class="coupon-btn"><span ></span></label>

        <nav>
          <ul>
            <li><a href="#">変更</a></li>
            <li><a href="#">削除</a></li>
            
            
            
          </ul>
        </nav>

      </div>

  </tr>


  <a id="coupon-send" href="">    
  <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
</a>


  </div>



    <!--/テキストサンプル-->
  @endsection