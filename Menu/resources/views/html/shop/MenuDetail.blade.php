@extends('html/shop.PCbase')




  @section('title','商品詳細変更')

  <!--テキストサンプル-->
  @section('contents')
  <?php use App\Models\OrderList;
        use App\Http\Controllers\MenuDetailController;
        
        $menudeta = \DB::table('_menu_detail')->get();
        foreach ($menudeta as $menudeta) {
        //dd($menudeta);
        //echo $menudeta->name;
        }
  ?>
    <div class="menudetail">
      <form action="/MenuDetail/edit" method="post">
      @csrf
        <input type = "hidden" name = "id" value = "{{$menudeta->id}}">
        <span class="menudeta-img">
          <img src="/images/men1.jpg"><!--写真-->
        </span>
        <div class="namechange">
          <p>商品名：
	          <input type="text" name="name" value="{{$menudeta->name}}">
          </p>
        </div>

        <div class="pricebutton">
          <p>値段：
	          <input type="number"   name="price" value="{{$menudeta->price}}" min="0" max="" step="10">
          </p>
        </div>

        <p>アレルギー：{{$menudeta->allergy}}</p>

        <p>カロリー:{{$menudeta->calorie}}</p><br>

  
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
      </from>
    </div>


    <?php 

//DB::table('_menu_detail')->insert([
 //'id' => '2',

//'name' =>  'くさいラーメン',
///'price' => '800' ,
 

///]);




//$apple->name  ='醤油ラーメン';
//$apple->save();
//?>


    <!--/テキストサンプル-->
  @endsection