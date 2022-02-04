@extends('admin/html.PCbase')




  @section('title','クーポン削除')

    <!--テキストサンプル-->
    @section('contents')

    <div class="CouponDetail">
      <p>このクーポンを削除します。<br>　よろしいでしょうか？</p>


       
      <form action='/admin/CouponDetail/delete' method="POST" >

        <div class="Detail-couponcard">

          {{ csrf_field() }}

          <img src="{{ asset('storage/images/'.$commodity->img) }}" alt="">
          

        


          <input type="hidden"  name="id" value="{{$data->CouponID}}">

          <div class="Detail-menuname" name="name">
            <p>{{$commodity->CommodityName}}</p>
          </div>
          <div class="menupoint" name="point">
            <p>必要ポイント数：</p> <p>{{$data->Point}}pt</p>
          </div>

        </div>  



        <div class="submit-Detail">     
          <button type="button" onclick="history.back()">戻る</button>
          <input type="hidden"  name="id" value="{{$data->CouponID}}">
          <input type="submit" value="確定" name='delete'>
        </div>



    </div>


    <!--/テキストサンプル-->
  @endsection

  