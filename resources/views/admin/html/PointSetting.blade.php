@extends('admin/html.PCbase')




  @section('title','ポイント設定')

  <!--テキストサンプル-->
  
  @section('contents')
  <div class="PointSetting">
    <form action="/admin/PointSetting/add" method="post">
    @csrf
  
    <h2>ポイント設定</h2>
  
    <div class="PointSetting-input">
      <input type="number"  name="Price" value ="{{ $data->Price }}" min="1" max="500" step="1"><p>円で</p>
      <input type="number" name="Point" value ="{{$data->Point}}" min="1" max="500" step="1"><p>ポイント</p>
    </div>  

    <div class="PointSetting-button">
      <input type="submit" name="確定">
    </div>
  </div>
    <!--/テキストサンプル-->
  @endsection