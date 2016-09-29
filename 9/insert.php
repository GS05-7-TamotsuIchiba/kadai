<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["JapicCTI_No"]) || $_POST["JapicCTI_No"]=="" ||
  !isset($_POST["shikenNoMeisho"]) || $_POST["shikenNoMeisho"]=="" ||
  !isset($_POST["shikenNoMokuteki"]) || $_POST["shikenNoMokuteki"]==""
){
  exit('OhParamError');
}

//1. POSTデータ取得
$JapicCTI_No   = $_POST["JapicCTI_No"];
$shikenNoMeisho  = $_POST["shikenNoMeisho"];
$shikenNoMokuteki = $_POST["shikenNoMokuteki"];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_ct_1(id, JapicCTI_No, shikenNoMeisho, shikenNoMokuteki)VALUES(NULL, :a1, :a2, :a3)");
$stmt->bindValue(':a1', $JapicCTI_No,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $shikenNoMeisho,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $shikenNoMokuteki, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}
?>




INSERT INTO gs_ct_1(id, JapicCTI_No, shikenNoMeisho, shikenNoMokuteki)VALUES(NULL, ’12', 'herceptin', '効くか？');