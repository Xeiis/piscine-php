<?php
header('Content-Type: image/png');
$im     = imagecreatefrompng("img/42.png");
imagepng($im);
imagedestroy($im);
?>
