<?php
    // index.php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {

      $fp = fopen($testFile , "a");
      fwrite($fp , $contents);
      fclose($fp);
      echo "finish writing!!";
    
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
?>