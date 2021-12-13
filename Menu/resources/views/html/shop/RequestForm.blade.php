@extends('html/shop.PCbase')


  @section('title','申請フォーム画面')
    <!--テキストサンプル-->
    @section('contents')

<<<<<<< HEAD
    <form action="/RequestForm/add" method="post"> 
=======
<<<<<<< HEAD
      <div class="request-form">

        <form action="RequestComplete.blade.php" method="post"> 
          <h2 class="Request">申請フォーム</h2>
          <p>代表者
           <input type="text" name="leader" size="30" placeholder="代表者">
          </p>
          <p>店舗名
           <input type="text" name="name" size="30" placeholder="店舗名">
          </p>
          <p>住所
          <input type="text" name="address" size="30" placeholder="住所">
          </p>
          <p>メールアドレス
          <input type="email" name="email" size="30" placeholder="メールアドレス">
          </p>
          <p>電話番号
          <input type="tel" name="tel" maxlength="12" size="30" placeholder="電話番号">
          </p>

          <div class="submit-request">
            <button type="button" onclick=history.back()>戻る</button>
            <input type="submit">
          </div>
          
        </form>

      </div>
      
    
    <!--/テキストサンプル-->


=======
<<<<<<< HEAD
    <form action="RequestComplete.blade.php" method="post"> 
>>>>>>> 6586be562dc37d2083d98e143a1898dba7ce2286
      <h2 class="Request">申請フォーム</h2>
      <p>代表者</br>
        <input type="text" name="leader" size="30">
        <p>店舗名</br>
        <input type="text" name="name" size="30">
      </p>
      <p>住所</br>
        <input type="text" name="address" size="30">
      </p>
      <p>メールアドレス</br>
        <input type="email" name="email" size="30">
      </p>
      <p>電話番号</br>
        <input type="tel" name="tel" maxlength="12" size="30">
      </p>
      <button type="button" onclick=history.back()>戻る</button>
      <input type="submit" value="送信">
    </form>
    
    <!--/テキストサンプル-->
</body>
</html>
>>>>>>> e3ab20321b7f1a60b4c53761a0a94c59ac6446dd
  @endsection
