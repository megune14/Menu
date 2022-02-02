@extends('admin/html.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
  <br>
  <br>
  <br>
  <br>
  <br>
  <table>
      <tr>
          <th>商品名</th>
          <th>個数</th>
        </tr>
        @foreach ($order1 as $order)
        <tr>
            <td>{{$order->Commodity->CommodityName}}</td>
            <td>{{$order->Quantity}}</td>
        </tr>
        @endforeach
</table>
    <!--/テキストサンプル-->
  @endsection
