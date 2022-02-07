@extends('user/html.MOBILEbase')


  
  @section('title','お問い合わせ')
    <!--テキストサンプル-->
    @section('contents')
    <form action="Inquiry/add" method="post"> 
    @csrf
      <div class="Inquiry">お問い合わせ 
        <div class="inquiryform">
          <p>お名前<br>
            <input type="text" name="name" maxlength="500" size="30">
          </p>
          <p>電話番号
            <input type="tel" name="tell" maxlength="500" size="30">
          </p>
          <p>メールアドレス
            <input type="email" name="email" maxlength="500" size="30">
          </p>
          <p>お問い合わせ内容
            <input type="text" name="inquiry">
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