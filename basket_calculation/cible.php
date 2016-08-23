<?php
	$full_price_1 = ($_POST[price1] + $_POST[vat1]) * $_POST[quantity1];
	$full_price_2 = ($_POST[price2] + $_POST[vat2]) * $_POST[quantity2];
	$full_price_3 = ($_POST[price3] + $_POST[vat3]) * $_POST[quantity3];
	$total = $full_price_1 + $full_price_2 + $full_price_3;
?>

<p>Your basket is up to <?php echo $total ?> $!</p>
