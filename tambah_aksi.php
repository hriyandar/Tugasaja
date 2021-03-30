<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];


mysqli_query($link, "INSERT INTO pelanggan VALUES('$id','$nama','$tgl_lahir','$alamat','$telp')");

header("location:index.php");
?>