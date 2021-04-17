<?php
session_start();

if(isset($_GET["logout"])) {
  session_unset();
  session_destroy();
}

if(isset($_POST["login"])) {
    include "koneksi.php";
    $un = $_POST["un"];
    $pw = $_POST["pw"];

    $sql = "SELECT * FROM adm WHERE username = '$un'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) === 1) {

      $row = $result->fetch_assoc();
      if ($pw == $row['PASSWORD']) {
        $_SESSION['login'] = true;
      }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMA KREKI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidenav">
  <a href="index.php">Jadwal</a>
  <a href="login.php">Login/Logout</a>
  <a href="edit_jadwal.php">Edit Jadwal</a>
</div>

<div class="content">
  <?php if (!isset($_SESSION['login'])) : ?>
  <h2>Login</h2>
  <?php if (isset($error)) : ?>
      <p class="error"> Username atau Password salah! </p>
  <?php endif; ?>
  <form action = "" method = "post">
    <label for = "un"><b>Username</b></label>
    <input type="text" placeholder="Input Username" name="un" required>
    <br>
    <label for="pw"><b>Password</b></label>
    <input type="password" placeholder="Input Password" name="pw" required>
        
    <button type="submit" name = "login">Login</button>
  </form>
  <?php endif; ?>

  <?php if (isset($_SESSION['login'])) : ?>
    <p><b>Anda telah login</b></p>
    <br>
    <form action ="" method = "get">
    <button type="submit" name="logout">Logout</button>
    </form>
  <?php endif; ?>
</div>

</body>
</html>