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
            <img src="{{asset('storage/images/'.$items->img)}}">
            <p>{{ $item->Category}}</p>
          </a>
        </div>

        @endforeach

      </div>



  @endsection
