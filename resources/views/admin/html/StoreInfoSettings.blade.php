@extends('admin/html.PCbase')




  @section('title','店舗情報設定')

    <!--テキストサンプル-->
    @section('contents')
      <div class="StoreInfoSetting">
        <h2>店舗情報</h2>
        <form action="/admin/StoreInfoSettings/edit" method="post"> 
          <!--<div class="col-sm-10">-->
          @csrf

            <p>店舗名</br>
            <input type="text" id="shopname" name="shopname" value ="{{ $data->shopname}}"></p>
            <p>住所</br>
            <input type="text" id="address" name="address" value ="{{ $data->address}}"></p>
            <p>電話番号</br>
            <input type="tel" id="tell" name="tell" value ="{{ $data->tell}}"></p>

            <input type = "hidden" name = "id" value = "{{$data->id}}">
            <div class="submit-InfoSetting">
              <button type="button" onclick=history.back()>戻る</button>
              <label class="open" for="pop-up" id="checkButton">確定</label>

              <input type="checkbox" id="pop-up">

              <div class="overlay">
                <div class="window-Setting">
                  <label class="close" for="pop-up">×</label>
                    <script>
                    function butotnClick(){
                      msg.innerText = '店舗名:' + shopname.value + ' \n '+
                      '住所:' + address.value + ' \n '+
                      '電話番号:' + tell.value ;
                    }

                    let checkButton = document.getElementById('checkButton');
                    checkButton.addEventListener('click', butotnClick);
                    </script>

                    <p id="msg"></p>
                    <p class="text">以上の内容に変更しますか？</p>
                    <input type="submit" value="確定">
                    
                </div>
              </div>





                
            </div>
                            


          </form>
                          

      </div>

    <!--/テキストサンプル--> <!--div StoreInfoSettingの位置移動しました。-->
  @endsection