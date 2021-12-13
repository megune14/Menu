@extends('html/user.MOBILEbase')
<?php
use App\Models\Menu;
$items = Menu::where('StoreID',session()->get('StoreID'))->get();

?>



  @section('title','メール送信完了')

  @section('contents')
    <div class="category">
      <h1>カテゴリー</h1>
    </div>

    @foreach ($items as $item)
    <div class="card">
       <a href="/Category/Menu?categoryid={{$item->Category}}&shopid={{$item->CommodityID}}">
         <img src="/images/test2.png">
         <p>{{ $item->name}}</p>
       </a>
    </div>

    @endforeach

  @endsection
