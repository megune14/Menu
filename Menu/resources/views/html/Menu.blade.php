@extends('html.MOBILEbase')
<?php
$items = \DB::table('goods')->get();

?>




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
    @foreach ($items as $item)
    <div class="card">
         <img src="/images/test.png">
         <p>{{ $item->name}}</p>
    </div>

    @endforeach
