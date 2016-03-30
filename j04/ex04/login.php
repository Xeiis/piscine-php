<?php
session_start();
include 'auth.php';

if ($_POST["login"] != NULL)
{
	if ($_POST["passwd"] != NULL)
	{
		$grain = "F5x$1@v";
		$sel = "U84#1x%";
		$file = '~/private/passwd'; // a modifier selon comment se devra etre fait;
		$data = file_get_contents($file);
		if (auth($_POST["login"], (array)unserialize($data)))
		{
			echo "OK\n";
			$_SESSION["loggued_on_user"] = $_POST["login"];
			exit();
		}
		else
			$_SESSION["loggued_on_user"] = '';
	}
}
echo "ERROR\n";
?>
