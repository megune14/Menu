@extends('html/user.MOBILEbase')


  @section('title','パスワード再設定時確認')
    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')

      <div class="PassReSetting">

        <form action="" method="post">

          <p>メールアドレス<br>
            <input type="text" name="name"></p>

          <p>秘密の合言葉<br>
            <input type="text" name="name"></p>

            <button type="button" onclick="history.back()">戻る</button>
          <input type="submit" class="ChangePass" value="送信">

        </form>
      </div>




    <!--/テキストサンプル-->
    @endsection

