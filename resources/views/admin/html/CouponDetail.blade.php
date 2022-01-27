@extends('admin/html.PCbase')




  @section('title','メール送信完了')

    <!--テキストサンプル-->
    @section('contents')

    <div class="CouponDetail">
      <p>このクーポンを削除します。<br>　よろしいでしょうか？</p>
       
      <form action='/admin/CouponDetail/delete' method="POST" >

          {{ csrf_field() }}

          <img src="{{ asset('storage/images/'.$commodity->img) }}" alt="">

      <!-- ここにクーポンの情報がくるようにする-->


      <input type="hidden"  name="id" value="{{$data->CouponID}}">
          <div class="menuname" name="name">
            <p>{{$commodity->CommodityName}}</p>
          </div>
          <div class="menupoint" name="point">
          <p>必要ポイント数： {{$data->Point}}pt</p>
          </div>



      <div class="submit-Detail">     
        <button type="button" onclick="history.back()">戻る</button>
        <input type="hidden"  name="id" value="{{$data->CouponID}}">
        <input type="submit" value="確定" name='delete'>
      </div>



    </div>


    <!--/テキストサンプル-->
  @endsection

  