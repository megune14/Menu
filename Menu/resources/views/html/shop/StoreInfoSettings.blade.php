@extends('html/shop.PCbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')
  <form action="" method="">
    <h2 class="">店舗情報</h2>
    <div class="col-sm-10">

  @foreach ($data as $tdata)
    <div class="StoreInfoSetting">
      <p>店舗名</br>
      <input type="text" value ="{{ $tdata->StoreName}}"></p>
      <p>住所</br>
      <input type="text" value ="{{ $tdata->Adress}}"></p>
      <p>電話番号</br>
      <input type="password" value ="{{ $tdata->TelephoneNumber}}"></p>
    </div>
  @endforeach
  <button type="button" onclick=history.back()>戻る</button>
  <input type="submit" value="確定">


    <!--/テキストサンプル-->
  @endsection