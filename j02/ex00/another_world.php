#!/usr/bin/php
<?php
$result = trim ($argv[1]);
$result = preg_replace('/\s{2,}/', ' ', $result);
echo $result;
?>
