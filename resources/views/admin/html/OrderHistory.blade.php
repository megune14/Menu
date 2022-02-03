@extends('admin/html.PCbase')

@php
use App\Models\OrderTable;
use App\Models\OrderDetailTable;
@endphp

  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">



$(function() {
    $('#tehuda1 tr').on('click','td',function(){
        $('form').submit();
    })


  $('#tehuda1 td ').mouseover(function(){
    $(this).parent().find('td').css('background-color','rgba(128,128,128,0.6)');
  });

  $('#tehuda1 td ').mouseout(function(){
    $('td').css('background-color','transparent');
  
  });
});
</script>


<div id="tehuda1">
    @if(isset($orders))

    <div class="History-table">
        <table>
            <thead>
            <tr>
                <th>注文日時</th>
                <th>卓番</th>
                
                
            </tr>
            </thead>

            @foreach ($orders as $allorder)
            <form action="{{route('admin.historydetail',['detail' => $allorder->OrderID])}}" method="post">
                @csrf
            <tbody>

                
                    <tr>
                        
                        <td>                          
                            {{$allorder->DayTime}}
                        </td>
                        <td>                            
                            {{$allorder->TableNumber}}
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
