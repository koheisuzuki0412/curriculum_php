<link rel = "stylesheet" href = "style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$num = array();
$num = array("80" , "22" , "20" , "21");
$lang = array("PHP" , "Python" , "Java" , "HTML");
$sql = array("join" , "select" , "insert", "uplode");
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$num_answer = $num[0];
$lang_answer = $lang[0];
$sql_answer = $sql[0];
shuffle($num);
shuffle($lang);
shuffle($sql);
?>

<p>お疲れ様です<?php echo $name; ?>さん</p>

  <!--フォームの作成 通信はPOST通信で-->
  <form action = "answer.php" method = "POST">

  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <h2>①ネットワークのポート番号は何番？</h2>
  <?php
  foreach ($num as $value) { ?>
    <label><input type="radio" name="p_num"><?php echo $value;?></label>
  <?php } ?>
  <input type="hidden" name="num_answer" value="<?php echo $num_answer ?>">
  <br>
  
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <h2>②Webページを作成するための言語は？</h2>
  <?php
  foreach ($lang as $value) { ?>
    <label><input type = "radio" name = "lang"><?php echo $value;?></label>
  <?php } ?>
  <input type="hidden" name="lang_answer" value="<?php echo $lang_answer ?>">
  <br>

  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <?php 
  foreach ($sql as $value) { ?>
    <label><input type = "radio" name = "sql"><?php echo $value;?></label>
  <?php } ?>
  <input type="hidden" name="sql_answer" value="<?php echo $sql_answer ?>">
  <br>

  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <input type = "submit" value = "回答する">

</form>