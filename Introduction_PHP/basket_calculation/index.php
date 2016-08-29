<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Basket Calculation</title>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Basket Calculation</h1>
		<form method="post" action="index.php">
			<div>	
			<fieldset>
				<legend>Product 1</legend>
				<p>Price</p> <input type="number" name="price1" />
				<p>VAT rate (%)</p> <input type="number" name="vat1" />
				<p>Quantity</p> <input type="number" name="quantity1" />
			</fieldset>

			<fieldset>
			<legend>Product 2</legend>
				<p>Price</p> <input type="number" name="price2" />
				<p>VAT rate (%)</p> <input type="number" name="vat2" />
				<p>Quantity</p> <input type="number" name="quantity2" />
			</fieldset>

			<fieldset>
			<legend>Product 3</legend>
				<p>Price</p> <input type="number" name="price3" />
				<p>VAT rate (%)</p> <input type="number" name="vat3" />
				<p>Quantity</p> <input type="number" name="quantity3" />
			</fieldset>
			</div>
			<div>
			<input class="submit" type="submit" value="Do the math" />
			</div>
		</form>

		<?php
			$full_price_1 = ($_POST[price1] + $_POST[vat1]) * $_POST[quantity1];
			$full_price_2 = ($_POST[price2] + $_POST[vat2]) * $_POST[quantity2];
			$full_price_3 = ($_POST[price3] + $_POST[vat3]) * $_POST[quantity3];
			$total = $full_price_1 + $full_price_2 + $full_price_3;
			echo "<div><p>Your basket is up to $total$.</p></div>";
		?>
	</body>
</html>
