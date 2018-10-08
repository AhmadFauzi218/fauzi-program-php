function Validasiform() {
	var x = document.forms["myform"]["name"].value;
	var y = document.forms["myform"]["alamat"].value;
	var w = document.forms["myform"]["nmbr"].value;

	if (x=="") {
		if (y=="") {
			if (w=="") {
				alert("Field Tidak Boleh Kosong Semua");
				header("location:TUGAS_ALERT_JS.php");
			}
		}
	}

	if (x=="") {
		if (y=="") {
			alert("Field Nama dan Address Tidak Boleh Kosong");
			header("location:TUGAS_ALERT_JS.php");
		}else if(w==""){
			alert("Field Nama dan Phone Tidak Boleh Kosong");
			header("location:TUGAS_ALERT_JS.php");
		}
	}else if (y=="") {
		 if (w=="") {
			alert("Field Address dan Phone Tidak Boleh Kosong");
			header("location:TUGAS_ALERT_JS.php");
		}
	}
	if(x==""){
		alert("Field Nama Tidak Boleh Kosong ");
		header("location:TUGAS_ALERT_JS.php");
	}else if (y=="") {
		alert("Field Address Tidak Boleh Kosong ");
		header("location:TUGAS_ALERT_JS.php");
	}else if (w=="") {
		alert("Field Phone Tidak Boleh Kosong");
		header("location:TUGAS_ALERT_JS.php");
	}
