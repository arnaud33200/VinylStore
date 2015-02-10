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

$cart = $_SESSION['PANIER_OBJ'];

?>

<h1>Your basket contains <?php echo count($cart); ?> <span class="glyphicon glyphicon-cd"></span></h1>
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
	foreach ($cart as $item) {
		$cover = $item->image;
		$artist = $item->artist;
		$album = $item->title;
		$note = getNote($item->note);
		$price = $item->prix;
		echo '<tr><td><img class="cover" src="' . $cover . '"/>
		</td><td><p>' . $artist . '</p><p>' . $album . '</p><p>' . $note . '</p></td>
		<td>' . $price . '$</td></tr>';
	}

?>
  </table>
  </div>

  <!-- Table -->
  
</div>