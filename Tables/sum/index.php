<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sum</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"
	</head>
	<body>
		<h1>Sum</h1>
		<form method="post" action"index.php">
			<input type="number" name="input" />
			<input type="submit" value="Add" />
		</form>


		<?php
			if (!isset($_SESSION['table'])) {
				$_SESSION['table'] = array();
			}
			if (isset($_POST['input'])) {
				array_push($_SESSION['table'], $_POST['input']);
				echo "<div><ul>";

				foreach ($_SESSION['table'] as $value) {
					echo "<li>$value</li>";
				}

				echo "</ul></div>";
			$sum = array_sum($_SESSION['table']);
			echo "<div><p>The sum of this array is $sum.</p></div>";
			}
		?>
	</body>
</html>
