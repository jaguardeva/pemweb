<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}
include __DIR__ . "/layouts/top.php";
if (isset($_SESSION["login"])) {
  include __DIR__ . '/layouts/sidebar.php';
}


?>

<div>
  <h1>Dashboard Page</h1>
</div>
<?php include __DIR__ . "/layouts/bottom.php" ?>