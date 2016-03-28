<?php
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return (0);
    }
    return (1);
}
function ft_is_sort($array1)
{
	$array2 = $array1;
	sort ($array2);
	$result = array_diff_uassoc($array1, $array2, "key_compare_func");
	if ($result == NULL)
		return (1);
	else
		return (0);
}
?>
