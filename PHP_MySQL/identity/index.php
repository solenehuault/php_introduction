<?php
	include(config.php);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Identity</title>
	</head>
	<body>
		<h1>Identity</h1>
		<form method="post" action="index.php">
			<label id="name">Username: </label>
			<input type="text" name="name" id="name" />
			<label id="psw">Password: </label>
			<input type="password" name="psw" id="psw" />
			<input type="submit" value="Connect" />
		</form>

		<?php
			if (isset($_POST['name']) && isset($_POST['psw'])) {
				$username = $_POST['name'];
				$sql = "SELECT password FROM user WHERE username=$username";
				$result = $conn->query($sql);
				if ($result == $_POST['psw']) {
					echo ":)";
				}
				else {
					echo ":(";
				}
			}
		?>
	</body>
</html>
