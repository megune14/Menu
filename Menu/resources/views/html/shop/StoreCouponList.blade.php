@extends('html/shop.PCbase')
@php

@endphp



  @section('title','クーポン一覧')

    <!--テキストサンプル-->
    @section('contents')
    
   <?php 
    use App\Models\Coupon;
    $coupon = Coupon::get();
  //
  //Coupon::find(1)->delete();
  ?>
      <div class = CouponList>
        <h1>クーポン一覧</h1>
        <?php foreach ($coupon as $coupon) { ?>
        <div class="couponcard">
        <form action="/StoreCouponList/del"  method='post'  >
                  @csrf
          <img src="/images/men1.jpg"><br>

          <div class="couponcheckbox">
            <input type="checkbox" id="coupon-btn-check{{$coupon->id}}">
            <label for="coupon-btn-check{{$coupon->id}}" class="coupon-btn"><span></span></label>

              <div class="abc">
              <ul>
                  <li><a href="#">変更</a></li>
                  
                  <li><input type="submit"  value="削除"></li>
                  </form>
                </ul>

              </div>

          </div>
          <input type="hidden"  name="id" value="{{$coupon->id}}">
          <div class="menuname" name="name">
            <p>{{$coupon->name}}</p>
          </div>
          <div class="menupoint" name="point">
          <p>必要ポイント数： {{$coupon->point}}pt</p>
          </div>
        </div>

        <?php } ?>
        
        </form>
         
        

        <a id="coupon-send" href="">
          <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
        </a>

      </div>

    <!--/テキストサンプル-->
    @endsection

