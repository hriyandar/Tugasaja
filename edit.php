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

	
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" >
					<input type="text" name="nama" >
				</td>					
			</tr>	
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgl_lahir" ></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" ></td>					
			</tr>	
			<tr>
				<td>No Telpon</td>
				<td><input type="text" name="telp" ></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>