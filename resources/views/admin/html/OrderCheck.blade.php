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
    $(function(){
  $("#js-tab li").click(function(){
    $("#js-tab li").removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();

    $(".tab-content").removeClass("active");
    $(".tab-content").eq(index).addClass("active");
  });
});
    </script>


  @section('title','受注商品一覧')

  <!--テキストサンプル-->
  @section('contents')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="wrap-tab">
    <ul id="js-tab" class="list-tab">
      <li class="active">未提供</li>
      <li>提供済み</li>
    </ul>

    <div class="wrap-tab-content">
      <div class="tab-content active">
          @if(isset($detail0))
        <table>
            <tr>
                <th>状況</th>
                <th>商品名</th>
                <th>個数</th>
                <th>卓番</th>
            </tr>
            @foreach ($detail0 as $order)


            <tr>
              <td><form method='post' action='/admin/OrderCheck/chenge' id='submit_form'>
                  @csrf
                  <select name="flag" onchange="submit(this.form)">
                      <option value="0" selected>未提供</option>
                      <option value="1">提供済み</option>
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
          @else
          <p>空</p>
          @endif
      </div>

      <div class="tab-content">
          @if(isset($detail1))
        <table>
            <tr>
                <th>状況</th>
                <th>商品名</th>
                <th>個数</th>
                <th>卓番</th>
            </tr>
            @foreach ($detail1 as $order)

            <tr>
              <td><form method='post' action='/admin/OrderCheck/chenge' id='submit_form'>
                  @csrf
                  <select name="flag" onchange="submit(this.form)">
                      <option value="0">未提供</option>
                      <option value="1" selected  >提供済み</option>
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
            @else
            <p>空</p>
            @endif
      </div>

    </div>
  </div>

    <!--/テキストサンプル-->
  @endsection
