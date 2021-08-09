<!-- 2-9 -->
<?php
  $i = 0;
  for ($i = 0; $i < 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz!";
    } elseif ($i % 3 == 0) {
      echo "Fizz!";
    } elseif ($i % 5 == 0) {
      echo "Buzz!";
    } else
      echo $i;
      echo "<br>";
  }
?>