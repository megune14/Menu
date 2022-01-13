@extends('admin/html.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
  
  <h2 class="">ポイント設定</h2>
  <input type="number" value="100" min="100" max="500" step="100">円で
  <input type="number" value="10" min="10" max="500" step="10">ポイント
  

    <!--/テキストサンプル-->
  @endsection