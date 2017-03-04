<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
	<title>Asrama</title>
</head>

<body>
	<div class="wrapper catalog">
		<img src="logo.png" align="middle">		

	
		<br>


		<center> <h1>
		
		<?php

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);

$nim = $_POST["nim"];
$dir = $target_dir . $nim. "." . $imageFileType;
 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $dir)) {
        echo "Berkas Bukti Pembayaran Berhasil Terunggah. Terima Kasih";
    } else {
        echo "Terjadi Error. Mohon ulangi ";
    }



?>
		
		
		
		</h1> </center>
		<hr>
		<br>
		<br>


	</div>
</body>
</html>



