<?php
session_start();
$albumID = trim($_POST["albumID"]);
$cart = $_SESSION['PANIER_OBJ'];
$newCart = array();

foreach ($cart as $i) {
	if ($i->id != $albumID ){
		array_push($newCart, $i);
	}
}

$_SESSION['PANIER_OBJ'] = $newCart;

?>	