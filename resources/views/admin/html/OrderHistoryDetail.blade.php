@extends('admin/html.PCbase')




  @section('title','受注商品詳細履歴')

  <!--テキストサンプル-->
  @section('contents')
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">

$(function() {
  $('#tehuda2 td ').mouseover( function(){
    $(this).parent().find('td').css('background-color','rgba(128,128,128,0.6)');

    $('#tehuda2 td ').mouseout(function(){
    $('td').css('background-color','transparent');
  
  });
  });
});
</script>
<div class="HistoryDetail-table">
  <table id='tehuda2'>
      <tr>
          <th>商品名</th>
          <th>個数</th>
        </tr>
        @foreach ($order1 as $order)
        <tbody>
        <tr>
            <td>{{$order->Commodity->CommodityName}}</td>
            <td>{{$order->Quantity}}</td>
        </tr>
    </tbody>
        @endforeach
  </table>
</div>
    <!--/テキストサンプル-->
  @endsection
