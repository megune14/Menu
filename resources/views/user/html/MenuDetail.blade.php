@extends('user/html.MOBILEbase')
<?php
use App\Models\CommodityTable;
$items = CommodityTable::where('CommodityID',$commodityid)->first();
?>

  @section('title','商品詳細')

    <!--テキストサンプル-->
    @section('contents')

    <div class="MenuDetail">
        <form method="post" action="{{route('user.cart.add')}}">
            @csrf
            <img src="{{asset('storage/images/'.$items->img)}}" alt="">
            <h2>{{$items->CommodityName}}</h2>


            <div class="Detail-number">
              <h3>{{$items->Price}}円</h3>
              <input type="number" name="quantity" value='1' min="1">
            </div>

            <input type="hidden" name="commodity_id" value="{{$items->CommodityID}}">
            <input type="hidden" name="price" value="{{$items->Price}}">
            <input type="hidden" name="commodityname" value="{{$items->CommodityName}}">



            <div class="cart-button">
              <input type="submit" name="button1" value="カートに追加">
            </div>

            <div class="Detail-button">
            <input type="submit" name="button2" value="注文">
            </div>

    </div>


  <!--/テキストサンプル-->

  @endsection
