@extends('user/html.MOBILEbase')


  @section('title','データ削除')


    <!--テキストサンプル-->
    @section('contents')
    <div class = "AccountDelete">
        <h2>アカウントを削除します。</h2>
        <ul>
          <li>
            名前：<br>
          </li>
          <li>
            メールアドレス：<br>
          </li>
          <li>
            生年月日： 年 月 日<br>
          </li>
          <li>
            現在のポイント： pt
          </li>
        </ul>

        <div class="confirm">
          <button  type="button"><a href="#">戻る</a></button>
          <label class="open" for="pop-up">削除</label>
          <input type="checkbox" id="pop-up">
          <div class="overlay">
            <div class="window">
              <label class="close" for="pop-up">×</label>
              <p class="text">削除されたアカウントは復元できません。<br>
              <font color="red">本当に削除しますか？</font></p>            
              <button type="button" onclick="history.back()">戻る</button>
              <input type="submit" value="決定">
            </div>
          
          </div> 
        </div>



      </div>
    <!--/テキストサンプル-->
    @endsection
