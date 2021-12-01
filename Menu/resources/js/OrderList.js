$(function() {

  $("select,#kaiinnkakaku").change(function() {
  
    var hairetu = [];
    for(var i = 0; i < $(".buy_itemu_menu").length; i++){
  
      var item_price = $(".buy_itemu_menu").eq(i).data("price");
      var item_select = $(".buy_itemu_menu").eq(i).next("select").find("option:selected").data("num");
  
      if(document.getElementById("kaiinnkakaku").checked == true){
  
        //価格別に設定したい場合
        if ( item_price > 500) {
          var item_price = item_price - 200
        } else {
          var item_price = item_price - 100
        }
        //割合で設定したい場合
  //        var item_price = item_price*.8
      }
  
      if( item_select > 0 ) {
        hairetu.push(item_price * item_select);
      } else {
        0;
      }
    }
  
    var total = 0;
    for(var j = 0; j < hairetu.length; j++){
      total += hairetu[j];
    }
  
    if(total >= 3000) {
      var postage = 0;
    } else {
      var postage = 300;
    }
  
  
    $("#item_price_total").val(total + "円");
    $("#postage_price").val(postage + "円");
    $("#total_price").val((total + postage) + "円");
  
  });
  
  
  });


  
  