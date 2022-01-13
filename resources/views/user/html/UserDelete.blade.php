@extends('html/user.MOBILEbase')


  @section('title','データ削除')


    <!--テキストサンプル-->
    @section('contents')
  <form action='/UserDelete' method="POST" >
    {{ csrf_field() }}
    <div class = "AccountDelete">
      <h2>アカウント情報を</br>
      削除しますか？</h2>
      <div class="confirm-Delete">
        <button  type="button"><a href="#">戻る</a></button>
        <label class="open" for="pop-up">削除</label>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
          <div class="window-Delete">
            <label class="close" for="pop-up">×</label>
            <p class="text">削除されたアカウントは復元できません。<br>
            <font color="red">本当に削除しますか？</font></p>            
            <button type="button" onclick="history.back()">戻る</button>
            <input type="submit" value="確定">
          </div>
        </div> 
      </div>
    </div>
  </form>
    <!--/テキストサンプル-->
    @endsection
