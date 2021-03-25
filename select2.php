<link rel="stylesheet" href="css/style.css">
<?php
// 名簿の定義
$meibo = array([1001, "茜"],[1002, "楓"],[1003, "桜"]);

//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=rollbook;charset=utf8;host=localhost','root','root');//mampは'root','root'となる
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM r_table ORDER BY date ASC, studentId ASC;");
// 
$status = $stmt->execute();

//３．データ表示
$daily="";
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
} else {
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例

  $j = 0;
  $k = 0;
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
  //学籍番号との照合
    for($i = 0; $i <= 2; $i ++){
      if($result["studentId"] == $meibo[$i][0]){
        $name = $meibo[$i][1];
      } else {};
    };

  //遅刻・欠席の判定と出席率の計算の準備

    if ($result["time"]>"08:50:00"){
      $hantei="欠席";
    } else if ($result["time"]>"08:30:00"){
      $hantei="遅刻";
    } else {
      $hantei="出席";
    }

  //本日の出欠
    if($result[date] == date("Y-m-d")){
    $daily .= "<p>";
    $daily .= $result[date].":".$result[studentId].":".$name.":".$hantei.":".$result[comment];
    $daily .= "</p>";

    }
  //出席簿の表表示

    if ($j % 3 == 0){
    if($hantei == "欠席"){
      $view .= "<tr><td>";
      $view .= $result["date"];
      $view .= "</td>";
      $view .= "<td bgcolor = 'red'>";
      $view .= $hantei;
      $view .= "</td>";
    } else if ($hantei == "遅刻"){
      $view .= "<tr><td>";
      $view .= $result["date"];
      $view .= "</td>";
      $view .= "<td bgcolor = 'yellow'>";
      $view .= $hantei;
      $view .= "</td>";
    } else {
      $view .= "<tr><td>";
      $view .= $result["date"];
      $view .= "</td>";
      $view .= "<td>";
      $view .= $hantei;
      $view .= "</td>";
    };
  } else if ($j % 3 == 1){
    if($hantei == "欠席"){
      $view .= "<td bgcolor = 'red'>";
      $view .= $hantei;
      $view .= "</td>";
    } else if ($hantei == "遅刻"){
      $view .= "<td bgcolor = 'yellow'>";
      $view .= $hantei;
      $view .= "</td>";
    } else {
      $view .= "<td>";
      $view .= $hantei;
      $view .= "</td>";
    };
  } else if ($j % 3 == 2){
    if($hantei == "欠席"){
      $view .= "<td bgcolor = 'red'>";
      $view .= $hantei;
      $view .= "</td></tr>";
    } else if ($hantei == "遅刻"){
      $view .= "<td bgcolor = 'yellow'>";
      $view .= $hantei;
      $view .= "</td></tr>";
    } else {
      $view .= "<td>";
      $view .= $hantei;
      $view .= "</td></tr>";
    };
  };
  $j ++ ;
  
  };

};



?>

<!-- データ処理 -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>出席簿表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">出席登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div class="layout">
  <div class="teacherInterface">
  <p>本日の出欠（日付:出席番号:名前:出欠:伝言）</p>
    <div><?=$daily?></div>
  </div>

  <table border = "1">
  <caption>3月の出席簿</caption>
  <tr>
  <td></td>

  <?php foreach($meibo as $key):?>
      <td><?php echo $key[1]; ?></td>
      <?php endforeach; ?>
  </tr>
  <tr><td></td></tr>
  <?=$view?>
  </table>

</div>
<!-- Main[End] -->

</body>
</html>
