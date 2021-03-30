<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="judul">		
		<h1>Edit Data Pelanggan</h1>
	</div>
	
	<br/>
	<div class="edit">
	<a class="lht_data" href="index.php">Lihat Semua Data</a>
	<br>
	<br/>

	<h3 class="form">Edit data</h3>

	<?php 
	include "config.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($link,"SELECT * FROM pelanggan WHERE id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	
	<form class="form" action="update.php" method="post">		
		<table>
			<tr>
				<td >Nama</td>
				</tr>
				<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input class="form" type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tanggal Lahir</td>
				</tr>
				<tr>
				<td><input class="form" type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>"></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				</tr>
				<tr>
				<td><input class="form" type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>No Telpon</td>
				</tr>
				<tr>
				<td><input class="form" type="text" name="telp" value="<?php echo $data['telp'] ?>"></td>					
			</tr>	
			<tr>
				
				<td><input type="submit" class="tombol" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</div>
	<?php } ?>
</body>
</html>