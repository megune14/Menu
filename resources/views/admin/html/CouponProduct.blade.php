@extends('admin/html.PCbase')




  @section('title','クーポン追加')

  <!--テキストサンプル-->
  @section('contents')
  <?php
use App\Models\CommodityTable;
use App\Http\Controllers\CommodityTableController;
//
use Illuminate\Support\Facades\Auth;
$Coupon = CommodityTable::where('StoreID',Auth::id())->get();

?>

    <form action="/admin/CouponProduct/add"  method='post'  >
    @csrf
      <div class = CouponProduct>

        <div class="coupon-product">

          <p>商品名：</p>
            <select name="CommodityID">



        <?php foreach ($Coupon as $Coupon) {  ?>
          <option  value="{{$Coupon->CommodityID }}">{{$Coupon->CommodityName }}</option>
          <?php  } ?>
        </select>


      </div>




      <div>
          <p>必要ポイント：</p>
          <input type="number" name="Point" value="100" min="10" max="10000" step="10" required >
        </div>

        <div>
          <p>クーポン使用開始日：</p>
          <input type="date" name="FirstDay" value="" required>
        </div>

        <div>
          <p>クーポン使用終了日：</p>
          <input type="date" name="LastDay" value="" required>
        </div>


        <div class="submit-CouponProduct">
          <input type="submit"   value="確定"><!--送信ボタン-->
        </div>

      </div>

    </form>




<!--


↓これ気にせんといて












<form method="post" action="#">

開始
<input type="date" name="start" value="" pattern="^[0-9]{8}$"><span class="err"></span><br>

終了
<input type="date" name="stop" value="" pattern="^[0-9]{8}$"><span class="err"></span>


<input type="submit" value="確認">
<input type="submit" value="戻る">
</form>







<script>



var err_text={

  "stop":{

    "x2":"エラーだよはっはははははっは",
  }
};
function getTodayString(){
  var str="";
  var d=new Date();
  str+=d.getFullYear().toString();
  str+=(101+d.getMonth()).toString().substr(-2);
  str+=(100+d.getDate()).toString().substr(-2);
  return str;
}
document.addEventListener('click',function(e){
  var t=e.target;
  if(t.nodeName=="INPUT" && t.type=="submit" && t.value=="確認"){
    var f=t.form;
    var n=f.querySelectorAll('[required],[pattern]');
    var today=getTodayString();
    for(var i=0;i<n.length;i++){
      var flg=false;
      var err_msg="";
      var l=Array.prototype.filter.call(f.querySelectorAll('[name="start"],[name="stop"]'),function(i){return i.value!="";}).length;
      if(
        l==2 &&
        n[i].name=="stop" &&
        f.elements["start"].value>f.elements["stop"].value
        ){
        err_msg=err_text[n[i].name]["x2"];
        flg=true;
      }

      if(flg) e.preventDefault();
      n[i].parentNode.querySelector('.err').innerHTML=err_msg;
    }
  }
});





</script>







-->
















@endsection





