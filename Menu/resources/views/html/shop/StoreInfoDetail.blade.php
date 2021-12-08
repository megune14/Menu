@extends('html/shop.PCbase')




  @section('title','店舗情報詳細画面')

  <!--テキストサンプル-->
  @section('contents')
        <form action="" method="">
        <h2 class="">店舗情報</h2>
        <p>店舗情報を削除します</br>
        本当によろしいでしょうか?</p>
        <button type="button" onclick="history.back()">戻る</button>
        <input type="submit" value="確定">
      </form>
    <!--/テキストサンプル-->
    <!--/テキストサンプル-->
  @endsection