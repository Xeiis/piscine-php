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
		if ($_POST["submit"] != "OK")
		{
			echo "ERROR\n";
			exit();
		}
		$grain = "F5x$1@v";
		$sel = "U84#1x%";
		$save["login"] = $_POST["login"];
		$save["passwd"] = hash("sha1", $grain . $_POST["passwd"] . $sel);
		if (!file_exists('/nfs/2015/d/dchristo/http/MyWebSite/private'))
			mkdir('/nfs/2015/d/dchristo/http/MyWebSite/private');
		$file = '/nfs/2015/d/dchristo/http/MyWebSite/private/passwd';
		if (file_exists($file))
			$data = file_get_contents($file);
		if (user_exist($_POST["login"], (array)unserialize($data)))
		{
			echo "ERROR\n";
			exit();
		}
		if ($data)
			$data = unserialize($data);
		$data[] = $save;
		$data = serialize($data);
		file_put_contents($file, $data);
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
