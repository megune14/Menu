@extends('html/shop.PCbase')




  @section('title','新規商品追加')

  <!--テキストサンプル-->
  @section('contents')
  <form action="/NewProduct/add"  method='post'  >

@csrf
  <h1>画像を追加したい</h1>
  <p>商品名
	<input type="text" name="name"></p>

  <p>値段<input type="number" value="100" min="10" max="10000" step="10"></p>
  
  

      <p>商品説明
	<input type="text" name="name"></p>

  <p>カテゴリー
	<input type="text" name="name"></p>
 

      <p>アレルギー
	<input type="text" name="name"></p>

  <p>カロリー<input type="number" value="100" min="1" max="10000" step="1"></p>
  
  
  <div class="menudetail-pop">
          <button type="button" onclick=history.back()><a href="#">戻る</a></button>
    
          <label class="open" for="pop-up" >追加</label>
          <input type="checkbox" id="pop-up">
          <div class="overlay">
            <div class="window">
              <label class="close" for="pop-up">×</label>
              <p class="text">この商品を追加しますか<br>
               </p>            
              <button type="button" onclick="history.back()">戻る</button>
              <input type="submit" value="確定">
            </div>
   
          </div>
        </div>

</form>
    <!--/テキストサンプル-->
  @endsection