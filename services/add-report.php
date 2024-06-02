
<?php


function addReport(array $data, $db)
{

  $type = htmlspecialchars($data['type']);
  $name = htmlspecialchars($data['title']);
  $body = htmlspecialchars($data['body']);
  $status = 0;

  $fileName = $data['image']['name'];
  $tmpFileName = $data['image']['tmp_name'];
  $fileSize = $data['image']['size'];
  $error = $data['image']['error'];

  $requireExtension = ['jpg', 'jpeg', 'png'];

  if ($error === 4) {

    echo ("
      <script>
      alert('Bukti Pengaduan harus diisi!')
      </script>"
    );
    return false;
  }

  $extension = explode('.', $fileName);
  $extension = strtolower(end($extension));

  if (!in_array($extension, $requireExtension)) {

    echo ("
      <script>
        alert('Format file bukti pengaduan harus jpg, jpeg, atau png!');
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

  move_uploaded_file($tmpFileName, "public/images/" . $fileName);
  $query = "INSERT INTO report (type, title, body, img,status, user_id) VALUES ('$type', '$name', '$body', '$fileName',$status, '$_SESSION[id]')";;


  $result = mysqli_query($db, $query);
  return $result;
}
?>