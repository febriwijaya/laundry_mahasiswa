<?php
session_start();
require 'functions_karyawan.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM admin where id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index2.php");
  exit;
}


if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

  // cek username

  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])) {
        // buat cookie
        setcookie('id', $row['id'], time() + 120);
        setcookie('key', hash('sha256', $row['username']), time() + 120);
      }

      header("Location: index2.php");
      exit;
    }
  }

  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <title>Sistem Login</title>
  <link rel="stylesheet" href="css2/css2.css">
</head>

<body>

  <body class="body" style="background:url('img/parallax.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="mt-5">
            <div class="form" style="width:400px;">
              <h1 class="admin">Admin Login</h1>
              <center><img src="img/admin.png" alt="admin"></center>
              <form action="" method="post">
                <input type="text" class="input" name="username" placeholder="Username">
                <input type="password" class="input" name="password" placeholder="Password">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" style="color:white;">Remember me</label>
                <input type="submit" name="login" value="Login">
              </form>
              <?php if (isset($error)) :  ?>
                <p style="color:red; font-style:italic;">Username / password salah</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </body>

</html>