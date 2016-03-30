<?php
function login_pw_ok($login, $array)
{
	$grain = "F5x$1@v";
	$sel = "U84#1x%";
	while(isset($array[$i]))
	{
		if ($array[$i]["login"] === $login && $array[$i]["passwd"] === hash("sha1", $grain . $_POST["passwd"] . $sel))
		{
			$array[$i]["passwd"] = hash("sha1", $grain . $_POST["newpw"] . $sel);
			return(1);
		}
	}
	return (0);
}

if ($_POST["login"] != NULL)
{
	if ($_POST["oldpw"] != NULL)
	{
		if ($_POST["newpw"] != NULL)
		{
			$grain = "F5x$1@v";
			$sel = "U84#1x%";
			$file = '~/private/passwd'; // a modifier selon comment se devra etre fait;
			$data = file_get_contents($file);
			if (($ret = login_pw_ok($_POST["login"], (array)unserialize($data))) == 0)
			{
				echo "ERROR\n";
				exit();
			}
			file_put_contents($file, $data);
			echo "OK\n";
			exit();
		}
	}
}
echo "ERROR\n";
?>
