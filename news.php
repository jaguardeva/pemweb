<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
    exit();
}

if ($_SESSION["role"] !== '0') {
    header("Location: /dashboard.php?error=Anda tidak memiliki akses!");
    exit();
}

require_once __DIR__ . "/database/connection.php";
?>


<?php include "./layouts/dashboard/top.php"; ?>

<main class="p-4 my-14 sm:ml-64">
    <div class="flex justify-between mb-10">
        <h1 class="text-4xl">Daftar Berita</h1>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Posting Berita</button>
    </div>

    <div>
        <?php
        // Fetch news articles from the database
        $sql = "SELECT id, title, content, image_path FROM news ORDER BY id";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo '<h2 class="text-3xl">' . htmlspecialchars($row["title"]) . '</h2>';
                if (!empty($row["image_path"])) {
                    echo "<img src='/public/images/news/" . htmlspecialchars($row["image_path"]) . "' alt='Gambar Berita' class='object-cover w-full h-60'><br>";
                }
                echo "<p>" . nl2br(htmlspecialchars($row["content"])) . "</p>";

                // Admin management options
                if ($_SESSION["role"] === '0') {
                    echo '<a href="edit_news.php?id=' . $row["id"] . '">Edit</a> | ';
                    echo '<a href="/services/delete-news.php?id=' . $row["id"] . '" onclick="return confirm(\"Are you sure?\");">Delete</a>';
                }

                echo "</div><hr>";
            }
        } else {
            echo "Tidak ada berita.";
        }

        $db->close();
        ?>
    </div>

</main>

<?php include "./layouts/dashboard/bottom.php"; ?>


</html>