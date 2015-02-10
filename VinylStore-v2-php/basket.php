<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Vinyl Store</title>

	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/vinylStore.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/profile.js"></script>

</head>

<body>

	<?php include 'navBar.php';
	$count = 0;
	if ($connected && $count > 0) {
		echo '<div class="profile-section"><div class="profile-info-section">';
		include 'basket/basketInformation.php';
		echo '</div><div class="profile-history-section" style="margin-right:400px;">';
		include 'basket/basketHistory.php';
		echo '</div></div>';
	} 
	else if ($connected && $count <= 0) {
		echo '<div class="profile-section"><div class="alert alert-danger" role="alert">Your basket is empty</div>
		<button type="button" class="btn btn-default" onClick="location.href=\'index.php\'"><h3>Continue Shopping<h3></button></div>';
	} else {
		echo '<div class="profile-section"><div class="alert alert-danger" role="alert">You must log-in to see your basket</div>
		<button type="button" class="btn btn-default" onClick="location.href=\'index.php\'"><h3>Continue Shopping<h3></button></div>';
	}

	?>

</body>


</html>