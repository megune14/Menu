@extends('html/shop.PCbase')




  @section('title','店舗情報削除画面')

  <!--テキストサンプル-->
    @section('contents')
      <div class="storeinfodelete">
        <h2 class="">店舗情報の削除</h2>
        
          <form action='/StoreInfoDelete' method="POST" >
          {{ csrf_field() }}

          <!--<form action="StoreInfoDelete/kakak" method="post">-->

            
            <div class="col-sm-10">
            
              <p>店舗情報を削除します。</br>
              本当によろしいでしょうか?</p>
              
              <div class="submit-delete">
                <button type="button" onclick="history.back()">戻る</button>
                <input type="submit" value="決定"  name='delete'>
              </div>

            </div>

          </form>


      </div>    
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection

  <?php 
  //use App\Models\shops;
  //shops::find(1)->delete(); 
   ?>
   $request->delete



<!--<form action="{{ url('/message/add')}}" method="POST" class="form-horizontal">
  {{ csrf_field() }}
  <textarea rows="6" name="message"></textarea>
  <button type="submit" name="add">
   追加
  </button>
</form> -->