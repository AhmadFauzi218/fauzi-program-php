<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data</title>
</head>
<body>
	<form method="post" action="prosesadd.php">
		<b>Kode buku</b>
		<br>
		<input type='text' name='kdbuku' required>
		<br>
		<b>Nama Buku</b>
		<br>
		<input type='text' name='namabuku' required>
		<br>
		<b>Kategori</b>
		<br>
		<input type="text" name="kategori">
		<br>
		<b>jumlah</b>
		<br>
		<input type="text" name="qty">
		<br>
		<b>rak</b>
		<br>
		<input type="text" name="rak">
		<br>
		<input type='submit' value="submit" name="simpan">
		<a href="index.php">Lihat Data</a>
	</form>
</body>
</html>