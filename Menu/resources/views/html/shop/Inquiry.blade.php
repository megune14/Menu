@extends('html/shop.PCbase')


  
  @section('title','お問い合わせ画面')
    <!--テキストサンプル-->
    @section('contents')
    <form action="#" method="post"> 
      <div class="Inquiry">お問い合わせ</div> 
      <p>症状</by>
        <input type="text" maxlength="500" size="30">
      </p>
      <p>使用OS</br>
        <input type="text" maxlength="500" size="30">
      </p>
      <p>使用OSのバージョン</br>
        <input type="text" maxlength="500" size="30">
      </p>
      <input type="button" onclick=history.back()>閉じる</button>
      <input type="submit">
    </form>
    <!--/テキストサンプル-->


  @endsection