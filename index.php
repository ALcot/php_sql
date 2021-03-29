
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/form.css" />
    <title>お薬記録</title>
  </head>
  <body>

    <header>
    <h1>お薬記録</h1>
    </header>
    
  <main>

    <h2>ログイン</h2>
      <form method="post" action="login_act.php">

        <div class="form">
          <p><label for="">名前<br><input type="text" name="lname" /></label></p>
          <p><label for="">パスワード<br><input type="password" name="lpw" /></label></p>
        </div>
          <input type="submit" class="form-Btn" value="ログイン" /></buttom>
      </form>

      <p><a href="login_new.php">登録がまだの方はこちら</a></p>

    </main>
  </body>
</html>
