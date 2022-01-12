@extends('html/shop.PCbase')


  @section('title','申請フォーム画面')
    <!--テキストサンプル-->
    @section('contents')


    <form action="RequestForm/add" method="post"> 

      <div class="request-form">
        @csrf
      
          <h2 class="Request">申請フォーム</h2>
          <p>代表者　　　　
           <input type="text" name="leader" size="30" placeholder="代表者">
          </p>
          <p>店舗名　　　　
           <input type="text" name="name" size="30" placeholder="店舗名">
          </p>
          <p>住所　　　　　
          <input type="text" name="address" size="30" placeholder="住所">
          </p>
          <p>メールアドレス
          <input type="email" name="email" size="30" placeholder="メールアドレス">
          </p>
          <p>電話番号　　　
          <input type="tel" name="tel" maxlength="12" size="30" placeholder="電話番号">
          </p>

          <div class="submit-request">
            <button type="button" onclick=history.back()>戻る</button>
            <input type="submit">
          </div>
          

      </div>
      
    </form>
    <!--/テキストサンプル-->
    

</body>
</html>

  @endsection
