@extends('admin/html.PCbase')


  @section('title','申請フォーム')
    <!--テキストサンプル-->
    @section('contents')


    <form action="/admin/RequestForm/add" method="post"> 

      <div class="request-form">
        @csrf
      
        <h2 class="Request">申請フォーム</h2>
        <div>
          <p>代表者</p>
          <input type="text" name="leader" size="30" placeholder="代表者">
        </div>

        <div>
          <p>店舗名</p>
          <input type="text" name="name" size="30" placeholder="店舗名">
        </div>

        <div>
          <p>住所</p>
          <input type="text" name="address" size="30" placeholder="住所">
        </div>

        <div>
          <p>メールアドレス</p>
          <input type="email" name="email" size="30" placeholder="メールアドレス">
        </div>

        <div>
          <p>電話番号</p>
          <input type="tel" name="tel" maxlength="12" size="30" placeholder="電話番号">
        </div>

      </div>

      <div class="submit-request">
        <input type="submit">
      </div>
      
      
    </form>
    <!--/テキストサンプル-->
    

</body>
</html>

  @endsection
