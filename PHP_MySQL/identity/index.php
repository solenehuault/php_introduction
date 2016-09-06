<?php
	include("config.php");
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
			<input type="submit" value="Connect" /> </form>
		<?php
		
		try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	echo "Connected successfully to the database<br />";
    
		
			if (isset($_POST['name']) && isset($_POST['psw'])) {
				$name = $_POST['name'];
				$sql = $conn->query("SELECT password FROM user WHERE username='$name'");
				$result = $sql->fetch(PDO::FETCH_OBJ);
				if ($result) {
					foreach ($result as $psw) {
						if ($psw == $_POST["psw"]) {
							echo "Connected";
						}
						else {
							echo "Password incorrect";
						}
					}
				}
				else {
					echo "Username isn't in the database.";
				}
			}
			else{
				echo "Unknown values for name or password";
			}
		}
		
		catch(PDOException $e){
    	echo "Connection failed: " . $e->getMessage();
  	}
		
	?>
	</body>

	</html>