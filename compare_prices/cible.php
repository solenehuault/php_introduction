<?php 
	$all_prices = array($_POST[name1] => $_POST[price1], $_POST[name2] => $_POST[price2], $_POST[name3] => $_POST[price3], $_POST[name4] => $_POST[price4]);

	sort($all_prices);
	$cheap = key($all_prices);
	
echo current($all_prices);

	asort($all_prices);
	$expensive = key($all_prices);

echo current($all_prices);

	echo "The cheapest product is $cheap, ";
	echo "and the most expensive is $expensive.";
?>
