@extends('admin/html.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
  <table>
      <tr>
          <th>状況</th>
          <th>商品名</th>
          <th>個数</th>
          <th>卓番</th>
      </tr>
      @foreach ($allorderdetail as $order)
      <tr>
        <form method='post' action="/OrderCheck/chenge">
            <select name="NotYet" value='0'>未提供</select>
            <select name="Done" value='1'>提供済み</select>
        </form>
        <td>aaa</td>
        <td>{{$order->CommodityName}}</td>
        <td>{{$order->Quantity}}個</td>
        <td>{{$order->TableNumber}}番</td>

    </tr>
        @endforeach
</table>
    <!--/テキストサンプル-->
  @endsection
