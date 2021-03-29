<?php

try {

    $user = "ここにユーザー名が入ります";
    $password = "ここにパスワードが入ります";

    $dbh = new PDO("mysql:host=localhost; dbname=kusuri_db; charset=utf8", "$user", "$password");

    $stmt = $dbh->prepare('DELETE FROM users WHERE id = :id');

    $stmt->execute(array(':id' => $_GET["id"]));

    echo "削除しました。";

} catch (Exception $e) {
          echo 'エラーが発生しました。:' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>削除完了</title>
  </head>
  <body>          
  <p>
      <a href="kanri".php">お薬一覧へ</a>
  </p> 
  </body>
</html>