<?php
session_start();
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
  <p class = "error">Hanya admin yang boleh mengakses halaman ini !</p>
<?php endif; ?>

<?php if(isset($_SESSION['login'])) :?>
  <h2>Edit Jadwal</h2>
  <p>klik pada jadwal yang ingin diubah untuk memulai pengubahan jadwal</p>
    <h3>SEMESTER 1</h3>
      <table>
      <tr>
          <th>Jam\Hari</th>
          <th>Senin</th>
          <th>Selasa</th>
          <th>Rabu</th>
          <th>Kamis</th>
          <th>Jum'at</th>
      </tr>
      
        <?php
        
        include "koneksi.php";
        $sql = "SELECT * FROM klsx_i";
        $result = $conn->query($sql);
  
          if ($result->num_rows > 0){
            while( $row = $result->fetch_assoc()){
              echo 
              '<tr>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_i&cl=JAM">' . $row['JAM'] . '</a></td>' . 
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_i&cl=SENIN">' . $row['SENIN'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_i&cl=SELASA">' . $row['SELASA'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_i&cl=RABU">' .  $row['RABU'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_i&cl=KAMIS">' . $row['KAMIS'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_i&cl=JUMAT">' . $row['JUMAT'] . '</a></td>' .
              '</tr>';
            }
          } else {
            echo "There is not data in database";
          }
          $conn->close();
        ?>
    </table>
    
    <br>

   <h3>SEMESTER 2</h3>
    <table>
      <tr>
          <th>Jam\Hari</th>
          <th>Senin</th>
          <th>Selasa</th>
          <th>Rabu</th>
          <th>Kamis</th>
          <th>Jum'at</th>
      </tr>
      
        <?php
        
        include "koneksi.php";
        $sql = "SELECT * FROM klsx_ii";
        $result = $conn->query($sql);
  
          if ($result->num_rows > 0){
            while( $row = $result->fetch_assoc()){
              echo 
              '<tr>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_ii&cl=JAM">' . $row['JAM'] . '</a></td>' . 
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_ii&cl=SENIN">' . $row['SENIN'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_ii&cl=SELASA">' . $row['SELASA'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_ii&cl=RABU">' .  $row['RABU'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_ii&cl=KAMIS">' . $row['KAMIS'] . '</a></td>' .
              '<td><a href="form_edit.php?pk=' . $row['JAM'] . '&table=klsx_ii&cl=JUMAT">' . $row['JUMAT'] . '</a></td>' .
              '</tr>';
            }
          } else {
            echo "There is not data in database";
          }
          $conn->close();
        ?>
    </table>
<?php endif; ?>

</div>

</body>
</html>