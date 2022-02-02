@extends('user/html.MOBILEbase')




  @section('title','クーポンリスト')

  <!--テキストサンプル-->
  @section('contents')

  <?php
      use App\Models\CouponTable;
      use App\Http\Controllers\CouponTableController;
      use App\Models\Cart;


    
      
     
      foreach ($coupon as $coupon) {
      ?>





<form action="/CouponList/edit"  method='post'  >
    @csrf
        <div class="CouponList">

          <div class="Coupon-box">

          <label >{{$coupon->CommodityName}}</label>

            <div class="Coupon-img">
            <img src="{{ asset('storage/images/'. $coupon->img) }}"><!--写真-->
            </div>
      
          </div>
          <input type = "hidden" name = "id" value = "{{$user->id}}">
          
         
          <div class="Coupon-check">必要ポイント：
          <input  class="price" id="{{$coupon->CommodityName}}" name="Point" readonly type="text" style="border:none" value="{{$coupon->Point}}">
            <p>
            <input class="check" data-price="{{$coupon->CommodityName}}" id="{{$coupon->CommodityName}}" name="" type="checkbox" >利用する
            </p>

            
          </div> 

        </div>

        <input type = "hidden" name = "commodity_id" value = "{{$coupon->CommodityID}}">

        <?php } ?>
        <label for="priceTotal"></label>
        <div class="Current-point">現在のポイント：
        <input placeholder="" id="priceTotal" name="point" readonly type="text" style="border:none"></td>
        </div>

        <div class="Coupon-confirm">
        
          <button type="button" onclick=history.back()>戻る</button>
          <input type="submit" value="確定" id="button5">
        </div>

      </form>











<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




<script>
$(function(){
//チェックボックスのチェンジイベント
$(document).on('change', 'input[class = "check"]' ,function(){
    calcPrice();
 });

//金額フィールドのフォーカスアウト
$('.price').focusout(function(){
    calcPrice();
});

//金額合計のためのfunction
function calcPrice(){
  var price = [];
  //チェックされたものだけ回す
  $('input[class = "check"]:checked').each(function(){
//数値型に変換して変数に代入するよ
  var number = parseInt($("#" + $(this).attr('data-price')).val());
  //配列に入れる                
  price.push(number);

  });
  var price_total = {{$user->point}};
//for文で配列を回して合計を出す
  for(var i = 0, len = price.length;i < len; i++){
  price_total -= price[i];
  }
  $("#priceTotal").val(price_total);
 }
});


</script>
    <!--/テキストサンプル-->
  @endsection