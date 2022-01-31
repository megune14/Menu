@extends('user/html.MOBILEbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')

  <?php
      use App\Models\Coupon;
      use App\Http\Controllers\CouponController;

      
      $coupon = Coupon::get();
      foreach ($coupon as $coupon) {
      ?>
      <form>
        <div class="CouponList">

          <div class="Coupon-box">

            <h1>{{$coupon->name}}</h1>

            <div class="Coupon-img">
                <img src="/images/men1.jpg"><!--写真-->
            </div>
      
          </div>

          <div class="Coupon-check">
            <h2>必要ポイント</h2><h3>{{$coupon->point}}pt</h3>
            <p>
              <input type="checkbox"  name="coupon" value="coding">利用する
            </p>
          </div> 

        </div>

        <?php } ?>
          
        <div class="Current-point">
          <h2>現在のポイント：560pt</h2>
        </div>

        <div class="Coupon-confirm">
          <button type="button" onclick=history.back()>戻る</button>
          <input type="submit" value="確定" id="button5">
        </div>

      </form>

    <!--/テキストサンプル-->
  @endsection