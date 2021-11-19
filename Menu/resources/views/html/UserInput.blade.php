<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/MOBILEbase.css">
  <title>顧客情報入力</title>
</head>


<body>
  <div class="footerFixed">
    <!--header-->
    <header> 
      <div class="header">
       <li>デジタルメニュー表</li>
      </div>
 
      <div class="menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span ></span></label>
 
        <nav>
          <ul>
            <li><a href="#">メニュー表</a></li>
            <li><a href="#">マイページ</a></li>
            <li><a href="#">お問い合わせ</a></li>
            <li class="has-child"><a href="#">設定</a>
             <ul>
              <li><a href="#">メールアドレス変更</a></li>
              <li><a href="#">パスワード変更</a></li>
              <li><a href="#">アカウント削除</a></li>
             </ul>
            </li>
           <li><a href="#">ログアウト</a></li>         
          </ul>
        </nav>
 
      </div>
    </header>
    <!--/header-->


    <!--テキストサンプル-->
    <div class = "contents">
     <form action="#" method="post"> 
       <h1>顧客情報</h1>
        <p>苗字<br>
        <input type="text" name="userlastname">
        </p>
        <p>名前<br>
          <input type="text" name="username">
        </p>
        <p>生年月日<br>
          <select name="year">
            <option value="">-</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            </select>年
            
            <select name="month">
              <option value="">-</option>
              <option value="jan">1月</option>
              <option value="feb">2月</option>
              <option value="mar">3月</option>
              <option value="apr">4月</option>
              <option value="may">5月</option>
              <option value="jun">6月</option>
              <option value="jul">7月</option>
              <option value="aug">8月</option>
              <option value="sep">9月</option>
              <option value="oct">10月</option>
              <option value="nov">11月</option>
              <option value="dec">12月</option>
              </select>月
  
              <select name="day">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                </select>日
        </p>
        <p>パスワード<br>
          <input type="text" name="password">
        </p>
  
        <p>確認用パスワード<br>
          <input type="text" name="password">
        </p>
  
        
        <input type="button" value="確定" id="button3"></p>
    </div>
    
    <button type="button" onclick=history.back()>戻る</button>
    <!--/テキストサンプル-->


    <!--footer-->
    <footer>
     <div class="footer">
      <p>@ menu</p>
     </div>
    </footer>
    <!--/footer-->

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../JavaScript/MOBILEbase.js"></script>

</body>

</html>