<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Load Composer autoloader

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
try {
  $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
  echo $e->getMessage();
  exit;
}


$host = "localhost";
$user = "root";
$password = $_ENV["DB_PASSWORD"]; // Assuming you have set this environment variable in your .env file
$database = "db_pemweb";

$db = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  exit;
}

