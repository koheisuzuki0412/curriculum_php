<?php

// ドライバ呼び出しを使用して MySQL データベースに接続します
$dsn = 'mysql:dbname=checktest4;host=localhost';
$user = 'root';
$password = 'root';

// try {
//     $dbh = new PDO($dsn, $user, $password);
//     echo "接続成功\n";
// } catch (PDOException $e) {
//     echo "接続失敗: " . $e->getMessage() . "\n";
//     exit();
// }
