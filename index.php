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


		<center> <h1>Upload Berkas Pembayaran Asrama</h1> </center>
		<hr>
		<br>
		<br>
		<div class="inputwrap">
			<form  name="loginForm"  action="add2.php" method="post" enctype="multipart/form-data">
			<label>Nama Lengkap</label><BR>
			<input type="text" name="nama" required></input><BR>

			<label>NIM</label><BR>
			<input name="nim" required></textarea><br>


			<label>Foto Bukti Pembayaran</label><BR>
			<input type="file" name="photo" id="photo" required></input><BR>

			

			<button class="bluebutton s_update" type="submit">SUBMIT</button>
			</form>
		
		
		</div>


	</div>
</body>
</html>