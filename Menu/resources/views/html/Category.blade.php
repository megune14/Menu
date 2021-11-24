@extends('html.MOBILEbase')
<?php
$items = \DB::table('test')->get();

?>



  @section('title','メール送信完了')
  @foreach ($items as $item)
    <p>{{ $item->category}}</p>

  @endforeach

    <!--テキストサンプル-->
    @section('contents')

    <!--/テキストサンプル-->
    @endsection
