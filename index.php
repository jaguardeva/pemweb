<?php
session_start();
if (isset($_SESSION["login"])) {
  header("Location: dashboard.php");
}
?>

<?php require_once __DIR__ . "/layouts/top.php"; ?>

<main class="relative">

  <!-- Hero -->
  <div class="flex flex-col items-center justify-center w-full h-screen p-6 text-white bg-no-repeat bg-cover"
    style="background-image: url('assets/images/hero-banner.jpg');">
    <div class="flex flex-col items-center gap-3 md:gap-5">
      <h1 class="text-[50px] text-center leading-[50px] max-w-screen-xl uppercase font-bold">Menjawab Kebutuhan
        Informasi
        PUBLIK WARGA SURABAYA</h1>
    </div>
  </div>
  <!-- End Hero  -->
  <!-- About Section  -->
  <section class="w-full bg-gray-100">
    <div class="container w-full mx-auto max-w-7xl">
      <!-- Your content here -->
      <div class="p-4 md:px-8 md:py-9 rounded-lg shadow-md relative bg-white -top-32 x-[999]">
        <h1 class="mb-6 text-2xl font-bold">Berita Terkini</h1>
        <div class="flex gap-5 slider">
          <div class="flex items-center w-1/12">
            <div class="w-full text-right">
              <button>
                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/chevron-left.png"
                  alt="chevron-left" />
              </button>
            </div>
          </div>
          <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-3">
            <!-- Card 1  -->
            <div class="overflow-hidden rounded-lg shadow-lg bg-slate-100">
              <img src="/assets/images/pixelcut-export.png" alt="News Image 1" class="object-cover w-full h-60">
              <div class="p-4">
                <h2 class="mb-2 text-xl font-bold">Judul Berita 1</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup
                  topik-topik terbaru dan relevan.</p>
              </div>
            </div>
            <!-- card 2 -->
            <div class="overflow-hidden rounded-lg shadow-lg bg-slate-100">
              <img src="/assets/images/pixelcut-export.png" alt="News Image 1" class="object-cover w-full h-60">
              <div class="p-4">
                <h2 class="mb-2 text-xl font-bold">Judul Berita 1</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup
                  topik-topik terbaru dan relevan.</p>
              </div>
            </div>
            <!-- card 3  -->
            <div class="overflow-hidden rounded-lg shadow-lg bg-slate-100">
              <img src="/assets/images/pixelcut-export.png" alt="News Image 1" class="object-cover w-full h-60">
              <div class="p-4">
                <h2 class="mb-2 text-xl font-bold">Judul Berita 1</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup
                  topik-topik terbaru dan relevan.</p>
              </div>
            </div>

          </div>
          <div class="flex items-center w-1/12">
            <div class="w-full">
              <button>
                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/chevron-right.png"
                  alt="chevron-right" />
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container mx-auto space-y-4 max-w-7xl pb-14">
      <h1 class="text-3xl font-bold">Tentang <span class="text-blue-600">SIADU</span></h1>
      <p class="text-justify">SIADU adalah mekanisme penyampaian pengaduan dugaan tindak pidana tertentu yang telah
        terjadi atau akan terjadi
        yang melibatkan pegawai dan orang lain yang yang dilakukan dalam organisasi tempatnya bekerja, dimana pelapor
        bukan merupakan bagian dari pelaku kejahatan yang dilaporkannya. Aplikasi Whistleblowing System disediakan oleh
        Pemerintah Kota Surabaya bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi
        pelanggaran yang terjadi di lingkungan Pemerintah Kota Surabaya.</p>
    </div>

  </section>

  <section class="w-full h-[685px] bg-gradient-to-r from-[#00226E] to-[#0059E8] py-[90px]">
    <article class="w-full mx-auto max-w-7xl">
      <h1 class="text-3xl font-bold text-white">Tata Cara Pengaduan</h1>
      <div class="mt-[127px]">
        <div class="container max-w-[1000px] mx-auto h-1 bg-white">
        </div>
        <div class="flex justify-center gap-14">
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div
              class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-2xl text-black fa-solid fa-pen"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Tulis Laporan</h3>
              <p class="font-normal">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div
              class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-3xl text-black fa-solid fa-clipboard-check"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Proses Verifikasi</h3>
              <p class="font-normal">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi
                berwenang</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div
              class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-3xl text-black fa-solid fa-gavel"></i>

            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Proses Tindak
                Lanjut</h3>
              <p class="font-normal">Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div
              class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-2xl text-black fa-solid fa-comments"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Beri Tanggapan</h3>
              <p class="font-normal">Anda dapat menanggapi kembali balasan yang diberikan oleh instansi dalam waktu 10
                hari</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div
              class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-2xl text-black fa-solid fa-circle-check"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Selesai</h3>
              <p class="font-normal">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section class="w-full  bg-[url('/assets/images/footer-banner.jpg')] bg-no-repeat bg-cover">
    <div class="flex flex-col items-center justify-center w-full h-screen">
      <div class="grid w-full mx-auto rounded-lg p-14 md:grid-cols-2 max-w-7xl backdrop-blur-sm bg-white/30">
        <h1 class="max-w-2xl text-6xl font-bold text-white">Menemukan Masalah
          di Publik Sekitar ?</h1>
        <div class="flex items-center justify-center">
          <a href="../auth/login.php"
            class="flex items-center justify-center text-white bg-gradient-to-tr from-[#00226E] to-[#0059E8]  w-[130px] h-[50px] text-center font-semibold text-[18px] md:text-2xl rounded  px-5 py-2.5 md:h-[100px] md:w-[400px] hover:scale-95 transition-all duration-150">
            Laporkan Sekarang</a>
        </div>
      </div>
    </div>

    <footer class="w-full p-4 text-white bg-white/30 backdrop-blur-sm">
      <div class="container mx-auto">
        <h1 class="font-semibold">&copy; Copyright 2024 | Pemerintah Kota Surabaya</h1>
      </div>
    </footer>
  </section>

  <div id="button-top" title="Kembali ke Atas"
    class="fixed flex items-center justify-center bottom-10 -right-20 w-[50px] h-[50px] bg-white rounded cursor-pointer hover:bg-yellow-300  text-black shadow-md transition-all duration-300 border">
    <i class="text-3xl fa-solid fa-chevron-up"></i>
  </div>


  <!-- End About  -->
</main>



<?php require_once __DIR__ . "/layouts/bottom.php"; ?>