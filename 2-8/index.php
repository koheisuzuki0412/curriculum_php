<!-- 2-8 -->
<?php
  $fruits = ["apple" => "と言ったらりんご" , "orange" => "と言ったらみかん" , "peach" => "と言ったらもも"];
  foreach ($fruits as $key => $value) {
    echo $key;
    echo $value;
    echo "<br>";
  }
?>