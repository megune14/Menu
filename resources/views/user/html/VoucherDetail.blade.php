@extends('user/html.MOBILEbase')




  @section('title','会計詳細画面')

  <!--テキストサンプル-->
  @section('contents')
  <?php
use App\Models\Order;
use App\Http\Controllers\OrderListController;
//
   
$ap = Order::get();
foreach ($ap as $ap) {
?>
<form action="/voucherDetail/add" method='post'>
@csrf
    <tr class="VoucherDetail">
      <span name = "name" >
      <td>{{ $ap->name}}</td>
      <input  name="name" type="hidden" value="{{$ap->name}}">
        </span>
      <span name = "price">
       <td>{{ $ap->price}}円 ×</td>
       <input  name="price" type="hidden" value="{{$ap->price}}">
       </span>
       <span class="kakaku"></span>
      <option data-num="{{$ap->quantity}}" value="{{$ap->quantity}}"> {{ $ap->quantity}}個</option></td><br>
        <!-- ここまで -->
        <?php } ?>
        <div class="submit-VoucherDetail">
        
        <!--<input type="button" onclick="location.href='#'" value="お会計">-->
        <label class="form-label">合計金額：</label>
          <input id="total_price" class="" name="total" value="0円" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly>

        </div>
              
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


<script>
$(function() {

$("option,#kaiinnkakaku").change(function() {

  var hairetu = [];
  for(var i = 0; i < $(".buy_itemu_menu").length; i++){

    var item_price = $(".buy_itemu_menu").eq(i).data("price");
    var item_quantity = $(".buy_itemu_menu").eq(i).data("quantity");



    if( item_quantity > 0 ) {
      hairetu.push(item_price * item_);
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
      
    </div>



    <!--/テキストサンプル-->
  @endsection