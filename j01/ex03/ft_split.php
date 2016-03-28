<?php
function ft_split($string)
{
	$array = split("[ ]+", $string);
	sort ($array);
	return $array;
}
?>
