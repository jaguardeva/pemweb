<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

$result;
require_once __DIR__ . "/database/connection.php";

if ($_SESSION['role'] == 1) {
  $result = $db->query("SELECT * FROM report WHERE user_id = " . $_SESSION["id"] . " ORDER BY created_at DESC");
} else {
  $result = $db->query("SELECT report.*, users.username as username  FROM report INNER JOIN users ON report.user_id = users.id ORDER BY created_at ASC");
}



include "./layouts/dashboard/top.php";

?>

<main class="p-4 my-14 sm:ml-64">

  <!-- Content For Users -->
  <?php if ($_SESSION['role'] == 1) { ?>

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
              <h1 class="text-lg font-bold">
                <?= strlen($data['title']) > 15 ? substr($data['title'], 0, 15) . "..." : $data['title'] ?>
              </h1>
              <p class="text-sm font-semibold"><?= $data['created_at'] ?></p>
            </div>
            <p class="mt-3 text-sm">
              <?php
              if (strlen($data['body']) > 40) {
                echo substr($data['body'], 0, 40) . "...";
              } else {
                echo $data['body'];
              }
              ?>
            </p>

          </div>
        </a>
      <?php } ?>
    </div>
  <?php } else { ?>
    <h1 class="my-4 text-xl font-semibold md:my-0 md:text-3xl">Semua Laporan</h1>
    <div class="relative mt-4 overflow-x-auto shadow-md sm:rounded-lg" id="table">
      <table class="w-full text-sm text-left text-gray-500 rtl:text-right ">
        <thead class="text-xs text-white uppercase bg-blue-500">
          <tr>
            <th scope="col" class="px-6 py-3">
              No
            </th>
            <th scope="col" class="px-6 py-3">
              Nama Pelapor
            </th>
            <th scope="col" class="px-6 py-3">
              Judul Laporan
            </th>
            <th scope="col" class="px-6 py-3">
              isi Laporan
            </th>
            <th scope="col" class="px-6 py-3">
              Dibuat pada
            </th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($result as $data) {

            ?>
            <tr>
              <td class="w-5 px-6 py-4">
                <?= $i++ ?>
              </td>
              <td class="px-6 py-4">
                <?= $data['username'] ?>

              </td>
              <td class="px-6 py-4">
                <?= substr($data['title'], 0, 100) ?>
              </td>
              <td class="px-6 py-4">
                <?= substr($data['body'], 0, 100) ?>
              </td>
              <td class="px-6 py-4">
                <?= $data['created_at'] ?>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


  <?php } ?>








</main>

<?php include "./layouts/dashboard/bottom.php" ?>