<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題①-3</title>
</head>
<body>
<?php
$question["問題"] = "日本の首都は？";
$answer["回答1"] = "大阪";
$answer["回答2"] = "北海道";
$answer["回答3"] = "箱根";
$answer["回答4"] = "東京";

foreach($question as $key => $value) {
  echo $key." ".$value."<br>";
}

echo "<br>";

foreach($answer as $key => $value) {
  echo $key." ".$value."<br>";
}
?>
</body>
</html>