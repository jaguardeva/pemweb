<?php
session_start();
if (isset($_SESSION["login"])) {
  header("Location: dashboard.php");
}
?>

<?php require_once __DIR__ . "/layouts/top.php"; ?>
<?php require_once __DIR__ . "/database/connection.php"; ?>
<?php
$sql = "SELECT id, title, content, image_path FROM news";
$result = $db->query($sql);


?>
<main class="relative">

  <!-- Hero -->
  <div class="flex flex-col items-center justify-center w-full h-screen p-6 text-white bg-no-repeat bg-cover" style="background-image: url('assets/images/hero-banner.jpg');">
    <div class="flex flex-col items-center gap-3 md:gap-5">
      <h1 class="text-[50px] text-center leading-[50px] max-w-screen-xl uppercase font-bold">Menjawab Kebutuhan
        Informasi
        PUBLIK WARGA SURABAYA</h1>
    </div>
  </div>
  <!-- End Hero  -->
  <!-- About Section  -->
  <section class="w-full bg-gray-100">
    <!-- Card Berita -->
    <script src="https://swiperjs.com/swiper-api"></script>
    <div class="container w-full mx-auto max-w-7xl">
      <div class="p-4 md:px-8 md:py-9 rounded-lg relative ">
        <h1 class="mb-6 text-2xl font-bold">Berita Terkini</h1>

        <div class="swiper-container h-full w-full ">
          <div class=" swiper-wrapper h-full">
            <?php if ($result->num_rows > 0) : ?>
              <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="swiper-slide h-screen">
                  <div class="card shadow-md hover:shadow-lg h-full flex flex-col">
                    <img src="/public/images/news/<?= htmlspecialchars($row['image_path']) ?>" alt="News Image" class="w-full h-full object-cover rounded-t-lg">
                    <div class="card-content bg-white bg-opacity-30 backdrop-blur-md rounded-b-lg flex-grow p-4">
                      <h2 class="mb-2 text-xl font-bold"><?= htmlspecialchars($row['title']) ?></h2>
                      <p class="text-gray-700"><?= substr(htmlspecialchars($row['content']), 0, 50) . (strlen($row['content']) > 50 ? '...' : '') ?></p>
                      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-auto">
                        <a href="/read-news.php?id=<?= htmlspecialchars($row['id'] ?? '') ?>">Selengkapnya</a>
                      </button>
                    </div>
                  </div>

                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <p class="text-center">Tidak ada berita terkini.</p>
            <?php endif; ?>
          </div>

          <div class="swiper-pagination"></div>
          <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Berita -->


    <div class="container mx-auto space-y-4 max-w-7xl pb-14">
      <h1 class="text-3xl font-bold">Tentang <span class="text-blue-600">SAGASBY</span></h1>
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
            <div class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-2xl text-black fa-solid fa-pen"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Tulis Laporan</h3>
              <p class="font-normal">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-3xl text-black fa-solid fa-clipboard-check"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Proses Verifikasi</h3>
              <p class="font-normal">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi
                berwenang</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-3xl text-black fa-solid fa-gavel"></i>

            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Proses Tindak
                Lanjut</h3>
              <p class="font-normal">Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
              <i class="text-2xl text-black fa-solid fa-comments"></i>
            </div>
            <div class="flex flex-col items-center space-y-3">
              <h3 class="text-xl font-bold">Beri Tanggapan</h3>
              <p class="font-normal">Anda dapat menanggapi kembali balasan yang diberikan oleh instansi dalam waktu 10
                hari</p>
            </div>
          </div>
          <div class="w-full max-w-[200px] flex flex-col items-center text-center text-white mt-8">
            <div class="h-14 w-14 rounded-full bg-white flex items-center justify-center relative -top-[30px]  -translate-y-[60%]">
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
      <div class="grid w-full mx-auto rounded-lg p-14 md:grid-cols-2 max-w-7xl backdrop-blur-lg bg-white/30">
        <h1 class="max-w-2xl text-6xl font-bold text-white">Menemukan Masalah
          di Publik Sekitar ?</h1>
        <div class="flex items-center justify-center">
          <a href="../auth/login.php" class="flex items-center justify-center text-white bg-gradient-to-tr from-[#00226E] to-[#0059E8]  w-[130px] h-[50px] text-center font-semibold text-[18px] md:text-2xl rounded  px-5 py-2.5 md:h-[100px] md:w-[400px] hover:scale-95 transition-all duration-150">
            Laporkan Sekarang</a>
        </div>
      </div>
    </div>

    <footer class="w-full p-4 text-white bg-white/30 backdrop-blur-lg">
      <div class="container mx-auto">
        <h1 class="font-semibold">&copy; Copyright 2024 | Pemerintah Kota Surabaya</h1>
      </div>
    </footer>
  </section>

  <div id="button-top" title="Kembali ke Atas" class="fixed flex items-center justify-center bottom-10 -right-20 w-[50px] h-[50px] bg-white rounded cursor-pointer hover:bg-yellow-300  text-black shadow-md transition-all duration-300 border">
    <i class="text-3xl fa-solid fa-chevron-up"></i>
  </div>


  <script>
    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      // Jumlah berita per slide
      spaceBetween: 30, // Jarak antar slide
      loop: 'true',
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: 'true'
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

  <!-- End About  -->
</main>




<?php require_once __DIR__ . "/layouts/bottom.php"; ?>