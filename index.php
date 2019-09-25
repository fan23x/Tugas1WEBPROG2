<!DOCTYPE html>
<html>
<head>
<?php require_once 'contents/header.php'; ?>
</head>
<body>
  <div class="container">
	<center><h1><b>CRUD </b>SIMPLE</h1></center>
	<hr>
	<br/><br/><br/><br/>
	<div class="box-header">
          <a href="./tambah.php" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i>TAMBAH DATA</a>
          </div>
	<br/>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th><center>NO</center></th>
			<th><center>Nama</center></th>
			<th><center>Username</center></th>
			
			<th><center>Email</center></th>
			<th><center>Aksi</center></th>
		</tr>
<?php 
		include 'contents/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tugas1");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><center><?php echo $no++; ?></center></td>
				<td><center><?php echo $d['nama']; ?></center></td>
				<td><center><?php echo $d['username']; ?></center></td>
				
				<td><center><?php echo $d['email']; ?></center></td>
				<td><center>
					<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm">HAPUS</a>
				</center></td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>	
	<?php require_once 'contents/footer.php'; ?>
</body>
</html>


