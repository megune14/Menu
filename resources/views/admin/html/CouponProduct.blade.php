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
    
  $Coupon = MenuFood::get();

  ?>
    <form action="/admin/CouponProduct/add"  method='post'  >
    @csrf
      <div class = CouponProduct>
      
        <div class="coupon-product">

          <p>商品名：
            <select name="name">
            
            <?php foreach ($Coupon as $Coupon) {  ?>
              <option  value="{{$Coupon->name }}">{{$Coupon->name }}</option>
              <?php  } ?>
            </select>
          </p>
        
<<<<<<< HEAD
        <?php foreach ($Coupon as $Coupon) {  ?>
          <option  value="{{$Coupon->CommodityName }}">{{$Coupon->CommodityName }}</option>
          <?php  } ?>
        </select>
        </p>
      </div>
  
  
=======
          <p>必要ポイント：<input type="number" name="point" value="100" min="10" max="10000" step="10"></p>
>>>>>>> f41df1c9b59259885e297873fc7de29416749ad5

        </div>


        <div class="submit-CouponProduct">
          <input type="submit"   value="確定"><!--送信ボタン-->
        </div>
        
      </div>  

    </form>
    <!--/テキストサンプル-->
  @endsection