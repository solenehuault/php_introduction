<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Compare Prices</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Compare prices</h1>
		<form method="post" action="form.php">
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
			$all_prices = array(
				$_POST[name1] => $_POST[price1], 
				$_POST[name2] => $_POST[price2], 
				$_POST[name3] => $_POST[price3], 
				$_POST[name4] => $_POST[price4]
			);

			print_r($all_prices);
			sort($all_prices);
			print_r($all_prices);
			$name = array_keys($all_prices);
			print_r($name);
		?>

	</body>
</html>
