@extends('admin/html.PCbase')




  @section('title','店舗情報詳細画面')

  <!--テキストサンプル-->
  @section('contents')

  <form action="" method="">
        <h2 class="">店舗情報</h2>
  <div class="col-sm-10">

  @foreach ($data as $tdata)	
      <p class="form-control-plaintext">店舗名：{{ $tdata->StoreName}}<br>
      住所：{{ $tdata->Adress}}<br>
      電話番号：{{ $tdata->TelephoneNumber}}<br>
      メールアドレス：{{ $tdata->Email}}</p>
@endforeach

        
        
<button type="button" onclick="location.href='#'">変更</button>
<button type="button" onclick="location.href='/StoreInfoDelete'">削除</button>

        
      </form>
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection