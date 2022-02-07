@extends('user/html.MOBILEbase')




  @section('title','クーポン一覧')

  <!--テキストサンプル-->
  @section('contents')

  <?php
      use App\Models\CouponTable;
      use App\Http\Controllers\CouponTableController;
      //use App\Models\Cart;


    
      
     
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
          
         
          <div class="Coupon-check">
            

            <label class="switch__label">
            
              <input class="check" data-price="{{$coupon->CommodityName}}" id="input" name="commodity_id" type="checkbox" value = "{{$coupon->CommodityID}}" >
              <span class="switch__content"></span>
              <span class="switch__circle"></span>
  
            </label>
            <p>必要ポイント</p>
         
            <!--↓この辺があやしいよね↓-->
            <div class="switch__price">
              <input  class="price" id="{{$coupon->CommodityName}}" name="Point" readonly type="text" style="border:none" value="{{$coupon->Point}}">
            </div>
            
          </div> 

        </div>

        

        <?php } ?>
        

        <div class="Coupon-Total">
          <label for="priceTotal"></label>

          <div class="Current-point">現在のポイント：
            <input placeholder="" id="priceTotal" name="point" readonly type="text" style="border:none" >
          </div>

        </div>


      <div class="Coupon-confirm">

        <button type="button" onclick=history.back()><a href="#">戻る</a></button>

        <input type="submit" value="確定">
        
      </div>











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
    if(price_total >= price[i]){
      $("[name='commodity_id']").on("click", function(){
                if ($(this).prop('checked')){
                    $("[name='commodity_id']").prop('checked', false);
                    $(this).prop('checked', true);
                }
            });
    price_total -= price[i];
    }else{
      $("[name='commodity_id']").prop('checked', false);
     // var obj = document.getElementById("input");
     // obj.disabled = true;
      //preventDefault();
     

    }
      }
  
  $("#priceTotal").val(price_total);
 }
});



</script>








<script>

</script>













    <!--/テキストサンプル-->
  @endsection