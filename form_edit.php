<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
	# code...
	$ID=$_GET['id'];

	$sql="select * from perpus where kdbuku='$ID'";

	$query = mysqli_query($con,$sql);
	$dt_perpus= mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query)<1) {
		# code...
		?>
		<script type="text/javascript">window.alert("data tidak ditemukan");</script>
		<?php
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update form</title>
</head>
<body>
	<h1>UBAH DATA JABATAN</h1>
		<form action="prosesUbah.php" method="post">
			<table>
				<tr>
					<td>kode buku</td>
					<td>
						 <input type="text" name="kdbuku" value="<?php echo $dt_perpus['kdbuku'];?>">
					</td>
				</tr>
				<tr>
					<td>nama buku</td>
					<td>
						 <input type="text" name="namabuku" value="<?php echo $dt_perpus['namabuku'];?>">
					</td>
				</tr>
				<tr>
					<td>kategori</td>
					<td>
						 <input type="text" name="kategori" value="<?php echo $dt_perpus['kategori'];?>">
					</td>
				</tr>
				<tr>
					<td>qty</td>
					<td>
						 <input type="text" name="qty" value="<?php echo $dt_perpus['qty'];?>">
					</td>
				</tr>
				<tr>
					<td>rak</td>
					<td>
						 <input type="text" name="rak" value="<?php echo $dt_perpus['rak'];?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<a href="index.php"><input type="button" name="cancel" value="cancel"></a>
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</table>
		</form>
</body>
</html>
