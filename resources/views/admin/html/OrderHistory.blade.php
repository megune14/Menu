@extends('admin/html.PCbase')

@php
use App\Models\OrderTable;
use App\Models\OrderDetailTable;
@endphp

  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')


<div class="OrderHistory">
    @if(isset($orders))

    <div class="History-table">
        <table>
            <thead>
            <tr>
                <th>注文日時</th>
                <th>卓番</th>
                <th>詳細</th>
                
            </tr>
            </thead>

            @foreach ($orders as $allorder)
            <form action="{{route('admin.historydetail',['detail' => $allorder->OrderID])}}" method="post">
                @csrf
            <tbody>

                
                    <tr>
                        
                        <td>                          
                            <button>{{$allorder->DayTime}}</button>
                        </td>
                        <td>                            
                            <button>{{$allorder->TableNumber}}</button>
                        </td>
                    
                    </tr>
                    

            </tbody>
            
        </form>
            @endforeach
    
        </table>
    </div>

    @endif
</div>
    <!--/テキストサンプル-->
  @endsection
