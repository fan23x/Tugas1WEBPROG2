<!DOCTYPE html>
<html>
<head>
<?php require_once 'contents/header.php'; ?>
</head>
<body>
  <div class="container">
	<center><h1><b>CRUD SIMPLE</b></h1></center>
	<br/><br/><br/><br/>
	<h3><b>EDIT DATA</b></h3>

	<?php
	include '/contents/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tugas1 where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<div class="form-group">		
					Nama<br>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>" class="form-control">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control"><br>

					Username<br>
					<input type="text" name="username" value="<?php echo $d['username']; ?> " class="form-control"><br>

					Password<br>
					<input type="password" name="password" value="<?php echo $d['password']; ?>" class="form-control"><br>

					Email<br>
					<input type="text" name="email" value="<?php echo $d['email']; ?>" class="form-control">

					<td></td>
					<td><input type="submit" value="Simpan" class="btn btn-primary"> <a href="/crud-simple" class="btn btn-dark" role="button" title="Kembali"></i>Kembali</a></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>	
<?php require_once 'contents/footer.php'; ?>	
</body>
</html>	