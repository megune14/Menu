@extends('user/html.MOBILEbase')
<?php
use App\Models\CommodityTable;
$items = CommodityTable::where('CategoryID',$categoryid)->where('StoreID',$shopid)->where('StopFlag',0)->get();

?>




  @section('title','メニュー')



  @section('contents')
    <div class="category-menu">
      <h1>メニュー一覧</h1>  
    </div>

    <div class="field-card">

      @foreach ($items as $item)

      <div class="card">
          <a href="/Category/Menu/{{$item->CommodityID}}">
          <img src="{{asset('storage/images/'.$item->img)}}">
          <h2>{{ $item->CommodityName}}</h2>
          <h2>{{ $item->Price}}円</h2>
          </a>
      </div>
      <form action=""></form>

      @endforeach
      <div class="category-button">
        <button><a href="/Category">カテゴリーに戻る</a></button>
      </div>

    </div>

  @endsection
