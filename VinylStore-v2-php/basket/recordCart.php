<?php
session_start();
$id = trim($_POST["id"]);
$artist = trim($_POST["artist"]);
$title = trim($_POST["title"]);
$image = trim($_POST["image"]);
$note = trim($_POST["note"]);
$prix = trim($_POST["prix"]);



$oldCart = $_SESSION['PANIER_OBJ'];


$newItem = (object) array(
	'id' => $id,
	'artist' => $artist,
	'title' => $title,
	'image' => $image,
	'note' => $note,
	'prix' => $prix
	);

array_push($oldCart, $newItem);

$_SESSION['PANIER_OBJ'] = $oldCart;

if ($_SESSION['PANIER_OBJ'] != null){
	echo 'c ok bobby';
}
else{
	echo 'rate ca daille';
}

?>	


