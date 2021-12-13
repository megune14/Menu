@extends('html/shop.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
<h2>商品一覧</h2>
@foreach ($Menu as $item)
<div>
    <a href="">
        <img src="{{ asset('images/men1.jpg') }}">
        <p>{{$item->name}}</p>
        <p>{{$item->price}}</p>
    </a>
</div>
@endforeach
    <!--/テキストサンプル-->
  @endsection
