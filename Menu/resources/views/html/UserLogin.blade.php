@extends('html.MOBILEbase')


  
  @section('title','顧客ログイン画面')


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')
      <div class="LoginForm">
      
        <form action="" method="post">
          <p>メールアドレス<br>
            <input type="text" name="name"></p>
          <p>パスワード</p>
            <input type="password" name="textbox" size="30" maxlength="8"><br>
  
            <input type="checkbox" name=“sample” value="1">ログイン状態を保持する<br>
            
          <a href="#">新規登録</a><br>
          <a href="#">パスワードを忘れた場合</a><br>
          <a href="#">店舗用</a>
  
          <p><input type="submit" value="ログイン"></p>
  
        </form>          
      </div>

     

    
    @endsection
    
