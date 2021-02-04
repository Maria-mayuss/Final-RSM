<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
</head> 
<body>

<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$gender = $_POST['gender'];
$pesan = $_POST['pesan'];

$mysqli = "INSERT INTO tabel_biodata (nama, email, tanggal, gender, pesan) VALUES ('$nama', '$email', '$tanggal', '$gender', '$pesan')";
$result = mysqli_query($conn, $mysqli);

if ($result) {
  echo "<script>alert('Inputan Berhasil. Terima Kasih')</script>";
  echo "<script>window.location.href='home.html';</script>";
}
else {
  echo "Input gagal";
}

  mysqli_close($conn);

?>

<script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

</body> 
</html>