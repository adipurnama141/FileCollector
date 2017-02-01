<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>

	<script type="text/javascript" src="http://oss.sheetjs.com/js-xlsx/xlsx.core.min.js"></script>
	<script type="text/javascript" src="http://sheetjs.com/demos/Blob.js"></script>
	<script type="text/javascript" src="http://sheetjs.com/demos/FileSaver.js"></script>
	<script type="text/javascript" src="http://sheetjs.com/demos/Export2Excel.js"></script>
 <meta name="googlebot" content="noindex">


	<script>


	function doit() {
			export_table_to_excel('rekap');
	}
		
	function redir() {
		window.location="zip.php"
	}

	</script>
	



	<title>Asrama</title>
</head>

<body>
	<div class="wrapper catalog">
		<img src="logo.png" align="middle">
		

		

	
		<br>


		<center> <h1>Pendataan Nomor Rekening Tutor</h1> </center>
		<hr>

		<div class="download_xlsx" onclick="doit()"> Download file .xlsx </div>
		<div class="download_xlsx"  style ="width: 203px;
  background-color: rgb(0, 100, 255);
  text-align: center;"onclick="redir()"> Download foto rekening </div>

		<br>
		<br>
		<div class="inputwrap">
			<table class="hasil" id="rekap">
	<tr class="t_header">
		<td> Nama </td>
		<td> NIM </td>
		<td> Bank </td>
		<td> Nomor Rekening </td>
	</tr>



<?php
include("connect.php");
$sql = "SELECT * FROM rekening";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['NIM'] . "</td>";
	echo "<td>" . $row['Nama'] . "</td>";
	echo "<td>" . $row['Bank'] . "</td>";
	echo "<td>" . $row['Norek'] . "</td>";
	echo "</tr>";
}
?>

</table>
		
		
		</div>


	</div>
</body>
</html>	