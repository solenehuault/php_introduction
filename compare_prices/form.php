<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Compare Prices</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Compare prices</h1>
		<form method="post" action="cible.php">
			<h2>Product 1</h2>
			<p>Name</p> <input type="text" name="name1" />
			<p>Price</p> <input type="number" name="price1" />

			<h2>Product 2</h2>
			<p>Name</p> <input type="text" name="name2" />
			<p>Price</p> <input type="number" name="price2" />

			<h2>Product 3</h2>
			<p>Name</p> <input type="text" name="name3" />
			<p>Price</p> <input type="number" name="price3" />
			
			<h2>Product4</h2>
			<p>Name</p> <input type="text" name="name4" />
			<p>Price</p> <input type="number" name="price4" />

			<br />
			<input class="button" type="submit" value="Compare" />
		</form>
		
		<?php
			$all_prices = array($_POST[name1] => $_POST[price1], $_POST[name2] =    > $_POST[price2], $_POST[name3] => $_POST[price3], $_POST[name4] => $_    POST[price4]);

			sort($all_prices);
			$cheap = key($all_prices);

			echo current($all_prices);

			asort($all_prices);
			$expensive = key($all_prices);

			echo current($all_prices);

			echo "The cheapest product is $cheap, ";
			echo "and the most expensive is $expensive.";
		?>

	</body>
</html>
