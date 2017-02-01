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


		<center> <h1>Pendataan Nomor Rekening Tutor</h1> </center>
		<hr>
		<br>
		<br>
		<div class="inputwrap">
			<form  name="loginForm"  action="add.php" method="post" enctype="multipart/form-data">
			<label>Nama Lengkap</label><BR>
			<input type="text" name="nama" required></input><BR>

			<label>NIM</label><BR>
			<input name="nim" required></textarea><br>

			<label>Bank</label><BR>
			<input name="bank" required></textarea><br>

			<label>Nomor Rekening</label><BR>
			<input type="text" name="norek" required></input><BR>

			<label>Foto Nomor Rekening</label><BR>
			<input type="file" name="photo" id="photo" required></input><BR>

			

			<button class="bluebutton s_update" type="submit">SUBMIT</button>
			</form>
		
		
		</div>


	</div>
</body>
</html>