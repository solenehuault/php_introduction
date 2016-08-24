<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Month</title>
	</head>
	<body>
		<h1>Number of days in a month</h1>
		<form method="post" action="form.php">
			<select name="month">
				<option value="jan">January</option>
				<option value=feb">February</option>
				<option value="mar">March</option>
				<option value="apr">April</option>
				<option value="may">May</option>
				<option value="jun">June</option>
				<option value="jul">July</option>
				<option value="aug">August</option>
				<option value="sep">September</option>
				<option value="oct">October</option>
				<option value="nov">November</option>
				<option value="dec">December</option>
			</select>
			<input type="submit" value="How many Days?"></input>
		</form>

		<?php
			if (isset($_POST['month']))
			{
			switch ($_POST['month']) {
				case jan:
				case mar:
				case may:
				case jul:
				case aug:
				case oct:
				case dec:
					echo "31";
					break;
				case feb:
					echo "28";
					break;
				default:
					echo "30";
			}
			}
		?>
	</body>
</html>
