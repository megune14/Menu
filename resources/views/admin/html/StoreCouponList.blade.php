@extends('admin/html.PCbase')



  @section('title','クーポン一覧')

    <!--テキストサンプル-->
    @section('contents')
    
   <?php 
   //use App\Models\CouponTable;
   //use App\Models\CommodityTable;
   //$coupon = CouponTable::where('StoreID',Auth::id())->get();
   //$menu = CommodityTable::where('StoreID',Auth::id())->get();
   //$i = 0; 
   //foreach ($coupon as $key) {
   //  $key['CommodityName'] = $menu[$i]->CommodityName;
   //  $coupon[$i] = $key; 
   //  $i++;
   //}

    //
  //Coupon::find(1)->delete();
   
  ?>
      <div class = CouponList>
        <h1>クーポン一覧</h1>
        <?php foreach ($coupon as $coupon)  { ?>
          
        <div class="couponcard">
        
          <img src="/images/men1.jpg"><br>

          <div class="couponcheckbox">
            <input type="checkbox" id="coupon-btn-check{{$coupon->CouponID}}">
            <label for="coupon-btn-check{{$coupon->CouponID}}" class="coupon-btn"><span></span></label>

              <div class="abc">
              <ul>
                  <li><a href="/admin/CouponSetting">変更</a></li>
                  <form action="/admin/CouponDetail"  method='post'  >
                  @csrf
                  <input type="hidden"  name="id" value="{{$coupon->CouponID}}">
                  <li><input type="submit" value="削除"></li>
                  </form>
                </ul>

              </div>

          </div>
          
          <input type="hidden"  name="id" value="{{$coupon->CouponID}}">
          <div class="menuname" name="name">
            <p>{{$coupon->CommodityName}}</p>
          </div>
          <div class="menupoint" name="point">
          <p>必要ポイント数： {{$coupon->Point}}pt</p>
          </div>
        </div>

        <?php } ?>
        
        </form>
         
        
        <div class="coupon-send">
          <a id="coupon-send" href="/admin/CouponProduct">
            <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
          </a>
        </div>

      </div>

    <!--/テキストサンプル-->
    @endsection

