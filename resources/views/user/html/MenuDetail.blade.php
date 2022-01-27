@extends('user/html.MOBILEbase')
<?php
use App\Models\CommodityTable;
$items = CommodityTable::where('CommodityID',$commodityid)->first();
?>

  @section('title','商品詳細')

    <!--テキストサンプル-->
    @section('contents')

    <div class="category">
        <form method="post" action="{{route('user.cart.add')}}">
            @csrf
            <p>{{$items->CommodityName}}</p>
            <p>{{$items->Price}}</p>
            <input type="number" name="quantity">
            <input type="hidden" name="commodity_id" value="{{$items->CommodityID}}">
            <input type="hidden" name="price" value="{{$items->Price}}">
            <input type="hidden" name="commodityname" value="{{$items->CommodityName}}">
            <button>カートに追加</button>
    </div>


  <!--/テキストサンプル-->

  @endsection
