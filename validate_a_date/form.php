<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Date</title>
	</head>
	<body>
		<h1>Validate a date</h1>
		<form method="post" action="form.php">
			<input type="date" name="date" placeholder="mm/jj/yyyy"></input>
			<input type="submit" value="is the date valid?"></input>
		</form>

		<?php
			$length = strlen($_POST['date']);
			if ($length != 10) {
				echo "Invalid date!";
			}
		?>
	</body>
</html>
