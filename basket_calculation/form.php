<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Basket Calculation</title>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Basket Calculation</h1>
		<form method="post" action="cible.php">
			
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
	</body>
</html>
