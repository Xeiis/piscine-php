<?php
session_start();
include 'auth.php';

function error()
{
	echo "ERROR\n";
	exit();
}

if ($_GET["login"] != NULL)
{
	if ($_GET["passwd"] != NULL)
	{
		if (auth($_GET["login"], $_GET["passwd"]))
		{
			echo "OK\n";
			$_SESSION["loggued_on_user"] = $_GET["login"];
			exit();
		}
		else
			$_SESSION["loggued_on_user"] = '';
	}
	else
		error();
}
error();
?>
