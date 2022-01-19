@extends('user/html.MOBILEbase')


  
  @section('title','お問い合わせ画面')
    <!--テキストサンプル-->
    @section('contents')
    <form action="#" method="post"> 
      <div class="Inquiry">お問い合わせ 
        <div class="inquiryform">
          <p>お名前<br>
            <input type="text" maxlength="500" size="30">
          </p>
          <p>電話番号
            <input type="tel" maxlength="500" size="30">
          </p>
          <p>メールアドレス
            <input type="email" maxlength="500" size="30">
          </p>
          <p>お問い合わせ内容
            <div class="item-input">
                <textarea rows="7" cols="15"></textarea>
            </div>
          </p>
          <div class="formbutton">
            <button type="button" onclick=history.back()>閉じる</button>
            <input type="submit">
          </div>
        </div>

      </div>
    </form>
    <!--/テキストサンプル-->


  @endsection