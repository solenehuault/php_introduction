<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Number of element</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Number of array element</h1>
		<form method="post" action"index.php">
			<input type="number" name="input" />
			<input type="submit" value="Add" />
		</form>
		
		<?php
			if (!isset($_SESSION['arr'])) {
				$_SESSION['arr'] = array();
			}
			if (isset($_POST['input'])) {
				array_push($_SESSION['arr'], $_POST['input']);
				echo "<div><ul>";
				foreach ($_SESSION['arr'] as $value) {
					echo "<li>$value</li>";
				}
				echo "</ul></div>";
				$number = count($_SESSION['arr']);
				echo "<div><p>This array have $number elements.</p></div>";
			}
		?>
																																																																									</body>
																																																																									</html>
