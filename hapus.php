<?php 
include '/contents/koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi,"delete from tugas1 where id='$id'");
header("location:index.php");

?>