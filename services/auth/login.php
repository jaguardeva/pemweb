<?php

require_once __DIR__ . "/../../database/connection.php";

if (isset($_POST['login'])) {
  $emailError = "";
  $passwordError = "";
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  if (empty($email)) {
    $emailError = "*Email wajib diisi";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "*Email tidak valid, gunakan format email yang benar!";
  }

  if (empty($password)) {
    $passwordError = "*Password wajib diisi";
  }

  if (empty($emailError) && empty($passwordError)) {
    $getEmail = $db->query("SELECT * FROM users WHERE email = '$email'");
    if ($getEmail->num_rows > 0) {
      $data = $getEmail->fetch_assoc();
      if (password_verify($password, $data['password'])) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['login'] = true;

        header("Location: ../../dashboard.php?success=Anda berhasil login!");

      } else {
        header("Location: ../../auth/login.php?error=Email atau Password salah!");
      }

    } else {
      header("Location: ../../auth/login.php?error=Email tidak terdaftar!");
    }

  }


}