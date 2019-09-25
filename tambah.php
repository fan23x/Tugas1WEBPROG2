<!DOCTYPE html>
<html>
<head>
<?php require_once 'contents/header.php'; ?>
</head>
<body>
  <div class="container">
  	
	<center><h1><b>CRUD SIMPLE</b></h1></center>
	<br/><br/><br/><br/>
	<h3><b>TAMBAH DATA</b></h3><br>
	<form method="post" action="tambah_aksi.php">
		<table>
			<div class="form-group">		
			Nama<br>
				<input type="text" name="nama" class="form-control"></span><br>
				
			Username<br>
				<input type="text" name="username" class="form-control"><br>
			Password<br>
				<input type="password" name="password" class="form-control"><br>
			Email<br>
				<input type="text" name="email" class="form-control">
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary">
				<a href="/crud-simple" class="btn btn-dark" role="button" title="Kembali"></i>Kembali</a>
			</tr>		
		</table>
	</form>
</div>
<?php require_once 'contents/footer.php'; ?>	
</body>
</html>