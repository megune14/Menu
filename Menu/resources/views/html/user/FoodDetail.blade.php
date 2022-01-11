@extends('html/user.MOBILEbase')




  @section('title','商品詳細')
 
  <!--テキストサンプル-->
  @section('contents')
  <?php
use App\Models\OrderList;
use App\Http\Controllers\OrderListController;
 $Food = OrderList::get();
foreach ($Food as $Food) {}
?>
 
  <div class="Food-box">
      <span class="food-img">
        <img src="/images/men1.jpg"><!--写真-->
      </span>

      <h2>{{$Food->name}}</h2>
      <h4>商品説明</h4>
      <p>{{$Food->explanation}}</p>
      <h4>{{$Food->price}}円</h4>
      <select name="Food">
      <option data-num="{{$Food->quantity}}" value="{{$Food->quantity}} "selected>{{$Food->quantity}}個</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      </select><br>

<input type="submit" value="カートに追加" id="button12"><br>
<input type="submit" value="注文" id="button13">

<h4>アレルギー</h4>
<p>{{$Food->allergy}}</p>
<h4>カロリー</h4>
<p>{{$Food->calorie}}</p>


  


  </div>
    <!--/テキストサンプル-->
  @endsection