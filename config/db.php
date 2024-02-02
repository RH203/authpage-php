<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = DotenvVault\DotenvVault::createImmutable(__DIR__ . '/');
$dotenv->safeLoad();

$host = $_SERVER['DB_HOST'];
$user = $_SERVER['DB_USER'];
$password = $_SERVER['DB_PASSWORD'];
$database = $_SERVER['DB_DATABASE'];

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  echo "Conn error";
} else {
  echo "Berhasil conn";
}
?>