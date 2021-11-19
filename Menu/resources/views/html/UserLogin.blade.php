<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/MOBILEbase.css">
  <title>顧客ログイン画面</title>
</head>

<body>
  <div class="footerFixed">
    <!--header-->
    <header> 
      <div class="header">
       <li>デジタルメニュー表</li>
      </div>
 
      <div class="menu">
       <input type="checkbox" id="menu-btn-check">
       <label for="menu-btn-check" class="menu-btn"><span ></span></label>
 
        <nav>
          <ul>
            <li><a href="#">メニュー表</a></li>
            <li><a href="#">マイページ</a></li>
            <li><a href="#">お問い合わせ</a></li>
            <li class="has-child"><a href="#">設定</a>
             <ul>
              <li><a href="#">メールアドレス変更</a></li>
              <li><a href="#">パスワード変更</a></li>
              <li><a href="#">アカウント削除</a></li>
             </ul>
            </li>
           <li><a href="#">ログアウト</a></li>         
          </ul>
        </nav>
 
      </div>
    </header>
    <!--/header-->


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')
    <div class="contents">
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
    </div>
     

    
    @endsection
    
    <!--/テキストサンプル-->


    <!--footer-->
    <footer>
     <div class="footer">
      <p>@ menu</p>
     </div>
    </footer>
    <!--/footer-->

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../JavaScript/MOBILEbase.js"></script>

</body>

</html>