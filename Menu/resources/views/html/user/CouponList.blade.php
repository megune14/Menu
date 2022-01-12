@extends('html/user.MOBILEbase')




  @section('title','クーポン一覧画面')

    <!--テキストサンプル-->
    @section('contents')

      <?php
      use App\Models\Coupon;
      use App\Http\Controllers\CouponController;

      
      $coupon = Coupon::get();
      foreach ($coupon as $coupon) {
      ?>

      <div class="Coupon-box">
        <h1>クーポン</h1>
        <div class="Coupon-img">
            <img src="/images/men1.jpg"><!--写真-->
        </div>

        <div class="Coupon-name">
          <h3>{{$coupon->name}}</h3>
          <p>説明文？説明文？説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?説明文?</p>
        </div>
          
      </div>

      <!--必要ポイントの場所移動しました。-->

      <form>
        <div class="Coupon-check">
          <h3>必要ポイント：{{$coupon->point}}pt</h3>
          <p>
            <input type="checkbox"  name="coupon" value="coding">利用する
          </p>
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