<?php
require("koneksi.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>	Data kontak</title>
</head>
<body>
	<h3><b>Data Kontak</b></h3>
	<br>
	<a href="form_input.php">Tambah Data</a>
	<br>
	<table border='1' cellpadding="5" cellspacing="0">
			<tr>
				<th>Nis</th>
				<th>Nama</th>
				<th>jk</th>
				<th>Alamat</th>
        <th>tgl_lahir</th>
				<th></th>
			</tr>
		<?php
			$d = 0;

			$query = $config->query("select * from siswa");
			while($siswa = $query->fetch_array()) {

					 $d++;

					 $nis = $siswa['nis'];
					 $nama = $siswa['nama'];
					 $jk = $siswa['jk'];
					 $alamat = $siswa['alamat'];
           $tgl = $siswa['tgl_lahir'];

					 echo "
					 <tr>
					 	<td align='center'>$d</td>
            <td>$nis</td>
					 	<td>$nama</td>
					 	<td>$jk</td>
					 	<td>$alamat</td>
            <td>$tgl</td>
					 	<td>
					 		<a href='form_edit.php?nis=$siswa'>Edit</a>
					 		&bull;
					 		<a href='proses_hapus.php?nis=$siswa'>Hapus</a>
					    </td>
					  </tr>
					 ";
			 	}
		 ?>
	</table>
</body>
</html>
