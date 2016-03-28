#!/usr/bin/php
<?php
function replace($matches)
{
	return "<" . $matches[1] . "</head>\n" . $matches[2] . "title=\"" . strtoupper($matches[3]) . "\">" . strtoupper($matches[4]) . "</a>\n" . $matches[5] . ">" . strtoupper($matches[6]) . "<img" . $matches[7] . "title=\"" . strtoupper($matches[8]) . "\"</a>\n" . $matches[9];
}

$page = fopen($argv[1], "r");
while (!feof($page))
{
	$line = trim(fgets($page));
	$content .= $line;
}
fclose($page);
$pattern = '/<(.*?)<\/head>(.*)title=[\"|\'](.*?)[\"|\']>(.*?)<\/a>(.*).com>(.*)<img(.*)title=[\"|\'](.*)[\"|\']><\/a>(.*)/';
	echo preg_replace_callback($pattern, "replace", $content);
?>
