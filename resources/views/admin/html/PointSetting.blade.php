@extends('admin/html.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  
  @section('contents')
    <form action="PointSetting/add" method="post">
    @csrf
  
  <h2 class="">ポイント設定</h2>
  <input type="hidden" name="id" value="{{form->id}}">]
  
  <input type="number"  name="Price" value="100" min="100" max="500" step="100">円で
  <input type="number" name="Point" value="10" min="10" max="500" step="10">ポイント
  <input type="submit" name="確定">
  

    <!--/テキストサンプル-->
  @endsection