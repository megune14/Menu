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

          <p>商品名：
            <select name="CommodityID">
            
            
        
        <?php foreach ($Coupon as $Coupon) {  ?>
          <option  value="{{$Coupon->CommodityID }}">{{$Coupon->CommodityName }}</option>
          <?php  } ?>
        </select>
        </p>

      </div>

      <p>必要ポイント：<input type="number" name="Point" value="100" min="10" max="10000" step="10"></p>

      <p>クーポン使用開始日：
      <input type="date" name="FirstDay" value="">
      </p>

      <p>クーポン使用終了日：
      <input type="date" name="LastDay" value="">
      </p>
  
  

        </div>


        <div class="submit-CouponProduct">
          <input type="submit"   value="確定"><!--送信ボタン-->
        </div>
        
      </div>  

    </form>

   





↓これ気にせんといて



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



<input type="date" name="FirstDay" value="">















<head>
  <meta charset="UTF-8">
  <title>JavaScriptで2つの日付を比較する方法をサンプルコード付き解説！</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <div id="result1"></div><!-- #result1 -->
  <script src="index.js"></script>
</body>



<script>
'use strict';

let str1 = "2021-03-30 11:00:00";
let str2 = "2021-03-31 12:00:00";

let date1 = new Date(str1);
let date2 = new Date(str2);

let year1 = date1.getFullYear();
let month1 = date1.getMonth() + 1;
let day1 = date1.getDate();

let year2 = date2.getFullYear();
let month2 = date2.getMonth() + 1;
let day2 = date2.getDate();

let flag = true;
if(year1 == year2){
  if(month1 == month2){
    if(date1 < date2){
      flag = false;
    }
  }else{
    if(month1 < month2){
      flag = false;
    }
  }
}else{
  if(year1 < year2){
    flag = false;
  }
}

if(flag){
  document.getElementById('result1').innerText = str1 + "の方が新しい日付です。";
}else{
  document.getElementById('result1').innerText = str2 + "の方が新しい日付です。";
}




</script>









@endsection





