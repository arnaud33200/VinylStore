<?php
for ($i=0; $i<3; $i++) {
	$n = rand(2,6);
	echo '<li role="presentation"><a href="#' . $i . '"><h4><span class="badge">' . $n . '</span> 15/03/2014</h4>'; //
	for ($k=0; $k<$n; $k++) {
		$v = rand(1,12);
		echo '<img class="cover" src="VinylCover/v' . $v . '.jpg">';
	}
	echo '</a></li>';
}
?>