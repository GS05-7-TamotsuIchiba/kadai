<?php
include("functions.php");
//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など
$pdo = db_con();

//3.SELECT * FROM gs_an_table WHERE id=***; を取得（bindValueを使用！）
$stmt = $pdo->prepare("SELECT * FROM gs_ct_1 WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  $row = $stmt->fetch();
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ詳細</title>



  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>


    <div class="jumbotron">

                  <ul class="nav nav-tabs">
                    <li><a href="#">ホーム</a></li>
                    <li ><a href="#">検索結果</a></li>
                    <li class="active"><a href="#">試験詳細</a></li>
                  </ul>


    </div>



</head>
<body>

<!-- Head[Start] -->
<header>
<!--
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
-->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>臨床試験リスト</legend>
      <label>JapicCTI_No：<input type="text" name="JapicCTI_No" value="<?=$row["JapicCTI_No"]?>"></label><br>
     <label>試験名称：<input type="text" name="shikenNoMeisho" value="<?=$row["shikenNoMeisho"]?>"></label><br>
     <label>試験目的：<textArea name="shikenNoMokuteki" rows="4" cols="80"><?=$row["shikenNoMokuteki"]?></textArea></label><br>
     <input type="hidden" name="id" value="<?=$id?>">
     <input type="submit" value="確定">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
