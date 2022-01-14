@extends('user/html.MOBILEbase')
<?php
use App\Models\CommodityTable;
$items = CommodityTable::where('CommodityID',$commodityid)->first();
?>

  @section('title','商品詳細')

    <!--テキストサンプル-->
    @section('contents')

    <div class="category">
        <h1>{{$items->CommodityName}}</h1>
    </div>

  <!--/テキストサンプル-->

  @endsection
