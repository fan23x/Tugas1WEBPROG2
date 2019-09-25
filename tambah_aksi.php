<?php 
require_once 'contents/header.php';
include '/contents/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if(empty($nama) || empty($username) || empty($password) || empty($email))
{
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Data belum lengkap, silahkan lengkapi Data Anda!</center></h3><center><br><a href='/crud-simple/tambah.php' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></div><br><br>";
require_once 'contents/footer.php';
return;
}elseif(!preg_match("/^[a-zA-Z ]*$/",$nama)){
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";	
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Nama hanya boleh menggunakan huruf dan Spasi saja!</center></h3><center><a href='/crud-simple/tambah.php' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div><br><br>";
require_once 'contents/footer.php';
}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Username yang diperbolehkan huruf dan angka tanpa spasi!</center></h3><center><a href='/crud-simple/tambah.php' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div><br><br>";	
require_once 'contents/footer.php';
}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$password)){
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Password yang diperbolehkan hanya huruf dan angka tanpa spasi!</center></h3><center><a href='/crud-simple/tambah.php' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div><br><br>";
require_once 'contents/footer.php';	
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";
echo "<div class='container'><h3><center><p class='text-warning'><b>GAGAL MENYIMPAN!</b></p>Email anda tidak benar! contoh : irfandroot@gmail.com</center></h3><center><a href='/crud-simple/tambah.php' class='btn btn-outline-warning' role='button' title='Kembali'>Kembali</a></center></div><br><br>";
require_once 'contents/footer.php';
}else{
$query= "INSERT INTO tugas1 (nama,username,password,email) VALUES('$nama','$username','$password','$email')";

if($koneksi->query($query)===true)
{
echo "<div class='container'><center><h1><b>CRUD SIMPLE</b></h1></center><hr></div><br/><br/><br/><br/>";
echo "<div class='container'><h3><center><p class='text-danger'><b>BERHASIL MENYIMPAN!</b></p></center></h3></div>";
echo"<h3><center> Data <b>".$nama.'</b> telah berhasil di simpan';
echo "</center></h3>";
echo"<center><a href='/crud-simple' class='btn btn-outline-warning' role='button' title='Lihat'>Lihat Data</a></center><br><br>";
require_once 'contents/footer.php';
}else{
echo"<br>Gagal di simpan";
}
}
$koneksi->close();
?>