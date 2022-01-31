@extends('admin/html.PCbase')




  @section('title','クーポン追加')

  <!--テキストサンプル-->
  @section('contents')
  <?php
use App\Models\CommodityTable;
use App\Http\Controllers\CommodityTableController;
//
   
$Coupon = CommodityTable::get();

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


/*エラーの洗い出し、pはパターン違反、rは必須項目、xはその他 */
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

























<link href="https://unpkg.com/tabulator-tables@4.4.3/dist/css/tabulator.min.css" rel="stylesheet">
<script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.4.3/dist/js/tabulator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>


<body onload="show_table()">

<div id="table"></div>

<script type="text/javascript">
// 開始日チェック
const validate_start=(cell,value)=>{
    // 開始日入力がある場合は、OK(true)
    if(value) return true;

    // 以下、開始日未入力の処理。 
    // 終了日時が未入力の場合、  OK(true)
    // 終了日時が入力済みの場合、NG(false)
    return (!cell.getData().end)?true:false;
}
// 終了日チェック
const validate_end=(cell,value)=>{
    // 終了日は入力なくても OK(true)
    if(!value) return true;

    // 開始日時がない場合、NG(false)
    return (!cell.getData().start)? false: true;
}
// 日付入力
const dateEdit = function(cell, onRendered, success, cancel, editorParams){
    var editor = document.createElement("input");
    editor.setAttribute("type","date");

    // date max, min setting
    var data = cell.getData();
    var field = cell.getField();

    // max,min 属性設定
    if(field === 'start' && data.end){
        editor.setAttribute("max",
            moment(data.end, "YYYY/MM/DD").format("YYYY-MM-DD"));
    }
    else if (field === 'end' && data.start){
        editor.setAttribute("min",
            moment(data.start, "YYYY/MM/DD").format("YYYY-MM-DD"));
    }
    editor.value = moment(cell.getValue(), "YYYY/MM/DD").format("YYYY-MM-DD");
    onRendered(function(){ editor.focus() });
    var successFunc = function() {
        let val = "";
        if(editor.value)
            val=moment(editor.value,"YYYY-MM-DD").format("YYYY/MM/DD")
        if(success(val)){ // 成功
            // 入力後処理
            console.log("date input", val);
        }
    }
    editor.addEventListener("change", successFunc);
    editor.addEventListener("blur", successFunc);
    return editor;
};
var show_table=function(){
    var tdata = [
        {start:"0000/0/0",end:"0000/0/0"},
    ];
    var columns= [
      {title:"クーポン使用開始日",field:"start", width:180,
                editor:dateEdit, validator:{type:validate_start}},

                
      {title:"クーポン使用終了日",field:"end", width:180, 
                editor:dateEdit, validator:{type:validate_end}}
    ];
    new Tabulator("#table", {
        data:tdata,
        columns: columns
    });
}


</script>














@endsection





