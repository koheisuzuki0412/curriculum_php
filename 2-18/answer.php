<link rel = "stylesheet" href = "style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
// ポート番号
$num_answer = $_POST["num_answer"];
$num = $_POST["p_num"];

$lang_answer = $_POST["lang_answer"];
$lang = $_POST["lang"];

$sql_answer = $_POST["sql_answer"];
$sql = $_POST["sql"];
?>

<!-- //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する -->
<?php
if ($num_answer == $num) {
  $result = "正解!!!";
} else {
  $result = "不正解...";
}
?>
<?php
if ($lang_answer == "PHP") {
  $result2 = "正解!!!";
} else {
  $result2 = "不正解...";
}
?>
<?php
if ($sql_answer == "join") {
  $result3 = "正解!!!";
} else {
  $result3 = "不正解...";
}
?>

<p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result; ?>
<?php echo $num; ?>
<?php echo $num_answer; ?>
<?php echo $_POST["p_num"]; ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result2; ?>
<?php echo $lang; ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result3; ?>
