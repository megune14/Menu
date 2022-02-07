@extends('admin/html.PCbase')




  @section('title','商品詳細変更')

  <!--テキストサンプル-->
  @section('contents')

    <div class="menudetail">
      <form action="{{route('admin.menudetailupdate',['id' => $commodity->CommodityID])}}" method="post">
      @csrf
        <input type = "hidden" name = "id" value = "{{$commodity->CommodityID}}">
        <span class="menudeta-img">
          <img src="{{asset('storage/images/'.$commodity->img)}}"><!--写真-->
        </span>
        <div class="namechange">
          <p>商品名：</p>
	          <input type="text" name="name" value="{{$commodity->CommodityName}}
            ">
          
        </div>

        <div class="pricebutton">
          <p>値段：</p>
	          <input type="number"   name="price" value="{{$commodity->Price}}" min="0" max="" step="10">
        </div>

        <div class="namechange">
          <p>アレルギー：</p>
              <input type="text" name="allergy" value="{{$commodity->Allergy}}">
        </div>

        <div class="namechange">
          <p>カロリー:</p>
              <input type="text" name="calory" value="{{$commodity->Calory}}">
          
</div>

        <div class="menudetail-pop">
          <button type="button" onclick=history.back()><a href="#">戻る</a></button>

          <label class="open" for="pop-up" >変更</label>
          <input type="checkbox" id="pop-up">
          <div class="overlay">
            <div class="window">
              <label class="close" for="pop-up">×</label>
              <p class="text">メニュー情報を変更します。<br>
               よろしいでしょうか？</p>
              <button type="button" onclick="history.back()">戻る</button>
              <input type="submit" value="確定">
            </div>

        </div>
    </div>
</form>
</div>


    <!--/テキストサンプル-->
  @endsection
