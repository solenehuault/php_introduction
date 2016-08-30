<?php
	function valid_date($day, $month, $year) {
		$is_month_valid = valid_month($month);
		if ($is_month_valid) {
			$is_day_valid = valid_day($day, $month);
			if ($is_day_valid) {
				$is_year_valid = valid_year($year);
				if ($is_year_valid) {return true;}
				else {return false;}
			}
			else {return false;}
		}
		else {return false;}
	}

	function valid_month($month) {
		if ($month <= 12 && $month >= 01) {return true;}
		else {return false;}
	}

	function valid_day($day, $month) {
		if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
			if ($day <= 31 && $day >= 01) {return true;}
			else {return false;}
		}
		elseif ($month == 02) {
			if ($day <= 28 && $day >= 01) {return true;}
			else {return false;}
		}
		else {
			if ($day <= 30 && $day >=01) {return true;}
			else {return false;}
		}
	}

	function valid_year($year) {
		if ($year <= 3000 && $year >= 1800) {return true;}
		else {return false;}
	}


	echo "<h1>Validity of date</h1>";
	echo "<p>02/30/8888 is a valid date. ";
	if (valid_date(30, 02, 8888)) {echo "True</p>";}
	else {echo "False</p>";}
	echo "<p>05/05/2005 is a valid date. ";
	if (valid_date(05, 05, 2005)) {echo "True</p>";}
	else {echo "False</p>";}
?>
