@extends('admin/html.PCbase')




  @section('title','メールアドレス変更画面')

  <!--テキストサンプル-->
    @section('contents')
    <div class = "MailChange">
        <h2>メールアドレスの変更</h2>

        <form action="/admin/MailChange/edit" method="post">
        @csrf
          <p>新しいメールアドレス
            <input type="email" id="email" name="email" value ="{{ $data->email}}">
          </p>

          <input type = "hidden" name = "id" value = "{{$data->id}}">
          <div class="submit">
            <button  type="button" onclick="history.back()">戻る</button>
            <label class="open" for="pop-up" id="checkButton">確定</label>

<input type="checkbox" id="pop-up">

<div class="overlay">
  <div class="window-Change">
    <label class="close" for="pop-up">×</label>
      <script>
      function butotnClick(){
        msg.innerText = '新しいメールアドレス'+ ' \n ' + email.value ;
      }

      let checkButton = document.getElementById('checkButton');
      checkButton.addEventListener('click', butotnClick);
      </script>

      <p id="msg"></p>
      <p class="text">以上の内容に変更します。</p>
      <input type="submit" value="確定">
      
  </div>
            </div>
            
          </div>

        </form>
        
      </div>

    <!--/テキストサンプル-->
  @endsection