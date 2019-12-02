<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEB Berugak Sederhana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <table class="table table-bordered">
        <h2>Pendataan Mahasiswa Fakultas Teknik Universitas Hamzanwadi<hr></h2>
        <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi Mahasiswa</th>
        <th>Semester Mahasiswa</th>
        <th><a  href="tambah.php" class="btn btn-primary">Tambah Data</a></th>
        </tr>
        <?php 
		include 'config.php';
	
		$data = mysqli_query($koneksi,"select * from tb_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td>
				<a href="edit.php?nim=<?php echo $d['nim']; ?>" class=" btn btn-warning ">Edit</a>
					<a href="hapus.php?nim=<?php echo $d['nim']; ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>


<h6>Berugak IT Lombok <b>Mandiri & Berkarya</b> - <b> Materi CRUD HTML BOOTSTRAP PHP MYSQL</b></h6>    

</table>
<h6><b>-MOH.FAHRURROZI Founder Berugak IT Lombok-</b></h6>
    </div>

</body>
</html>