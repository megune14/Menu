@extends('admin/html.PCbase')




  @section('title','クーポン設定')

  <!--テキストサンプル-->
  @section('contents')

  <?php
use App\Models\Coupon;
use App\Http\Controllers\CouponController;
//
   
$Coupon = Coupon::get();

?>
    <div class = CouponSetting>
      <h1>クーポン設定</h1>
      <form action="/admin/CouponSetting/edit" method="post">
      @csrf
      <p>商品</p>
      
      <div class="coupon-set">
      
        <select name="name">
        
        <?php foreach ($Coupon as $Coupon) {  ?>
          <option  value="{{$Coupon->name }}">{{$Coupon->name }}</option>
          <?php  } ?>
        </select>
        
      </div>
      <input type = "hidden" name = "id" value = "{{$Coupon->id}}">

      <p>必要ポイント</p>

      <div class="number-set">
        <input type="number" name ="point" value="{{$Coupon->point }}" min="0" max="" step="10">
      </div>

 

      <div class="confirm">
        <button type="button" onclick=history.back()>戻る</button>
        <input type="submit" value="確定" id="button5">
      </div>

    </div>
    </form>
    <!--/テキストサンプル-->
  @endsection