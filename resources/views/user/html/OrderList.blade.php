@extends('user/html.MOBILEbase')

@section('title','注文商品一覧')

@section('contents')

<div class="OrderList">

    @if(count($products) > 0)

    

        @foreach ($products as $product)
        <div class="cart-card">
            <div class="cart-img">
                <img src="{{asset('storage/images/'.$product->img)}}" alt="">
            </div>
            
            <div class="cart-text">

                <h2>{{$product->CommodityName}}</h2>
            
                <h3>{{number_format($product->pivot->quantity * $product->Price)}}円</h3>

                <div class="cart-delete">

                    <h2>{{$product->pivot->quantity}}個</h2>

                    <form method='post' action="{{route('user.cart.delete',['item'=>$product->CommodityID])}}">
                        @csrf
                    <button>削除</button>
                    </form>

                </div>

            </div>
        </div>
        @endforeach

        

        

    <div class="Voucher-all">
        <h2>
        
        合計金額:{{$totalPrice}}円
        </h2>
    </div>

    <div class ="OrderList-button">
            <button type=“button” onclick="location.href='/CouponList'">クーポン一覧</button>
        </div>


    <div class="submit-VoucherDetail">
        <form method='post' action="{{route('user.cart.push')}}">
        @csrf
        <button>注文</button>
        </form>
    </div>

    @else
    <div class="cart-null">
      <p> カートに商品が入っていません</p>
    </div>

    @endif

</div>

@endsection


