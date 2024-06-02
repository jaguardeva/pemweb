
<?php


function addNews(array $data, $db)
{


    $name = htmlspecialchars($data['title']);
    $body = htmlspecialchars($data['body']);
    // $status = 0;

    $fileName = $data['image']['name'];
    $tmpFileName = $data['image']['tmp_name'];
    $fileSize = $data['image']['size'];
    $error = $data['image']['error'];

    $requireExtension = ['jpg', 'jpeg', 'png'];

    if ($error === 4) {

        echo ("
      <script>
      alert('Gambar konten berita harus diisi!')
      </script>"
        );
        return false;
    }

    $extension = explode('.', $fileName);
    $extension = strtolower(end($extension));

    if (!in_array($extension, $requireExtension)) {

        echo ("
      <script>
        alert('Format file gambar berita harus jpg, jpeg, atau png!');
      </script>"
        );
        return false;
    }

    if ($fileSize > 2000000) {
        echo ("
      <script>
        alert('Ukuran foto terlalu besar!, maximal 2 MB');
      </script>"
        );
        return false;
    }


    $fileName = "IMG" . uniqid() . '.' . $extension;

    move_uploaded_file($tmpFileName, "public/images/news/" . $fileName);
    $query = "INSERT INTO news ( title, content, image_path ) VALUES ( '$name', '$body', '$fileName')";;


    $result = mysqli_query($db, $query);
    return $result;
}
?>