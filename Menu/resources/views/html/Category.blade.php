@extends('html.MOBILEbase')
<?php
$items = \DB::table('test')->get();

?>



  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
    @foreach ($items as $item)
    <div class="card">
       <a href="{{ route('detail', ['id' => $loop->index + 1]) }}">
         <img src="/images/test.png">
         <p>{{ $item->category}}</p>
       </a>
    </div>

    @endforeach

    <!--/テキストサンプル-->
  @endsection
