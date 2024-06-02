<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
}

require_once __DIR__ . "/database/connection.php";

require_once "./services/add-news.php";


if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $body = $_POST["body"];

    $image_name = $_FILES["image"]["name"];
    $image_tmp_name = $_FILES["image"]["tmp_name"];
    $image_type = $_FILES["image"]["type"];
    $image_size = $_FILES["image"]["size"];


    $image_data = [
        "name" => $image_name,
        "tmp_name" => $image_tmp_name,
        "type" => $image_type,
        "size" => $image_size,
        "error" => $_FILES["image"]["error"]
    ];

    $data = [
        "title" => $title,
        "body" => $body,
        "image" => $image_data
    ];

    $result = addNews($data, $db);
    if ($result) {
        echo "<script>alert('Berita anda telah berhasil di posting! ')</script>";
        echo "<script>window.location.href = '/dashboard.php'</script>";
    }
}

include "./layouts/dashboard/top.php";

?>

<main class="p-4 my-14 sm:ml-64">
    <h1 class="my-4 text-xl font-semibold md:text-3xl md:my-0">Buat Berita</h1>
    <article class="flex flex-col items-center w-full max-w-4xl py-5 mx-auto border shadow-lg px-7">
        <h1 class="my-8 font-bold uppercase md:text-2xl">Tulis Berita Anda Di Sini</h1>
        <form action="" class="flex flex-col w-full gap-4" method="POST" enctype="multipart/form-data">
            <div class="w-full space-y-3">
                <label for="title" class="font-semibold md:text-lg">Judul</label>
                <input class="w-full p-3 border border-gray-300 rounded outline-none" value="<?= $_POST["title"] ?? "" ?>" type="text" id="title" name="title" placeholder="Judul Berita..." required autofocus>
            </div>
            <div class="w-full space-y-3">
                <label for="body" class="font-semibold md:text-lg">Isi Berita</label>
                <textarea class=" w-full p-3 rounded outline-none border border-gray-300 h-[200px]" name="body" id="body" required><?= $_POST["body"] ?? "" ?></textarea>
            </div>
            <div class="flex flex-col gap-3">
                <label for="image" class="text-lg font-semibold">Gambar <span class="text-sm font-normal">(
                        Thumbnail Berita)</span></label>
                <input type="file" name="image" id="image">
                <p class="text-xs text-red-500 md:text-sm">*Format yang didukung: .jpg, .jpeg, .png | ukuran maksimal: 2MB</p>
            </div>
            <button type="submit" name="submit" class="px-5 py-3 font-semibold text-white transition-all duration-100 bg-blue-500 rounded hover:bg-blue-600">Posting
                Berita</button>
        </form>
    </article>
</main>

<?php include "./layouts/dashboard/bottom.php" ?>