@extends('user/html.MOBILEbase')
<?php
use App\Models\CategoryTable;
$items = CategoryTable::where('StoreID',session()->get('StoreID'))->get();
?>



  @section('title','カテゴリー')

    @section('contents')
      <div class="category">
        <h1>カテゴリー</h1>
      </div>

      <div class="field-card">

        @foreach ($items as $item)

        <div class="card">
          <a href="/Category/Menu?categoryid={{$item->CategoryID}}">
            <img src="{{asset('storage/images/'.$item->img)}}">
            <h2>{{ $item->Category}}</h2>
          </a>
        </div>

        @endforeach

      </div>



  @endsection
