<?php
session_start();
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM tb_akun WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header("Location: admin/admin.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="login.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   <div class="login-box">
  <h2>PANEL ADMIN</h2>
  <form action="login.php" method="post">
    <div class="user-box">
      <input type="text" class="form-control" id="username" name="username" required>
      <label for="username" class="form-label">Username</label>
    </div>
    <div class="user-box">
      <input type="password" class="form-control" id="password" name="password" required>>
      <label for="password" class="form-label">Password</label>
    </div>
    <button type="submit" class="btn btn-primary">LOGIN</button>
  </form>
</div>
      </div>
   </body>
</html>