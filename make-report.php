<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

include "./layouts/dashboard/top.php"


  ?>

<main class="p-4 my-14 sm:ml-64">
  <h1 class="font-semibold text-3xl">Buat Laporan</h1>
  <article class="flex flex-col items-center w-full mx-auto max-w-4xl border shadow-lg py-5 px-7">
    <h1 class="text-2xl font-bold my-8 uppercase">Tulis Laporan Anda Di Sini</h1>
    <form action="" class="w-full flex flex-col gap-4 ">
      <h1 class="font-semibold text-lg">Klasifikasi Laporan:</h1>
      <div class="w-full flex gap-5 items-center my-2">
        <div class="flex items-center gap-3">
          <label for="pengaduan" class="cursor-pointer">
            <input type="radio" id="pengaduan" name="type" value="pengaduan" class="peer sr-only">
            <div
              class="flex items-center bg-gray-400 text-white gap-3  px-5 py-4  peer-checked:text-white peer-checked:bg-blue-500 rounded">
              <h1 class="font-semibold text-lg">PENGADUAN</h1>
              <i class="fa-solid fa-circle-check text-lg"></i>
            </div>
          </label>
          <label for="aspirasi" class="cursor-pointer">
            <input type="radio" id="aspirasi" name="type" value="aspirasi" class="peer sr-only">
            <div
              class="flex items-center bg-gray-400 text-white gap-3  px-5 py-4  peer-checked:text-white peer-checked:bg-blue-500 rounded">
              <h1 class="font-semibold text-lg">ASPIRASI</h1>
              <i class="fa-solid fa-circle-check text-lg"></i>
            </div>
          </label>
        </div>
      </div>
      <div class="w-full space-y-3">
        <label for="title" class="font-semibold text-lg">Judul</label>
        <input class="w-full py-3 px-5 rounded outline-none border border-gray-300" type="text" id="title" name="title"
          placeholder="Judul laporan...">
      </div>
      <div class="w-full space-y-3">
        <label for="body" class="font-semibold text-lg">Isi Laporan</label>
        <textarea class=" w-full p-5 rounded outline-none border border-gray-300 h-[200px]" name="body"
          id="body"></textarea>
      </div>
      <button
        class="bg-blue-500 hover:bg-blue-600 transition-all duration-100 text-white font-semibold px-5 py-3 rounded">Kirim
        Laporan</button>
    </form>
  </article>
</main>

<?php include "./layouts/dashboard/bottom.php" ?>