@extends('user/html.MOBILEbase')




  @section('title','会計詳細画面')
@php

$allprice = 0;
@endphp
  <!--テキストサンプル-->
  @section('contents')
  @if (is_null($order1))
  <p>会計情報がありません</p>
  @else
  @foreach ($order1 as $order)
  @php
      $commodity = $commodity->where('CommodityID',$order->CommodityID)->first();
      $allprice += $order->Quantity * $commodity->Price;
  @endphp
  <p>{{$commodity->CommodityName}}</p>
  <p>{{$order->Quantity}}個</p>
  @endforeach
  <p>合計金額：{{$allprice}}円</p>
  <form method='post' action="/VoucherDetail/end">
      @csrf
  <input type="hidden" name="allprice" value="{{$allprice}}">
  <button>お会計</button>
  </form>

@endif


    <!--/テキストサンプル-->
  @endsection
