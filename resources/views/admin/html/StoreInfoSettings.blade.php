@extends('admin/html.PCbase')




  @section('title','店舗情報設定')

    <!--テキストサンプル-->
    @section('contents')
      <div class="StoreInfoSetting">
        <h2>店舗情報</h2>
        <form action="/admin/StoreInfoSettings/edit" method="post"> 
          <!--<div class="col-sm-10">-->
          @csrf
            
          @foreach ($data as $tdata)
            <p>店舗名</br>
            <input type="text" name="StoreName" value ="{{ $tdata->StoreName}}"></p>
            <p>住所</br>
            <input type="text" name="Adress" value ="{{ $tdata->Adress}}"></p>
            <p>電話番号</br>
            <input type="tel" name="TelephoneNumber" value ="{{ $tdata->TelephoneNumber}}"></p>
          @endforeach

          <input type = "hidden" name = "id" value = "{{$tdata->id}}">
          <div class="submit-InfoSetting">
            <button type="button" onclick=history.back()>戻る</button>
            <input type="submit" value="確定">
          </div>

        </form>

      </div>

    <!--/テキストサンプル--> <!--div StoreInfoSettingの位置移動しました。-->
  @endsection