@extends('admin/html.PCbase')




  @section('title','クーポン追加')

  <!--テキストサンプル-->
  @section('contents')
  <form action="/admin/CouponProduct/add"  method='post'  >
  @csrf
  <div class = CouponProduct>
    

  
  
  <p>商品名：
	<input type="text" name="name"></p>

  <p>必要ポイント：<input type="number" name="point" value="100" min="10" max="10000" step="10"></p>



  </div>

  <input type="submit"   value="確定"><!--送信ボタン-->

</form>
    <!--/テキストサンプル-->
  @endsection