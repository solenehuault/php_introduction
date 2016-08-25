<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Max Num</title>
	</head>
	<body>
		<h1>Maximum numbers</h1>
		<p>Enter 10 number, we will return the greatest.</p>
		<form method="post" action"form.php">
			<input type="number" name="1"></input>
			<input type="number" name="2"></input>
			<input type="number" name="3"></input>
			<input type="number" name="4"></input>
			<input type="number" name="5"></input>
			<input type="number" name="6"></input>
			<input type="number" name="7"></input>
			<input type="number" name="8"></input>
			<input type="number" name="9"></input>
			<input type="number" name="0"></input>
			<input type="submit" value="What will it be?"></input>
		</form>

		<?php
			$all_number = array($_POST[1],
													$_POST[2], 
													$_POST[3], 
													$_POST[4],
													$_POST[5],
													$_POST[6],
													$_POST[7],
													$_POST[8],
													$_POST[9],
													$_POST[0]);

			rsort($all_number);
			echo "<p>$all_number[0]</p>";
		?>
	</body>
</html>
