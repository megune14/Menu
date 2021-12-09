@extends('html/user.MOBILEbase')




  @section('title','顧客本登録内容確認')

  <!--テキストサンプル-->
  @section('contents')
  <div class="ConfirmRegisterDetail">
    <form action="#" method="post">
      <p>名前：<br>
        <input type="text" name="name">
      </p>
      <p>生年月日：<br>
        <input type="text" name="birthday">
      </p>
      <p>メールアドレス：<br>
        <input type="text" name="e-mail">
      </p>


  <style>
  p {
    margin: 0;
  }
  .form-box {
    margin-bottom: 1em;
  }
  #item_price_total, #postage_price,#total_price,#total_point {
  display: inline-block;
  width: auto;
  padding: 0;
background: none;
border: none;
font-size: inherit;
cursor: default;
vertical-align: baseline;
-webkit-appearance: inherit;
}
</style>


    </form>
  </div>

    <!--/テキストサンプル-->
  @endsection