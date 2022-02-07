@extends('user/html.MOBILEbase')

@section('title','顧客情報')

@section('contents')
<div class="UserInfo">
  <h1>顧客情報</h1>


  <div class="UserInfo-table">  
  <?php
  use App\Models\User;
  use App\Http\Controllers\UserController;
   $info = User::get();
    
   // $info = \DB::table('UserInfodb')->get();    
   foreach ($info as $info) {
   }
    
    echo '<p>苗字:' . $info->firstname   .'　';
    echo '名前:' . $info->lastname   ."</p>\n";
    echo '<p>メールアドレス</p>' . $info->email   ."\n";
    $date = $info->birthday;
    echo '<p>生年月日</p>' . date('Y年n月j日', strtotime($date)) ."\n";
    echo '<p>現在のポイント' . $info->point   .'pt'."</p>\n";
    ?>
  </div>

</div>
@endsection