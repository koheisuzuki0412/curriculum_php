<?php
define("GOAL" , 40);
$total = 0;
for ($i = 1; $i <= GOAL; $i++) {
  $n = rand(1 , 6);
  $total += $n;
  echo "{$i}回目={$n}\n<br>";
  if ($total >= GOAL) {
    echo "合計{$i}回でゴールしました\n<br>";
  break;
  }
}

echo "<br>";

date_default_timezone_set('Asia/Tokyo');
$time = intval(date("H"));
echo "今は{$time}時台です<br>";
if(5 <= $time && $time <= 11) {
  echo "おはようございます";
} elseif (12 <= $time && $time <= 18) {
  echo "こんにちは";
} else {
  echo "こんばんは";
}
?>