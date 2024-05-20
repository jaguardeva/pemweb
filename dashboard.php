<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

require_once __DIR__ . "/database/connection.php";

$result = $db->query("SELECT COUNT(*) as total FROM report WHERE user_id = " . $_SESSION["id"]);

$result_proses = $db->query("SELECT COUNT(*) as total_proses FROM report WHERE user_id = " . $_SESSION["id"] . " AND status = 0");
$result_selesai = $db->query("SELECT COUNT(*) as total_selesai FROM report WHERE user_id = " . $_SESSION["id"] . " AND status = 1");
$result_ditolak = $db->query("SELECT COUNT(*) as total_ditolak FROM report WHERE user_id = " . $_SESSION["id"] . " AND status = 2");

$row_proses = $result_proses->fetch_assoc();
$total_proses = $row_proses['total_proses'];

$row_selesai = $result_selesai->fetch_assoc();
$total_selesai = $row_selesai['total_selesai'];

$row_ditolak = $result_ditolak->fetch_assoc();
$total_ditolak = $row_ditolak['total_ditolak'];

$row = $result->fetch_assoc();
$total_reports = $row['total'];

//status = 0 = proses, 1 = ditolak, 2 = selesai

include "./layouts/dashboard/top.php"


  ?>

<main class="p-4 my-14 sm:ml-64">
  <h1 class="my-4 text-xl font-semibold md:my-0 md:text-3xl">Dashboard</h1>
  <div class="relative p-4 my-5 overflow-hidden bg-blue-500 border md:p-8 md:py-12 rounded-xl">
    <h1 class="relative z-20 text-2xl font-semibold text-white md:text-3xl">Selamat datang,
      <?php echo $_SESSION["name"] ?> 🎉
    </h1>
    <div class="absolute z-10 bg-black rounded-full w-36 h-36 -top-5 -right-3 opacity-10"></div>
    <div class="absolute bottom-0 z-10 bg-black rounded-full w-80 h-80 right-6 opacity-10"></div>
  </div>
  <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
    <div
      class="h-[200px] w-full border bg-blue-500 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-white hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="text-6xl font-bold"><?= $total_reports ?></h1>
        <h3 class="mt-3 font-semibold">Jumlah Laporan</h3>
      </div>
      <div class="">
        <i class="text-black fa-solid fa-bullhorn text-9xl opacity-15"></i>
      </div>
    </div>
    <div
      class="h-[200px] w-full border bg-yellow-300 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-black hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="text-6xl font-bold"><?= $total_proses ?></h1>
        <h3 class="mt-3 font-semibold">Dalam Tinjauan</h3>
      </div>
      <div class="">
        <i class="text-black fa-solid fa-eye text-9xl opacity-15"></i>
      </div>
    </div>
    <div
      class="h-[200px] w-full border bg-green-500 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-white hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="text-6xl font-bold"><?= $total_selesai ?></h1>
        <h3 class="mt-3 font-semibold">Laporan Selesai</h3>
      </div>
      <div class="">
        <i class="text-black fa-solid fa-check-to-slot text-9xl opacity-15"></i>
      </div>
    </div>
    <div
      class="h-[200px] w-full border bg-red-500 rounded shadow flex justify-between items-center p-6 relative overflow-hidden  text-white hover:scale-95 transition-all duration-150">
      <div>
        <h1 class="text-6xl font-bold"><?= $total_ditolak ?></h1>
        <h3 class="mt-3 font-semibold">Laporan Ditolak</h3>
      </div>
      <div class="">
        <i class="text-black fa-solid fa-square-xmark text-9xl opacity-15"></i>
      </div>
    </div>
  </div>
</main>

<?php include "./layouts/dashboard/bottom.php" ?>