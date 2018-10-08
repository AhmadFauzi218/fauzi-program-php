<?php 
require 'koneksi.php';
	# code...
if (isset($_POST['simpan'])) {

	$kodebuku = $_POST['kdbuku'];
	$namabuku = $_POST['namabuku'];
	$kategori = $_POST['kategori'];
	$qty = $_POST['qty'];
	$rak = $_POST['rak'];

	$sql = "insert into perpus values('$kodebuku','$namabuku','$kategori','$qty','$rak')";

	$result = mysqli_query($con,$sql);

	if ($result) {
		header("location:index.php");
	}else{
		echo "gagal menyinpan data ";
	}
}

 ?>