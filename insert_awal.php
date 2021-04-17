<?php
include "koneksi.php";

$sql = "INSERT INTO adm (username, password)
VALUES ('farhanh','hnfarha'),
       ('nauvalz','zlnauva'),
       ('abdula','alabdu')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

$sql = "INSERT INTO klsx_i (jam, senin, selasa, rabu, kamis, jumat)
VALUES ('08.00-09.30','KIMIA','MTK','OLAHRAGA','SEJARAH','BIOLOGI'),
       ('09.35-11.00','BAHASA INGGRIS','BAHASA INDONESIA','FISIKA','MTK','GEOGRAFI'),
       ('11.00-12.30','ISTIRAHAT','ISTIRAHAT','ISTIRAHAT','ISTIRAHAT','ISTIRAHAT'),
       ('12.30-14.00','EKONOMI','SEJARAH','AGAMA','EKONOMI','BAHASA INDONESIA')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

$sql = "INSERT INTO klsx_ii (jam, senin, selasa, rabu, kamis, jumat)
VALUES ('08.00-09.30', 'BAHASA INGGRIS','BAHASA INDONESIA','FISIKA','MTK','GEOGRAFI'),
       ('09.35-11.00','KIMIA','MTK','OLAHRAGA','SEJARAH','BIOLOGI'),
       ('11.00-12.30','ISTIRAHAT','ISTIRAHAT','ISTIRAHAT','ISTIRAHAT','ISTIRAHAT'),
       ('12.30-14.00','BAHASA INDONESIA','AGAMA','EKONOMI','SEJARAH','BAHASA INDONESIA')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>