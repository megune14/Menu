@extends('admin/html.PCbase')
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function(){
      $("#submit_select").change(function(){
        $("#submit_form").submit();
      });
    });
    </script>


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
        <td><form method='post' action='/admin/OrderCheck/chenge' id='submit_form'>
            @csrf
            <select name="flag" onchange="submit(this.form)">
                @if ($order->Flag === 0)
                <option value="0" selected>未提供</option>
                <option value="1">提供済み</option>
                @else
                <option value="0">未提供</option>
                <option value="1" selected  >提供済み</option>
                @endif
            </select>
            <input type="hidden" value="{{$order->OrderDetailID}}" name="id">
        </form>

    </td>
        <td>{{$order->CommodityName}}</td>
        <td>{{$order->Quantity}}個</td>
        <td>{{$order->TableNumber}}番</td>

    </tr>
        @endforeach
</table>
    <!--/テキストサンプル-->
  @endsection
