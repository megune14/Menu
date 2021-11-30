@extends('html/shop.PCbase')


  
  @section('title','申請フォーム画面')
    <!--テキストサンプル-->
    @section('contents')
    <form action="#" method="post"> 
      <h2 class="Request">申請フォーム</h2> 
      <p>店舗名</br>
        <input type="text"  size="30">
      </p>
      <p>住所</br>
        <input type="text"  size="30">
      </p>
      <p>メールアドレス</br>
        <input type="email"  size="30">
      </p>
      <p>電話番号</br>
        <input type="tel" maxlength="12" size="30">
      </p>
      <button type="button" onclick=history.back()>戻る</button>
      <input type="submit">
    </form>
    <!--/テキストサンプル-->
    @endsection