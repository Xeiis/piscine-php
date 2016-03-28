#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$line = trim(fgets(STDIN));
	if ($line == NULL)
		break ;
	if (is_numeric($line))
	{
		echo "Le chiffre ".$line." est";
		if ($line % 2 == 0)
			echo " Pair\n";
		else	
			echo " Impair\n";
	}
	else
		echo "'".$line."' n'est pas un chiffre\n";
}
?>
