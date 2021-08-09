<?php $a = 5.3; echo ceil($a); ?>
<br>
<?php $b = 5.3; echo floor($b); ?>
<br>
<?php $c = 5.3; echo round($c); ?>
<br>
<?php
  echo pi();
  function circleArea($s) {
    $circle_Area = $s * $s * pi();
    echo $circle_Area;
  }
  circleArea(3);
?>
<br>
<?php echo mt_rand(1 , 10); ?>
<br>
<?php $str = "premium"; echo strlen($str); ?>
<br>
<?php $str2 = "premium"; echo strpos($str2 , u); ?>
<br>
<?php $str3 = "premium"; echo substr($str3, -4, 3); ?>
<br>
<?php $str4 = "talkabout"; echo str_replace("t" , "T" , $str4); ?>
<br>
<!-- <?php $str5 = "さんくす"; echo strlen($str5); ?> => 12 -->
<?php $str5 = "さんくす"; echo mb_strlen($str5); ?>
<br>
<?php $name = "James";
      $number = 30;
      printf("%sは%d歳やで" , $name , $number);
?>





