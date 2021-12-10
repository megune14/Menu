@extends('html/shop.PCbase')


  
  @section('title','申請フォーム画面')
    <!--テキストサンプル-->
    @section('contents')

      <form action="RequestComplete.blade.php" method="post"> 
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
        <input type="submit">
      </form>
    
    <!--/テキストサンプル-->
</body>
</html>
  @endsection
