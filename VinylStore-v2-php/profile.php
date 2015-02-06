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

	<?php include 'navBar.php';?>


	<div class="profile-section">

		<div class="profile-info-section">

			<?php include 'profile/profileInformation.php';?>
		</div>

		<div class="profile-history-section">

			<div class="profile-history-section-left">

				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active"><a>Order History <span class="badge">3 <span class="glyphicon glyphicon-cd"/></span></a></li>

					<?php include '/profile/profileOrderHistory.php';?>

				</ul>
			</div>

			<div class="profile-history-section-right">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active"><a href="#">Last Comments <span class="badge">2 <span class="glyphicon glyphicon-comment"/></span></a></li>
					
					<?php include '/profile/profileCommentHistory.php';?>

				</ul>

			</div>
		</div>

	</div>

</body>


</html>