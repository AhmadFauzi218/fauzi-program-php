<!DOCTYPE html>
<html>
<head>
	<title>metode string</title>
</head>
<body>
		<?php
			//  string method
		// strien && str_word_count
		// str_replace(find,relace,string)
		// str_repeat(text, times); str_shufles(text)

		echo "<h1>selamat datang di duniakomfauzi</h1>";

		$angka = 1000;
		$angka2=3;
		$angka3=2.44;

		// menghitung jumla kata/text
		// spasi diitung atau baris kosong akan dihitung
		$text ="hai semuanya";
		// menghitung ada berapa jumlahnya kita bisa guanakan methode strlent
		//menghitung huruf dari hai semuanya dan baris kosong akan diitung
		echo strlen($text);

		echo "<br>";
		// ini untuk menghitung jumlah kata 
		$text ="hai semuanya disini";
		// cara menghitungnya di spasi baru atau kata baru
		echo str_word_count($text);

		echo "<br>";
		// mengganti suatu teks tertentu
		$text ="hai semuanya disini";
		// kata hai akan menggati kata hallo 
		// yang pertama apa yang dicari yang kedua mau diganti dengan apa dan yang ketiga teks sumbernya 
		echo str_replace( "hai","hallo",$text);

		echo "<br>";
		// mengulang
		// kita bisa mengulang suatu tek tertentu berkali-kali

		$text ="hai semuanya disini";
		// yang pertama apa yang kita ulang yang kedua berapa kali
		echo str_repeat( "hai ",10);

		echo "<br>";
		// menggabungkan beberapa methode sekaligus 
		$text ="hai semuanya disini";
		
		echo str_repeat ( str_replace( "hai"," hallo",$text), 10 );


		//dan semua methode-methode bisa digabungkan 

 		?>
</body>
</html>