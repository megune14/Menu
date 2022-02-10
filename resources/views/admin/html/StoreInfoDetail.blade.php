@extends('admin/html.PCbase')




  @section('title','店舗情報詳細')

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
                        <div class="InfoDetail-change">
                              <button type="button" onclick="location.href='/admin/StoreInfoSettings'">変更</button>
                        </div>
                        <div class="InfoDetail-Delete">
                              <button type="button" onclick="location.href='/admin/StoreInfoDelete'">削除</button>
                        <div>
                  </div>
                        
            </form>

      </div>
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection