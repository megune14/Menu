@extends('html/shop.PCbase')




  @section('title','クーポン設定')

  <!--テキストサンプル-->
  @section('contents')
  <?php $coupon = \DB::table('couponmenu')->get();

?>
<form action="CouponSetting/add" method="post">
  @csrf
  <div class = CouponSetting>
  <h1>クーポン設定</h1>
  <p>商品<br>
     <select name="name">
     
       <option value="">-</option>
       <?php foreach ($coupon as $coupon){ ?>
       <option value={{$coupon->name}}>{{$coupon->name}}</option>
       <?php  } ?>
      </select>
      
      <p>必要ポイント<br>
	    <input type="number" name='point' value="100" min="0" max="" step="1"></p>
      <div class="confirm">
            <button type="button" onclick=history.back()>戻る</button>
            <input type="submit" value="確定" id="button5">
      </div>
</form>
      

  </div>
  
    <!--/テキストサンプル-->
  @endsection