#!/usr/bin/php
<?php
$epur = trim($argv[1]);
$epur = preg_replace('/\s{2,}/', ' ', $epur);
echo $epur;
?>
