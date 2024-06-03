<?php
session_start();
if (!isset($_SESSION["login"]) || $_SESSION["role"] !== '0') {
    header("Location: /auth/login.php?error=Silahkan login terlebih dahulu!");
    exit();
}

require_once __DIR__ . "/../database/connection.php";

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);

    // Get the image path from the database before deleting the news
    $sql = "SELECT image_path FROM news WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    if ($row) {
        $imagePath = $row['image_path'];

        // Delete the news record
        $sql = "DELETE FROM news WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            // Delete the image file if it exists
            $filePath = __DIR__ . '/../public/images/news/' . $imagePath;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            header("Location: /news.php?success=Berita berhasil dihapus!");
        } else {
            header("Location: /news.php?error=Terjadi kesalahan saat menghapus berita.");
        }

        $stmt->close();
    } else {
        header("Location: /../../news.php?error=Berita tidak ditemukan.");
    }
} else {
    header("Location: /../../news.php?error=ID berita tidak ditemukan.");
}

$db->close();
exit();
