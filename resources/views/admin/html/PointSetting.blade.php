@extends('admin/html.PCbase')




  @section('title','ポイント設定')

  <!--テキストサンプル-->
  
  @section('contents')
    <form action="/admin/PointSetting/add" method="post">
    @csrf
  
  <h2 class="">ポイント設定</h2>
 

  <input type="number"  name="Price" value ="{{ $data->Price }}" min="1" max="500" step="1">円で
  <input type="number" name="Point" value ="{{$data->Point}}" min="1" max="500" step="1">ポイント
  <input type="submit" name="確定">
  

    <!--/テキストサンプル-->
  @endsection