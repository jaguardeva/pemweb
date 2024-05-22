<?php
session_start();
require_once __DIR__ . "/../database/connection.php";

$query = "DELETE FROM report WHERE id = " . $_GET['id'] . " AND user_id = " . $_SESSION['id'];
$img = $db->query("SELECT img FROM report WHERE id = " . $_GET['id'] . " AND user_id = " . $_SESSION['id'])->fetch_assoc();
$response = $db->query($query);

if (isset($img)) {
  unlink(__DIR__ . '/../public/images/' . $img['img']);
}


if ($response) {
  header('Location: /../dashboard.php');
  exit();
}
