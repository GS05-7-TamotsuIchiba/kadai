<?php
//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_ct_1");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.$result["id"].'">';
    $view .= h($result["shikenNoMeisho"]);
    $view .= '</a>';
    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
 
<!--
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録へ</a> 
-->

<div class="jumbotron">
<h1>臨床試験検索サイト</h1>
</div>
                  <ul class="nav nav-tabs">
                    <li><a href="#">ホーム</a></li>
                    <li class="active"><a href="#">検索結果</a></li>
                    <li><a href="#">試験詳細</a></li>
                  </ul>


     
    </div>
  </nav>

</div>

</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>

 <div  class="container">
    <table class="table   table-striped">
    <thead>
      <tr>
        <th>病名</th>
        <th>場所</th>
        <th>距離</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>乳がん</td>
        <td>東京</td>
        <td>20km</td>
      </tr>
    </tbody>
  </table>
  </div>




    <p>検索結果12件</p>

    <?=$view?>
  


  </div>
</div>
<!-- Main[End] -->

</body>
</html>
