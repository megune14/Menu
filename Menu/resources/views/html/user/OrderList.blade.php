@extends('html/user.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')

<?php
    
    $Order = \DB::table('OrderListdb')->get();//データベース取得    
   foreach ($Order as $Order) {
   }
   ?>
<tr class="menu-list">
  <th>
  
    
    <a id="menu1" href="">
      <span class="menu-img">
        <img src="/images/men1.jpg"><!--写真-->
      </span>
  </th>
      <?php 
       echo '<th>' . $Order->name   ."</th>\n";//商品名の値
       ?>
       <br>
       <?php
       echo '<td>' . $Order->price   ."円</td>\n";//値段
      ?><br>
    </a>  

    <td>
    <div class="form-box">
          <p class="buy_itemu_menu" data-price = "<?php
       echo   $Order->price   ;//値段
      ?>">
            <span class="kakaku"></span>
          </p>
          <select name="塩ラーメン">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
            <option data-num="4" value="4個">4個</option>
            <option data-num="5" value="5個">5個</option>
            <option data-num="6" value="6個">6個</option>
            <option data-num="7" value="7個">7個</option>
            <option data-num="8" value="8個">8個</option>
            <option data-num="9" value="9個">9個</option>
            <option data-num="10" value="10個">10個</option>
            <option data-num="11" value="11個">11個</option>
            <option data-num="12" value="12個">12個</option>
            
          </select>
        </div></td>
    <td>  <input type="button" name="delete_btn" value="削除"> </td><!--削除ボタン-->
   <br>

   <th>
  
    
    <a id="menu1" href="">
    <span class="menu-img">
      <img src="/images/men1.jpg"><!--写真-->
    </span>
   </th>
     
       
       <th>{{$Order->name}}   </th> <!--商品名の値-->
       
       <br>
       <?php
       echo '<td>' . $Order->price   ."円</td>\n";//値段
      ?><br>
    </a>  
    
    <div class="form-box">
          <p class="buy_itemu_menu" data-price = "<?php
       echo   $Order->price   ;//値段
      ?>">
            <span class="kakaku"></span>
          </p>
          <select name="塩ラーメン">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
            <option data-num="4" value="4個">4個</option>
            <option data-num="5" value="5個">5個</option>
            <option data-num="6" value="6個">6個</option>
            <option data-num="7" value="7個">7個</option>
            <option data-num="8" value="8個">8個</option>
            <option data-num="9" value="9個">9個</option>
            <option data-num="10" value="10個">10個</option>
            <option data-num="11" value="11個">11個</option>
            <option data-num="12" value="12個">12個</option>
            
          </select>
          
        </div></td>
    <td>  <input type="button" name="delete_btn" value="削除"> </td><!--削除ボタン-->
  
    <br>

<a id="coupon-Choice" href="">    
  <input type="button"  value="クーポンを選択"><!--クーポンボタン-->
</a><br>

<?php
echo '<p>付与されるポイント'.            '：' . "pt</p>\n";//ポイント表示

?>

<label class="form-label">合計金額：</label>
          <input id="total_price" class="" name="合計金額" value="0円" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly>

<br>

<a id="order-send" href="">    
  <input type="submit"  value="注文を送信する"><!--送信ボタン-->
</a>


<style>
  p {
    margin: 0;
  }
  .form-box {
    margin-bottom: 1em;
  }
#item_price_total, #postage_price,#total_price {
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

<?php 
$Order = new \App\Item;
$Order->name = '名前';
$Order->save();
?>


@endsection


