@extends('html/user.MOBILEbase')
<?php
use App\Models\Menu;
$item = Menu::find($id);

?>




  @section('title','メール送信完了')



  @section('contents')
    <div class="card">
         <img src="/images/test2.png">
         <p>{{ $item->name}}</p>
         <p>{{ $item->price}}</p>
    </div>
