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
	</body>
</html>
