<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Suites</title>
	</head>
	<body>
		<h1>Suites Generation</h1>
		<?php
			echo "<h2>The not growing</h2><p>";
			$not = 1;
			$i = 0;
			while ($not <= 100) {
				$not = $not + $i;
				if ($not >= 100) {
					echo "$not.";
				}
				else {
					echo "$not, ";
				}
				$i++;
			}
			echo "</p>";

			echo "<h2>Lame</h2><p>";
			for ($i = 0 ; $i <= 100 ; $i++) {
				if ($i % 3 != 0) {
					if ($i == 100) {
						echo "$i.";
					}
					else {
						echo "$i, ";
					}
				}
			}
			echo"</p>";

			echo "<h2>Fibonacci</h2><p>";
			$i = 0;
			$j = 1;
			while ($i <= 100) {
				if ($i >= 80) {
					echo "$i.";
					$k = $i + $j;
					$i = $j;
					$j = $k;
				}
				else {
					echo "$i, ";
					$k = $i + $j;
					$i = $j;
					$j = $k;
				}
			}
			echo "</p>";
		?>
	</body>
</html>
