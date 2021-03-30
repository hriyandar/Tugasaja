<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($link,"DELETE FROM pelanggan WHERE id='$id'")or die(mysqli_error());
 
header("location:index.php?pesan=hapus");
?>