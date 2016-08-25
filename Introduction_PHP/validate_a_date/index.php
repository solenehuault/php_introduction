<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Date</title>
	</head>
	<body>
		<h1>Validate a date</h1>
		<form method="post" action="form.php">
			<input type="text" name="date" placeholder="mm/jj/yyyy"></input>
			<input type="submit" value="is the date valid?"></input>
		</form>

		<?php
			$date = $_POST['date'];
			$length = strlen($date);

			if ($length == 10) {
				$month = substr($date, 0, 2);
				$month = intval($month);

				$day = substr($date, 3, 2);
				$day = intval($day);

				$year = substr($date, 6, 4);
				$year = intval($year);

				if ($month <= 12 && $month >= 01 &&
						$day <= 31 && $day >= 01 &&
						$year <= 2900 && $year >= 1900 && 
						$date[2] == '/' &&
						$date[5] == '/') {
					echo "<p>Nice date you got there!</p>";
				}
				else {
					echo "<p>Invalid date!</p>";
				}
			}
			else {
				echo "<p>Invalid date</p>";
			}
		?>
	</body>
</html>
