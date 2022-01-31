@extends('user/html.MOBILEbase')




  @section('title','クーポンリスト')

  <!--テキストサンプル-->
  @section('contents')

  <?php
      use App\Models\CouponTable;
      use App\Http\Controllers\CouponTableController;


    
      
     
      foreach ($coupon as $coupon) {
      ?>





      <form>
        <div class="CouponList">

          <div class="Coupon-box">

          <label >{{$coupon->CommodityName}}</label>

            <div class="Coupon-img">
            <img src="{{ asset('storage/images/'. $coupon->img) }}"><!--写真-->
            </div>
      
          </div>
         
          <div class="Coupon-check">必要ポイント：
          <input  class="price" id="{{$coupon->CommodityName}}" name="assesPrice" readonly type="text" style="border:none" value="{{$coupon->Point}}">
            <p>
            <input class="check" data-price="{{$coupon->CommodityName}}" id="" name="" type="checkbox" >利用する
            </p>
          </div> 

        </div>

        <?php } ?>
        <label for="priceTotal">合計</label>
        <div class="Current-point">現在のポイント：
        <input placeholder="" id="priceTotal" name="priceTotal" readonly type="text" style="border:none"></td>
        </div>

        <div class="Coupon-confirm">
        
          <button type="button" onclick=history.back()>戻る</button>
          <input type="submit" value="確定" id="button5">
        </div>

      </form>










      <table>
<tr>
<th style="background-color:gray;">商品</th>
<th style="background-color:gray;">金額</th>
<th style="background-color:gray;"></th>
</tr>
<tr>
<td><label for="glasses">めがね</label></td>
<td><input placeholder="金額" class="price" id="glassesPrice" name="glassesPrice" type="text" value="{{$coupon->Point}}"></td>
<td><input class="check" data-price="glassesPrice" id="" name="checkGlasses" type="checkbox">
</td>
</tr>
<tr>
<td><label for="mustache">ひげ</label></td>
<td><input placeholder="金額" class="price" id="mustachePrice" name="mustachePrice" type="text" value="300"></td>
<td><input class="check" data-price="mustachePrice" id="" name="checkMustache" type="checkbox"></td>
</tr>
<tr>
<td><label for="kGlasses">めがね（かにゃめモデル）</label</td>
<td><input placeholder="金額" class="price" id="kGlassesPrice" name="kGlassesPrice" type="text" value="900"></td>
<td><input class="check" data-price="kGlassesPrice" id="" name="checkKGlassesPrice" type="checkbox" ></td>
</tr>
<tr>
<td><label for="kGlasses">{{$coupon->CommodityName}}</label</td>
<td><input placeholder="金額" class="price" id="GlassesPrice" name="GlassesPrice" type="text" value="{{$coupon->Point}}"></td>
<td><input class="check" data-price="GlassesPrice" id="" name="checkKGlassesPrice" type="checkbox" ></td>
</tr>
<tr>
<td><label for="priceTotal">合計</label></td>
<td><input placeholder="合計金額" id="priceTotal" name="priceTotal" type="text"></td>
<td></td>
</tr>
</table>




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
  var price_total = {{$coupon->Point}};
//for文で配列を回して合計を出す
  for(var i = 0, len = price.length;i < len; i++){
  price_total -= price[i];
  }
  $("#priceTotal").val(price_total +"pt");
 }
});


</script>
    <!--/テキストサンプル-->
  @endsection