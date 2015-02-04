<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vinylstore";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT login, firstname, lastname, mail, adress, zipcode, city FROM profile WHERE idprofile = 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
			$login = $row["login"];
			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$mail = $row["mail"];
			$adress = $row["adress"];
			$zipcode = $row["zipcode"];
			$city = $row["city"];
	}
	$conn->close();
?>	

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<div id="divConsole"></div>

<ul class="nav nav-pills nav-stacked">

	<li role="presentation"><a>
		<h3><?php echo $login ?></h3>
		<i><h4><?php echo $firstname ?> <?php echo $lastname ?></h4></i>
	</a></li>

	<li role="presentation"><a href="#"><img src="pic.jpg"/></a></li>

	<li role="presentation"><a id="personalInformation" onclick="loadFormulaire()">
		<h4>
			Mail: <mail><?php echo $mail ?></mail></br>
			Adress: <adresse><?php echo $adress ?></adresse><br>
			Code: <codep><?php echo $zipcode ?></codep><br>
			Ville: <ville><?php echo $city ?></ville>
		</h4>
	</a></li>
</ul>