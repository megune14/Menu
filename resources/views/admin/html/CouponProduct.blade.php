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

          <p>商品名：</p>
            <select name="CommodityID">
            
            
        
        <?php foreach ($Coupon as $Coupon) {  ?>
          <option  value="{{$Coupon->CommodityID }}">{{$Coupon->CommodityName }}</option>
          <?php  } ?>
        </select>
        

      </div>

      
  
  
      <div>
          <p>必要ポイント：</p>
          <input type="number" name="Point" value="100" min="10" max="10000" step="10">
        </div>

        <div>
          <p>クーポン使用開始日：</p>
          <input type="date" name="FirstDay" value="">
        </div>
          
        <div>
          <p>クーポン使用終了日：</p>
          <input type="date" name="LastDay" value="">
        </div>
        

        <div class="submit-CouponProduct">
          <input type="submit"   value="確定"><!--送信ボタン-->
        </div>
        
      </div>  

    </form>
    <!--/テキストサンプル-->
  @endsection