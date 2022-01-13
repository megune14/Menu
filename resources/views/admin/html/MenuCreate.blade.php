@extends('admin/html.PCbase')


  @section('title','メール送信完了')
@php
    use App\Models\CategoryTable;
@endphp
  <!--テキストサンプル-->
  @section('contents')
<h2>商品一覧</h2>
{{csrf_field()}}
{{ Form::open(['action' => 'MenuCreateController@create', 'method' => 'post']) }}
{{ Form::select('FORM_NAME', CategoryTable::select('CategoryID', 'Category')->get()->pluck('Category','CategoryID')->prepend( "全て", "0"), null, ['class' => 'form-control']) }}
{!! Form::submit('検索') !!}
{{ Form::close() }}
@foreach ($Menu as $item)
<div>
    <!--ここのURLにクエリパラメータで商品IDを送る-->
    <a href="#">
        <img src="{{ asset('images/men1.jpg') }}">
        <p>{{$item->CommodityName}}</p>
        <p>{{$item->Price}}</p>
    </a>
</div>
@endforeach
    <!--/テキストサンプル-->
  @endsection
