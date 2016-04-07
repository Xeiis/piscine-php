<?php
function auth($login, $passwd)
{
	$grain = "F5x$1@v";
	$sel = "U84#1x%";
	$file = '/nfs/2015/d/dchristo/http/MyWebSite/private/passwd';
	$data = file_get_contents($file);
	$array = unserialize($data);
	$i = 0;
	while(isset($array[$i]))
	{
		if ($array[$i]["login"] === $login && $array[$i]["passwd"] === hash("sha1", $grain . $passwd . $sel))
		{
			return TRUE;
		}
		$i++;
	}
	return FALSE;
}
?>
