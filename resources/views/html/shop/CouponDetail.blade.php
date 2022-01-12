@extends('html/shop.PCbase')




  @section('title','メール送信完了')

    <!--テキストサンプル-->
    @section('contents')
    <div class="CouponDetail">
      <p>このクーポンを削除します。<br>　よろしいでしょうか？</p>

      



      <!-- ここにクーポンの情報がくるようにする-->





      <div class="submit-Detail">     
        <button type="button" onclick="history.back()">戻る</button>
        <input type="button" value="確定">
      </div>



    </div>


    <!--/テキストサンプル-->
  @endsection