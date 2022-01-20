@extends('admin/html.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  
  @section('contents')
    <form action="/admin/PointSetting/add" method="post">
    @csrf
  
  <h2 class="">ポイント設定</h2>
 

  <input type="number"  name="Price" value ="{{ $data->Price }}" min="100" max="500" step="100">円で
  <input type="number" name="Point" value ="{{$data->Point}}" min="10" max="500" step="10">ポイント
  <input type="submit" name="確定">
  

    <!--/テキストサンプル-->
  @endsection