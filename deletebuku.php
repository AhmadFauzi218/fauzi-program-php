<?php 
include 'koneksi.php';

if (isset($_GET['id'])) {
	# code...
	$ID = $_GET['id'];

	$sql = "delete from perpus where kdbuku = '$ID'";

	$query = mysqli_query($con,$sql);

	if ($query) {
		# code...
		header("location:index.php");
	}else{
		die("gaggal mengahapus data ");
	}
}else{
	die("accses denied ");
}
 ?>
