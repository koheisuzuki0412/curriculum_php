<?php
  $member = ["Jack" , "Taylor" , "Brown"];
  echo count($member);
  ?>
  
<br>

<?php
  $people = ["James" , "Katy" , "Alex"];
  sort($people);
  var_dump($people);
  ?>

<br>

<?php
  $member = ["Jack" , "Taylor" , "Brown"];
  if (in_array("Jack" , $member)) {
    echo "Jack here";
  } else {
    echo "Where is the Jack";
  }
  ?>

<br>

<?php
  $member = ["Jack" , "Taylor" , "Brown"];
  $plus = implode("@" , $member);
  // $plus =implode($member);
  var_dump($plus);
?>

<br>

<?php
  // $member = ["Jack" , "Taylor" , "Brown"];
  // $plus = implode("@" , $member);
  // var_dump($plus);

  // $re_member = explode("@" , $plus);
  // var_dump($re_member);
  $str = "1,2,3,4,5";
  $array = explode("," , $str);
  var_dump($array);
?>

<br>

<?php
  // echo time();
  var_dump(time());
?>

<br>

<?php
  echo date("Y-m-d H:i:s" , time());
?>

<br>

<?php
  echo date("Y年m月d日　H時i分s秒");
?>

<!-- 
Y	年（例：2017）
m	月（ただし2桁に合わせて表示）
d	日（ただし2桁に合わせて表示）
H	時（ただし2桁に合わせて表示）
i	分（ただし2桁に合わせて表示）
s	秒（ただし2桁に合わせて表示） 
-->

<br>

<?php
  echo strtotime("2026/9/20");
?>