@extends('html/shop.PCbase')




  @section('title','店舗情報設定')

    <!--テキストサンプル-->
    @section('contents')
      <div class="StoreInfoSetting">
        <form action="" method="">
          <h2 class="">店舗情報</h2>
          <!--<div class="col-sm-10">-->
            
          @foreach ($data as $tdata)
            <p>店舗名</br>
            <input type="text" value ="{{ $tdata->StoreName}}"></p>
            <p>住所</br>
            <input type="text" value ="{{ $tdata->Adress}}"></p>
            <p>電話番号</br>
            <input type="tel" value ="{{ $tdata->TelephoneNumber}}"></p>
          @endforeach

          <div class="submit-InfoSetting">
            <button type="button" onclick=history.back()>戻る</button>
            <input type="submit" value="確定">
          </div>

        </form>

      </div>

    <!--/テキストサンプル--> <!--div StoreInfoSettingの位置移動しました。-->
  @endsection