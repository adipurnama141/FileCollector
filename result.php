
<html>
	<head>
	<title>PT | Registrasi </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="map.js"></script>
	<script type="text/javascript" src="http://oss.sheetjs.com/js-xlsx/xlsx.core.min.js"></script>
	<script type="text/javascript" src="http://sheetjs.com/demos/Blob.js"></script>
	<script type="text/javascript" src="http://sheetjs.com/demos/FileSaver.js"></script>
	<script type="text/javascript" src="http://sheetjs.com/demos/Export2Excel.js"></script>


	<script>


	function doit() {
			export_table_to_excel('rekap');
	}
		
	</script>
	
	</head>
		
	
	<body>
	
	
	<div class="header_result">
	<img src="logo.png" class="logo_">
	<h1> Rekap Absensi </h1>

<img onclick="doit();" class ="download" src="dwnld.png"> 
	</div>


<div class="wrapper">



	

<table class="hasil" id="rekap">

	<tr class="t_header">
		<td> Nama </td>
		<td> NIM </td>
		<td> Bank </td>
		<td> Nomor Rekening </td>

	</tr>



<?php

include("connect.php");

$id_kegiatan = 1;


$sql = "SELECT * FROM rekening";
$result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_array($result)) {

	echo "<tr>";
	echo "<td>" . $row['NIM'] . "</td>";
	echo "<td>" . $row['Nama'] . "</td>";
	echo "<td>" . $row['Bank'] . "</td>";
	echo "<td>" . $row['Norek'] . "</td>";
	$time = date("G:i", strtotime($row["Timestamp"]));
	echo "<td>" . $time . "</td>";


	echo "</tr>";

	
	
}

?>
</table>






</div>
	
	
	
	
	
	</body>
	
