@extends('admin/html.PCbase')




  @section('title','店舗情報詳細画面')

  <!--テキストサンプル-->
  @section('contents')

  <form action="" method="">
        <h2 class="">店舗情報</h2>
  <div class="col-sm-10">

  	
      <p class="form-control-plaintext">店舗名：{{ $data->name}}<br>
      住所：{{ $data->address}}<br>
      電話番号：{{ $data->tell}}<br>
      メールアドレス：{{ $data->email}}</p>


        
        
<button type="button" onclick="location.href='/admin/StoreInfoSettings'">変更</button>
<button type="button" onclick="location.href='/admin/StoreInfoDelete'">削除</button>

        
      </form>
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection