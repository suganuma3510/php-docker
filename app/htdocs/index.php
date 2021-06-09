<?php
$dsn      = "mysql:host=db;dbname=php_sample;";
$user     = 'root';
$password = 'password';

try {
  $db = new PDO($dsn, $user, $password);
  echo '接続成功';
} catch (PDOException $e) {
  echo '接続失敗' . $e->getMessage();
}
