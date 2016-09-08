<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Alternating parking 2</title>
	</head>
	<body>
		<h1>Alternating parking with license plate</h1>
		<form method="post" action="index.php">
			<p>Day of the month</p>
			<input type="number" name="day" min="1" max="31" />
			<p>Before which house did you parked?</p>
			<input type="number" name="house" min="1" />
			<p>What is your license plate</p>
			<input type="text" name="plate" maxlength="9" placeholder="AA 555 ZZ"/>
			<input type="submit" value="Did you parked well?" />
		</form>

		<?php
			if (isset($_POST['day']) && isset($_POST['house']) && isset($_POST['plate'])) {
				$num_plate = explode(" ", $_POST['plate']);
				if ($_POST['day'] <= 15) {
					if ($_POST['house'] % 2 != 0) {
						if ($num_plate[1] % 2 == 0) { echo "You parked well!";	}
						else { echo "You can't park here!"; }
					}
					else {echo "You can't park here!";}
				}
				else {
					if ($_POST['house'] %2 == 0) {
						if ($num_plate[1] != 0) {	echo "Yoou parked well!"; }
						else { echo "You can't park here!"; }
					}
					else {echo "You can't park here!";}
				}
			}
		?>
	</body>
</html>
