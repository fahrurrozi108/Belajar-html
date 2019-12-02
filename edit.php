<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<div class="col-md-6">
<?php
	include 'config.php';
	$id = $_GET['nim'];
	$data = mysqli_query($koneksi,"select * from tb_mahasiswa where nim='$id'");
	while($d = mysqli_fetch_array($data)){
    
?>
<form action="p-edit.php" method="post">
<h2>Tambah Data Mahasiswa<hr></h2>
<div>
<label for=""><b>NIM Mahasiswa :</b></label>
<input type="text" name="nim" class="form-control" placeholder="Masukan NIM Anda" value="<?php echo $d['nim']; ?>">
</div>
<div>
<label for=""><b>Nama Mahasiswa :</b></label>
<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda"value="<?php echo $d['nama']; ?>">
</div>
<div>
<label for=""><b>Prodi Mahasiswa :</b></label>
<input type="text" name="prodi" class="form-control" placeholder="Masukan Prodi Anda"value="<?php echo $d['prodi']; ?>">
</div>
<div >
<label for=""><b>Semester Mahasiswa :</b></label>
<input type="text" name="semester" class="form-control" placeholder="Masukan Semester Anda" value="<?php echo $d['semester']; ?>">
</div><br>
<div>
<button type="submit" class="btn btn-primary">Update</button>

</div>
<?php
    }
?>


</form>
</div>
</div>
    
</body>
</html>
