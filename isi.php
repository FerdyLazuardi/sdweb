<?php
require "koneksi.php";
$nama = $_POST["username"];
$usia = $_POST["instansi"];
$alamat = $_POST["alamat"];
$telp = $_POST["telp"];
$jk = $_POST["pilih"];
$gaji = $_POST ["profesi"];
$email = $_POST ["email"];

mysqli_query($konek, "INSERT INTO register VALUES('','$nama','$usia','$alamat','$telp','$jk','$gaji','$email')")

?>