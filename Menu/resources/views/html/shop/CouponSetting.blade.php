@extends('html/shop.PCbase')




  @section('title','クーポン設定')

  <!--テキストサンプル-->
  @section('contents')
    <div class = CouponSetting>
      <h1>クーポン設定</h1>

      <p>商品</p>
      
      <div class="coupon-set">
        <select name="coupon-set">
          <option value="">-</option>
          <option value="醤油ラーメン">醤油ラーメン</option>
          <option value="塩ラーメン">塩ラーメン</option>
        </select>
      </div>
      

      <p>必要ポイント</p>

      <div class="number-set">
        <input type="number"  value="100" min="0" max="" step="1">
      </div>

	    

      <div class="confirm">
        <button type="button" onclick=history.back()>戻る</button>
        <input type="submit" value="確定" id="button5">
      </div>

    </div>
  
    <!--/テキストサンプル-->
  @endsection