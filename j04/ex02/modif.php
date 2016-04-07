<?php
function login_pw_ok($file, $login, $passwd, $newpw, $array)
{
	$grain = "F5x$1@v";
	$sel = "U84#1x%";
	$i = 0;
	while (isset($array[$i]))
	{
		if ($array[$i]["login"] === $login && $array[$i]["passwd"] === hash("sha1", $grain . $passwd . $sel))
		{
			$array[$i]["passwd"] = hash("sha1", $grain . $newpw . $sel);
			$array = serialize($array);
			file_put_contents($file, $array);
			echo "OK\n";
			exit();
		}
		$i++;
	}
	return (0);
}
function error()
{
	echo "ERROR\n";
	exit();
}
if ($_POST["login"] != NULL)
{
	if ($_POST["oldpw"] != NULL)
	{
		if ($_POST["newpw"] != NULL)
		{
			if ($_POST["submit"] != "OK")
				error();
			$file = '/nfs/2015/d/dchristo/http/MyWebSite/private/passwd';
			$data = file_get_contents($file);
			if (login_pw_ok($file, $_POST["login"], $_POST["oldpw"], $_POST["newpw"], (array)unserialize($data)))
				error();
		}
	}
}
error();
?>
