<?php
require_once __DIR__ . "/../../database/connection.php";

if (isset($_POST["login"])) {

  $usernameError = "";
  $passwordError = "";
  $emailError = "";
  $confirmPasswordError = "";

  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);
  $email = htmlspecialchars($_POST["email"]);
  $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

  if (empty($username)) {
    $usernameError = "Username is required";
  }

  if (empty($password)) {
    $passwordError = "Password is required";
  } elseif (strlen($password) < 8) {
    $passwordError = "Password must be at least 8 characters long";
  }

  if (empty($email)) {
    $emailError = "Email is required";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Invalid email format";
  }

  if (empty($confirmPassword)) {
    $confirmPasswordError = "Confirm password is required";
  } else if ($password !== $confirmPassword) {
    $confirmPasswordError = "Passwords do not match";
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