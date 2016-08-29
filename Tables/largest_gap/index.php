<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Gap</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Largest Gap</h1>
		<form method="post" action"index.php">
			<input type="number" name="input" />
			<input type="submit" value="Add" />
		</form>
		
		<?php
			if (!isset($_SESSION['number'])) {
				$_SESSION['number'] = array();
			}
			if (isset($_POST['input'])) {
				array_push($_SESSION['number'], $_POST['input']);
				echo "<div><ul>";
				foreach ($_SESSION['number'] as $value) {
					echo "<li>$value</li>";
				}
				echo "</ul></div>";

				if (count($_SESSION['number']) > 1) {
					$tab = $_SESSION['number'];
					$big_gap = 0;
					for ($i=1 ; $i < count($tab) ; $i++) {
						$gap = abs($tab[$i] - $tab[$i - 1]);
						if ($gap > $big_gap) {
							$big_gap = $gap;
						}
					}
					echo "<div><p>The largest gap between to value in this array is a gap of $big_gap.</p></div>";
				}
			}
		?>
																																																																									</body>
																																																																									</html>
