@extends('html.MOBILEbase')


  
  @section('title','パスワード再設定')


    <!--テキストサンプル ここがアタイの仕事-->
    @section('contents')

      <div class="PassReSetting">
      
        <form action="" method="post">
          
          <p>新規パスワード</p>
          　<input type="password" name="textbox" size="30" maxlength="8"><br>

          <p>新規パスワード(確認用)</p>
          　<input type="password" name="textbox" size="30" maxlength="8"><br>  
            
          <p><input type="submit" value="戻る">
          <input type="submit" class="ChangePass" value="変更">
  
        </form>          
      </div>

     

    
    @endsection
    
    <!--/テキストサンプル-->


