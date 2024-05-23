<?php

require_once __DIR__ . "/../../database/connection.php";
$id = $_GET['id'];

if (empty($_SESSION['role'])) {
  header('Location: ../../auth/login.php');
}

$query = "UPDATE report SET status = 2 WHERE id = $id";
$result = $db->query($query);

if ($result) {
  header('Location: /../../reports.php');
  exit();
}