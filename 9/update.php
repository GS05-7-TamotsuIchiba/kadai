<?php
include("functions.php");
//1.POSTでParamを取得
$id     = $_POST["id"];
$JapicCTI_No  = $_POST["JapicCTI_No"];
$shikenNoMeisho  = $_POST["shikenNoMeisho"];
$shikenNoMokuteki = $_POST["shikenNoMokuteki"];

//2.DB接続など
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_ct_1 SET JapicCTI_No=:JapicCTI_No, shikenNoMeisho=:shikenNoMeisho, shikenNoMokuteki=:shikenNoMokuteki WHERE id=:id");
$stmt->bindValue(':JapicCTI_No',  $JapicCTI_No,   PDO::PARAM_STR);
$stmt->bindValue(':shikenNoMeisho', $shikenNoMeisho,  PDO::PARAM_STR);
$stmt->bindValue(':shikenNoMokuteki',$shikenNoMokuteki, PDO::PARAM_STR);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  header("Location: select.php");
  exit;
}

?>
