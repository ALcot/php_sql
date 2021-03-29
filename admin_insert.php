<?php
// 入力チェック（受信確認処理の追加）
// セットされていない　または空の場合はエラーを返す
    if(
    !isset($_POST["k_name"]) ||$_POST["k_name"] ==""||
    !isset($_POST["type"]) ||$_POST["type"] ==""||
    !isset($_POST['category']) ||$category = implode(", ", $_POST["category"]) ==""||
    !isset($_POST["hukusayou"]) ||$_POST["hukusayou"] ==""||
    !isset($_POST["kouka"]) ||$_POST["kouka"] ==""
    ){
        exit('記入エラーです。<br/>項目をすべて記入してください。');
    }


//POSTデータの取得

$k_name = $_POST["k_name"];
$type = $_POST["type"];
$category = $_POST["category"];
$hukusayou = $_POST["hukusayou"];
$kouka = $_POST["kouka"];


// DBに接続する

    try {
        $pdo = new PDO('mysql:dbname=kusuri_db; charset=utf8; host=localhost','root','');
    }catch(PDOException $e){
        exit('DbConnectError:'.$e->getMessage());
    }


//データ登録のSQL作成　
    $sql="INSERT INTO kusuri_table(id, k_name, type, category, hukusayou, kouka)
        VALUES( NULL,:k_name,:type,:category,:hukusayou,:kouka)"; 
    
    $stmt = $pdo->prepare($sql);

    // bindValue関連付け
    $stmt->bindValue(':k_name', $k_name, PDO::PARAM_STR);
    $stmt->bindValue(':type',$type, PDO::PARAM_STR);
    $stmt->bindValue(':category',$category, PDO::PARAM_STR);
    $stmt->bindValue(':hukusayou',$hukusayou, PDO::PARAM_STR);
    $stmt->bindValue(':kouka',$kouka, PDO::PARAM_STR);


    // SQLの実行
    $status = $stmt->execute();


// データ登録処理後

    if($status==false){
        //SQL実行時にエラーがある場合
        $error=$stmt->errorInfo();
        exit("QueryError:".$error[2]);
    }else{
        //5:index.phpへリダイレクト
        header("Location: kusuri.php");
        exit;
    }
?>