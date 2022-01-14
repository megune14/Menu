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
    <tr class="VoucherDetail">
      <td>{{ $ap->name}}</td>
      <td>{{ $ap->price}}円</td>
      <td>×</td>
      <td>{{ $ap->quantity}}個</td><br>
        <!-- ここまで -->
        <?php } ?>
        <div class="submit-VoucherDetail">
        
        <input type="button" onclick="location.href='#'" value="お会計">    
        </div>
              
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
      
    </div>



    <!--/テキストサンプル-->
  @endsection