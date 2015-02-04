<?php

$mail = trim($_POST["mail"]);
$adresse = trim($_POST["adresse"]);
$codep = trim($_POST["codep"]);
$ville = trim($_POST["ville"]);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinylstore";

// ---------------------------------------
$error = false;
$obj = new stdClass();
if ($mail == "" || !strpos($mail,'@')) { $error = true; $obj->mail = 1; }
if ($adresse == "") { $error = true; $obj->adresse = 1; }
if ($codep == "" || strlen($codep) < 5) { $error = true; $obj->codep = 1; }
if ($ville == "") { $error = true; $obj->ville = 1; }

if ($error == true) {
	$obj->error = 1;
	echo json_encode($obj);
} 
else {

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE profile SET mail='".$mail."', adress='".$adresse."', zipCode='".$codep."', city='".$ville."' WHERE idProfile=1";
	if ($conn->query($sql) === TRUE) {
		$obj = new stdClass();
		$obj->error= 0;
		$obj->mail = 0;
		$obj->adresse = 0;
		$obj->codep = 0;
		$obj->ville = 0;
		echo json_encode($obj);
	//echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}
	$conn->close();

}	

// ---------------------------------------




?>	


