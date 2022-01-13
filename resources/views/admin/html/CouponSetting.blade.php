@extends('admin/html.PCbase')




  @section('title','クーポン設定')

  <!--テキストサンプル-->
  @section('contents')

  <?php $coupon = \DB::table('order_lists')->get();

?>
    <div class = CouponSetting>
      <h1>クーポン設定</h1>
      <form action="/CouponSetting/add" method = "post">
      @csrf
      <p>商品</p>
      
      <div class="coupon-set">
      
        <select name="name">
        
        <?php foreach ($coupon as $coupon) {  ?>
          <option  value="{{$coupon->name }}">{{$coupon->name }}</option>
          <?php  } ?>
        </select>
        
      </div>
     

      <p>必要ポイント</p>

      <div class="number-set">
        <input type="number" name ="point" value="100" min="0" max="" step="1">
      </div>

 

      <div class="confirm">
        <button type="button" onclick=history.back()>戻る</button>
        <input type="submit" value="確定" id="button5">
      </div>

    </div>
    </form>
    <!--/テキストサンプル-->
  @endsection