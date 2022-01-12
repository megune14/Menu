@extends('user/html.MOBILEbase')

@section('title','顧客情報')

@section('contents')
  <h1>顧客情報</h1>
    
  <?php
    
    $info = \DB::table('UserInfodb')->get();    
   foreach ($info as $info) {
   }
   
    echo '<p>名前：' . $info->name   ."</p>\n";
    echo '<p>メールアドレス：' . $info->email   ."</p>\n";
    $date = $info->birthday;
    echo '<p>生年月日：' . date('Y年n月j日', strtotime($date)) ."</p>\n";
    echo '<p>現在のポイント：' . $info->point   .'pt'."</p>\n";
    ?>
  
@endsection