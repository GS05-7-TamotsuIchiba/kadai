<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>clinical trial search home</title>

  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-2.2.3.js"></script>
  <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>


  <!-- <script src="js/jquery-2.1.3.min.js"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style> -->
</head>
<body>

<div id = "wrapper">
<!-- Head[Start] -->
<header>
  <div class="jumbotron">
        <h1>臨床試験検索サイト</h1>
  </div>
</header>

<!--
    <ul class="nav nav-tabs">
    	<li role="presentation" class="active"><a href="#">ホーム</a></li>
    	<li role="presentation" ><a href="#">臨床試験一覧</a></li>
      <li role="presentation" ><a href="#">管理画面</a></li>
    	<li role="presentation" ><a href="#">ログイン</a></li>
    </ul>
 -->


 <!--タブコンポーネントを使ってHTMLコーディング-->
<div class="m-t-1 m-l-1 m-r-1">
  <!--タブのボタン部分-->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a href="#tab1" class="nav-link bg-primary" data-toggle="tab">臨床試験とは</a>
    </li>
    <li class="nav-item">
      <a href="#tab2" class="nav-link bg-primary" data-toggle="tab">試験入力</a>
    </li>
    <li class="nav-item">
      <a href="#tab3" class="nav-link bg-primary" data-toggle="tab">ログイン</a>
    </li>
    <li class="nav-item">
      <a href="#tab4" class="nav-link bg-primary" data-toggle="tab">タブ4</a>
    </li>
  </ul>
  <!--タブのコンテンツ部分-->
  <div class="tab-content">
    <div id="tab1" class="tab-pane active">
      <h2>1.臨床試験とは</h2>
        <p>「臨床試験」とは、ヒト（患者さんや健康な方）を対象として、薬や医療用具などの有効性や安全性などを検討するために行われる試験のことです。 薬の臨床試験には「治験」と「製造販売後臨床試験」などがありますが、いずれも薬をより安全で効果的に、そして適正に使用していただくために重要な試験です。</p>
      <h2>2.臨床試験の種類について</h2>
        <p>臨床試験には、大きく分けて「治験」と「医師・研究者主導臨床試験」があります。臨床試験というと、「治験」のイメージが強いのですが、がんの臨床試験では、医師・研究者主導臨床試験が治験よりも多く行われています。</p>
        <h3>(1)治験</h3>
          <p>「治験」とは、厚生労働省から新薬としての承認を得ることを目的とし、未承認薬・適応外薬を用いて主に製薬企業が行う臨床試験です。これまで患者さんに使われたことのない新しい薬、あるいはその病気では使われたことのない薬の有効性や安全性を調べます。厚生労働省による承認が得られると、企業が薬を販売し、認められた病気の範囲内で一般に使えるようになるのです。「治験」の多くは、薬を開発している製薬企業が医師に依頼をして実施する臨床試験のことを指しますが、医師が自ら実施する治験もあり、「医師主導治験」と呼んで企業が行う治験と区別しています。</p>
        <h3>(2)医師・研究者主導臨床試験</h3>
          <p>医師・研究者主導臨床試験は、医師や研究者が主体となって行うものです。これまで厚生労働省で承認された薬、治療法や診断法から最良の治療法や診断法を確立すること、薬のよりよい組み合わせを確立すること等を目的としています。</p>
      <h2>3.臨床試験の検索</h2>
        <p>あなたの病気に対してはどういう臨床試験があるでしょうか。検索してみましょう。</p>
        <form action = "#" method = post>
          <p>
          病名:<input type="text" name="disease" size="40">
          </p>
          <input type="submit"  value="入力">
        </form>
    </div>

    <div id="tab2" class="tab-pane">
      <form method="post" action="insert.php">
         <fieldset>
           <legend>試験概要:</legend>
           試験番号：<input type="text" name="JapicCTI_No"　class="form-control" ><br>
           試験名称：<input type="text" name="shikenNoMeisho"　class="form-control" ><br>
           試験目的：<input type="text" name="shikenNoMokuteki" class="form-control" ><br>
         </fieldset>
           <input type="submit"  value="入力">
      </form>
    </div>


    <div id="tab3" class="tab-pane">
　　　　<!-- <p>ログイン</p>　　 -->
      <a href = login.php>ログインしてください。</a>

    </div>


    <!-- <div id="tab4" class="tab-pane">
      <img src="http://jsrun.it/assets/y/e/t/o/yeto8.jpg" alt="" class="img-fluid">
    </div> -->


  </div>
</div>






<!-- Head[End] -->

<!-- Main[Start] -->

<!-- Main[End] -->

</div>

</body>
</html>
