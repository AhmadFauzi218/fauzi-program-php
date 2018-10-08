<?php
$nama = array('Bella','fauzi','Bella','aziz','ayu','yanto','mawar','rona','cinthiya',
                'wildan','holanda','fauzan','krt','aziz','dahlia','basna','melati',
                'adit','deniswari','faizyn');

for($x=0;$x<count($nama);$x++)

if ($x%2==0){
  echo "DATA SISWA PEREMPUAN<br>";
echo "Nama  $nama[$x] jenis kelamin : PEREMPUAN<br>";

}else{
  echo "DATA SISWA LAKI_LAKI<br>";
echo "Angka  $nama[$x] jenis kelamin : LAKI_LAKIl<br>";

}

 ?>
