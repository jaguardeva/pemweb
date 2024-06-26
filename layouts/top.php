<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
try {
  $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
  echo $e->getMessage();
  exit;
}

$exceptUrl = ['login.php', 'register.php', 'dashboard.php'];
$currPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_ENV['TITLE']; ?></title>
  <link rel="icon" type="image/png" href="<?= $_ENV['TITLE_ICON']; ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- swiper js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: grey;
      cursor: pointer;
    }
  </style>

  <!-- flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="../styles.css">
  <title>Document</title>
</head>

<body>

  <?php if (!in_array($currPage, $exceptUrl)) { ?>
    <?php include __DIR__ . '/navbar.php'; ?>
  <?php } ?>



  <main>