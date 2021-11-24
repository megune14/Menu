@extends('html.MOBILEbase')

@section('title','顧客情報')

@section('contents')
  <h1>顧客情報</h1>
    
  <?php
    $info = \DB::table('UserInfodb')->get();    
   foreach ($info as $info) {
   }
  
    echo '<p>名前：' . $info->name   ."</p>\n";
    echo '<p>メールアドレス：' . $info->email   ."</p>\n";
    SELECT date_format(now(), '%Y/%m/%d');
    echo '<p>生年月日：' . $info->birthday  ."</p>\n";
    echo '<p>現在のポイント：' . $info->point   .'pt'."</p>\n";
    ?>
  
@endsection