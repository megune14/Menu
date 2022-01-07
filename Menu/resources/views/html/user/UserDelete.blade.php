@extends('html/user.MOBILEbase')


  @section('title','データ削除')


    <!--テキストサンプル-->
    @section('contents')
    <div class = "AccountDelete">
        <h2>アカウントを削除するとポイントやクーポン、利用者情報が削除されます。
</h2>

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
              <input type="submit" value="確定">
            </div>
          
          </div> 
        </div>



      </div>
    <!--/テキストサンプル-->
    @endsection
