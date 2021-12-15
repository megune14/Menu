@extends('html/shop.PCbase')




  @section('title','店舗情報削除画面')

  <!--テキストサンプル-->
    @section('contents')
      <div class="storeinfodelete">
        <form action="StoreInfoDelete/add" method="post">

          <h2 class="">店舗情報の削除</h2>
          <div class="col-sm-10">
          
            <p>店舗情報を削除します。</br>
            本当によろしいでしょうか?</p>
            
            <div class="submit-delete">
              <button type="button" onclick="history.back()">戻る</button>
              <input type="submit" value="確定" id="button5">
            </div>

          </div>

        </form>


      </div>    
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection

  <?php 
  use App\Models\shops;
  shops::find(1)->delete(); 
  ?>