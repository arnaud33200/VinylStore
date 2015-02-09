<?php

function star() {
		return '<span class="glyphicon glyphicon-star"></span>';
	}

function getNote($n) {
	$str = "";
	for ($i=0; $i<$n; $i++) {
		$str = $str . star();
	}
	return $str;
}
?>

<h1>Your basket contains 5 <span class="glyphicon glyphicon-cd"></span></h1>
<div class="panel panel-default">
  <div class="panel-body">
    <table class="table">
    	<thead>
        <tr>
            <th data-field="id">cover</th>
            <th data-field="name">Information</th>
            <th data-field="price">Price</th>
        </tr>
    </thead>

<?php

	for ($i=0; $i<5; $i++) {
		$cover = "VinylCover/v" . ($i+1) . ".jpg";
		$artist = "Artist";
		$album = "Album";
		$note = getNote(3);
		$price = 10.0;
		echo '<tr><td><img class="cover" src="' . $cover . '"/>
		</td><td><p>' . $artist . '</p><p>' . $album . '</p><p>' . $note . '</p></td>
		<td>' . $price . '$</td></tr>';
	}

?>
  </table>
  </div>

  <!-- Table -->
  
</div>