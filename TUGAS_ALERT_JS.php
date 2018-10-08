<!DOCTYPE html>
	<html>
		<head>
		<script type="text/javascript" src="Java.js"></script>
			<title>Latihan Kotak Dialog JS</title>
		</head>
		<body>
			<form name="myform" action="TUGAS_ALERT_JS.php" method="POST" onsubmit="Validasiform();">
				<table>
					<tr>
						<td width="100">Full Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td width="100">Address</td>
						<td>
							<textarea name="alamat" cols="25" rows="5"></textarea>
						</td>
					</tr>
					<tr>
						<td width="100">Phone Number</td>
						<td><input type="text" name="nmbr"></td>
					</tr>
					<tr>
						<td width="100">Type</td>
						<td>
							<input type="radio" name="type" value="Work">Work
							<input type="radio" name="type" value="Personal">Personal
						</td>
					</tr>
					<tr>
						<td width="100"></td>
						<td>
							<input type="submit" name="submit">
						</td>
					</tr>
				</table>
			</form>
		</body>
</html>
