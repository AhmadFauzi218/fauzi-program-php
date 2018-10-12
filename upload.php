<?php 
$target_dir ="uploads/";
$target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
$uploadok = 1;
$testFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
	# code...
	if ($uploadok == 0) {
		# code...
		echo "Gagal Upload File";
	}else{
		if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)) {
			# code...
			echo "<h2> File".basename($_FILES["filetoupload"]["name"])."Berhasil di upload</h2>";
		}else{
			echo "proses upload file gagal";
		}
	}
}
 ?>