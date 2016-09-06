<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Vendor</title>
	</head>
	<body>
		<h1>Vendor</h1>
		<form method="post" action="index.php">
			<fieldset>
				<legend>Add a vehicule to the database</legend>
				<p>Name</p>
				<input type="text" name="name" />
				<p>Color</p>
				<input type="text" name="color" />
				<p>Brand</p>
				<input type="text" name="brand" />
				<p>Consumption</p>
				<input type="number" name="cons" min=0 />
				<p>Power</p>
				<input type="number" name="power" min=0 />
				<p>Price</p>
				<input type="number" name="price" min=0 />
			</fieldset>
			<input type="submit" value="Add vehicule" />
		</form>
	</body>
</html>
