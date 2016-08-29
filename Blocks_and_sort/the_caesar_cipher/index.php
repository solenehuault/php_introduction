<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cipher</title>
	</head>
	<body>
		<h1>The Caesar Cipher</h1>
		<form method="post" action="index.php">
			<p>Your message</p>
			<textarea name="message"></textarea>
			<p>Your key</p>
			<input type="number" name="key" min="1" max="26"/>
			<input type="radio" name="cypher" value="encrypt" checked />Encrypt
			<input type="radio" name="cypher" value="decrypt"/>Decrypt<br />
			<input type="submit" value="Submit" />
		</form>

		<?php
			if (isset($_POST['message'])&&
					isset($_POST['key'])&&
					isset($_POST['cypher'])) {
				
				$key = $_POST['key'];
				$message = $_POST['message'];
				$tab = [];
				
				for ($i = 0 ; $i < strlen($message) ; $i++) {
					$ascii = ord($message[$i]);
					
					if ($_POST['cypher'] == "encrypt") {
						
						if ($ascii >= 65 && $ascii <= 90) {
							$ascii = $ascii + $key;
							if ($ascii > 90) {
								$ascii = $ascii - 26;
							}
						}
						if ($ascii >= 97 && $ascii <= 122) {
							$ascii = $ascii + $key;
							if ($ascii > 122) {
								$ascii = $ascii - 26;
							}
						}
						array_push($tab, chr($ascii));
					}
					
					else {
						
						if ($ascii >= 65 && $ascii <= 90) { 
							$ascii = $ascii - $key;
							if ($ascii < 65) {
								$ascii = $ascii + 26;
							}
						}
						elseif ($ascii >= 97 && $ascii <= 122) {
							$ascii = $ascii - $key;
							if ($ascii < 97) {
								$ascii = $ascii + 26;
							}
						}
						
						array_push($tab, chr($ascii));
					}
				}
				$new_message = implode("", $tab);
				print ($new_message);
				echo "<br /><p>Key: ".$key;
			}
		?>
	</body>
</html>
