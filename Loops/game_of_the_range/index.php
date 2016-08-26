<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Game</title>
	</head>
	<body>
		<h1>Game of the range</h1>
		<form method="post" action="index.php">
			<input type"number" name="input"></input>
			<input type="submit" value="Is that the correct number?"></input>
		</form>

		<?php
			if (!isset($_SESSION['number'])) {
				$_SESSION['number'] = rand(1, 100);
			}
			if (!isset($_SESSION['try'])) {
				$_SESSION['try'] = 1;
			}
			if ($_SESSION['try'] <= 8) {
				if (!isset($_POST)) {
					$_SESSION['input'] = $_POST['input'];
					if ($_SESSION['number'] < $_SESSION['input']) {
						echo "<p>The number you seek is smaller than the one you gave...</p>";
					}
					elseif ($_SESSION['number'] > $_SESSION['input']) {
						echo "<p>The number you seek is greater than the one you gave...</p>";
					}
					else {
						echo "Congrats, you guessed the number on your ",$_SESSION['try']," try!";
					}
				}
				$_SESSION['try']++;
			}
			else {
				echo "I'm so really sorry, the number was ",$_SESSION['number'];
			}
		?>
	</body>
</html>
