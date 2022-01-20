@extends('admin/html.PCbase')




  @section('title','クーポン追加')

  <!--テキストサンプル-->
  @section('contents')
  <?php
use App\Models\CommodityTable;
use App\Http\Controllers\CommodityTableController;
//
   
$Coupon = CommodityTable::get();

?>
  <form action="/admin/CouponProduct/add"  method='post'  >
  @csrf
  <div class = CouponProduct>
    

  <div class="coupon-product">
  <p>商品名：
        <select name="name">
        
        <?php foreach ($Coupon as $Coupon) {  ?>
          <option  value="{{$Coupon->CommodityName }}">{{$Coupon->CommodityName }}</option>
          <?php  } ?>
        </select>
        </p>
      </div>
  
  

  <p>必要ポイント：<input type="number" name="point" value="100" min="10" max="10000" step="10"></p>



  </div>

  <input type="submit"   value="確定"><!--送信ボタン-->

</form>
    <!--/テキストサンプル-->
  @endsection