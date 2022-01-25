@extends('admin/html.PCbase')


  @section('title','新規商品追加')

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script>

      $(function(){
        // ドラッグしたままエリアに乗った＆外れたとき
        $(document).on('dragover', '#file_drag_drop_area, #file_drag_drop_area_stl,#img1', function (event) {
            event.preventDefault();
            $(this).css("background-image", "url(../../images/ドロップ2.png)");
        });

        $(document).on('dragleave', '#file_drag_drop_area, #file_drag_drop_area_stl,#img1', function (event) {
            event.preventDefault();
            $(this).css("background-image", "url(../../images/ドロップ1.png)");
        });

        // ドラッグした時
        $(document).on('drop', '#file_drag_drop_area,#img1', function (event) {
          let org_e = event;
          if (event.originalEvent) {
              org_e = event.originalEvent;
          }

          org_e.preventDefault();
          file_input.files = org_e.dataTransfer.files;
          $(this).css("background-image", "url(../../images/ドロップ1.png)");
          var file = file_input.files[0];
          var reader = new FileReader();
  
          //画像でない場合は処理終了
          if(file.type.indexOf("image") < 0){
            alert("画像ファイルを指定してください。");
            return false;
          }
  
          //アップロードした画像を設定する
          reader.onload = (function(file){
            return function(org_e){
              $("#img1").attr("src", org_e.target.result);
              $("#img1").attr("title", file.name);
            };
          })(file);

          reader.readAsDataURL(file);
  
        });
        $('#file_input').change(function(e){
    //ファイルオブジェクトを取得する
    var file = e.target.files[0];
    var reader = new FileReader();
 
    //画像でない場合は処理終了
    if(file.type.indexOf("image") < 0){
      alert("画像ファイルを指定してください。");
      return false;
    }
 
    //アップロードした画像を設定する
    reader.onload = (function(file){
      return function(e){
        $("#img1").attr("src", e.target.result);
        $("#img1").attr("title", file.name);
      };
    })(file);
    reader.readAsDataURL(file);
 
  });
      });
      
    </script>


    <!--テキストサンプル-->
    @section('contents')
      <form action="/admin/NewProduct/add"  method='post' enctype="multipart/form-data" id="file_upload_form">

        @csrf

        <?php
        use App\Models\CategoryTable;
        $CategoryTable = CategoryTable::get();
        ?>

        <div class="NewProduct">


        
            
          <div id="file_drag_drop_area" class="">
            
            <img id="img1"></img>

          </div>
          <input type="file" id="file_input" name="img">

          <div class="d-flex justify-content-center mt-2"></div>

          <div class="Product-form">
            <p>商品名</p>
            <input type="text" name="CommodityName">

            <div class="Product-number">
              <p>値段</p>
              <input type="number" name="Price" value="100" min="10" max="10000" step="10">
            </div>
            
            <div>
              <p>商品説明</p>
              <input type="text" name="CommodityDetail">
            </div>

            <div>  
              <p>カテゴリー</p>
              <input type="text" name="Category" list="kenpo" placeholder="" autocomplete="off">

              <datalist id="kenpo">
                <?php foreach ($CategoryTable as $CategoryTable) {  ?>
                <option  value="{{$CategoryTable->Category }}">{{$CategoryTable->Category }}</option>
                <?php  } ?>
              </datalist>
            
            </div>
            
            <div>
              <p>アレルギー</p>
              <input type="text" name="Allergy">
            </div>

            <div class="Product-number">
              <p>カロリー</p>
              <input type="number" name="Calory" value="100" min="1" max="10000" step="1">
            </div>

          </div>
            
          <div class="menudetail-Product">
            <button type="button" onclick=history.back()><a href="#">戻る</a></button>
            <label class="open" for="pop-up">追加</label>
            <input type="checkbox" id="pop-up">

            <div class="overlay">
              <div class="window-Product">
                <label class="close" for="pop-up">×</label>
                <p class="text">この商品を<br>追加しますか?</p>            
                <button type="button" onclick="history.back()">戻る</button>
                <input type="submit" value="確定">
              </div>
            </div>
          </div>

        </div>

      </form>

      <!--/テキストサンプル-->
@endsection