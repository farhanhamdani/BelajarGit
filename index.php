<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMA KREKI ???!!!</title>
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
  <h2>Jadwal Kelas 12 SMA KREKI</h2>
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
              "<tr><td>"  . $row["JAM"] . 
              "</td><td>" . $row["SENIN"] . 
              "</td><td>" . $row["SELASA"] . 
              "</td><td>" . $row["RABU"] .
              "</td><td>" . $row["KAMIS"] .
              "</td><td>" . $row["JUMAT"] .
              "</td></tr>";
            }
          } else {
            echo "There is no data in database";
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
              "<tr><td>"  . $row["JAM"] . 
              "</td><td>" . $row["SENIN"] . 
              "</td><td>" . $row["SELASA"] . 
              "</td><td>" . $row["RABU"] .
              "</td><td>" . $row["KAMIS"] .
              "</td><td>" . $row["JUMAT"] .
              "</td></tr>";
            }
          } else {
            echo "There is not data in database";
          }
          $conn->close();
        ?>
    </table>
</div>

</body>
</html>