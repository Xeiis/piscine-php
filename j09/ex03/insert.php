<?php
$id = $_POST["id"];
$value = $_POST["value"];
$file = file_get_contents("list.csv");
/*$array = preg_split('/;/', $file);
$i = 0;
$max = -1;
while($array[$i])
{
    if ($array[$i] > $max)
        $max = $array[$i];
    $i++;
}
$max++;*/
$file .= $id.";".$value.";";
file_put_contents("list.csv", $file);
echo "Done";
?>