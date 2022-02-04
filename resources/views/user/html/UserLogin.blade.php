@extends('user/html.MOBILEbase')



  @section('title','顧客ログイン')


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')
      <div class="loginform">

        <form action="" method="post">
          <div class="loginform_btm">
            <input type="text" name="name" placeholder="メールアドレス"></p>

            <input type="password" name="textbox" placeholder="パスワード" size="30" maxlength="8">
          </div>


          <div class="loginform_text">
            <input type="checkbox" id="01" name=“checkbox01” value="1">
            <lavel for="01" class="checkbox01">ログイン状態を保持する<br></lavel>
            <a href="/UserRegister">新規登録</a><br>
            <a href="/PassReSettingUserCheck">パスワードを忘れた場合</a><br>
            <a href="/RequestForm">店舗申請</a><br>

            <button type="submit" onclick="location.href='/UserInfo'">ログイン</button>
          </div>



        </form>
      </div>




    @endsection

