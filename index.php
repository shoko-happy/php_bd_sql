<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>出席簿</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select2.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>出席登録</legend>
     <label>出席番号（1001、1002、1003を入力してください）　：<input type="text" name="studentId"></label><br>
     <label>先生に伝言！：<input type="text" name="comment"></label><br>
      <!-- 送信ボタン -->
     <input type="submit" value="送信">
   </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
