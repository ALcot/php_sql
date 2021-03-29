<?php

session_start();
include("_function.php");
loginCheck();

// データの抽出

// DBに接続する
$pdo = db_connect();


//データ登録のSQL作成

    $stmt = $pdo->prepare("SELECT * FROM kusuri_table");

    // SQLの実行
    $status = $stmt->execute();


//データの表示
$view = "";
if($status==false){
    $error = $stmt->errorInfo();
exit("ErrorQuery:".$error[2]); 
} else {
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
           $view .='<div class="plantBox">';
           $view .='<h3>';
           $view .= $result["k_name"];
           $view .='</h3>';
           $view .='<p>';
           $view .= "薬の種類 :".$result["type"];
           $view .='</p>';
           $view .='<p>';
           $view .= "服用時間 :".$result["category"];
           $view .='</p>';
           $view .=  "副作用 :".$result["hukusayou"];
           $view .='</p>';
           $view .='<p>';
           $view .=  "効果 :".$result["kouka"];
           $view .='</p>';  
           $view .='</div>'; 
    }
}
?>


<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お薬一覧</title>
    <link rel="stylesheet" href="css/reset.css /">

  </head>
  <body>
    <header>
    <div>
        <p><?php echo h($_SESSION["u_name"]);?>さん<a href="logout.php" class="btn_logout">ログアウト</a></p>
      </div>
    <div>
      <h1>お薬管理</h1>
      <p>あの薬なんだっけ？そんな疑問が解消される。用法容量を守って正しく服用しましょう。</p>
    </div>
    </header>


    <main>
     <h2>お薬一覧</h2>
    <a href="admin_form.php" >新しく薬を登録する。</a>
        <form method="post" action="_search.php">
          <p>絞り込む </p>
          <div><p>

            <input type="radio" id="type1" class="radio_input" name="type" value="錠剤"><label class="radio_label" for="type1" >錠剤</label>
            <input type="radio" id="type2" class="radio_input" name="type" value="粉末"><label class="radio_label" for="type2">粉末</label>
            <input type="radio" id="type3" class="radio_input" name="type" value="座薬"><label class="radio_label" for="type3">座薬</label>
            <input type="radio" id="type4" class="radio_input" name="type" value="その他"><label class="radio_label" for="type4">その他</label>
            <input type="radio" id="type5" class="radio_input" name="type" value="%" checked><label class="radio_label" for="type5" >すべて</label><br>
            <hr>
            <input type="radio" id="category1" class="radio_input" name="category" value="朝"><label class="radio_label" for="category1" >朝</label>
            <input type="radio" id="category2" class="radio_input" name="category" value="昼"><label class="radio_label" for="category2">昼</label>
            <input type="radio" id="category3" class="radio_input" name="category" value="夕"><label class="radio_label" for="category3">夕</label>
            <input type="radio" id="category4" class="radio_input" name="category" value="眠前"><label class="radio_label" for="category4">眠前</label>
            <input type="radio" id="category5" class="radio_input" name="category" value="頓服"><label class="radio_label" for="category5">頓服</label>
            <input type="radio" id="category6" class="radio_input" name="category" value="その他"><label class="radio_label" for="category5">その他</label>
            <input type="radio" id="category7" class="radio_input" name="category" value="%" checked><label class="radio_label" for="category6">すべて</label>

            </p></div>
          <p><input type="submit" class="form-Btn" value="検索" /></p> 
        </form> 
      <hr>
     <div>
     <?php echo ($view)?>
      </div>
    </main>
  </body>
</html>