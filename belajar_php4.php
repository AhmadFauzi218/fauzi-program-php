<!DOCTYPE html>
<html>
<head>
	<title>beljar php 3</title>
</head>
<body>
<?php

	// variabel pada php
	// tipe data string 

	$nama = "ini latihan";
	$noname = "ini juga sama";
	$nama3 ="1000";
	$nama4 ='1000';

	echo "selamat datang di  $nama.dan yang ini.$noname <br>";
	echo $nama3.$nama4;

	echo "<br>";

	// tipe data angka 
	// 1.integer 2.float

	$angka = 1000;
	$angka2 = 100.123;

	echo "angkanya adalah $angka $angka2 <br>";
	echo $angka + $angka2;

	echo "<br>";

	
	$angka7 = 3000;
	$angka4 = 1000;
	$angka5 =3;
	$angka6 =2;

	// operator matematika
	// +-*/% ++ --
	echo "<br>";
	echo $angka4 + $angka5 * $angka6;

	echo "<br>";
	// ini ditambah 1
	$angka4++;
	echo $angka4;

	echo "<br>";
	// ini dikurangi 1
	$angka7--;
	echo $angka7;

	echo "<br>";
	// variabel boleh dikasih nilai dengan variabel lainya atau gabungan vraiabel lainya
	//variabeel boleh dikasih nilai dengan variabel lainya atau gabungan veraiabel lainya juga boleh atau bisa angka baru
	$test = $angka4 +10+ $angka5;

	echo $test;
	echo "<br>";
	// nama = nilai
	//setiap menulis variabel nama yang sama berarti mengubah nilai sebelumnya
	//mengambil nilai lama dan menjumlahkan dengan variabel angka5  
	$angka = $angka + $angka5;

	echo $angka;

	echo "<br>";

	// atau bisa ditulis dengan 
	$angka *= $angka5;

	echo $angka;

 ?>
</body>
</html>
