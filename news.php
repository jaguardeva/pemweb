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
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="/make-news.php">Tambah Berita</a></button>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Judul Berita</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch news articles from the database
                $sql = "SELECT id, title, content, image_path FROM news ORDER BY id";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td class="border px-4 py-2">' . htmlspecialchars($row["title"]) . '</td>';
                        echo '<td class="border px-4 py-2"><a href="/read-news.php?id=' . $row["id"] . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Lihat</a>';

                        // Admin management options
                        if ($_SESSION["role"] === '0') {
                            echo '<a href="/services/delete-news.php?id=' . $row["id"] . '" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm(\'Are you sure?\');">Hapus</a>';
                        }

                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td class="border px-4 py-2" colspan="2">Tidak ada berita.</td></tr>';
                }

                $db->close();
                ?>
            </tbody>
        </table>
    </div>

</main>

<?php include "./layouts/dashboard/bottom.php"; ?>