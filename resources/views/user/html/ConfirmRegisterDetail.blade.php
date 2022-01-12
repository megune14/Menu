@extends('html/user.MOBILEbase')




  @section('title','顧客本登録内容確認')

    <!--テキストサンプル-->
    @section('contents')
      <div class="ConfirmRegisterDetail">
        <h2>登録内容確認</h2>
        <form action="#" method="post">

          <p>名前：</p>

          <p>生年月日：</p>

          <div class="submit-reset">
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit"  value="確定">
          </div>
          
        </form>
      </div>

    <!--/テキストサンプル-->
  @endsection