<?php
session_start();
require_once __DIR__ . "/../services/auth/login.php";
if (isset($_SESSION["login"])) {
  header("Location: ../dashboard.php");
}

require_once __DIR__ . "/../services/auth/register.php";
include '../layouts/top.php';
?>



<section id="loginPage" class="flex flex-col justify-center items-center w-full h-screen bg-[#f3f3f3]">

  <div class="flex justify-center items-center mb-10">
    <img src="../assets/images/logo-pemkot.png" class="w-16" alt="logo-pemkot">
    <p class="font-bold text-4xl">SIADU<span class="text-blue-600">SBY</span></p>
  </div>
  <div class="bg-white shadow-lg rounded-lg p-6 w-[500px]">
    <h1 class="text-center text-3xl font-semibold mb-10">Daftar Akun</h1>
    <form method="POST" class="flex flex-col gap-5">
      <div class="flex flex-col w-full gap-3">
        <?php if (isset($usernameError)) { ?>
          <p class="text-red-600 font-normal text-sm italic"><?= $usernameError ?></p>
        <?php } ?>
        <label class="font-semibold sr-only" for="email">Nama Lengkap</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="text"
          name="username" id="username" placeholder="Nama Lengkap" value="<?php if (isset($username))
            echo $username ?>" autofocus>
        </div>
        <div class="flex flex-col w-full gap-3">
        <?php if (isset($emailError)) { ?>
          <p class="text-red-600 font-normal text-sm italic"><?= $emailError ?></p>
        <?php } ?>
        <label class="font-semibold sr-only" for="email">Email</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="text" name="email"
          id="email" placeholder="Email" value="<?php if (isset($email))
            echo $email ?>" autofocus>
        </div>
        <div class="flex flex-col w-full gap-3">
        <?php if (isset($passwordError)) { ?>
          <p class="text-red-600 font-normal text-sm italic"><?= $passwordError ?></p>
        <?php } ?>
        <label class="font-semibold sr-only" for="password">Password</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="password"
          name="password" id="password" placeholder="Password" autofocus>
      </div>
      <div class="flex flex-col w-full gap-3">
        <?php if (isset($confirmPasswordError)) { ?>
          <p class="text-red-600 font-normal text-sm italic"><?= $confirmPasswordError ?></p>
        <?php } ?>
        <label class="font-semibold sr-only" for="password">Password</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="password"
          name="confirmPassword" id="confirmPassword" placeholder="Konfirmasi Password" autofocus>
      </div>
      <button type="submit" name="register"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4">Login</button>
      <p class="text-md font-medium">Sudah punya akun? <a href="login.php"
          class="text-blue-500 hover:text-blue-600 hover:underline">Masuk</a>
      </p>
    </form>
  </div>
</section>


<?php include '../layouts/bottom.php'; ?>