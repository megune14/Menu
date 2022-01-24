@extends('admin/html.PCbase')




  @section('title','メール送信完了')

    <!--テキストサンプル-->
    @section('contents')
    <div class="CouponDetail">
      <p>このクーポンを削除します。<br>　よろしいでしょうか？</p>
       
      <form action='/admin/CouponDetail/delete' method="POST" >
          {{ csrf_field() }}
      



      <!-- ここにクーポンの情報がくるようにする-->





      <div class="submit-Detail">     
        <button type="button" onclick="history.back()">戻る</button>
        <input type="submit" value="確定" name='delete'>
      </div>



    </div>


    <!--/テキストサンプル-->
  @endsection

  