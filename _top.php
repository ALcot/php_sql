<?php

session_start();
include("_function.php");
loginCheck();

$id = $_SESSION["id"];


// 1:DBに接続する（エラー処理の追加）
$pdo = db_connect();


//2：データ登録のSQL作成[選択]

  $stmt = $pdo->prepare("SELECT * FROM member_table WHERE id=:id");
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

  // SQLの実行
  $status = $stmt->execute();

// 3.データの表示
$view = "";
if($status==false){

  $error = $stmt->errorInfo();
exit("ErrorQuery:".$error[2]); 
} else {
  $val = $stmt->fetch();
  }





?>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お薬管理</title>
    <link rel="stylesheet" href="css/reset.css /">
    <link rel="stylesheet" href="css/common.css" />
    
  </head>
  <body>
    <header>
      <div>
        <p><a href="logout.php" class="btn_logout">ログアウト</a></p>
      </div>
    <div>
      <h1>お薬管理</h1>
      <p>あの薬なんだっけ？そんな疑問が解消される。用法容量を守って正しく服用しましょう。</p>
    </div>
    </header>
    <main>

            <div>
              <p>こんにちは！</p>
              <h2><?php echo h($_SESSION["u_name"]);?>さん</h2>
            </div>

      <div>
        <p>あなたが登録したお薬を確認できます。</p>
        <a href="kusuri.php">お薬を確認しに行く</a>
      </div>

    </main>
  </body>
</html>