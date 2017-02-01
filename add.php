<?php


include("connect.php");
session_start();

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = "png";

$nama = $_POST["nama"];
$bank = $_POST["bank"];
$norek = $_POST["norek"];
$nim = $_POST["nim"];


$sql = "INSERT INTO rekening (Nama, NIM, Bank, Norek) VALUES ('$nama', '$nim', '$bank', '$norek') ";

if(mysqli_query($conn, $sql)){
	$dir = $target_dir . $nim . "." . $imageFileType;
    echo "Records added successfully. last_ID : " . $last_id . $dir;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $dir)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


	echo "Sukses! Terima Kasih...";


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}






?>