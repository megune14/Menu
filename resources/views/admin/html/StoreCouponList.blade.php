@extends('admin/html.PCbase')



  @section('title','クーポン一覧')

    <!--テキストサンプル-->
    @section('contents')
    
  
      <div class = "CouponList">
        

        <div class="coupon-send">
        <h1>クーポン一覧</h1>
           
        <a id="coupon-send" href="/admin/CouponProduct">
          <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
        </a>
        </div>

        <div class="field-couponcard">
        <?php foreach ($coupon as $coupon)  { ?>
          
          <div class="couponcard">
          
            <img src="{{ asset('storage/images/'. $coupon->img) }}"><br>

            <div class="couponcheckbox">
              <input type="checkbox" id="coupon-btn-check{{$coupon->CouponID}}">
              <label for="coupon-btn-check{{$coupon->CouponID}}" class="coupon-btn">
              
                
              </label>

                <div class="abc">
                <ul>
                    <li><a href="/admin/CouponSetting">変更</a></li>
                    <form action="/admin/CouponDetail"  method='post'  >
                    @csrf
                    <input type="hidden"  name="id" value="{{$coupon->CouponID}}">
                    <li><input type="submit"  value="削除"></li>
                    </form>
                  </ul>

                </div>

            </div>
            
            <input type="hidden"  name="id" value="{{$coupon->CouponID}}">
            <div class="menuname" name="name">
              <h3>{{$coupon->CommodityName}}</h3>
            </div>
            <div class="menupoint" name="point">
            <p>必要ポイント数： {{$coupon->Point}}pt</p>
            </div>
            <?php 
            $date = $coupon->FirstDay;
            $date2 = $coupon->LastDay;

            echo '<p> 使用開始日　' . date('Y/n/j',strtotime($date)) ."</p>\n"; 
            echo '<p> 使用終了日　' . date('Y/n/j',strtotime($date2)) ."</p>\n"; ?>
          </div>
        

        

        <?php } ?>
        
        </form>
         
        </div>
        

      </div>






    <!--/テキストサンプル-->
    @endsection

