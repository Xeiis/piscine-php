<?php
function auth($login, $array)
{
	$grain = "F5x$1@v";
	$sel = "U84#1x%";
	while(isset($array[$i]))
	{
		if ($array[$i]["login"] === $login && $array[$i]["passwd"] === hash("sha1", $grain . $_POST["passwd"] . $sel))
		{
			$array[$i]["passwd"] = hash("sha1", $grain . $_POST["newpw"] . $sel);
			return TRUE;
		}
	}
	return FALSE;
}
?>
