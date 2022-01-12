@extends('user/html.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')


<?php
use App\Models\OrderList;
use App\Http\Controllers\OrderListController;

   
$apple = OrderList::get();
foreach ($apple as $apple) {
?>
<form action="/OrderList/add"  method='post'  >

@csrf


<tr class="menu-list">
  <th>


    <a id="menu1" href="">
      <span class="menu-img">
        <img src="/images/men1.jpg"><!--写真-->
      </span>
  </th>
        <span name = "name" >  
        <th> {{$apple->name}}  </th>
        <input  name="name" type="hidden" value="{{$apple->name}}">
        </span>
       <br>
       <span name = "price">
       <td> {{$apple->price}}   円</td>
       <input  name="price" type="hidden" value="{{$apple->price}}">
       </span>
      <br>
    </a>

    <td>
    <div class="form-box">
          <p class="buy_itemu_menu" data-price = "<?php
       echo   $apple->price   ;//値段
      ?>">
            <span class="kakaku"></span>
          </p>
          <select name="quantity">
            <option data-num="{{$apple->quantity}}" value="{{$apple->quantity}} "selected>{{$apple->quantity}}個</option>
            <option data-num="0" value="0" >0個</option>
            <option data-num="1" value="1">1個</option>
            <option data-num="2" value="2">2個</option>
            <option data-num="3" value="3">3個</option>
            <option data-num="4" value="4">4個</option>
            <option data-num="5" value="5">5個</option>
            <option data-num="6" value="6">6個</option>
            <option data-num="7" value="7">7個</option>
            <option data-num="8" value="8">8個</option>
            <option data-num="9" value="9">9個</option>
            <option data-num="10" value="10">10個</option>
            <option data-num="11" value="11">11個</option>
            <option data-num="12" value="12">12個</option>

          </select>
        </div></td>
    <td>
    
      @csrf
    <input type="submit" name="delete_btn" value="削除">
   
    </td>
   <br>
    
   <?php

//DB::table('order')->insert([
// 'id' => '1',
//
//'name' => $apple->name ,
//'price' =>  $apple->price,
 ///'quantity' => '5',

//]);




//$apple->name  ='醤油ラーメン';
//$apple->save();
//?>

   <?php }?>
<a id="coupon-Choice" href="" >
  <input type="button" name="coupon_btn" value="クーポンを選択"><!--クーポンボタン-->
</a><br>



<label class="form-label">付与されるポイント</label>
          <input id="total_point" class="" name="point" value="0pt" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly><br>


<label class="form-label">合計金額：</label>
          <input id="total_price" class="" name="total" value="0円" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly>

<br>

<a id="order-send" href="">
  <input type="submit"  name="add_btn" value="注文を送信する"><!--送信ボタン-->
</a>

</form>
<style>
  p {
    margin: 0;
  }
  .form-box {
    margin-bottom: 1em;
  }
#item_price_total, #postage_price,#total_price,#total_point {
  display: inline-block;
  width: auto;
  padding: 0;
  background: none;
  border: none;
  font-size: inherit;
  cursor: default;
  vertical-align: baseline;
  -webkit-appearance: inherit;
}
</style>


</body>
</html>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


<script>
$(function() {

$("select,#kaiinnkakaku").change(function() {

  var hairetu = [];
  for(var i = 0; i < $(".buy_itemu_menu").length; i++){

    var item_price = $(".buy_itemu_menu").eq(i).data("price");
    var item_select = $(".buy_itemu_menu").eq(i).next("select").find("option:selected").data("num");



    if( item_select > 0 ) {
      hairetu.push(item_price * item_select);
    } else {
      0;
    }
  }

  var total = 0;
  for(var j = 0; j < hairetu.length; j++){
    total += hairetu[j];
  }

  if(total >= 3000) {
    var postage = 0;
  } else {
    var postage = 0;
  }


  $("#item_price_total").val(total + "円");
  //$("#postage_price").val(postage + "円");
  $("#total_price").val((total) + "円");

});


});


</script>


<!--ポイント-->


<script>
$(function() {

$("select,#kaiinnkakaku").change(function() {

  var hairetu = [];
  for(var i = 0; i < $(".buy_itemu_menu").length; i++){

    var item_price = $(".buy_itemu_menu").eq(i).data("price");
    var item_select = $(".buy_itemu_menu").eq(i).next("select").find("option:selected").data("num");



    if( item_select > 0 ) {
      hairetu.push(item_price * item_select);
    } else {
      0;
    }
  }

  var total = 0;
  for(var j = 0; j < hairetu.length; j++){
    total += hairetu[j];
  }


 var totapoint = 0;
     totapoint = total / 100;

  $("#item_price_total").val(total + "円");
  //$("#postage_price").val(postage + "円");
  $("#total_point").val((totapoint) + "pt");

});


});


</script>











<!--データベースやってみた-->

<?php

//\DB::table('order')->insert([
//  'id' => '2',
//
// 'name' => $apple->name ,
// 'price' =>  $apple->price,
// 'quantity' => '5',
//
//
//]);




//$apple->name  ='醤油ラーメン';
//$apple->save();
//?>


<?php

//order::find(1)->delete();
//OrderList::find(6)->delete();
//OrderList::find(5)->delete();
////?>


@endsection


