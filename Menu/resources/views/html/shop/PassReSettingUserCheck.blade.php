@extends('html/shop.PCbase')


  @section('title','パスワード再設定時本人確認')
  <!--テキストサンプル-->
  @section('contents')

    <div class="PassReSetting">
      <h2>パスワードを忘れた場合</h2>

      <form action="" method="post">
          
        <p>メールアドレス</p>
        <input type="email" name="enail">

        <p>秘密の合言葉</p>
        <input type="text" name="name">

        <div class="submit-reset">
          <button type="button" onclick="history.back()">戻る</button>
          <input type="submit" value="送信">
        </div>
          

      </form>

    </div>

    <!--/テキストサンプル-->
  @endsection