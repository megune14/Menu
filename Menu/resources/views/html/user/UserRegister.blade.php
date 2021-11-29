@extends('html.MOBILEbase')


  
  @section('title','顧客新規登録')


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')
    <h1>会員登録<h1>
    <div class="UserRegister">
      <input type="email"placeholder="メールアドレス">
      <input type="email"placeholder="確認用メールアドレス">
      <input type="submit" value="登録">
    </div>
    <!--/テキストサンプル-->

    @endsection