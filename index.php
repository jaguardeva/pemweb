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
  <section class="w-full max-w-screen-xl mx-auto h-screen mt-10 ">
    <div class="container mx-auto px-4">
      <!-- Your content here -->
      <div class="p-4 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Berita Terkini</h1>
        <div class="slider flex gap-5">
          <div class="w-1/12 flex items-center">
            <div class="w-full text-right">
              <button>
                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/chevron-left.png" alt="chevron-left" />
              </button>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
            <!-- Card 1  -->
            <div class="bg-slate-100 rounded-lg shadow-lg overflow-hidden">
              <img src="/assets/images/pixelcut-export.png" alt="News Image 1" class="w-full h-60 object-cover">
              <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Judul Berita 1</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup topik-topik terbaru dan relevan.</p>
              </div>
            </div>
            <!-- card 2 -->
            <div class="bg-slate-100 rounded-lg shadow-lg overflow-hidden">
              <img src="/assets/images/pixelcut-export.png" alt="News Image 1" class="w-full h-60 object-cover">
              <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Judul Berita 1</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup topik-topik terbaru dan relevan.</p>
              </div>
            </div>
            <!-- card 3  -->
            <div class="bg-slate-100 rounded-lg shadow-lg overflow-hidden">
              <img src="/assets/images/pixelcut-export.png" alt="News Image 1" class="w-full h-60 object-cover">
              <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Judul Berita 1</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup topik-topik terbaru dan relevan.</p>
              </div>
            </div>

          </div>
          <div class="w-1/12 flex items-center">
            <div class="w-full">
              <button>
                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/chevron-right.png" alt="chevron-right" />
              </button>
            </div>
          </div>
        </div>
        <div>...</div>
      </div>

    </div>

  </section>


  <!-- End About  -->
</main>



<?php require_once __DIR__ . "/layouts/bottom.php"; ?>