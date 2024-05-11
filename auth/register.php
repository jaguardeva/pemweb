<?php include '../layouts/top.php'; ?>


<section id="loginPage" class="flex flex-col justify-center items-center w-full h-screen bg-[#f3f3f3]">

  <div class="flex justify-center items-center mb-10">
    <img src="../assets/images/logo-pemkot.png" class="w-16" alt="logo-pemkot">
    <p class="font-bold text-4xl">SIADU<span class="text-blue-600">SBY</span></p>
  </div>
  <div class="bg-white shadow-lg rounded-lg p-6 w-[500px]">
    <h1 class="text-center text-3xl font-semibold mb-10">Register</h1>
    <form action="" method="POST" class="flex flex-col gap-5">
      <div class="flex flex-col w-full gap-3">
        <label class="font-semibold sr-only" for="email">Nama Lengkap</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="text"
          name="username" id="username" placeholder="Nama Lengkap" autofocus>
      </div>
      <div class="flex flex-col w-full gap-3">
        <label class="font-semibold sr-only" for="email">Email</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="text" name="email"
          id="email" placeholder="Email" autofocus>
      </div>
      <div class="flex flex-col w-full gap-3">
        <label class="font-semibold sr-only" for="password">Password</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="password"
          name="password" id="password" placeholder="Password" autofocus>
      </div>
      <div class="flex flex-col w-full gap-3">
        <label class="font-semibold sr-only" for="password">Password</label>
        <input class="p-4 w-full border border-[#d4d4d4] rounded-md placeholder:text-[#d4d4d4]" type="password"
          name="password" id="password" placeholder="Konfirmasi Password" autofocus>
      </div>
      <button type="submit" name="login"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4">Login</button>
      <p class="text-md font-medium">Sudah punya akun? <a href="register.php"
          class="text-blue-500 hover:text-blue-600 underline">Masuk</a>
      </p>
    </form>
  </div>
</section>


<?php include '../layouts/bottom.php'; ?>