#!/usr/bin/php
<?php
if ($argv[1] != NULL)
{
	$explode = explode(' ', $argv[1], 2);
	echo $explode[1]." ".$explode[0];
}
else 
	echo "Il n'y a pas eu d'argument";
?>
