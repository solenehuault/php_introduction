<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Compare Prices</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Compare prices</h1>
		<form method="post" action="index.php">
			<fieldset>
				<legend>Product 1</legend>
				<p>Name</p> <input type="text" name="name1" />
				<p>Price</p> <input type="number" name="price1" />
			</fieldset>

			<fieldset>
				<legend>Product 2</legend>
				<p>Name</p> <input type="text" name="name2" />
				<p>Price</p> <input type="number" name="price2" />
			</fieldset>

			<fieldset>
				<legend>Product 3</legend>
				<p>Name</p> <input type="text" name="name3" />
				<p>Price</p> <input type="number" name="price3" />
			</fieldset>

			<fieldset>
				<legend>Product4</legend>
				<p>Name</p> <input type="text" name="name4" />
				<p>Price</p> <input type="number" name="price4" />
			</fieldset>

			<input class="button" type="submit" value="Compare" />
		</form>
		
		<?php
			
			$all_prices = array(
				$_POST['name1'] => $_POST['price1'],
				$_POST['name2'] => $_POST['price2'],
				$_POST['name3'] => $_POST['price3'], 
				$_POST['name4'] => $_POST['price4']
			);

			asort($all_prices);
			$name = key($all_prices);
			echo "<p>The cheaper product is $name. </p>";
			arsort($all_prices);
			$name = key($all_prices);
			echo "<p>The most expensive product is $name.</p>";
		?>

	</body>
</html>
