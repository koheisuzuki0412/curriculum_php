<form action="result.php" method="post">
  お名前：<input type="text" name="name" />
  <br>
  ご希望商品：
  <input type = "radio" name = "abc" value = "a">A賞
  <input type = "radio" name = "abc" value = "b">B賞
  <input type = "radio" name = "abc" value = "C">C賞
  <br>
  個数：
  <select name = "num">
    <?php for ($i=1;$i<=10;$i++){ ?>
    <option value ="<?php echo $i; ?>">
      <?php echo $i; ?>
    </option>
    <?php } ?>
  </select>
  <br>
  <input type="submit" value="申込" />
</form>