<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Bank</title>
	</head>
	<body>
		<h1>The Bank Account</h1>
		<form method="post" action="index.php">
			<input type="number" name="account"></input>
			<input type="submit" value="Balance"></input>
		</form>

		<?php
			if ($_POST['account'] < 0) {
				echo "<p>Deficit</p>";
			}
			elseif ($_POST['account'] > 0) {
				echo "<p>Credited</p>";
			}
			else {
				echo "<p>In balance</p>";
			}
		?>
	</body>
</html>
