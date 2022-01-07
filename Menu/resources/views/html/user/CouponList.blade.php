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
<span class="Coupon-img">
        <img src="/images/men1.jpg"><!--写真-->
      </span>

      <h3>{{$coupon->name}}</h3>
      
      <h3>必要ポイント：{{$coupon->point}}pt</h3>
      
</div>
<form>
  <div>
    <p>checkbox
    <input type="textbox" id="coding" name="interest" value="coding">
</p>
  </div>
  <?php } ?>
  <h2>現在のポイント：560pt</h2>
  <div class="Coupon-confirm">
        <button type="button" onclick=history.back()>戻る</button>
        <input type="submit" value="確定" id="button5">
      </div>
</form>

    <!--/テキストサンプル-->
  @endsection