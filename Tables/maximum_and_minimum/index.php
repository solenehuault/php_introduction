<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Max and Min</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Maximum and Minimum</h1>
		<form method="post" action="index.php">
			<input type="number" name="input"/>
			<input type="submit" name="Add"/>
		</form>

		<?php
			if (!isset($_SESSION['tab'])) {
				$_SESSION['tab'] = array();
			}
			if (isset($_POST['input'])) {
				array_push($_SESSION['tab'], $_POST['input']);

				echo "<div><ul>";
				foreach ($_SESSION['tab'] as $value) {
					echo "<li>$value</li>";
				}
				echo "</ul></div>";
				$order = $_SESSION['tab'];
				sort($order);
				echo "<div><p>The smallest number in this array is ".$order[0]." and the greatest is ".$order[count($order) -1].".</p></div>";
			}
		?>
	</body>
<html>
