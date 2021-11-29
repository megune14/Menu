@extends('html.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')
<ul class="menu-list">
  <li>
    <a id="menu1" href="">
      <span class="menu-img">
        <img src="">
      </span>
      <span class="menu-text">
      <span class="m-name">醤油ラーメン</span>
      <span class="m-price">800円</span>
      <input type="number" value="1" min="1" max="10" step="1">
      <button type="submit" name="delete_btn" value="1">削除</button>
  </li> 
</ul>


@endsection