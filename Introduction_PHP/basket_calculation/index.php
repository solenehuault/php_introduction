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
			
			<h2>Product 1</h2>
			<p>Price</p> <input type="number" name="price1" />
			<p>VAT rate (%)</p> <input type="number" name="vat1" />
			<p>Quantity</p> <input type="number" name="quantity1" />

			<h2>Product 2</h2>
			<p>Price</p> <input type="number" name="price2" />
			<p>VAT rate (%)</p> <input type="number" name="vat2" />
			<p>Quantity</p> <input type="number" name="quantity2" />

			<h2>Product 3</h2>
			<p>Price</p> <input type="number" name="price3" />
			<p>VAT rate (%)</p> <input type="number" name="vat3" />
			<p>Quantity</p> <input type="number" name="quantity3" />

			<br />
			<input class="submit" type="submit" value="Do the math" />
		</form>

		<?php
			$full_price_1 = ($_POST[price1] + $_POST[vat1]) * $_POST[quantity1];
			$full_price_2 = ($_POST[price2] + $_POST[vat2]) * $_POST[quantity2];
			$full_price_3 = ($_POST[price3] + $_POST[vat3]) * $_POST[quantity3];
			$total = $full_price_1 + $full_price_2 + $full_price_3;
			echo "<p>Your basket is up to $total$.</p>";
		?>
	</body>
</html>
