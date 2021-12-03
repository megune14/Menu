@extends('html/user.MOBILEbase')
<?php
use App\Models\Menu;
$items = Menu::where('shopid',$shopid)->get();

?>



  @section('title','メール送信完了')

  @section('contents')
    <div class="category">
      <h1>カテゴリー</h1>
    </div>

    @foreach ($items as $item)
    <div class="card">
       <a href="{{ route('detail', ['menuid' => $loop->index + 1], ['shopid' => $shopid]) }}">
         <img src="/images/test2.png">
         <p>{{ $item->name}}</p>
       </a>
    </div>

    @endforeach

  @endsection
