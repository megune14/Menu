@extends('user/html.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')

@if(count($products) > 0)
 @foreach ($products as $product)
 <div><a href="{{asset('storage/images/'.$product->img)}}"></a></div>
 <div>{{$product->CommodityName}}</div>
 <div>{{$product->pivot->quantity}}個</div>
 <div>{{number_format($product->pivot->quantity * $product->Price)}}円</div>
<form method='post' action="{{route('user.cart.delete',['item'=>$product->CommodityID])}}">
    @csrf
<button>削除</button>
</form>
@endforeach
<p>合計金額:{{$totalPrice}}円</p>
<form method='post' action="{{route('user.cart.push')}}">
@csrf
<button>注文</button>
</form>
 @else
<p> カートに商品が入っていません</p>
@endif
@endsection


