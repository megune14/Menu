@extends('html/shop.PCbase')




  @section('title','商品詳細変更')

  <!--テキストサンプル-->
  @section('contents')
  <form action="#" method="post">
  <span class="menudeta-img">
        <img src="/images/men1.jpg"><!--写真-->
  </span>
  <p>商品名：
	<input type="text" name="name"></p><br>

  <p>値段：
	<input type="number"  value="100" min="0" max="" step="10"></p>

  <p>アレルギー：</p><br>
  <p>カロリー</p><br>

  
  <div class="confirm">
    <button type="button" onclick=history.back()>戻る</button>
    <input type="submit" value="変更" id="button4">
  </div>

  <label class="open" for="pop-up">変更</label>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
          <div class="window">
            <label class="close" for="pop-up"></label>
            <p class="text">メニュー情報を変更します。<br>
            <font color="red">よろしいでしょうか？</font></p>            
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit" value="確定">
          </div>
          
        </div>
  </from>





    <!--/テキストサンプル-->
  @endsection