<?php 
include 'config.php';
$id = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
 
mysqli_query($koneksi,"update tb_mahasiswa set nim ='$id',nama='$nama', prodi='$prodi', semester='$semester' where nim='$id'");
 
header("location:index.php");
 
?>