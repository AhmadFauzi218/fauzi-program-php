<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {
	# code...
	$kodebuku = $_POST['kdbuku'];
	$namabuku = $_POST['namabuku'];
	$kategori = $_POST['kategori'];
	$qty = $_POST['qty'];
	$rak =$_POST['rak'];

	$sql = "update perpus set namaBuku ='$namabuku',kategori='$kategori',qty='$qty',rak='$rak' where kdbuku ='$kodebuku'";

	$query = mysqli_query($con,$sql);

	if ($query) {
		# code...
		header("location:index.php");
	}else{
		die("gagal menghapus data");
	}
}else{
	die("accses denied");
}
 ?>
