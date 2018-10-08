.<!DOCTYPE html>
<html>
<head>
	<title>BELAJAT METODE MATH</title>
</head>
<body>
<?php


	echo  "<h1>selamat datang di duniakomfauzi</h1>" ;
	// math method 
	// round rand(min,max) max min
	$angka = 1000;
	$angka2=3;
	$angka3=2.44;
	// dengan method round akan nyari angka bulat terdekat
	echo round($angka3);

	echo "<br>";
	// randem untuk menghasilkan angka acak 
	// min/max
	//dan jika di reload akan menghasilkan angka baru
	echo "angka hari ini adalah ". rand(5, 10);

	// otomatis angka terbesar 
	echo "<br>";
	echo "angka kedua dari max". max(5, 10, 8, 5);

	echo "<br>";
	echo "angka variabel". max($angka3, $angka, $angka2);

	echo "<br>";
	echo "angka variabel". min($angka3, $angka, $angka2);
	//max angka akan memilih angka paling terbesar dan angka min akan memilih angka paling terkecil
 ?>
</body>
</html>