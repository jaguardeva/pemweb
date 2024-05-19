<?php
session_start();
if (isset($_SESSION["login"])) {
  header("Location: dashboard.php");
}
?>

<?php require_once __DIR__ . "/layouts/top.php"; ?>

<main>

  <!-- Hero -->
  <div class="flex flex-col items-center justify-center w-full h-screen text-white bg-cover bg-no-repeat p-6" style="background-image: url('assets/images/hero-banner.jpg');">
    <div class="flex flex-col items-center gap-3 md:gap-5">
      <h1 class="text-[50px] text-center leading-[50px] max-w-screen-xl uppercase font-bold">Menjawab Kebutuhan
        Informasi
        PUBLIK WARGA SURABAYA</h1>
    </div>
  </div>
  <!-- End Hero  -->
  <!-- About Section  -->
  <section class="w-full max-w-screen h-screen">
    <div class="w-full absolute bottom-0 left-0 -z-10">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#fff" fill-opacity="1" d="M0,128L80,144C160,160,320,192,480,186.7C640,181,800,139,960,122.7C1120,107,1280,117,1360,122.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
      </svg>
    </div>

    <div class="container mx-auto px-4">
      <!-- Your content here -->
      <div class="p-4 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Sistem Informasi Aduan</h1>
        <p>Sistem Informasi Aduan adalah platform digital yang membantu masyarakat khususnya masyarakat Surabaya dalam
          menerima, mengelola, dan menanggapi
          aduan atau keluhan dari masyrakat terkait dengan layanan, atau proses tertentu. Dengan fitur
          formulir aduan online, manajemen aduan, pelacakan status, sistem ini memungkinkan masyarakat
          untuk memberikan tanggapan yang cepat, transparan, dan efisien kepada Pemerintah Kota Surabaya</p>
      </div>
    </div>

  </section>
  <!-- End About  -->
</main>



<?php require_once __DIR__ . "/layouts/bottom.php"; ?>