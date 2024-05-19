<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

include "./layouts/dashboard/top.php"


  ?>

<main class="p-4 my-14 sm:ml-64">
  <h1 class="font-semibold text-3xl">Dashboard</h1>
  <div class="p-4 md:p-8 md:py-12 rounded-xl border my-5  bg-blue-500 relative overflow-hidden">
    <h1 class="relative font-semibold text-2xl md:text-3xl text-white z-20">Selamat datang,
      <?php echo $_SESSION["name"] ?> 🎉
    </h1>
    <div class="w-36 h-36 bg-black rounded-full absolute -top-5 -right-3 opacity-10 z-10"></div>
    <div class="w-80 h-80 bg-black rounded-full absolute bottom-0 right-6 opacity-10 z-10"></div>
  </div>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div
      class="h-[200px] w-full border bg-blue-500 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-white hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="font-bold text-6xl">12</h1>
        <h3 class="mt-3 font-semibold">Jumlah Laporan</h3>
      </div>
      <div class="">
        <i class="fa-solid fa-bullhorn text-9xl text-black opacity-15"></i>
      </div>
    </div>
    <div
      class="h-[200px] w-full border bg-yellow-300 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-black hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="font-bold text-6xl">2</h1>
        <h3 class="mt-3 font-semibold">Dalam Tinjauan</h3>
      </div>
      <div class="">
        <i class="fa-solid fa-eye text-9xl text-black opacity-15"></i>
      </div>
    </div>
    <div
      class="h-[200px] w-full border bg-green-500 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-white hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="font-bold text-6xl">8</h1>
        <h3 class="mt-3 font-semibold">Laporan Selesai</h3>
      </div>
      <div class="">
        <i class="fa-solid fa-check-to-slot text-9xl text-black opacity-15"></i>
      </div>
    </div>
    <div
      class="h-[200px] w-full border bg-red-500 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-white hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="font-bold text-6xl">2</h1>
        <h3 class="mt-3 font-semibold">Laporan Ditolak</h3>
      </div>
      <div class="">
        <i class="fa-solid fa-square-xmark text-9xl text-black opacity-15"></i>
      </div>
    </div>
  </div>
</main>

<?php include "./layouts/dashboard/bottom.php" ?>