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
        <img src="/images/men1.jpg">
      </span>
      <?php 
       echo '<th>' . $Order->name   ."</th>\n";//商品名の値
       ?>
       <br>
       <?php
       echo '<th>' . $Order->price   ."円</th>\n";//値段
      ?><br>
    </a>  
      <input type="position:absolute;" value="1"> <!--個数-->
      <button type="submit" name="delete_btn" value="1">削除</button><!--削除ボタン-->
  </th> <br>

  <th>
    <a id="menu1" href="">
      <span class="menu-img">
        <img src = "images/men1.jpg">
      </span>
      
      <span class="menu-text">
      <?php 
       echo '<th>' . $Order->name   ."</th>\n";//商品名の値
       ?>
       <br>
       <?php
       echo '<th>' . $Order->price   ."円</th>\n";//値段
      ?><br>
    </a>  
    
      <input type="position:absolute;" id ="Quantity" value="1" min="1" max="10" step="1"><!--個数-->
      <button type="submit" name="delete_btn" value="1">削除</button>
      <button type="submit" name="delete_btn" value="1">削除</button><!--削除ボタン-->
  </th> 
</tr><br>

<a id="coupon-Choice" href="">    
  <input type="button"  value="クーポンを選択"><!--クーポンボタン-->
</a><br>

<?php
echo '<p>付与されるポイント'.            '：' . "pt</p>\n";
echo '<p>合計金額'.         '：' . "円</p>\n";


?>



<a id="order-send" href="">    
  <input type="submit"  value="注文を送信する"><!--送信ボタン-->
</a>








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
@endsection
