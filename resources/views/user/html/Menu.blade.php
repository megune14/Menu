@extends('html/user.MOBILEbase')
<?php
use App\Models\CommodityTable;
$items = CommodityTable::where('CategoryID',$categoryid)->where('StoreID',$shopid)->where('StopFlag',0)->get();

?>




  @section('title','メール送信完了')



  @section('contents')
    <div class="category">
      <h1>メニュー一覧</h1>
    </div>
@foreach ($items as $item)
<div class="card">
    <a href="">
     <img src="/images/test2.png">
     <p>{{ $item->CommodityName}}</p>
     <p>{{ $item->Price}}円</p>
    </a>
</div>
@endforeach

  @endsection
