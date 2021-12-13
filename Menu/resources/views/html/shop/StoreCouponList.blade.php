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

          <p>必要ポイント数： 30pt</p>

        </div>


        <div class="couponcard">
          <tr>
            <td><img src="/images/men1.jpg"></th><br>
            <td>商品名</th><br>
            <td>必要ポイント数：</td>

            <div class="couponcheckbox">
              <input type="checkbox" id="coupon-btn-check">
              <label for="coupon-btn-check" class="coupon-btn"><span ></span></label>

              <nav>
                <ul>
                  <li><a href="#">変更</a></li>
                  <li><a href="#">削除</a></li>
                </ul>
              </nav>

            </div>

          </tr>

        </div>


<<<<<<< HEAD
        <a id="coupon-send" href="">
          <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
        </a>
=======
          <div class="menuname">
            <p>{{$couponlist->name}}</p>
          </div>

          <p>必要ポイント数: {{$couponlist->point}}pt</p>

        </div>

        <?php } ?>


        <div class="coupon-send">
          <a id="coupon-send-submit" href="">
            <input type="submit"  value="クーポンの追加"><!--送信ボタン-->
          </a>
        </div>

>>>>>>> 41e182fcf79638e61bd9f2eb54c21e61cad30f26

      </div>

    <!--/テキストサンプル-->
    @endsection

