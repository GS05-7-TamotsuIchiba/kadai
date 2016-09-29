<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <div class="jumbotron">
        <h1>臨床試験検索サイト</h1>
  <div>


  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">


   <fieldset>

     <label><p>試験番号：<input type="text" name="JapicCTI_No"></p></label><br>
     <label><p>試験名称：<input type="text" name="shikenNoMeisho"></p></label><br>
     <label><p>試験目的：</p><textArea name="shikenNoMokuteki" rows="4" cols="40"></textArea></label><br>
     <input type="submit" class="btn btn-success btn-lg" value="入力">
  

</form>
<!-- Main[End] -->


</body>
</html>
