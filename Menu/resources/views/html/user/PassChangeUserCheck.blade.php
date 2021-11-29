@extends('html/user.MOBILEbase')



  @section('title','パスワード変更時本人確認')

    <!--テキストサンプル-->
    @section('contents')
      <form action="" method="">
        <div class="passwordchange">パスワードの変更</div>
        <p>現在のパスワード</p>
        <input type="password" name="textbox" size="30" maxlength="8"><br>
        <button type="button" onclick="history.back()">戻る</button>
        <input type="submit" value="変更">
      </form>
    <!--/テキストサンプル-->

    @endsection

