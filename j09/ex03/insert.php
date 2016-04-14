<?php
$id = $_POST["id"];
$value = $_POST["value"];
$file = file_get_contents("list.csv");
$file .= $id.";".$value.";";
file_put_contents("list.csv", $file);
echo "Done";
?>