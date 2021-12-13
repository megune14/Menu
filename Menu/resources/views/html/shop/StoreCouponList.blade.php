@extends('html/shop.PCbase')




  @section('title','クーポン一覧')

    <!--テキストサンプル-->
    @section('contents')
   <?php  $coupon = \DB::table('coupons')->get();
  
  ?>
      <div class = CouponList>
        <h1>クーポン一覧</h1>
        <?php foreach ($coupon as $coupon) { ?>
        <div class="couponcard">

          <img src="/images/men1.jpg"><br>

          <div class="couponcheckbox">
            <input type="checkbox" id="coupon-btn-check{{$coupon->id}}">
            <label for="coupon-btn-check{{$coupon->id}}" class="coupon-btn"><span></span></label>

              <div class="abc">
              <ul>
                  <li><a href="#">変更</a></li>
                  <li><a href="#">削除</a></li>
                </ul>

              </div>

          </div>

          <div class="menuname">
            <p>{{$coupon->name}}</p>
          </div>

          <p>必要ポイント数： {{$coupon->point}}pt</p>

        </div>

        <?php } ?>
        

         


        <a id="coupon-send" href="">
          <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
        </a>

      </div>

    <!--/テキストサンプル-->
    @endsection

