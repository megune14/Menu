@extends('user/html.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')

<div class="OrderList">

    @if(count($products) > 0)

    <div class="field-card">

        @foreach ($products as $product)
        <div class="card">
            <div class="cart-img">
                <!--<a href="{{asset('storage/images/'.$product->img)}}"></a>-->
                <img src="/images/men1.jpg" alt="">
            </div>
            
            <div class="cart-name">
                <h2>{{$product->CommodityName}}</h2>
            </div>
                
            <div class="cart-price">
                <h2>{{$product->pivot->quantity}}個</h2>
                <h2>{{number_format($product->pivot->quantity * $product->Price)}}円</h2>
            </div>

            <div class="cart-delete">
                <form method='post' action="{{route('user.cart.delete',['item'=>$product->CommodityID])}}">
                    @csrf
                <button>削除</button>
                </form>
            </div>
        </div>
        @endforeach

    </div>    

    <div class="Voucher-all">
      <h2>合計金額:{{$totalPrice}}円</h2>
    </div>


    <div class="submit-VoucherDetail">
        <form method='post' action="{{route('user.cart.push')}}">
        @csrf
        <button>注文</button>
        </form>
    </div>

    @else
    <p> カートに商品が入っていません</p>

    @endif

</div>

@endsection


