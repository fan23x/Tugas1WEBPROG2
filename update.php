<?php 
require_once 'contents/header.php';
include '/contents/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if(empty($nama) || empty($username) || empty($password) || empty($email))
{
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>OOPS! Data belum lengkap, silahkan lengkapi Data Anda!</center></h3><center><br><a href='/crud-simple' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></div><br><br>";
require_once 'contents/footer.php';
return;
}elseif(!preg_match("/^[a-zA-Z ]*$/",$nama)){
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center></div><br/><br/><br/><br/>";  
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Nama hanya boleh menggunakan huruf dan Spasi saja!</center></h3><center><br><a href='/crud-simple/tambah.php' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div><br><br>";
require_once 'contents/footer.php';
}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center></div><br/><br/><br/><br/>";  
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Kombinasi username hanya huruf tanpa spasi!</center></h3><center><br><a href='/crud-simple/' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div>";  
require_once 'contents/footer.php';
}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$password)){
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center></div><br/><br/><br/><br/>";  
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Password yang diperbolehkan hanya huruf dan angka tanpa spasi!</center></h3><center><br><a href='/crud-simple/' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div>";
require_once 'contents/footer.php';  
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center></div><br/><br/><br/><br/>";  
echo "<div class='container'><h3><center>Email anda tidak Benar contoh : irfandroot@gmail.com!</center></h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p><a href='/crud-simple/' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div>";
require_once 'contents/footer.php';
}
else{
  mysqli_query($koneksi,"update tugas1 set nama='$nama', username='$username', password='$password', email='$email' where id='$id'");

header("location:index.php");
}
$koneksi->close();



?>