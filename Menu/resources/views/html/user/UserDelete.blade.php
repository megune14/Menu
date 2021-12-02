@extends('html/user.MOBILEbase')


  @section('title','データ削除')


    <!--テキストサンプル-->
    @section('contents')
      <div class = "AccountDelete">アカウントを削除します。</div>
      <p>名前：<br>
        メールアドレス：<br>
        生年月日： 年 月 日<br>
        現在のポイント： pt
      </p>
      <label class="open" for="pop-up">削除</label>
      <input type="checkbox" id="pop-up">
        <div class="overlay">
          <div class="window">
            <label class="close" for="pop-up">×</label>
            <p class="text">削除されたアカウントは復元できません。<br>
            <font color="red">本当に削除しますか</font></p>
            <input type="submit" value="決定">
            <button type="button" onclick="history.back()">戻る</button>
          </div>
        </div>
    <!--/テキストサンプル-->
    @endsection
