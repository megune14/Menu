@extends('html/user.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')
<tr class="menu-list">
  <th>
    
    <a id="menu1" href="">
      <span class="menu-img">
        <img src="">
      </span>
      <span class="menu-text">
      <span class="m-name">醤油ラーメン</span><br>
      <span class="m-price">800円</span><br>
    </a>  
      <input type="position:absolute;" value="1">
      <button type="submit" name="delete_btn" value="1">削除</button>
<<<<<<< HEAD:Menu/resources/views/html/OrderList.blade.php
  </th> <br>

  <th>
    <a id="menu1" href="">
      <span class="menu-img">
        <img src="">
      </span>
      <span class="menu-text">
      <span class="m-name">味噌ラーメン</span><br>
      <span class="m-price">900円</span><br>
    </a>  
      <input type="position:absolute;" value="1" min="1" max="10" step="1">
      <button type="submit" name="delete_btn" value="1">削除</button>
  </th> 
</tr><br>

<a id="coupon-Choice" href="">    
  <input type="button"  value="クーポンを選択">
</a><br>

<?php
echo '<p>付与されるポイント'. '：' . "</p>\n";
echo '<p>合計金額'. '：' . "円</p>\n";


?>



<a id="order-send" href="">    
  <input type="submit"  value="注文を送信する">
</a>
@endsection
=======
  </li>
</ul>


@endsection
>>>>>>> 626954e2bb2ecf1fc75ac1b1daefa93769f10862:Menu/resources/views/html/user/OrderList.blade.php
