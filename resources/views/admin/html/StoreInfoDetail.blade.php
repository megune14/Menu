@extends('admin/html.PCbase')




  @section('title','店舗情報詳細画面')

    <!--テキストサンプル-->
    @section('contents')
      <div class="StoreInfoDetail">
            <form action="" method="">
                  <h2 class="">店舗情報</h2>

                  <div class="col-sm-10">
                        <div class="form-control-plaintext">
                              <p>店舗名：{{ $data->shopname}}</p>
                              <p>住所：{{ $data->address}}</p>
                              <p>電話番号：{{ $data->tell}}</p>
                              <p>メールアドレス：{{ $data->email}}</p>
                        </div>
                  </div>

                  <div class="submit-InfoDetail">
                        <button type="button" onclick="location.href='/admin/StoreInfoSettings'">変更</button>
                        <a href="{{ route('StoreInfoDelete', ['StoreInfoDelete'=>'$data']) }}">
                        <input type="submit" onclick="location.href='/admin/StoreInfoDelete'" value="削除"></input></a>
                  </div>
                        
            </form>

      </div>
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection