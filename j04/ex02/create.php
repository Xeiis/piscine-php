<?php
function user_exist($login, $array)
{
	foreach ($array as $key => $value)
	{
		if ($array["login"] === $login)
			return (1);
	}
	return (0);
}

if ($_POST["login"] != NULL)
{
	if ($_POST["passwd"] != NULL)
	{
		$grain = "F5x$1@v";
		$sel = "U84#1x%";
		$save["login"] = $_POST["login"];
		$save["passwd"] = hash("sha1", $grain . $_POST["login"] . $sel);
		$file = '~/private/passwd'; // a modifier selon comment se devra etre fait;
		$data = file_get_contents($file);
		if (user_exist($_POST["login"], (array)unserialize($data)))
		{
			echo "ERROR\n";
			exit();
		}
		$array = serialize($_POST);
		$data .= $array;
		file_put_contents($file, $data);
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
