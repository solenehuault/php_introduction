<?php include('config.php'); ?>
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

		<?php
			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connected successfully<br />";

				if (isset($_POST['name']) &&
						isset($_POST['color']) &&
						isset($_POST['brand']) &&
						isset($_POST['cons']) &&
						isset($_POST['power']) &&
						isset($_POST['price'])) {
					$sql = "INSERT INTO vehicle (name, color, brand, consumption, power, price) 
									VALUES ('$_POST[name]', '$_POST[color]', '$_POST[brand]', '$_POST[cons]', '$_POST[power]', '$_POST[price]')";
					$conn->exec($sql);
					echo "New record created successfully";
				}
				else {
					echo "Unknown input";
				}

				echo "<h2>Vehicle Table</h2>";
				$sql = "SELECT name, color, brand, consumption, power, price FROM vehicle";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<table><tr> <th>Name</th> <th>Color</th> <th>Brand</th> <th>Consumption</th> <th>Power</th> <th>Price</th>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row['name']."</td><td>".$row['color']."</td><td>".$row['brand']."</td><td>".$row['consumption']."</td><td>".$row['power']."</td><td>".$row['price']."</td></tr>";
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
			}
			catch(PDOException $e) {
				echo "Connection failed: ". $e->getMessage();
			}
		?>
	</body>
</html>
