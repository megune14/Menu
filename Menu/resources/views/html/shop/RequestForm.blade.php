@extends('html/shop.PCbase')


  
  @section('title','申請フォーム画面')
    <!--テキストサンプル-->
    @section('contents')

<<<<<<< HEAD
    <form action="RequestComplete.blade.php" method="post"> 
      <h2 class="Request">申請フォーム</h2>
      <p>代表者</br>
=======
      <form action="RequestComplete.blade.php" method="post"> 
        <h2 class="Request">申請フォーム</h2>
        <p>代表者</br>
>>>>>>> 41e182fcf79638e61bd9f2eb54c21e61cad30f26
        <input type="text" name="leader" size="30">
        <p>店舗名</br>
        <input type="text" name="name" size="30">
<<<<<<< HEAD
      </p>
      <p>住所</br>
        <input type="text" name="address" size="30">
      </p>
      <p>メールアドレス</br>
        <input type="email" name="email" size="30">
      </p>
      <p>電話番号</br>
        <input type="tel" name="tel" maxlength="12" size="30">
      </p>
      <button type="button" onclick=history.back()>戻る</button>
      <input type="submit">
    </form>
    
    <!--/テキストサンプル-->
    <?php
      try {
        //DB名、ユーザー名、パスワード
        $dsn = 'mysql:dbname=menu;host=localhost;charset=utf8';
        $user = 'yamada';
        $password = 'o-hara';

        $PDO = new PDO($dsn, $user, $password); //MySQLのデータベースに接続
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

        $leader = $_POST['leader'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];



        $sql = "INSERT INTO contents (leader, name, address, email, tel) VALUES (:leader, :name, :address, :email, :tel)"; // INSERT文を変数に格納。:nameや:プレースホルダという、値を入れるための単なる空箱
        $stmt = $PDO->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
        $params = array(':leader' => $leader, ':name' => $name, ':address' => $address, ':email' => $email, ':tel' => $tel); // 挿入する値を配列に格納する
        $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行


        echo "<p>leader: ".$leader."</p>";
        echo "<p>name: ".$name."</p>";
        echo "<p>address: ".$address."</p>";
        echo "<p>email: ".$email."</p>";
        echo "<p>tel: ".$tel."</p>";
        echo '<p>で登録しました。</p>'; // 登録完了のメッセージ
      } catch (PDOException $e) {
      exit('データベースに接続できませんでした。' . $e->getMessage());
      }
    ?>
=======
        </p>
        <p>住所</br>
        <input type="text" name="address" size="30">
        </p>
        <p>メールアドレス</br>
        <input type="email" name="email" size="30">
        </p>
        <p>電話番号</br>
        <input type="tel" name="tel" maxlength="12" size="30">
        </p>
        <button type="button" onclick=history.back()>戻る</button>
        <input type="submit">
      </form>
    
    <!--/テキストサンプル-->
>>>>>>> 41e182fcf79638e61bd9f2eb54c21e61cad30f26
</body>
</html>
  @endsection
