<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Numerologie</title>
	</head>
	<body>
		<h1>Numerologie</h1>
		<form method="post" action="index.php">
		<input type="text" name="text"></input>
		<input type="submit" value="What is the weight of this word?"></input>
		</form>

		<?php
			$text = $_POST['text'];
			$weight = 0;
			for ($i = 0 ; $i < strlen($text) ; $i++) {
				$ascii = ord($text[$i]);
				if ($ascii >= 65 && $ascii <= 90) {
					$ascii -= 64;
					$weight += $ascii;
				}
				elseif ($ascii >= 97 && $ascii <= 122) {
					$ascii -= 96;
					$weight += $ascii;
				}
				else {
					echo "<p>Please write a single simple word</p>";
				}
			}
			echo "<p>$weight</p>";
		?>
	</body>
</html>
