@extends('html/user.MOBILEbase')
<?php
use App\Models\Menu;
$item = Menu::find($id);

?>




  @section('title','メール送信完了')



  @section('contents')
    <div class="category">
      <h1>メニュー一覧</h1>
    </div>

    <div class="card">
         <img src="/images/test2.png">
         <p>{{ $item->name}}</p>
         <p>{{ $item->price}}円</p>
    </div>

  @endsection