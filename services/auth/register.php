<?php
require_once __DIR__ . "/../../database/connection.php";

if (isset($_POST["register"])) {



  $usernameError = "";
  $passwordError = "";
  $emailError = "";
  $confirmPasswordError = "";

  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);
  $email = htmlspecialchars($_POST["email"]);
  $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

  $getEmail = $db->query("SELECT email FROM users WHERE email = '$email'")->fetch_assoc();
  if (empty($username)) {
    $usernameError = "*Username wajib diisi";
  }

  if (empty($password)) {
    $passwordError = "*Password wajib diisi";
  } elseif (strlen($password) < 8) {
    $passwordError = "*Password minimal 8 karakter";
  }

  if (empty($email)) {
    $emailError = "*Email wajib diisi";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "*Email tidak valid";
  } else if ($getEmail) {
    $emailError = "*Email sudah terdaftar";
  }

  if (empty($confirmPassword)) {
    $confirmPasswordError = "*Confirm password wajib diisi";
  } else if ($password !== $confirmPassword) {
    $confirmPasswordError = "*Passwords tidak sama";
  }

  if (empty($usernameError) && empty($passwordError) && empty($emailError) && empty($confirmPasswordError)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";
    $result = $db->query($query);

    if ($result) {
      header("Location: ../../auth/login.php?success=Registrasi berhasil silahkan login!");
    }
  }

}