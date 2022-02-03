@extends('admin/html.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">

$(function() {
  $('#tehuda1 td button').mouseover( function(){
    $('td').css('background-color','orange');
  $('.sample1 button').css('background-color','orange');
  });
});
</script>
  <br>
  <br>
  <br>
  <br>
  <br>
  <table id='tehuda1'>
      <tr>
          <th>商品名</th>
          <th>個数</th>
        </tr>
        @foreach ($order1 as $order)
        <tbody>
        <tr>
            <td class="sample1">{{$order->Commodity->CommodityName}}</td>
            <td class="sample1"><button>{{$order->Quantity}}</button></td>
        </tr>
    </tbody>
        @endforeach
</table>
    <!--/テキストサンプル-->
  @endsection
