<!-- <?php $massage = "Hello World"; $x = 5; $y = 8; ?>
<?php echo $massage; echo $x; echo "<br>"; echo $y; ?> -->

<!-- <?php $massage = "Good bye"; echo $massage; ?> -->

<!-- <?php 
$a = "thanx";
var_dump($a);
?> -->

<?php
define("ADMIN_EMAIL", "********@gmail.com");
define("LIST_COUNT","15");
echo ADMIN_EMAIL;
echo "<br>";
echo LIST_COUNT;
?>
<!-- ------------------------------------------------- -->
<?php echo "<br>"; ?>
<?php echo "<br>"; ?>
<!-- ------------------------------------------------- -->

<?php $hello = "Hello"; $world = "World"; ?>
<?php echo $hello . $world; ?>

<!-- ------------------------------------------------- -->
<?php echo "<br>"; ?>
<?php echo "<br>"; ?>
<!-- ------------------------------------------------- -->

<!-- <?php
$num = 0;
for($num=0; $num<100; $num++) {
  echo $num;
  echo "<br>";
}
?> -->

<?php 
$countries = ["america" => "あめりか", "china" => "ちゅうごく", "spain" => "すぺいん"];
echo $countries["america"];
// echo $countries[0];
?>
<?php
$countries["UK"] ="いぎりす";
echo $countries["UK"];
?>