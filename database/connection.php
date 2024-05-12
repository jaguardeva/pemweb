<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Load Composer autoloader

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
try {
  $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
  echo $e->getMessage();
  exit;
}


$host = $_ENV["DB_HOST"];
$database = $_ENV["DB_DATABASE"];
$user = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];

$db = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  exit;
}
