<?php
$id = $_POST["id"];
$file = file_get_contents("list.csv");
$array = preg_split('/;/', $file);
$str = '';
$i = 0;
while ($array[$i] != NULL)
{
    if ($array[$i] != $id && $array[$i -1] != $id)
        $str .= $array[$i].";";
    else
        echo $array[$i] . " != " . $id . " && " .$array[$i -1] . "!=" .$id."<br>";
    $i++;
}
file_put_contents("list.csv", $str);
echo "Done";
?>