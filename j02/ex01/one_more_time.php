#!/usr/bin/php
<?php
function tranform_month($month)
{
	$array = array("Janvier" => 1,
					"Fevrier" => 2,
					"Mars" => 3,
					"Avril" => 4,
					"Mai" => 5,
					"Juin" => 6,
					"Juillet" => 7,
					"Aout" => 8,
					"Septembre" => 9,
					"Octobre" => 10,
					"Novembre" => 11,
					"Decembre" => 12,
				);
	return $array[$month];
}

date_default_timezone_set('UTC');
if (preg_match("/(Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche) ([1-2][0-9]|[1-9]|[3][0-1]|[0][1-9]) (Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet|Aout|Septembre|Octobre|Novembre|Decembre) ([0-9]{4}) ([0-1][0-9]|[2][0-3]):([0-5][0-9]):([0-5][0-9])/", $argv[1], $result))
	echo mktime($result[5], $result[6], $result[7], tranform_month($result[3]), $result[2], $result[4]);
else
	echo "Wrong Format";
?>
