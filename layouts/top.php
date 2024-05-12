<?php
$exceptUrl = ['login.php', 'register.php', 'dashboard.php'];
$currPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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