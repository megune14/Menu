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
          
         
          <div class="Coupon-check">必要ポイント：
         
           <!--↓この辺があやしいよね↓-->
           <label class="switch__label">
          <input  class="price" id="{{$coupon->CommodityName}}" name="Point" readonly type="text" style="border:none" value="{{$coupon->Point}}">

          <label class="switch__label">
         
        <input class="check" data-price="{{$coupon->CommodityName}}" id="input" name="commodity_id" type="checkbox" value = "{{$coupon->CommodityID}}" >使用する<br>
        <span class="switch__content"></span>
        <span class="switch__circle"></span>

          

  
        </label>



         

        
            
          </div> 

        </div>

        

        <?php } ?>
        

        

<br>
        <button type="button" onclick=history.back()><a href="#">戻る</a></button>


        <label for="priceTotal"></label>
        <div class="Current-point">現在のポイント：
        <input placeholder="" id="priceTotal" name="point" readonly type="text" style="border:none" ></td>
        </div>



        <div class=" coupon-pop">
          
         

        <input type="submit" value="確定">











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



<!--<style>
.switch__label {
    width: 50px;
    position: relative;
    display: inline-block;
}
.switch__content {
    display: block;
    cursor: pointer;
    position: relative;
    border-radius: 30px;
    height: 31px;
    overflow: hidden;
}
.switch__content:before {
    content: "";
    display: block;
    position: absolute;
    width: calc(100% - 3px);
    height: calc(100% - 3px);
    top: 0;
    left: 0;
    border: 1.5px solid #E5E5EA;
    border-radius: 30px;
    background-color: #fff;
}
.switch__content:after {
    content: "";
    display: block;
    position: absolute;
    background-color: transparent;
    width: 0;
    height: 0;
    top: 50%;
    left: 50%;
    border-radius: 30px;
    -webkit-transition: all .5s;
       -moz-transition: all .5s;
        -ms-transition: all .5s;
         -o-transition: all .5s;
            transition: all .5s;
}
.switch__input {
    display: none;
}
.switch__circle {
    display: block;
    top: 2px;
    left: 2px;
    position: absolute;
    -webkit-box-shadow: 0 2px 6px #999;
            box-shadow: 0 2px 6px #999;
    width: 27px;
    height: 27px;
    -webkit-border-radius: 20px;
            border-radius: 20px;
    background-color: #fff;
    -webkit-transition: all .5s;
       -moz-transition: all .5s;
        -ms-transition: all .5s;
         -o-transition: all .5s;
            transition: all .5s;
}
.switch__input:checked ~ .switch__circle {
    left: 21px;
}
.switch__input:checked ~ .switch__content:after {
    background-color: #00c4cc;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}







  </style>





-->



    <!--/テキストサンプル-->
  @endsection