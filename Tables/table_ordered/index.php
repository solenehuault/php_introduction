<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ordered?</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Table Ordered?</h1>
		<form method="post" action"index.php">
			<input type="number" name="input" />
			<input type="submit" value="Add" />
		</form>
		
		<?php
			if (!isset($_SESSION['a_table'])) {
				$_SESSION['a_table'] = array();
			}
			if (isset($_POST['input'])) {
				array_push($_SESSION['a_table'], $_POST['input']);
				echo "<div><ul>";
				foreach ($_SESSION['a_table'] as $value) {
					echo "<li>$value</li>";
				}
				echo "</ul></div>";
				
				$tab = $_SESSION['a_table'];
				sort($tab);
				if ($tab == $_SESSION['a_table']) {
					echo "<div><p>True</p></div>";
				}
				else {
					echo "<div><p>False</p></div>";
				}
			}
		?>
																																																																									</body>
																																																																									</html>
