@extends('html/shop.PCbase')




  @section('title','店舗情報削除画面')

    <!--テキストサンプル-->
    @section('contents')
      <div class="storeinfodelete">

        <form action="" method="">
          <h2>店舗情報の削除</h2>
          <p>店舗情報を削除します。</br>
          本当によろしいでしょうか?</p>

          <div class="submit-delete">
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit" value="確定">
          </div>
          
        </form>

      </div>
      
    
    <!--/テキストサンプル-->
  @endsection