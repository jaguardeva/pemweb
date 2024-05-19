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
  <section class="w-full max-w-screen-xl mx-auto h-screen p-4">
    <div class="container mx-auto px-4">
      <!-- Your content here -->
      <div class="p-4 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Berita Terkini</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Card 1  -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://via.placeholder.com/300x200" alt="News Image 1" class="w-full h-48 object-cover">
            <div class="p-4">
              <h2 class="text-xl font-bold mb-2">Judul Berita 1</h2>
              <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup topik-topik terbaru dan relevan.</p>
            </div>
          </div>
          <!-- card 2 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://via.placeholder.com/300x200" alt="News Image 1" class="w-full h-48 object-cover">
            <div class="p-4">
              <h2 class="text-xl font-bold mb-2">Judul Berita 1</h2>
              <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup topik-topik terbaru dan relevan.</p>
            </div>
          </div>
          <!-- card 3  -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://via.placeholder.com/300x200" alt="News Image 1" class="w-full h-48 object-cover">
            <div class="p-4">
              <h2 class="text-xl font-bold mb-2">Judul Berita 1</h2>
              <p class="text-gray-700">Ini adalah deskripsi singkat tentang berita pertama. Berita ini mencakup topik-topik terbaru dan relevan.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- End About  -->
</main>



<?php require_once __DIR__ . "/layouts/bottom.php"; ?>