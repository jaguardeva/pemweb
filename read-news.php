<?php

require_once __DIR__ . "/database/connection.php";

// Ambil ID dari parameter URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data berita dari database berdasarkan ID
$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah berita ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Berita tidak ditemukan.";
    exit;
}

$stmt->close();
$db->close();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($row['title'] ?? 'Tidak ada judul') ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-slate-100">
    <div class="max-w-4xl w-full container mx-auto bg-white p-6 rounded-lg shadow-lg mt-4">
        <h1 class="text-4xl font-bold mb-4"><?= htmlspecialchars($row['title'] ?? 'Tidak ada judul') ?></h1>
        <img src="/public/images/news/<?= htmlspecialchars($row['image_path'] ?? 'default.jpg') ?>" alt="News Image" class="w-full h-20 object-cover mb-4 rounded-lg">
        <div class="text-gray-700 leading-relaxed">
            <p><?= nl2br(htmlspecialchars($row['content'] ?? 'Tidak ada konten')) ?></p>
        </div>
        <a href="/" class="text-blue-700 hover:underline mt-8 inline-block">Kembali ke Beranda</a>
    </div>
</body>

</html>