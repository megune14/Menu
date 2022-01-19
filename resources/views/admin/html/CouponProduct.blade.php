@extends('admin/html.PCbase')




  @section('title','クーポン追加')

  <!--テキストサンプル-->
  @section('contents')
  <?php
  use App\Models\MenuFood;
  use App\Http\Controllers\MenuFoodController;
  //
    
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
        
          <p>必要ポイント：<input type="number" name="point" value="100" min="10" max="10000" step="10"></p>

        </div>


        <div class="submit-CouponProduct">
          <input type="submit"   value="確定"><!--送信ボタン-->
        </div>
        
      </div>  

    </form>
    <!--/テキストサンプル-->
  @endsection