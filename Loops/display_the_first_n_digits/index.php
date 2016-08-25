<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>First n digits</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Display the first n digits</h1>
		<form method="post" action="form.php">
			<p>Where do we begin?</p>
			<input type="number" name="begin" min="0"></input>
			<p>Where do we stop?</p>
			<input type="number" name="end"></input>
			<br /><br />
			<input type="submit" value="Ready, count!"></input>
		</form>

		<?php
			if ($_POST['begin'] < $_POST['end']) {
				echo "<ul>";
				for ($i = $_POST['begin'] ; $i <= $_POST['end'] ; $i++) {
					echo "<li";
					
					if ($i % 2 == 0) {
						echo " class='blue";
					}
					else {
						echo " class='orange";
					}

					$flor = floor(sqrt($i));
					if ($i == $flor * $flor) {
						echo " heavy";
					}
					echo "'>$i</li>";
				}
				echo "</ul>";
			}
		?>
	</body>
</html>
