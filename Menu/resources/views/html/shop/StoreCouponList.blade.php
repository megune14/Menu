@extends('html/shop.PCbase')




  @section('title','クーポン一覧')

    <!--テキストサンプル-->
    @section('contents')
      <div class = CouponList>
        <h1>クーポン一覧</h1>
  
        <div class="couponcard">
          
          <img src="/images/men1.jpg"><br>

          <div class="couponcheckbox">
            <input type="checkbox" id="coupon-btn-check">
            <label for="coupon-btn-check" class="coupon-btn"><span></span></label>

              <div class="abc">
              <ul>
                  <li><a href="#">変更</a></li>
                  <li><a href="#">削除</a></li>
                </ul>

              </div>   
              
          </div>
          
          <div class="menuname">
            <p>ハンバーガー</p>
          </div>
          
          <p>必要ポイント数: 30pt</p>
          
        </div>
        

        <div class="couponcard">

          <img src="/images/men1.jpg"><br>

          <div class="couponcheckbox">
            <input type="checkbox" id="coupon-btn-check">
            <label for="coupon-btn-check" class="coupon-btn"><span></span></label>

            <div class="abc">
              <ul>
                <li><a href="#">変更</a></li>
                <li><a href="#">削除</a></li>
              </ul>

            </div>   
    
          </div>

          <div class="menuname">
            <p>ハンバーガー</p>
          </div>

          <p>必要ポイント数: 30pt</p>
          
        </div>
        
        <div class="coupon-send">
          <a id="coupon-send-submit" href="">    
            <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
          </a>
        </div>
        

      </div> 

    <!--/テキストサンプル-->
    @endsection

