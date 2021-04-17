<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMA KREKI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$update = "";
$err = "";
$status = false;
if (isset($_GET['in'])) {
    if (empty($_GET["update"])) {
      $err = "anda belum mengisi datanya";
    } else {
      $update = pembersih($_GET["update"]);
      if (!preg_match("/^[a-zA-Z0-9-. ]*$/",$update)) {
        $err = "hanya huruf, angka, spasi, '.' dan '-' yang diperbolehkan"; 
        $status = false;
      } else {
        $status = true;
      }
    }
    
  }

function pembersih($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="sidenav">
  <a href="index.php">Jadwal</a>
  <a href="login.php">Login/Logout</a>
  <a href="edit_jadwal.php">Edit Jadwal</a>
</div>

<div class="content">
<?php
  $table = pembersih($_GET['table']);
  $pk = pembersih($_GET['pk']);
  $cl = pembersih($_GET['cl']);
?>

  <br>
  <form action = "" method = "get">
    <label for = "update"><b>Masukkan Jadwal Terbaru</b></label>
    <input type="text" name="update" required>
    <input type='hidden' name='table' value='<?=$table?>'>
    <input type='hidden' name='pk' value='<?=$pk?>'>
    <input type='hidden' name='cl' value='<?=$cl?>'>
    <button type="submit" name = "in">Submit</button>
    <span class="error"> <?php echo $err;?></span>
  </form>
  <?php
  if ($status === true){
    include "koneksi.php";
    $sql = "UPDATE  $table set $cl = '$update' WHERE JAM = '$pk'";
    if ($conn->query($sql) === TRUE){
        echo "<br><b>Jadwal telah dirubah! silahkan ke menu Jadwal untuk memastikan perubahan";
    } else {
        echo "<br><b>Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  }
  ?>

</div>

</body>
</html>