@extends('html/shop.PCbase')




  @section('title','パスワード変更時本人確認画面')

  <!--テキストサンプル-->
  @section('contents')
  <form action="#" method="post">
    <div class="passwordchange">パスワードの変更</div>
    <p>現在のパスワード</p>
    <input type="password" name="textbox" size="30" maxlength="8"><br>
    <button type="button" onclick="history.back()">戻る</button>
    <input type="button" value="次へ">
  </form>

    <!--/テキストサンプル-->
  @endsection