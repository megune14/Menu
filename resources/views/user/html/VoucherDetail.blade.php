@extends('user/html.MOBILEbase')




  @section('title','会計詳細')
@php

$allprice = 0;
@endphp
  <!--テキストサンプル-->
  @section('contents')

    <div class="VoucherDetail">
      @if (is_null($order1))
      <p>会計情報がありません</p>
      @else
      @foreach ($order1 as $order)

      @php
          $commodity = $commodity->where('CommodityID',$order->CommodityID)->first();
          $allprice += $order->Quantity * $commodity->Price;
      @endphp

      <div class="Voucher-text">
        <h2>{{$commodity->CommodityName}}</h2>
        <p>{{$order->Quantity}}個</p>
      </div>

      @endforeach

      <div class="Voucher-all">
        <h2>合計金額：{{$allprice}}円</h2>
      </div>

      <div class="submit-VoucherDetail">
        <form method='post' action="/VoucherDetail/end">
            @csrf
          <input type="hidden" name="allprice" value="{{$allprice}}">
          <button>お会計</button>
        </form>
      </div>

      @endif
    </div>

    <!--/テキストサンプル-->
  @endsection
