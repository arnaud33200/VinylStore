<script>
function updateInput() {
	var country = document.getElementById("destination").value;
	var price = 0;
	switch (Number(country)) {
		case 0: price = 6.4; break;
		case 1: price = 8.9; break;
		case 2: price = 12.0; break;
	}
	document.getElementsByTagName("shippingprice")[0].innerHTML = "" + price;
	var sub = parseFloat(document.getElementsByTagName("subtotal")[0].innerHTML);
	var t = sub+price;
	document.getElementsByTagName("total")[0].innerHTML = "" + t;
}
</script>

<?php
$cart = $_SESSION['PANIER_OBJ'];
$subPrice = 0;
foreach ($cart as $item) {
	$subPrice += floatval($item->prix);
}
$deliveryPrice = 6.4;
$totalPrice = $subPrice + $deliveryPrice;

?>

<div class="panel panel-primary">
	<div id="debug"></div>
	<div class="panel-heading">Order price</div>
	<div class="panel-body">
		<ul class="list-group">
			<li class="list-group-item">
				<h3>Subtotal <subtotal><?php echo $subPrice; ?></subtotal>$</h3>
				<p>Shipping to <select id="destination" onchange="updateInput()">
					<option value="0">USA</option>
					<option value="1">Canada</option>
					<option value="2">Other Country</option>
				</select></p>
				<i><h5>+ <shippingprice><?php echo $deliveryPrice; ?></shippingprice>$ shipping</h5></i>
			</li>
			<li class="list-group-item">
				<b><h2>TOTAL <total><?php echo $totalPrice; ?></total>$</h2></b>
			</li>
		</ul>

	</div>
</div>

<div class="btn-group-vertical" role="group" width="100%">
	<button type="button" class="btn btn-default" onClick="location.href='index.php'"><h3>Continue Shopping<h3></button>
	<button type="button" class="btn btn-success"><h3>Checkout Order<h3></button>
</div>