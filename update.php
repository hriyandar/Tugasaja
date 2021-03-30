<?php 
 
include 'config.php';
$id= $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

 
$query = "UPDATE pelanggan SET nama='$nama', tgl_lahir = '$tgl_lahir', alamat='$alamat', telp='$telp' WHERE id='$id' ";
mysqli_query($link, $query);
 
header("location:index.php");
?>