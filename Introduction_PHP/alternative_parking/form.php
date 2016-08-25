<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Parking</title>
	</head>
	<body>
		<h1>Alternative Parking</h1>
		<form method="post" action="form.php">
			<p>Day of the month</p>
			<input type="number" name="date"></input>
			<p>House number before which you parked</p>
			<input type="number" name="house"></input>
			<br /><br />
			<input type="submit" value="How well did you park?"></input>
		</form>

		<?php
			if ($_POST['date'] > 0 && $_POST['date'] <= 31) {
				if ($_POST['date'] < 15) {
					if ($_POST['house'] % 2 == 0) {
						echo "<p>You parked well!</p>";
					}
					else {
						echo "<p>Go park on the other side!</p>";
					}
				}
				else {
					if ($_POST['house'] % 2 != 0) {
						echo "<p>You parked well!</p>";
					}
					else {
						echo "<p>Go park on the other side!</p>";
					}
				}
			}
			else {
				echo "error";
			}
		?>
	</body>
</html>
