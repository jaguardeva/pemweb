<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

require_once __DIR__ . "/database/connection.php";

$data;
if ($_SESSION['role'] == 1) {
  $data = $db->query("SELECT * FROM report WHERE id = " . $_GET["id"] . " AND user_id = " . $_SESSION["id"])->fetch_assoc();

  if ($data['user_id'] !== $_SESSION['id']) {
    header("Location: /dashboard.php");
  }
} else {
  $data = $db->query("SELECT * FROM report WHERE id = " . $_GET["id"])->fetch_assoc();
}




include "./layouts/dashboard/top.php";

?>

<main class="p-4 my-14 sm:ml-64">
  <div class="flex items-center justify-between md:my-0 md:mb-4">
    <h1 class="my-4 text-xl font-semibold md:text-3xl ">Detail Laporan</h1>
    <?php if (isset($data['status']) && $data['status'] == 0 && $_SESSION['role'] == 1) { ?>
      <div class="flex items-center">
        <button type="button" data-modal-target="popup-modal<?= $_GET["id"] ?>"
          data-modal-toggle="popup-modal<?= $_GET["id"] ?>"
          class="flex items-center justify-center w-10 h-10 text-white bg-red-500 rounded hover:bg-red-600"><i
            class="fa-solid fa-trash-can"></i></button>
      </div>
    <?php } ?>

    <?php if ($_SESSION['role'] == 0) { ?>

      <div class="flex items-center gap-2">
        <a id="reject" href="./services/report/rejected.php?id=<?= $_GET["id"] ?>" title="Tolak laporan"
          class="flex items-center justify-center w-10 h-10 text-white bg-red-500 rounded hover:bg-red-600"><i
            class="fa-solid fa-xmark"></i></a>
        <a id="accept" href="./services/report/accepted.php?id=<?= $_GET["id"] ?>" title="Terima laporan"
          class="flex items-center justify-center w-10 h-10 text-white bg-green-500 rounded hover:bg-green-600"><i
            class="fa-solid fa-check"></i></a>
      </div>

    <?php } ?>

  </div>
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
    <div class="p-4 rounded shadow">
      <div class="flex items-center justify-between mb-2 md:mb-4">
        <h1 class="text-lg font-semibold ">Bukti Foto</h1>
        <div
          class="flex items-center justify-center px-4 py-2 text-sm text-white capitalize bg-blue-500 rounded-full md:px-6"
          title="Jenis Laporan">
          <?= $data['type'] ?>
        </div>
      </div>
      <img src="/public/images/<?= $data["img"] ?>" alt="">
    </div>
    <div class="flex flex-col gap-4 p-4 rounded shadow">
      <div class="flex flex-col gap-2">
        <h1 class="text-lg font-bold ">Dibuat pada:</h1>
        <p class="text-sm md:text-lg"><?= $data["created_at"] ?></p>
      </div>
      <div class="flex flex-col gap-2">
        <h1 class="text-lg font-bold ">Judul:</h1>
        <p class="text-sm md:text-lg"><?= $data["title"] ?></p>
      </div>
      <div class="flex flex-col gap-2">
        <h1 class="text-lg font-bold ">Isi Laporan:</h1>
        <p class="text-sm md:text-lg"><?= $data["title"] ?></p>
      </div>
    </div>
  </div>

  <div id="popup-modal<?= $_GET["id"] ?>" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full p-4">
      <div class="relative bg-white rounded-lg shadow">
        <button type="button"
          class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
          data-modal-hide="popup-modal<?= $_GET["id"] ?>">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="p-4 text-center md:p-5">
          <svg class="w-12 h-12 mx-auto mb-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500">Anda yakin menghapus laporan ini?</h3>
          <a href="services/delete-report.php?id=<?= $_GET["id"] ?>" data-modal-hide="popup-modal<?= $_GET["id"] ?>"
            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
            Ya, saya yakin
          </a>
          <button data-modal-hide="popup-modal<?= $_GET["id"] ?>" type="button"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak,
            batalkan</button>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include "./layouts/dashboard/bottom.php" ?>