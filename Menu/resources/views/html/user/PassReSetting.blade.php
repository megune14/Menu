@extends('html/user.MOBILEbase')


  @section('title','パスワード再設定')


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')

      <div class="PassReSetting">
        <h2>パスワード再設定</h2>

        <form action="" method="post">

          <p>新規パスワード</p>
          <input type="password" name="textbox" size="30" minlength="8">

          <p>新規パスワード(確認用)</p>
          <input type="password" name="textbox" size="30" minlength="8">

          <div class="submit-reset">
            <button type="button" onclick=history.back()>戻る</button>
            <input type="submit" value="変更"> 
          </div>
          
        </form>

      </div>




    @endsection

    <!--/テキストサンプル-->


