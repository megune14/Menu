@extends('user/html.MOBILEbase')




  @section('title','パスワード変更確認画面')

  <!--テキストサンプル-->
    @section('contents')
      <div class = "passchange-check">
        <h2>パスワード変更画面</h2>

        <form action="#" method="post">
          <p>現在のメールアドレス</p>
          <input type="email" name="email" size="30">
          
          <p>現在のパスワード</p>
          <input type="password" name="password" size="30">

          <p>新規パスワード</p>
          <input type="password" name="password" size="30">

          <p>新規パスワード（確認用）</p>
          <input type="password" name="password" size="30">
          
          <div class="submit">
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

        </form>
        
        

      </div>

    <!--/テキストサンプル-->
  @endsection