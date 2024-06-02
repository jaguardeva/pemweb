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




    <!-- Admin Content -->

    <?php

    // Ambil data berita dari database
    $sql = "SELECT id, title, content, image_path, created_at FROM news ORDER BY created_at DESC";
    $result = $conn->query($sql);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Berita</title>
    </head>

    <body>
        <h1>Daftar Berita</h1>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h2>" . $row["title"] . "</h2>";
                if (!empty($row["image_path"])) {
                    echo "<img src='" . $row["image_path"] . "' alt='Gambar Berita' style='width:200px;'><br>";
                }
                echo "<p>" . $row["content"] . "</p>";
                echo "<small>Diposting pada: " . $row["created_at"] . "</small>";
                echo "</div><hr>";
            }
        } else {
            echo "Tidak ada berita.";
        }

        $conn->close();
        ?>
    </body>

    </html>











</main>

<?php include "./layouts/dashboard/bottom.php" ?>