<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<div class="judul">		
		<h1>Edit Data Pelanggan</h1>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "config.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($link,"SELECT * FROM pelanggan WHERE id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>"></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>No Telpon</td>
				<td><input type="text" name="telp" value="<?php echo $data['telp'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>