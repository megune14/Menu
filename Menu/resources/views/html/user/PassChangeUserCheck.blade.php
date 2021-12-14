@extends('html/user.MOBILEbase')


  @section('title','パスワード変更時本人確認')

    <!--テキストサンプル-->
    @section('contents')
      <div class="passchange-usercheck">
        <h2>パスワードの変更</h2>

        <form action="#" method="post">
          
          <p>現在のパスワード</p>
          <input type="password" name="textbox" size="30" maxlength="8">


          <div class="submit-check">
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit" value="次へ">
          </div>

        </form>

      </div>
      
    <!--/テキストサンプル-->

    @endsection

    