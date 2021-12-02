@extends('html/user.MOBILEbase')
<?php
use App\Models\Menu;
$items = Menu::get();

?>



  @section('title','メール送信完了')

  @section('contents')
    <div class="category">
      <h1>カテゴリー</h1>
    </div>
  
    @foreach ($items as $item)
    <div class="card">
       <a href="{{ route('detail', ['id' => $loop->index + 1]) }}">
         <img src="/images/test2.png">
         <p>{{ $item->name}}</p>
       </a>
    </div>

    @endforeach

  @endsection
