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
    <td>  <input type="position:absolute;" value="1"> <!--個数--> </td>
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
    
    <td>  <input type="position:absolute;" value="1" id="Quantity"> <!--個数--> </td>
    <td>  <input type="button" name="delete_btn" value="削除"> </td><!--削除ボタン-->
  
    <br>

<a id="coupon-Choice" href="">    
  <input type="button"  value="クーポンを選択"><!--クーポンボタン-->
</a><br>

<?php
echo '<p>付与されるポイント'.            '：' . "pt</p>\n";//ポイント表示
echo '<p>合計金額'.         '：' . "円</p>\n";//合計金額


?>



<a id="order-send" href="">    
  <input type="submit"  value="注文を送信する"><!--送信ボタン-->
</a>




<!--ココからお試しコード-->



<?php
    $foo = 100;
    $foo = json_encode($foo);
?>

<script>
    let bar = JSON.parse('<?php echo $foo; ?>');
    console.log('typeof: ' + typeof bar);
    for (let i = 0; i < bar.length; i++) {
        console.log('value: ' + bar[i]);
    }
</script>

<script>
let element = document.getElementById("Quantity");
 $aaa = console.log(element.value);
</script>






<?php 
   $kakaku = $Order->price

?>

<script>
    
</script>


<?php echo $kakaku ?>










<tr>
				<th class="sample_th">合計金額</th>
				<td class="sample_td"><input value="" name="textbox02" type="text" id="jsPrice" class="sample_input" readonly>円</td>
			</tr>



<script>
$(function(){
	var value = 800; // りんごの単品価格
	var maxNum = 100; // 注文できる個数の上限
	var tagInput = $('#Quantity'); // 入力対象のinputタグID名
	var tagOutput = $('#jsPrice'); // 出力対象のinputタグID名
	tagInput.on('change', function() {
		var str = $(this).val();
		var num = Number(str.replace(/[^0-9]/g, '')); // 整数以外の文字列を削除
		if(num == 0) {
			num = '';
		} else if (num > maxNum) { // 上限を超える個数を入力した場合
			num = maxNum;
		}
		$(this).val(num);
		if(num != 0) {
			var price = num * value;
			tagOutput.val(price);H
		}
	});
});
</script>


<!--サブ1-->


<html lang="ja" dir="ltr">
<head>
<meta charset="utf-8">
<title>フォーム計算のデモ</title>
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
</head>
<body>
<div id="wrapper">
  <section id="contents">
    <h1 class="">フォーム自動計算</h1>
      <div class="">
      <form class="form-horizon" method="post" action="">
        <p>ご希望項目の数を選択してください。</p>

        <div class="form-box">
          <p class="buy_itemu_menu" data-price="300">花束
            <span class="kakaku">(定価 300円／会員価格 200円)</span>
          </p>
          <select name="花束数量">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
          </select>
        </div>

        <div class="form-box">
          <p class="buy_itemu_menu" data-price="700">防災セット
            <span class="kakaku">(定価 700円／会員価格 500円)</span>
          </p>
          <select name="防災セット数量">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
          </select>
        </div>
        <div class="form-box">
          <p class="buy_itemu_menu" data-price="2500">人力飛行機
            <span class="kakaku">(定価 2,500円／会員価格 2,300円)</span>
          </p>
          <select name="人力飛行機数量">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
          </select>
        </div>


        <hr>


        <div class="form-box">
          <label class="form-label">小計：</label>
          <input id="item_price_total" class="" name="小計" value="0円" readonly>
        </div>

        <div class="form-box">
          <label class="form-label">送料：</label>
          <input id="postage_price" class="" name="送料" value="300円" readonly>
          <span>※1発送につき300円（3,000円以上のご購入で送料無料）</span>
        </div>

        <div class="form-box">
          <label class="form-label">合計金額：</label>
          <input id="total_price" class="" name="合計金額" value="300円" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly>
          <div>
            <label class="checkbox">
            <input id="kaiinnkakaku" type="checkbox" name="会員価格" value="チェック有">
              会員の方はチェックしてください。会員価格に変更されます。
            </label>
          </div>

        </div>


        <div class="submit-form">
          <button id="form-check" type="submit" class="btn">送 信（されません）</button>
        </div>
      </form>
    </div><!-- section -->
  </section><!-- /entry-content -->
</div><!-- /#wrapper -->


<footer id="footer">
  <small class="copyright">&copy;できコツ</small>
</footer>

</body>
</html>


<script>
$(function() {

$("select,#kaiinnkakaku").change(function() {

  var hairetu = [];
  for(var i = 0; i < $(".buy_itemu_menu").length; i++){

    var item_price = $(".buy_itemu_menu").eq(i).data("price");
    var item_select = $(".buy_itemu_menu").eq(i).next("select").find("option:selected").data("num");

    if(document.getElementById("kaiinnkakaku").checked == true){

      //価格別に設定したい場合
      if ( item_price > 500) {
        var item_price = item_price - 200
      } else {
        var item_price = item_price - 100
      }
      //割合で設定したい場合
//        var item_price = item_price*.8
    }

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
    var postage = 300;
  }


  $("#item_price_total").val(total + "円");
  $("#postage_price").val(postage + "円");
  $("#total_price").val((total + postage) + "円");

});


});


</script>






@endsection


