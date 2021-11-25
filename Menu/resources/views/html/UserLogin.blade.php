@extends('html.MOBILEbase')


  
  @section('title','顧客ログイン画面')


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')
      <div class="loginform">
      
        <form action="" method="post">
          <div class="loginform_btm">
            <input type="text" name="name" placeholder="メールアドレス"></p>
          
            <input type="password" name="textbox" placeholder="パスワード" size="30" maxlength="8"><br>
          </div>          
  
          <input type="checkbox" name=“sample” value="1">ログイン状態を保持する<br>
          
          <a href="#">新規登録</a><br>
          <a href="#">パスワードを忘れた場合</a><br>
          <a href="#">店舗用</a>
  
          <button type="submit">ログイン</button>
  
        </form>          
      </div>

     

    
    @endsection
    
