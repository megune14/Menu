@extends('html/user.MOBILEbase')




  @section('title','メール送信完了')

  <!--テキストサンプル-->
  @section('contents')

    <div class="VoucherDetail">
      
      <form action="" method="">
        <!-- ここはデータベースのやつで作って下さい。 -->
        <p>醤油ラーメン　100円　×　50個
        <p>塩ラーメン　300円　×　50個
        <p>味噌ラーメン　200円　×　50個
          
        <div class="Voucher-text">
          <p>150点
          <h2>合計金額:30,000円</h2>
        </div>
        
        <!-- ここまで -->

        <div class="submit-VoucherDetail">
        
        <input type="button" onclick="location.href='#'" value="お会計">    
        </div>
              
      </form>
      
    </div>



    <!--/テキストサンプル-->
  @endsection