@extends('admin/html.MOBILEbase')




  @section('title','メールアドレス変更画面')

  <!--テキストサンプル-->
  @section('contents')
  <div class = "AccountDelete">
        <h2>メールアドレスの変更</h2>
        <ul>
          <p>
            新しいメールアドレス<br>
          </p>
          <p>
          <input type="email" name="email" size="30">
          </p>
          <p>
            パスワード<br>
          </p>
          <p>
          <input type="password" name="password" size="30">
          </p>
        </ul>

        <button  type="button"><a href="#">戻る</a></button>
        <label class="open" for="pop-up">変更</label>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
          <div class="window">
            <label class="close" for="pop-up">×</label>
            <p class="text">本当に変更しますか？<br></p>
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit" value="確定">
          </div>
          
        </div>



      </div>

    <!--/テキストサンプル-->
  @endsection