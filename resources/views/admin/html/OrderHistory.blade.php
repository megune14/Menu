@extends('admin/html.PCbase')

@php
use App\Models\OrderTable;
use App\Models\OrderDetailTable;
@endphp

  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')

<br>


    @if (isset($orders))
<table>
    <tr>
        <th>日時</th>
        <th>卓番</th>
        <th>詳細</th>
      </tr>
      @foreach ($orders as $allorder)
      <tr>

          <td>{{$allorder->DayTime}}</td>
          <td>{{$allorder->TableNumber}}</td>
          <td>
              <form action="{{route('admin.historydetail',['detail' => $allorder->OrderID])}}" method="post">
                  @csrf
                  <button>詳細</button>
              </form>
          </td>
      </tr>
@endforeach
</table>
@endif
    <!--/テキストサンプル-->
  @endsection
