<?php
$nama = array('Karina','hendra','Bella','aziz','ayu','yanto','mawar','rona','cinthiya',
                'wildan','holanda','fauzan','krt','aziz','dahlia','basna','melati',
                'adit','deniswari','faizyn');

echo "<h1>DATA SISWA PEREMPUAN</h1>";
    for($x=0;$x<count($nama);$x++)

    if ($x%2==0){
    echo "Nama : $nama[$x] Jenis kelamin : PEREMPUAN<br>";

    }
    echo "<h1>DATA SISWA LAKI-LAKI</h1>";
    for($x=0;$x<count($nama);$x++)

    if ($x%2<>0){
    echo "Nama : $nama[$x] Jenis kelamin : LAKI-LAKI<br>";

    }

 ?>
