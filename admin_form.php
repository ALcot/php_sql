<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/form.css" />
    <title>お薬登録フォーム</title>
  </head>
  <body>

    <header>
    <h1><a href="kusuri.php">お薬一覧</a></h1>
    </header>

  <main>
      <div class="formArea">
        <h2>お薬登録フォーム</h2>
          <form method="post" action="admin_insert.php">
            <div class="form">
                <p><label for="">お薬の名前<br><textarea type="text" name="k_name" cols="35" required placeholder="例）ザイザル、酸化マグネシウム、等"/></textarea></label></p>
                <p><label for="">薬の種類<br>
                　　<input type="radio" name="type" value="錠剤" required />錠剤</label>
              　　　<input type="radio" name="type" value="粉末" required />粉末
              　　　<input type="radio" name="type" value="座薬" required />座薬
              　　　<input type="radio" name="type" value="その他" required />その他</p>
                    <fieldset>    
                      <p><label for="">飲む時間（朝、昼、夕、眠前等）<br/>
                          <input type="checkbox" name="category[]" value="asa"/>朝
                          <input type="checkbox" name="category[]" value="hiru"/>昼
                          <input type="checkbox" name="category[]" value="yuu"/>夕
                          <input type="checkbox" name="category[]" value="minzen"/>眠前
                          <input type="checkbox" name="category[]" value="tonpuku"/>頓服
                          <input type="checkbox" name="category[]" value="sonota"/>その他
                      </p>
                    </fieldset>

                <p><label for="">お薬の注意点<span class="required"></span><br><textarea type="text" name="hukusayou" rows="6" cols="50"　required placeholder="例）眠気が強くなる。低血圧時には飲まない。等"/></textarea></label></p>
                <p><label for="">お薬の効果<span class="required"></span><br><textarea type="text" name="kouka" rows="10" cols="50" placeholder="腸の動きを活発にする。高血圧の薬。睡眠安定。等"　></textarea></label></p>

            <input type="submit" class="form-Btn" value="送信" />

      </form>
    </main>
  </body>
</html>
