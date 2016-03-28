#!/usr/bin/php
<?php
include "../ex03/ft_split.php";
$i = 1;
$array = array();
$result = array();
while ($argv[$i] != NULL)
{
	$array = ft_split($argv[$i]);	
	$result = array_merge($array, $result);
	$i++;
}
sort ($result);
$i = 0;
while ($result[$i] != NULL)
{
	echo $result[$i]."\n";
	$i++;
}
?>
