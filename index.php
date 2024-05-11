<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load Composer autoloader

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once "database/connection.php";

?>

<?php include "components/layouts/top.php" ?>
<?php include "components/layouts/navbar.php" ?>


<!-- Hero -->

<main>

  <section
    class="flex flex-col items-center justify-center w-full h-screen bg-gradient-to-b from-slate-300 to-indigo-200 bg-center bg-no-repeat bg-cover p-6">
    <div class="flex flex-col items-center gap-3 md:gap-5">
      <img class="w-[250px]" src="assets/images/logo-pemkot.png" alt="logo-pemkot-surabaya">
      <h1 class="text-center font-bold text-xl md:text-3xl">Selamat Datang</h1>
      <h1 class="text-center font-bold text-4xl md:text-7xl">SISTEM INFORMASI ADUAN</h1>
      <p class="text-center font-semibold w-full max-w-5xl text-lg">
        Sistem Informasi Aduan adalah platform digital yang membantu masyarakat khususnya masyarakat Surabaya dalam
        menerima, mengelola, dan menanggapi
        aduan atau keluhan dari masyrakat terkait dengan layanan, atau proses tertentu. Dengan fitur
        formulir aduan online, manajemen aduan, pelacakan status, sistem ini memungkinkan masyarakat
        untuk memberikan tanggapan yang cepat, transparan, dan efisien kepada Pemerintah Kota Surabaya
      </p>
    </div>

  </section>

  <section class="w-full max-w-[1240px] h-screen">

  </section>

</main>



<?php include "components/layouts/bottom.php" ?>