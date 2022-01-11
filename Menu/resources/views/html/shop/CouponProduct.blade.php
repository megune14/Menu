@extends('html/shop.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
    <div class="CouponProduct">
      <form action="" method="">

        <!--ここからは作って下さい-->
        <div class="text-CouponProduct">
          <p>写真</p>

          <p>商品名：
            <select name="example2">
              <option value="サンプル1" selected>選択肢のサンプル1</option>
              <option value="サンプル2">選択肢のサンプル2</option>
              <option value="サンプル3">選択肢のサンプル3</option>
              <option value="サンプル4">選択肢のサンプル4</option>
              <option value="サンプル5">選択肢のサンプル5</option>
            </select>
          </p>

          <p>必要ポイント：
            <input type="number" name="example2" value="100">
          </p>
          
        </div>

        <!--ここまで-->
        

                  
        <div class="submit-CouponProduct">
          <input type="button" onclick="location.href='/StoreInfoDelete' " value="確定">
        </div>
            
      </form>

    </div>

    <!--/テキストサンプル-->
  @endsection