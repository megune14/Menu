@extends('admin/html.PCbase')




  @section('title','新規商品追加')

    <!--テキストサンプル-->
    @section('contents')
      <form action="/admin/NewProduct/add"  method='post' enctype="multipart/form-data">

        @csrf
        <div class="NewProduct">
          
          <div class="Product-img">
            <p>画像の追加</p>
            <input id="img" type="file" name="img">
          </div>
          
          <div class="Product-form">
            <p>商品名</p>
            <input type="text" name="name">

            <div class="Product-number">
              <p>値段</p>
              <input type="number" name="price" value="100" min="10" max="10000" step="10">
            </div>
            
            <div>
              <p>商品説明</p>
              <input type="text" name="explanation">
            </div>

            <div>
              <p>カテゴリー</p>
              <input type="text" name="category">
            </div>
          
            <div>
              <p>アレルギー</p>
              <input type="text" name="allergy">
            </div>

            <div class="Product-number">
              <p>カロリー</p>
              <input type="number" name="calorie" value="100" min="1" max="10000" step="1">
            </div>

          </div>

          
          
          <div class="menudetail-Product">
            <button type="button" onclick=history.back()><a href="#">戻る</a></button>
      
            <label class="open" for="pop-up">追加</label>

            <input type="checkbox" id="pop-up">

            <div class="overlay">
              <div class="window">
                <label class="close" for="pop-up">×</label>
                <p class="text">この商品を追加しますか?<br></p>            
                <button type="button" onclick="history.back()">戻る</button>
                <input type="submit" value="確定">
              </div>
            </div>

          </div>

        </div>

      </form>


      <!--/テキストサンプル-->
@endsection