<!DOCTYPE html>
<html>
<head>
	<title>beljar php 3</title>
</head>
<body>
<?php

	// variabel pada php
	// tipe data string 
	//ketika string digabungkan dengan titik dia akan menambahkan teks sebelumnya dengan teks berikutnya 

	$nama = "ini latihan";
	$noname = "ini juga sama";
	$nama3 ="1000";
	$nama4 ='1000';

	echo $nama3 . $nama4;
	echo "<br>";
	echo "selamat datang di  $nama.dan yang ini.$noname <br>";
	echo $nama3.$nama4;

	echo "<br>";

	// tipe data angka 
	// 1.integer 2.float
	//integer mau pun float kita tidak boleh memberi tanda kutip
	// kalo float ada tanda titik dibelakangnya isalnya 100.123

	$angka = 1000;
	$angka2 = 100.123;

	echo "angkanya adalah $angka $angka2 <br>";
	echo $angka + $angka2;





 ?>
</body>
</html>