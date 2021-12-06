@extends('html/shop.PCbase')




  @section('title','クーポン設定')

  <!--テキストサンプル-->
  @section('contents')

  <label class="open" for="pop-up">確定</label>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
          <div class="window">
            <label class="close" for="pop-up">×</label>
            <
            <p class="text">削除されたアカウントは復元できません。<br>
            <font color="red">本当に削除しますか？</font></p>            
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit" value="決定">
          </div>
          
        </div>

    <!--/テキストサンプル-->
  @endsection