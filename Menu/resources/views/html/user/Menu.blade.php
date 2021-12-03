@extends('html/user.MOBILEbase')
<?php
use App\Models\Menu;
$items = Menu::where('id',$menuid)->where('shopid',$shopid)->get();

?>




  @section('title','メール送信完了')



  @section('contents')
    <div class="category">
      <h1>メニュー一覧</h1>
    </div>
@foreach ($items as $item)
<div class="card">
     <img src="/images/test2.png">
     <p>{{ $item->name}}</p>
     <p>{{ $item->price}}円</p>
</div>
@endforeach

  @endsection
