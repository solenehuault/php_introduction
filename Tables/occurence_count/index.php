<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Occurence</title>
	</head>
	<body>
		<h1>Occurence count</h1>
		<form method="post" action="index.php">
			<input type="number" name="input" />
			<input type="submit" value="Send"/>
		</form>

		<?php
			if (isset($_POST['input'])) {
				$occurence = array();
				for ($i = 0 ; $i < strlen($_POST['input']) ; $i++) {
					$input = $_POST['input'];
					$num = $input[$i];
					$occurence[$num] += 1;
				}
				ksort($occurence);
				echo "<ul>";
				foreach ($occurence as $number => $occ) {
					echo "<li>".$number." appear ".$occ." time</li>";
				}
				echo "</ul>";
			}
		?>
	</body>
</html>
