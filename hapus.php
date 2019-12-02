<?php 
include 'config.php';
$id = $_GET['nim']; 
mysqli_query($koneksi,"delete from tb_mahasiswa where nim='$id'");
header("location:index.php");
 
?>