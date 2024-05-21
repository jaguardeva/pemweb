<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

require_once __DIR__ . "/database/connection.php";

$result = $db->query("SELECT * FROM report WHERE user_id = " . $_SESSION["id"] . " ORDER BY created_at DESC");



include "./layouts/dashboard/top.php";

?>

<main class="p-4 my-14 sm:ml-64">
  <div class="flex flex-col justify-between md:items-center md:flex-row">
    <h1 class="my-4 text-xl font-semibold md:my-0 md:text-3xl">Semua Laporan</h1>
    <div class="flex flex-col gap-4 md:items-center md:flex-row">
      <h1 class="text-sm font-semibold md:text-lg">Kode status laporan: </h1>
      <div class="flex items-center gap-3">
        <div
          class="flex items-center justify-center h-5 p-4 text-sm font-semibold text-black bg-yellow-300 rounded md:textlg">
          Ditinjau
        </div>
        <div
          class="flex items-center justify-center h-5 p-4 text-sm font-semibold text-white bg-red-500 rounded md:textlg">
          Ditolak
        </div>
        <div
          class="flex items-center justify-center h-5 p-4 text-sm font-semibold text-white bg-green-500 rounded md:textlg">
          Diterima
        </div>
      </div>
    </div>
  </div>
  <hr class="block my-5 md:hidden">
  <div class="grid gap-4 md:grid-cols-4 md:mt-8">
    <?php foreach ($result as $data) { ?>
      <a href="/detail-report.php?id=<?= $data['id'] ?>" class="hover:scale-95 ease-in-out duration-150 hover:shadow-lg w-full p-4 shadow rounded <?php if ($data['status'] == 1) {
          echo "bg-green-500 text-white";
        } else if ($data['status'] == 0) {
          echo "bg-yellow-300";
        } else {
          echo "bg-red-500 text-white";
        }
        ?>">
        <div>
          <div class="flex items-center justify-between">
            <h1 class="text-lg font-bold"><?= $data['title'] ?></h1>
            <p class="text-sm font-semibold"><?= $data['created_at'] ?></p>
          </div>
          <p class="mt-3 text-sm"><?= $data['body'] ?></p>
        </div>
      </a>
    <?php } ?>
  </div>
</main>

<?php include "./layouts/dashboard/bottom.php" ?>