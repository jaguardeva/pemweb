<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
try {
  $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
  echo $e->getMessage();
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_ENV['TITLE']; ?></title>
  <link rel="icon" type="image/png" href="<?= $_ENV['TITLE_ICON']; ?>">

  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: grey;
      cursor: pointer;
    }
  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="../styles.css">
  <title>Document</title>
</head>

<body>
  <nav class="fixed top-0 z-[38] w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="dashboard.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../assets/images/logo-pemkot.png" class="h-8" alt="logo-pemkot" loading="lazy" />
            <span class="self-center text-2xl font-bold whitespace-nowrap">SIADU<span
                class="text-blue-600">SBY</span></span>
          </a>
        </div>
        <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                  alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
              id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900" role="none">
                  <?php
                  if (strlen($_SESSION['name']) > 20) {
                    echo substr($_SESSION['name'], 0, 20) . '...';
                  } else {
                    echo $_SESSION['name'];
                  }
                  ?>
                </p>
                <p class="text-sm font-medium text-gray-900 truncate" role="none">
                  <?= $_SESSION['email'] ?>
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                    role="menuitem">Dashboard</a>
                </li>
                <li>
                  <span href="services/auth/logout.php" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer" role="menuitem">Sign
                    out</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- include sidebar -->

  <?php include __DIR__ . "/../sidebar.php" ?>