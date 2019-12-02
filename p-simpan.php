<?php 
// koneksi database
include 'config.php';
 

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_mahasiswa values('$nim','$nama','$prodi','$semester')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>